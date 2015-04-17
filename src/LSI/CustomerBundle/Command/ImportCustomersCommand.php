<?php
namespace {
    set_time_limit(0);
}

namespace LSI\CustomerBundle\Command {

    use LSI\CustomerBundle\Entity\Customer;
    use LSI\OrderBundle\Entity\OrderProduct;
    use LSI\OrderBundle\Entity\TaxRate;
    use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
    use Symfony\Component\Console\Input\InputArgument;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Input\InputOption;
    use Symfony\Component\Console\Output\OutputInterface;
    use LSI\ImportBundle\Entity\Import;
    use Symfony\Component\Console\Helper\ProgressBar;
    use LSI\CommissionBundle\Entity\SalesmanBonus;

    class ImportCustomersCommand extends ContainerAwareCommand
    {
        const FILE_LOCATION = '/mnt/csv/NAMES.CSV';
        const TMP_FILE_LOCATION = '/tmp/NAMES.csv';

        protected function configure()
        {
            $this->setName('lsi:import:customers')
                ->setDescription('Imports the customers from NAMES.CSV');
        }

        protected function execute(InputInterface $input, OutputInterface $output)
        {
            $em = $this->getContainer()->get('doctrine.orm.entity_manager');
            $userRepo = $em->getRepository('LSIUserBundle:User');
            $output->write('Copy file to local server to improve import speeds',true);
            if(!copy($this::FILE_LOCATION, $this::TMP_FILE_LOCATION)){
                $output->write('Failed to copy file.',true);
                return;
            }
            $output->write('Counting Import Rows... ');
            if(($handle = fopen($this::TMP_FILE_LOCATION, 'r')) !== false){
                $lineCount = 0;
                while(!feof($handle)){
                    $line = fgets($handle);
                    $lineCount++;
                }
                $output->write(number_format($lineCount,0,'.',','),true);
                $progress = new ProgressBar($output, $lineCount);
                $progress->setFormat('debug');
                rewind($handle);
                $itt=0;
                $skipped =0;
                $progress->start();
                while( ($line = fgetcsv($handle,0,',','"')) !== false)
                {
                    //handle the line
                    $customer = new Customer();
                    $customer
                        ->setNfNumber(intval($line[0]))
                        ->setFirstName(trim($line[1]))
                        ->setLastName(trim($line[2]))
                        ->setAddress1(trim($line[3]))
                        ->setAddress2(trim($line[4]))
                        ->setCity(trim($line[5]))
                        ->setState(trim($line[6]))
                        ->setZip(trim($line[7]))
                        ->setPhone(trim($line[8]))
                        ->setCustomerNumber(trim($line[13]))
                    ;
                    $em->persist($customer);
                    $progress->advance();
                    $itt++;

                    //If we have more than 5000 lines processed, flush them to the db
                    if($itt >= 5000){
                        $itt=0;
                        $em->flush();
                        $em->clear();
                    }
                }
                fclose($handle);
                unlink($this::TMP_FILE_LOCATION);
                $progress->finish();
                $em->flush();
                $output->write(array(
                    'Skipped: '.$skipped,
                    ''
                ),true);
            }
            else{
                $output->write('faild to open: '.$this::FILE_LOCATION,true);
            }
        }
    }
}