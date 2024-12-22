<?php

namespace Anddye\Console\Commands;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class SayHelloCommand.
 */
class SayHelloCommand extends AbstractCommand
{
    const ARG_NAME = 'name';
    const OPT_REPEAT = 'repeat';
    const OPT_REPEAT_SHORTCUT = 'r';

    /**
     * Sets an array of argument to add to the command.
     *
     * @return array
     */
    public function arguments(): array
    {
        return [
            [self::ARG_NAME, InputArgument::REQUIRED, 'Your name.'],
        ];
    }

    /**
     * Sets the description for the command.
     *
     * @return string
     */
    public function description(): string
    {
        return 'Prints "Hello" and your name for a specific number of times.';
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
        for ($i = 0; $i < $input->getOption(self::OPT_REPEAT); ++$i) {
            $this->info('Hello '.$input->getArgument(self::ARG_NAME));
        }
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
        return 'say:hello';
    }

    /**
     * Sets an array of options to add to the command.
     *
     * @return array
     */
    public function options(): array
    {
        return [
            [self::OPT_REPEAT, self::OPT_REPEAT_SHORTCUT, InputOption::VALUE_OPTIONAL, 'Times to repeat the output.', 1],
        ];
    }
}
