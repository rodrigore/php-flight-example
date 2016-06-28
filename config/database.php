<?php

use Illuminate\Database\Capsule\Manager as Capsule;

// init eloquent
$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'port' => '3306',
    'database' => 'scores',
    'username' => 'root',
    'password' => '123',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();
