<?php

namespace Anddye\Console\Tests;

use Anddye\Console\Commands\SayGoodbyeCommand;
use Anddye\Console\Commands\SayHelloCommand;
use Anddye\Console\Kernel\Kernel;
use PHPUnit\Framework\TestCase;

/**
 * Class KernelTest.
 *
 * @author Andrew Dyer <andrewdyer@outlook.com>
 */
class KernelTest extends TestCase
{
    /**
     * Test can add command.
     */
    public function testCanAddCommand()
    {
        $kernel = new Kernel();
        $kernel->addCommand(SayHelloCommand::class);
        $kernel->addCommand(SayGoodbyeCommand::class);

        $this->assertContains(SayHelloCommand::class, $kernel->getCommands());
        $this->assertContains(SayGoodbyeCommand::class, $kernel->getCommands());
    }

    /**
     * Test can add commands.
     */
    public function testCanAddCommands()
    {
        $kernel = new Kernel();
        $kernel->addCommands([
            SayHelloCommand::class,
            SayGoodbyeCommand::class,
        ]);

        $this->assertContains(SayHelloCommand::class, $kernel->getCommands());
        $this->assertContains(SayGoodbyeCommand::class, $kernel->getCommands());
    }
}
