<?php

namespace Anddye\Console;

use Anddye\Console\Kernel\KernelInterface;
use Slim\App;
use Symfony\Component\Console\Application;

/**
 * Class Console.
 *
 * @author Andrew Dyer <andrewdyer@outlook.com>
 */
class Console extends Application
{
    /**
     * @var App
     */
    protected $app;

    /**
     * Console constructor.
     *
     * @param App $app
     */
    public function __construct(App $app)
    {
        parent::__construct();

        $this->app = $app;
    }

    /**
     * @param KernelInterface $kernel
     */
    public function boot(KernelInterface $kernel)
    {
        foreach ($kernel->getCommands() as $command) {
            $this->add(new $command($this->getApp()->getContainer()));
        }
    }

    /**
     * @return App
     */
    protected function getApp(): App
    {
        return $this->app;
    }
}
