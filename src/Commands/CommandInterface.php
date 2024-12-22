<?php

namespace Anddye\Console\Commands;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Interface CommandInterface.
 */
interface CommandInterface
{
    /**
     * Sets an array of argument to add to the command.
     *
     * @return array
     */
    public function arguments(): array;

    /**
     * Sets the description for the command.
     *
     * @return string
     */
    public function description(): string;

    /**
     * The body of the command.
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return mixed
     */
    public function handle(InputInterface $input, OutputInterface $output);

    /**
     * Sets the help for the command.
     *
     * @return string
     */
    public function help(): string;

    /**
     * Sets the name of the command.
     *
     * @return string
     */
    public function name(): string;

    /**
     * Sets an array of options to add to the command.
     *
     * @return array
     */
    public function options(): array;
}
