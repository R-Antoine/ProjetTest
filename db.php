<?php
require_once "vendor/autoload.php";

use Symfony\Component\Dotenv\Dotenv;

$ENV = getenv('ENV');

if (!$ENV || $ENV === 'dev') {
    $dotenv = new Dotenv();
    $dotenv->load(__DIR__ . '/.env');
}

$db = new mysqli(
    getenv('DB_HOST'),
    getenv('DB_USER'),
    getenv('DB_PASSWORD'),
    getenv('DB_NAME'),
    getenv('DB_PORT')
);

$db->query(
    'CREATE TABLE IF NOT EXISTS team('.
    'id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,'.
    'name VARCHAR(32) NOT NULL'.
    ');'
);
$db->query(
    'CREATE TABLE IF NOT EXISTS player('.
    'id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,'.
    'firstname VARCHAR(32) NOT NULL,'.
    'lastname VARCHAR(32) NOT NULL,'.
    'team_id INT NOT NULL,'.
    'FOREIGN KEY (team_id) REFERENCES team(id)'.
    ');'
);
$db->query(
    'CREATE TABLE IF NOT EXISTS tournament('.
    'id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,'.
    ');'
);
$db->query(
    'CREATE TABLE IF NOT EXISTS participation('.
    'id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,'.
    'team_id INT NOT NULL,'.
    'tournament_id INT NOT NULL,'.
    'FOREIGN KEY (team_id) REFERENCES team(id),'.
    'FOREIGN KEY (tournament_id) REFERENCES tournament(id)'.
    ');'
);
//-------------------------------------------------------------------------------------------------


echo $db->error;
$db->close();


if ($db->connect_errno) {
    throw new Exception($db->connect_error);
}