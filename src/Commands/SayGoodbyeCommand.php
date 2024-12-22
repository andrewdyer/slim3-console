<?php

namespace Anddye\Console\Commands;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class SayGoodbyeCommand.
 */
class SayGoodbyeCommand extends AbstractCommand
{
    /**
     * Sets an array of argument to add to the command.
     *
     * @return array
     */
    public function arguments(): array
    {
        return [];
    }

    /**
     * Sets the description for the command.
     *
     * @return string
     */
    public function description(): string
    {
        return '';
    }

    /**
     * The body of the command.
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return mixed
     */
    public function handle(InputInterface $input, OutputInterface $output)
    {
        return $this->info('Goodbye');
    }

    /**
     * Sets the help for the command.
     *
     * @return string
     */
    public function help(): string
    {
        return '';
    }

    /**
     * Sets the name of the command.
     *
     * @return string
     */
    public function name(): string
    {
        return 'say:goodbye';
    }

    /**
     * Sets an array of options to add to the command.
     *
     * @return array
     */
    public function options(): array
    {
        return [];
    }
}
