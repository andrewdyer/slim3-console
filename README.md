# Slim3 Console

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/d2fd0d48d90e4c829d3228b7029ae244)](https://www.codacy.com/app/andrewdyer/slim3-console?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=andrewdyer/slim3-console&amp;utm_campaign=Badge_Grade)
[![Latest Stable Version](https://poser.pugx.org/andrewdyer/slim3-console/v/stable)](https://packagist.org/packages/andrewdyer/slim3-console)
[![Total Downloads](https://poser.pugx.org/andrewdyer/slim3-console/downloads)](https://packagist.org/packages/andrewdyer/slim3-console)
[![Daily Downloads](https://poser.pugx.org/andrewdyer/slim3-console/d/daily)](https://packagist.org/packages/andrewdyer/slim3-console)
[![Monthly Downloads](https://poser.pugx.org/andrewdyer/slim3-console/d/monthly)](https://packagist.org/packages/andrewdyer/slim3-console)
[![Latest Unstable Version](https://poser.pugx.org/andrewdyer/slim3-console/v/unstable)](https://packagist.org/packages/andrewdyer/slim3-console)
[![License](https://poser.pugx.org/andrewdyer/slim3-console/license)](https://packagist.org/packages/andrewdyer/slim3-console)

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