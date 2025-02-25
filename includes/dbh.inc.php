<?php


$host = "127.0.0.1";
$dbname = 'myfirstdatabase';
$dbusername = 'root';
$dbpassword = 'newpassword';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Connection fail: " . $e->getMessage());
}

/*--
Nháy đôi (""): Cho phép nội suy biến (biến được thay thế bằng giá trị của nó).
Nháy đơn (''): Không nội suy biến (hiển thị chính xác những gì được viết).

--*/
