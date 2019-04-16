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
    'CREATE TABLE IF NOT EXISTS team('+
    'id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,'+
    'name VARCHAT(32) NOT NULL'+
    ');'
);
$db->query(
    'CREATE TABLE IF NOT EXISTS player('+
    'id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,'+
    'name VARCHAR(32) NOT NULL,'+
    'teamId INT NOT NULL,'+
    'FOREIGN KEY (teamId) REFERENCES team(id)'+
    ');'
);
$db->query(
    'CREATE TABLE IF NOT EXISTS tournament('+
    'id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,'+
    'name VARCHAR(32) NOT NULL'+
    ');'
);

if (!$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jawad','cafe')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")
    || !$db->query("INSERT INTO player(firstname,lastname) VALUES('Jean','Robert')")) {
    echo "erreur";
} else {
    echo "super";
}
$db->close();


if ($db->connect_errno) {
    throw new Exception($db->connect_error);
}

