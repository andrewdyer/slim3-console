# Slim3 Console

Command line interface for your [Slim Framework](https://www.slimframework.com) application.

## License

Licensed under MIT. Totally free for private or commercial projects.

## Installation

```
composer require andrewdyer/slim3-console
```

## Usage

```php
$app = new \Slim\App();

$kernel = new \Anddye\Console\Kernel\Kernel();
$kernel->addCommand(\Anddye\Console\Commands\SayHelloCommand::class);

$console = new \Anddye\Console\Console($app);
$console->boot($kernel);
$console->run();
```

Creating a console instance and adding commands without the kernel.

```php
$app = new \Slim\App();

$container = $app->getContainer();

$console = new \Anddye\Console\Console($app);
$console->add(new \Anddye\Console\Commands\SayHelloCommand($container));
$console->run();
```

Adding commands from app container.

```php
$app = new \Slim\App([
    'settings' => [
        'commands' => [
            \Anddye\Console\Commands\SayGoodbyeCommand::class,
            \Anddye\Console\Commands\SayHelloCommand::class,
        ]
    ]
]);

$container = $app->getContainer();
$commands = $container->get('settings')->get('commands');

$kernel = new \Anddye\Console\Kernel\Kernel();
$kernel->addCommands($commands);

$console = new \Anddye\Console\Console($app);
$console->boot($kernel);
$console->run();
```

## Support
   
If you are having any issues with this library, then please feel free to contact me on [Twitter](https://twitter.com/andyer92).

If you think you've found an bug, please report it using the [issue tracker](https://github.com/andrewdyer/slim3-console/issues), or better yet, fork the repository and submit a pull request.

If you're using this package, I'd love to hear your thoughts!

## Useful Links

* [Slim Framework](https://www.slimframework.com)
* [The Console Component](https://symfony.com/doc/current/components/console.html)