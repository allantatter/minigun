<?php namespace Acme;

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
        $types = [
            'ctrl'          => 'ControllerGenerator',
            'controller'    => 'ControllerGenerator',
            'directive'     => 'DirectiveGenerator',
            'filter'        => 'FilterGenerator',
            'model'         => 'ModelGenerator',
            'service'       => 'ServiceGenerator',
            'validator'     => 'ValidatorGenerator',
        ];

        if (!array_key_exists($input->getArgument('type'), $types)) {
            $output->writeln('<error>Invalid type "' . $input->getArgument('type') . '".</error>');
            return;
        }

        $class = 'Acme\\Generators\\' . $types[$input->getArgument('type')];
        $generator = new $class(new Filesystem());

        $filename = $input->getArgument('filename');

        $response = $generator->generate($filename);

        foreach ($response as $line)
        {
            $output->writeln($line);
        }

        $output->writeln('<info>Task "new" completed.</info>');
    }
}
