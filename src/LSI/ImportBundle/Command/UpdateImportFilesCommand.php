<?php

namespace LSI\ImportBundle\Command;

use LSI\ImportBundle\Entity\Import;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateImportFilesCommand extends ContainerAwareCommand
{
    const FILE_LOCATION = '/mnt/csv/';

    protected function configure()
    {
        $this->setName('lsi:import:update_files')
            ->setDescription('Updates the database with any local files that are missing');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');

        $files = $em->createQueryBuilder()
            ->select('i.filename')
            ->from('LSIImportBundle:Import','i')
            ->getQuery()
            ->getScalarResult();
        $databaseFiles = [];
        foreach($files as $file){
            $databaseFiles[] = $file['filename'];
        }
        $localFiles = [];
        /** @var \SplFileInfo $splFileInfo */
        foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this::FILE_LOCATION)) as $splFileInfo)
        {
            if(strpos($splFileInfo->getFilename(), '.CSV') === false && strpos($splFileInfo->getFilename(), '.csv') === false){
                continue;
            }
            $localFiles[] = $splFileInfo->getFilename();
        }
        $newFiles = 0;
        foreach($localFiles as $possibleMissingFile){
            if(!in_array($possibleMissingFile,$databaseFiles)){
                $import = new Import();
                $import->setFilename($possibleMissingFile);
                $em->persist($import);
                $newFiles++;
            }
        }
        $em->flush();
        $output->write('Added '.$newFiles.' new files',true);
        //var_dump($localFiles);
        //exit;

    }
}