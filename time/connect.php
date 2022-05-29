<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//define from .env
$host = getenv('SERVER');
$username = $_ENV['DB_USERNAME'];
$password = $_SERVER['DB_PASSWORD'];
$db = getenv('DB');

$con = new mysqli($host, $username, $password, $db);

if($con->connect_error){
    echo "Connection failed: " . $con->connect_error;
}

echo "Your Database Successfully Connected!";