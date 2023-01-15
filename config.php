<?php

$host = 'localhost';
$db = 'shop';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn, $user, $pass, $opt);

$db = mysqli_connect('localhost', 'root', '', 'shop') or die ('Ошибка подключения к базе данных');