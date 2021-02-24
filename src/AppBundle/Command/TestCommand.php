<?php

namespace AppBundle\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Console\Dumper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('test:command')
            ->setDescription('practice for log');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    
    	echo "Enter a number \n";
    	$a = (int)readline('Enter an integer: ');
    	if($a>5){
        // dump
        $this->dump("Number is greater than 5");
        }else{
        
        $this->writeError('Bye! Number is less than 5');
        }

        
    }
}
