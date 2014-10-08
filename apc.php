<?php

$cloader = require_once __DIR__.'/vendor/autoload.php';

$loader = new \Symfony\Component\ClassLoader\ApcClassLoader('apc', $cloader);
$cloader->unregister();
$loader->register(true);

require_once('index.php');
