<?php

$host = getenv('APP_DB_HOST');
$port = getenv('APP_DB_PORT');
$name = getenv('APP_DB_NAME');
$user = getenv('APP_DB_USER');
$pass = getenv('APP_DB_PASS');

try {
    $dbh = new pdo(
        'mysql:host=' . $host . ':' . $port . ';dbname=' . $name,
        $user,
        $pass,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
    die('DB Connection Success');
} catch (PDOException $e) {
    die('DB Connection Failed: ' . $e->getMessage());
}
