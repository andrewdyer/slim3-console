<?php

namespace Anddye\Console\Kernel;

/**
 * Interface KernelInterface.
 */
interface KernelInterface
{
    /**
     * @param array $commands
     */
    public function addCommands(array $commands);

    /**
     * @return array
     */
    public function getCommands(): array;
}
