<?php
$user = 'root';
$password = 'root';
$db = 'task';
$host = 'localhost';
$port = 8889;

$dsn = 'mysql:host=' . $host . ';dbname=' . $db . ';port=' . $port;
$pdo = new PDO($dsn, $user, $password);
