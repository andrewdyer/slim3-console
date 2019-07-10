<?php

namespace Anddye\Console\Commands;

use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class AbstractCommand.
 *
 * @author Andrew Dyer <andrewdyer@outlook.com>
 */
abstract class AbstractCommand extends Command implements CommandInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var InputInterface
     */
    private $input;

    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * AbstractCommand constructor.
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        parent::__construct();

        $this->container = $container;
    }

    /**
     * Configures the current command.
     */
    protected function configure()
    {
        $this->setName($this->name());
        $this->setDescription($this->description());
        $this->setHelp($this->help());

        foreach ($this->arguments() as $argument) {
            if (is_array($argument) and 3 === count($argument)) {
                $this->addArgument($argument[0], $argument[1], $argument[2]);
            }
        }

        foreach ($this->options() as $option) {
            if (is_array($option) and 5 === count($option)) {
                $this->addOption($option[0], $option[1], $option[2], $option[3], $option[4]);
            }
        }
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    protected function error(string $message)
    {
        return $this->output->writeln('<error>'.$message.'</error>');
    }

    /**
     * Executes the current command.
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return mixed
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;

        return $this->handle($input, $output);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    protected function info(string $message)
    {
        return $this->output->writeln('<info>'.$message.'</info>');
    }
}
