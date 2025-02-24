<?php


$host = "localhost";
$dbname = 'myfirstdatabase';
$dbusername = 'root';
$dbpassword = 'newpassword';

try {
    $pdo = new PDO('mysql:host=$host;dbname=$dbname', $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Connection fail: " . $e->getMessage());
}
