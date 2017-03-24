<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();
$dbConfig = [
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'lscms',
    'username'  => 'homestead',
    'password'  => 'secret',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    'strict'    => false
];

$capsule->addConnection($dbConfig);

$capsule->setAsGlobal();

$capsule->bootEloquent();
