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
    'name VARCHAR(32) NOT NULL,'.
    'team_id INT NOT NULL,'.
    'FOREIGN KEY (team_id) REFERENCES team(id)'.
    ');'
);
$db->query(
    'CREATE TABLE IF NOT EXISTS tournament('.
    'id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,'.
    'name VARCHAR(32) NOT NULL'.
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
$db->query(
    'INSERT INTO player(name, team_id) VALUES '.
    '("Jean", 0), ("Robert", 0), ("Rouquin", 1), ("Guillaume", 1),'.
    '("Antoine", 2), ("Julian", 2), ("Paul", 3), ("Carine", 3),'.
    '("Rui", 4), ("Anïs", 4), ("Pierre-alain", 5), ("Amandine", 5),'.
    '("Alexandra", 6), ("Hinerava", 6), ("Jhonny", 7), ("Koba LaD", 7);'
);

$db->close();


if ($db->connect_errno) {
    throw new Exception($db->connect_error);
}

