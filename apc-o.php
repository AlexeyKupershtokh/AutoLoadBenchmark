<?php

$loader = require_once __DIR__.'/vendor/autoload-o.php';

$apcLoader = new \Symfony\Component\ClassLoader\ApcClassLoader('apc', $loader);
$loader->unregister();
$apcLoader->register(true);

require_once('index.php');