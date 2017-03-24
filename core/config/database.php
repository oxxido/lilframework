<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$config = new config();

$capsule = new Capsule();
$dbConfig = [
    'driver'    => 'mysql',
    'host'      => $config->get("host"),
    'database'  => $config->get("database"),
    'username'  => $config->get("username"),
    'password'  => $config->get("password"),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    'strict'    => false
];

$capsule->addConnection($dbConfig);

$capsule->setAsGlobal();

$capsule->bootEloquent();
