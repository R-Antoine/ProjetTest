<?php
require_once "vendor/autoload.php";

use Symfony\Component\Dotenv\Dotenv;

$ENV = getenv('ENV');

if(!$ENV || $ENV === 'dev'){
    $dotenv = new Dotenv();
    $dotenv->load( __DIR__ . '/.env');
}

$db = new mysqli(
    getenv('DB_HOST'),
    getenv('DB_USER'),
    getenv('DB_PASSWORD'),
    getenv('DB_NAME'),
    getenv('DB_PORT')
);

if ($db->connect_errno) {
    throw new Exception($db->connect_error);
}

