<?php

namespace {
    set_time_limit(0);
}

namespace LSI\ImportBundle\Command {

use LSI\OrderBundle\Entity\OrderProduct;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use LSI\ImportBundle\Entity\Import;
use Symfony\Component\Console\Helper\ProgressBar;

class ImportHistoryCommand extends ContainerAwareCommand
{
    const FILE_LOCATION = '/mnt/csv/';

    protected function configure()
    {
        $this->setName('lsi:import:history')
            ->setDescription('Imports the sales history from 59PHIST_ files');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');

        $files = $em->createQueryBuilder()
            ->select('i')
            ->from('LSIImportBundle:Import','i')
            ->where('i.filename LIKE :fileNamePart')
            ->setParameter('fileNamePart','59PHIST%')
            ->getQuery()
            ->getResult();

        $numFiles = 0;
        $numOrderProducts = 0;
        /** @var Import $file */
        foreach($files as $file){
            $file = $em->getRepository('LSIImportBundle:Import')->findOneById($file->getId());

            $lineCount = 0;
            if(($handle = fopen($this::FILE_LOCATION.$file->getFilename(), 'r')) !== false){
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
                while( ($line = fgetcsv($handle,0,',','"')) !== false)
                {
                    if(trim($line[0]) =='NF-#'){
                        $progress->advance();
                        continue;
                    }
                    $orderProduct = new OrderProduct();
                    $shipDate = trim($line[4]);
                    if($shipDate !== "0"){
                        $shipDate = \DateTime::createFromFormat('Ymd',$shipDate);
                    }
                    else{
                        $shipDate = null;
                    }
                    $orderDate = \DateTime::createFromFormat('Ymd',trim($line[6]));
                    $orderProduct->setNameFileNumber(trim($line[0]))
                        ->setProductCode(trim($line[1]))
                        ->setProductNumber(trim($line[2]))
                        ->setColor(trim($line[3]))
                        ->setShipDate($shipDate)
                        ->setCancelled(strtolower(trim($line[5])) != ''?true:false)
                        ->setOrderDate($orderDate);
                    $em->persist($orderProduct);
                    $numOrderProducts++;
                    // I don't know if this is really necessary, but it couldn't harm;
                    // see also: http://php.net/manual/en/features.gc.php
                    unset($line);
                    $current++;
                    $progress->advance();
                    if($current >= 5000){
                        $current=0;
                        $em->flush();
                        $em->clear();
                    }
                }
                fclose($handle);
                $em->flush();
                $em->clear();
                $file = $em->getRepository('LSIImportBundle:Import')->findOneById($file->getId());
                $file->setProcessed(true);
                $file->setProcessedAt(new \DateTime());
                $em->flush();
                $progress->finish();
                $numFiles++;
            }
            else{
                $output->write('faild to open: '.$this::FILE_LOCATION.$file->getFilename(),true);
            }
//
//
//            $csv = array_map('str_getcsv', file($this::FILE_LOCATION.$file->getFilename()));
//            foreach($csv as $line){
//                if(trim($line[0]) =='NF-#'){
//                    continue;
//                }
//                $orderProduct = new OrderProduct();
//                $shipDate = trim($line[4]);
//                if($shipDate !== "0"){
//                    $shipDate = \DateTime::createFromFormat('Ymd',$shipDate);
//                }
//                else{
//                    $shipDate = null;
//                }
//                $orderDate = \DateTime::createFromFormat('Ymd',trim($line[6]));
//                $orderProduct->setNameFileNumber(trim($line[0]))
//                    ->setProductCode(trim($line[1]))
//                    ->setProductNumber(trim($line[2]))
//                    ->setColor(trim($line[3]))
//                    ->setShipDate($shipDate)
//                    ->setCancelled(strtolower(trim($line[5])) === 'cancelled'?true:false)
//                    ->setOrderDate($orderDate);
//                $em->persist($orderProduct);
//                $numOrderProducts++;
//            }

        }
        $output->write(array(
            'Files Processed: '.$numFiles,
            'Ordered Products Processes: '.$numOrderProducts
        ),true);
    }
}
}