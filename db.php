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
    'CREATE TABLE IF NOT EXISTS team(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,name VARCHAR(32) NOT NULL);'
);
$db->query(
    'CREATE TABLE IF NOT EXISTS player(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,name VARCHAR(32) NOT NULL,teamId INT NOT NULL,FOREIGN KEY (teamId) REFERENCES team(id));'
);
$db->query(
    'CREATE TABLE IF NOT EXISTS tournament(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,name VARCHAR(32) NOT NULL);'
);
$db->query(
    'CREATE TABLE IF NOT EXISTS participation(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,teamId INT NOT NULL,tournamentId INT NOT NULL,FOREIGN KEY (teamId) REFERENCES team(id),FOREIGN KEY (tournamentId) REFERENCES tournament(id));'
);

//if (!$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")

$db->query('INSERT INTO player(name, teamId) VALUES ("Jean", 0);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Robert", 0);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Rouquin", 1);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Guillaume", 1);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Antoine", 2);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Julian", 2);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Paul", 3);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Carine", 3);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Rui", 4);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Anïs", 4);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Pierre-alain", 5);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Amandine", 5);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Alexandra", 6);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Hinerava", 6);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Jhonny", 7);');
$db->query('INSERT INTO player(name, teamId) VALUES ("Koba LaD", 7);');

$db->close();


if ($db->connect_errno) {
    throw new Exception($db->connect_error);
}

