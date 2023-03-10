<?php

$config = new SandwaveIo\PhpCsFixerConfig\Config;
$config->getFinder()
    ->in(__DIR__ . "/src");

return $config;
