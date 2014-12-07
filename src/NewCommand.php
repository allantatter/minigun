<?php namespace Acme;

use Acme\Generators\DirectiveGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;

class NewCommand extends Command {

    public function configure()
    {
        $this->setName('new')
             ->setDescription('Generators a new file.')
             ->addArgument('type', InputArgument::REQUIRED, 'File type e.g. ctrl, directive, service, filter.')
             ->addArgument('filename', InputArgument::REQUIRED, 'Filename for the generated file.');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $generator = new DirectiveGenerator(new Filesystem());

        $filename = $input->getArgument('filename');

        $response = $generator->generate($filename);

        foreach ($response as $line)
        {
            $output->writeln($line);
        }

        $output->writeln('<info>Task "new" completed.</info>');
    }
}