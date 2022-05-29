<?php
require __DIR__ . '/vendor/autoload.php';

$connectionParams = [
    'dbname' => 'php',
    'user' => '',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
];
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

if($conn){
    echo "database connected successfully";
}

?>