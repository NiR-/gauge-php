#!/usr/bin/php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = new \KnpLabs\Gauge\Console\Application();

if ($argv[1] === '--init') {
    $app->init();
} elseif ($argv[1] === '--start') {
    $app->start();
} else {
    exit(1);
}
