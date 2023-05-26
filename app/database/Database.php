<?php
try {
    $host = 'localhost';
    $dbname = 'kitap';
    $username = 'root';
    $password = 'root';

    $database = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8;", $username, $password);

    return $database;
} catch (PDOException $err) {
    die("Ошибка подключения к базе данных: " . $err->getMessage());
}