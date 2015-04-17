<?php

namespace {
    set_time_limit(0);
}

namespace LSI\ImportBundle\Command {

    use LSI\OrderBundle\Entity\OrderProduct;
    use LSI\UserBundle\Entity\User;
    use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
    use Symfony\Component\Console\Input\InputArgument;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Input\InputOption;
    use Symfony\Component\Console\Output\OutputInterface;
    use LSI\ImportBundle\Entity\Import;
    use Symfony\Component\Console\Helper\ProgressBar;

    class ImportUsersCommand extends ContainerAwareCommand
    {
        const FILE_LOCATION = '/mnt/csv/SALESMAN.CSV';

        protected function configure()
        {
            $this->setName('lsi:import:users')
                ->setDescription('Imports the users from the SALESMAN.CSV');
        }

        protected function execute(InputInterface $input, OutputInterface $output)
        {
            $em = $this->getContainer()->get('doctrine.orm.entity_manager');
            $userRepo = $em->getRepository('LSIUserBundle:User');
                $lineCount = 0;
                if(($handle = fopen($this::FILE_LOCATION, 'r')) !== false){
                    while(!feof($handle)){
                        $line = fgets($handle);
                        $lineCount++;
                    }
                    $progress = new ProgressBar($output, $lineCount);
                    $progress->setFormat('debug');
                    rewind($handle);

                    // get the first row, which contains the column-titles (if necessary)
                    $current = 0;
                    // loop through the file line-by-line
                    while( ($line = fgetcsv($handle,0,',','"')) !== false) {
                        if (trim($line[0]) == 'Slsm#') {
                            $progress->advance();
                            continue;
                        }
                        $slsmNo = intval(trim($line[0]));
                        $user = $userRepo->findBy(array(
                            'slsm_no' => $slsmNo
                        ));
                        if (!$user) {
                            $user = new User();

                            $user->setSlsmNo($slsmNo)
                                ->setLastName(trim($line[1]))
                                ->setFirstName(trim($line[2]))
                                ->setAddress(trim($line[3]))
                                ->setAddress2(trim($line[4]))
                                ->setCity(trim($line[5]))
                                ->setState(trim($line[6]))
                                ->setZip(trim($line[7]))
                                ->setPassword('NotSet')//Setting the password to this is OK because a check against a bycrpt hash will never match
                                ->setRoles('ROLE_USER');
                            $em->persist($user);
                        }
                        $progress->advance();
                    }
                    // Putting the flush here speeds up the time the script takes to run, but it also ASSUMES that
                    // there will be no duplicate users in the CSV
                    $em->flush();
                    $progress->finish();
                }
                else{
                    $output->write('Failed to open: '.$this::FILE_LOCATION,true);
                }
        }
    }
}