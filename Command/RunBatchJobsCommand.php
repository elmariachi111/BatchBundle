<?php
namespace Elmariachi111\BatchBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class RunBatchJobsCommand extends Command
{
    protected function configure()
    {
        $this->setName('batch:run')
            ->setDescription('runs all batch jobs that need to be run')
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output) {
        $output->writeln("test");
    }
}