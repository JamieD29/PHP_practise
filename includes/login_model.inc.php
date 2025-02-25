<?php

declare(strict_types=1); // strict type - cac du lieu truyen vao va tra ve cua ham phai chinh xac voi khai bao

//PDO la PHP Data Object dung de ket noi voi database
function get_user(object $pdo, string $username)
{
   $query = "SELECT * FROM users WHERE username = :username;"; // Query truy van bang cau lenh cua SQL script

   $stmt = $pdo->prepare($query); /*- Dùng phương thức $pdo->prepare($query) để chuẩn bị truy vấn SQL.
    Điều này giúp tránh SQL Injection vì sử dụng prepared statement. -*/


   $stmt->bindParam(":username", $username); //gan gia tri truy van


   $stmt->execute(); // thuc thi cau lenh SQL

   $result = $stmt->fetch(PDO::FETCH_ASSOC);
   return $result;
}

// function get_user(object $pdo, string $username, string $pwd){
//     $query = "";
// }