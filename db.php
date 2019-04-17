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
//-------------------------------------------------------------------------------------------------
$db->query(
    'INSERT INTO team(name) VALUES '.
    '("Les patates"), ("Jai faim"), ("Les Dozo"), ("S-Crew"),'.
    '("1995"), ("Universal France"), ("Neocrome"), ("ISSOU");'
);
$db->query(
    'INSERT INTO player(name, team_id) VALUES '.
    '("Jean", 1), ("Robert", 1), ("Rouquin", 2), ("Guillaume", 2),'.
    '("Antoine", 3), ("Julian", 3), ("Paul", 4), ("Carine", 4),'.
    '("Rui", 5), ("Anïs", 5), ("Pierre-alain", 6), ("Amandine", 6),'.
    '("Alexandra", 7), ("Hinerava", 7), ("Jhonny", 8), ("Koba LaD", 8);'
);
echo $db->error;
$db->close();


if ($db->connect_errno) {
    throw new Exception($db->connect_error);
}

