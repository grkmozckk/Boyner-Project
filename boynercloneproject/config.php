<?php
$host = 'localhost';
$db = 'boyner';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$connect = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($connect, $user, $pass);
    echo "Baglanti Basarili Bir Sekilde Saglandi.";
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
