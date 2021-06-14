<a href="https://uptimeproject.io" target="_blank"><img src="https://uptimeproject.io/img/logo.png" height="50px" /></a>

![GitHub Workflow Status](https://img.shields.io/github/workflow/status/uptimeproject/php-cs-fixer-config/CI?style=flat-square)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/uptimeproject/php-cs-fixer-config?style=flat-square)
![Packagist PHP Version Support](https://img.shields.io/packagist/v/uptimeproject/php-cs-fixer-config?style=flat-square)
![Packagist Downloads](https://img.shields.io/packagist/dt/uptimeproject/php-cs-fixer-config?style=flat-square)

This is a shared [FriendsOfPHP/php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) configuration used primarily in UptimeProject.io projects. But feel free to use it in your projects if you would like. Also, if you want to propose a change, feel free to create a PR 😁

This package can be used on PHP 7.0, 7.1, 7.2, 7.3, 7.4 and 8.0.

## Installation

```sh
composer require --dev uptimeproject/php-cs-fixer-config
```

### PHP-CS-Fixer 2.0

If you are still using v2.x of PHP-CS-Fixer in your project, you should use version <1.2.x of this package.

```sh
composer require --dev uptimeproject/php-cs-fixer-config:1.2.*
```

Note that this version is no longer maintained, and you should upgrade to the latest version of PHP-CS-Fixer

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

### Example without risky fixers

```php
<?php

$ruleOverrides = [
    'no_php4_constructor' => false,
    'pow_to_exponentiation' => false,
    'no_unneeded_final_method' => false,
    'no_unreachable_default_argument_value' => false,
    'php_unit_strict' => false,
    'psr4' => false,
];

$config = new UptimeProject\PhpCsFixerConfig\Config($ruleOverrides, false);

$config->getFinder()
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/tests');

return $config;
```

## License

The MIT License (MIT). Please see [License File](https://github.com/uptimeproject/php-cs-fixer-config/blob/main/LICENSE) for more information.
