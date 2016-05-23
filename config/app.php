<?php

define('APP_PATH', __DIR__ . '/..');

//Variable para servidores compartidos
define('PUBLIC_PATH','');

// Composer
require_once APP_PATH . '/vendor/autoload.php';

//Variables de entorno
require_once 'env.php';

// Base de datos 
require_once 'database.php';
