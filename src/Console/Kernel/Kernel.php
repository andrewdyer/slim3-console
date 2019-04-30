<?php

namespace Anddye\Console\Kernel;

/**
 * Class Kernel.
 *
 * @author Andrew Dyer <andrewdyer@outlook.com>
 */
class Kernel implements KernelInterface
{
    /**
     * @var array
     */
    protected $commands = [];

    /**
     * Kernel constructor.
     *
     * @param array $commands
     */
    public function __construct(array $commands = [])
    {
        $this->addCommands($commands);
    }

    /**
     * @param string $command
     *
     * @return $this
     */
    public function addCommand(string $command)
    {
        $this->addCommands([$command]);

        return $this;
    }

    /**
     * @param array $commands
     *
     * @return $this
     */
    public function addCommands(array $commands)
    {
        $this->commands = array_merge($commands, $this->commands);

        return $this;
    }

    /**
     * @return array
     */
    public function getCommands(): array
    {
        return $this->commands;
    }
}
