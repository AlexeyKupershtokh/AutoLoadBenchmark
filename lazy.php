<?php

require_once(__DIR__ . '/vendor/alexey-kupershtokh/lazy-apc-class-loader/src/LazyApcClassLoader.php');

$loader = new \AlexeyKupershtokh\LazyApcClassLoader\LazyApcClassLoader(
    'lazy',
    function () {
        // init composer autoloader if ever needed
        return require_once __DIR__ . '/vendor/autoload.php';
    }
);
$loader->register();

require_once('index.php');