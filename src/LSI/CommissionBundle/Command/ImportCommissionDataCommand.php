<?php
namespace {
    set_time_limit(0);
}

namespace LSI\CommissionBundle\Command {

    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\EntityRepository;
    use LSI\CommissionBundle\Entity\SalesmanCheck;
    use LSI\CommissionBundle\Entity\SalesmanCommission;
    use LSI\CommissionBundle\Entity\SalesmanExpense;
    use LSI\CustomerBundle\Entity\Customer;
    use LSI\OrderBundle\Entity\OrderProduct;
    use LSI\OrderBundle\Entity\TaxRate;
    use LSI\CommissionBundle\Entity\SalesmanBonus;
    use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
    use Symfony\Component\Console\Input\InputArgument;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Input\InputOption;
    use Symfony\Component\Console\Output\OutputInterface;
    use LSI\ImportBundle\Entity\Import;
    use Symfony\Component\Console\Helper\ProgressBar;
    use LSI\UserBundle\Entity\User;
    use Symfony\Component\Process\Process;
    use Symfony\Component\Validator\Constraints\DateTime;

    class ImportCommissionDataCommand extends ContainerAwareCommand
    {
        const FILE_LOCATION = '/mnt/weborders/Out/';

        protected function configure()
        {
            $this->setName('lsi:import:salesman_commission_data')
                ->setDescription('Imports the bonuses, checks, commissions, and expenses for the salesman');
        }

        protected function execute(InputInterface $input, OutputInterface $output)
        {
            $files = array(
                'BONUS.CSV',
                'CHECKS.CSV',
                'COMMISSION.CSV',
                'EXPENSE.CSV'
            );

            foreach($files as $file){
                // Check if file exists for processing
                if(!file_exists($this::FILE_LOCATION.$file)){
                    $output->write('failed to open: '.$this::FILE_LOCATION.$file.' file not found',true);
                    continue;
                }

                // Find the last history File
                $fileName = str_replace('.CSV','',$file);
                $process = new Process('cd '.$this::FILE_LOCATION.'History/ && ls -ar '.$fileName.'*');
                $process->run();
                if ($process->isSuccessful()) {
                    // Compare the current file to the latest history file, so we can do incremental changes only
                    $historyFileName = $this::FILE_LOCATION.'History/'.strtok($process->getOutput(), "\n");
                    $getDiff = new Process('comm -1 -3 '.$historyFileName.' '.$this::FILE_LOCATION.$file.' > '.$this::FILE_LOCATION.$fileName.'_DIFF.CSV');
                    $getDiff->run();
                    $diffFileName = $this::FILE_LOCATION.$fileName.'_DIFF.CSV';
                    if(file_exists($diffFileName) && file_get_contents($diffFileName)){
                        $fileToUse = $diffFileName;
                        rename($this::FILE_LOCATION.$file, $this->getHistoryLocation($this::FILE_LOCATION.$file));
                    }
                    else{
                        $output->write(array(
                            '',
                            'Failed to get diff for '.$file,
                            ''
                        ),true);
                        continue;
                    }
                }
                else{
                    $output->write(array(
                        '',
                        'Unable to locate a history file for '.$file,
                        ''
                    ),true);
                    $fileToUse = $this::FILE_LOCATION.$file;
                }

                $this->processFile($fileToUse, $output);

                $output->write(array(
                    'Finished processing '.$file,
                ),true);
            }

        }

        private function processFile($file, OutputInterface &$output)
        {
            /** @var EntityManager $em */
            $em = $this->getContainer()->get('doctrine.orm.entity_manager');

            $output->write(array(
                '',
                'Processing '.$file,
            ),true);

            if(($handle = fopen($file, 'r')) !== false){
                $lineCount = 0;
                while(!feof($handle)){
                    $line = fgets($handle);
                    $lineCount++;
                }
                $progress = new ProgressBar($output, $lineCount);
                $progress->setFormat('debug');
                rewind($handle);
                $itt=0;
                $skipped = 0;
                $progress->start();
                while( ($line = fgetcsv($handle,0,',','"')) !== false)
                {
                    $fileParts = explode('/',$file);
                    $fileName = $fileParts[count($fileParts)-1];
                    $object = false;
                    switch($fileName){
                        case 'BONUS.CSV':
                            $object = $this->buildBonusObject($line, $em);
                            break;
                        case 'CHECKS.CSV':
                            $object = $this->buildCheckObject($line, $em);
                            break;
                        case 'COMMISSION.CSV':
                            $object = $this->buildCommissionObject($line, $em);
                            break;
                        case 'EXPENSE.CSV':
                            $object = $this->buildExpenseObject($line, $em);
                            break;
                        default:
                            continue;
                            break;
                    }
                    if(!$object){
                        $skipped++;
                        continue;
                    }

                    $em->persist($object);

                    $itt++;
                    $progress->advance();
                    //If we have more than 5000 lines processed, flush them to the db
                    if($itt >= 5000){
                        $itt=0;
                        $em->flush();
                        $em->clear();
                    }
                }
                fclose($handle);
                $progress->finish();
                $em->flush();
                $em->clear();
                $output->write(array(
                    '',
                    'Skipped: '.$skipped,
                ),true);

                if(strpos($file,'_DIFF') !== false){
                    // Remove diff file
                    unlink($file);
                }
                else{
                    // Add processed file to the history folder
                    rename($this::FILE_LOCATION.$file, $this->getHistoryLocation($this::FILE_LOCATION.$file));
                }
            }
            else{
                $output->write('Failed to open: '.$file,true);
            }
        }

        private function buildBonusObject($line, EntityManager &$em)
        {
            /** @var User $salesman */
            $salesman = $em->getRepository('LSIUserBundle:User')->findOneBy(array(
                'slsm_no'=>intval($line[2])
            ));
            if(!$salesman){
                return false;
            }
            $salesmanBonus = new SalesmanBonus();
            $salesmanBonus->setSlsmNo($salesman)
                ->setWeekNumber(intval($line[3]))
                ->setCreatedAt(new \DateTime($line[5]))
                ->setDescription(trim($line[6]))
                ->setAmount(floatval($line[7]))
            ;

            return $salesmanBonus;
        }

        private function buildCheckObject($line, EntityManager &$em)
        {
            /** @var User $salesman */
            $salesman = $em->getRepository('LSIUserBundle:User')->findOneBy(array(
                'slsm_no'=>intval($line[2])
            ));
            if(!$salesman){
                return false;
            }

            $check = new SalesmanCheck();
            $check->setUser($salesman)
                ->setCreatedAt(new \DateTime(trim($line[3])))
                ->setAmount(floatval(trim($line[4])));
            return $check;
        }

        private function buildCommissionObject($line, EntityManager &$em)
        {

            $salesman = $em->getRepository('LSIUserBundle:User')->findOneBy(array(
                'slsm_no'=>intval($line[2])
            ));
            if(!$salesman){
                return false;
            }
            $customer = $em->getRepository('LSICustomerBundle:Customer')->findOneBy(array(
                'customer_number'=>intval($line[5])
            ));
            if(!$customer){
                $customer = new Customer();
                $customer->setFirstName($line[16]);
                $customer->setLastName($line[17]);
                $customer->setCustomerNumber($line[5]);
                $em->persist($customer);
            }
//            $order = $em->getRepository('LSIOrderBundle:OrderProduct')->findOneBy(array(
//                'name_file_number'=>intval($line[18])
//            ));
//            if(!$order){
//                return false;
//            }

            $commission = new SalesmanCommission();
            $commission->setUser($salesman)
                ->setWeekNumber(intval(trim($line[3])))
                ->setCreatedAt(new \DateTime(trim($line[4])))
                ->setCustomer($customer)
                ->setParcels(intval(trim($line[6])))
                ->setFrequency(intval(trim($line[7])))
                ->setSets(floatval(trim($line[8])))
                ->setDvds(intval(trim($line[9])))
                ->setUpgrades(intval(trim($line[10])))
                ->setProduct(explode(' ',trim($line[11])))
                ->setOverrideCommission(floatval($line[12]))
                ->setBaseCommission(floatval($line[13]))
                ->setUpfrontPay(floatval($line[14]))
                ->setStatus(trim($line[15]))
                // TODO: find someway to tie this to an order entity
//                ->setOrder($order)
                ->setOrder(intval($line[18]))
                ->setRepNameCode(trim($line[19]))
                ->setOrderDate(new DateTime(trim($line[20])))
                ->setStatusMessage(trim($line[21]))
            ;
            return $commission;
        }

        private function buildExpenseObject($line, EntityManager &$em)
        {
            $salesman = $em->getRepository('LSIUserBundle:User')->findOneBy(array(
                'slsm_no'=>intval($line[2])
            ));
            if(!$salesman){
                return false;
            }

            $expense = new SalesmanExpense();
            $expense->setUser($salesman)
                ->setCategory(trim($line[3]))
                ->setWeekNumber(intval(trim($line[4])))
                ->setCreatedAt(new \DateTime(trim($line[5])))
                ->setDescription(trim($line[6]))
                ->setAmount(floatval(trim($line[7])));
            return $expense;
        }

        private function getHistoryLocation($filePath)
        {
            $parts = explode('/',$filePath);
            $filename = $parts[count($parts)-1];
            unset($parts[count($parts)-1]);

            $fileParts = explode('.',$filename);
            $fileType = $fileParts[count($fileParts)-1];
            unset($fileParts[count($fileParts)-1]);

            return implode('/',$parts).'/History/'.implode('.',$fileParts).'_'.date('Ymd').'.'.$fileType;
        }
    }
}