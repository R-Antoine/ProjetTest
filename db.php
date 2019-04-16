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
$db->query('CREATE TABLE IF NOT EXISTS player(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, firstname VARCHAR(255), lastname VARCHAR(255)) ');
if ($db->connect_errno) {
    throw new Exception($db->connect_error);
}

