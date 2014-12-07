#! /usr/bin/env php

<?php

use Symfony\Component\Console\Application;

require 'vendor/autoload.php';

$app = new Application('Minigun - file generation helper tool', '0.1');

$app->add(new Acme\NewCommand());

$app->run();