<?php 

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => DATABASE['driver'] ?? 'mysql',
    'host'      => DATABASE['host'] ?? 'localhost',
    'database'  => DATABASE['database'] ?? 'database',
    'username'  => DATABASE['username'] ?? 'root',
    'password'  => DATABASE['password'] ?? 'password',
    'charset'   => DATABASE['charset'] ?? 'utf8',
    'collation' => DATABASE['collation'] ?? 'utf8_unicode_ci',
    'prefix'    => DATABASE['prefix'] ?? '',
]);

$capsule->bootEloquent();

// $capsule->addConnection([
//     'driver'    => 'mysql',
//     'host'      => 'localhost',
//     'database'  => 'database',
//     'username'  => 'root',
//     'password'  => 'password',
//     'charset'   => 'utf8',
//     'collation' => 'utf8_unicode_ci',
//     'prefix'    => '',
// ]);