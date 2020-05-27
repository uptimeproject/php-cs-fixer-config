<a href="https://uptimeproject.io" target="_blank"><img src="https://uptimeproject.io/img/logo.png" height="50px" /></a>

![GitHub Workflow Status](https://img.shields.io/github/workflow/status/uptimeproject/php-cs-fixer-config/CI?style=flat-square)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/uptimeproject/php-cs-fixer-config?style=flat-square)
![Packagist PHP Version Support](https://img.shields.io/packagist/v/uptimeproject/php-cs-fixer-config?style=flat-square)
![Packagist Downloads](https://img.shields.io/packagist/dt/uptimeproject/php-cs-fixer-config?style=flat-square)

This is a shared [FriendsOfPHP/php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) configuration used primarily in UptimeProject.io projects.
But feel free to use it in your projects if you would like. Also, if you want to propose a change, feel free to create a PR 😁

## Installation

```sh
composer require --dev uptimeproject/php-cs-fixer-config
```

## Usage

Create a `.php_cs.dist` configuration file in the root of your project.

```php
<?php

$config = new UptimeProject\PhpCsFixerConfig\Config;
$config->getFinder()
    ->in(__DIR__ . "/src")
    ->in(__DIR__ . "/tests");

return $config;
```

Also, make sure to ignore the `.php_cs.cache` file in your git repository.

### Adding/overriding rules

It can be the case that you want to change something in the rules. No problem, you can override or add rules as follows:

```php
<?php

$config = new UptimeProject\PhpCsFixerConfig\Config([
    'declare_strict_types' => true,
]);
$config->getFinder()
    ->in(__DIR__ . "/src")
    ->in(__DIR__ . "/tests");

return $config;
```

Be aware when you do this that risky fixers are allowed by default!

## License

The MIT License (MIT). Please see [License File](https://github.com/uptimeproject/php-cs-fixer-config/blob/master/LICENSE) for more information.
