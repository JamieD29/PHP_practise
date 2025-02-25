<?php

declare(strict_types=1); // strict type - cac du lieu truyen vao va tra ve cua ham phai chinh xac voi khai bao

//PDO la PHP Data Object dung de ket noi voi database
function get_username(object $pdo, string $username)
{
   $query = "SELECT username FROM users WHERE username = :username;"; // Query truy van bang cau lenh cua SQL script

   $stmt = $pdo->prepare($query); /*- Dùng phương thức $pdo->prepare($query) để chuẩn bị truy vấn SQL.
    Điều này giúp tránh SQL Injection vì sử dụng prepared statement. -*/


   $stmt->bindParam(":username", $username); //gan gia tri truy van


   $stmt->execute(); // thuc thi cau lenh SQL

   $result = $stmt->fetch(PDO::FETCH_ASSOC);
   return $result;
}

function get_email(object $pdo, string $email)
{
   $query = "SELECT email FROM users WHERE email = :email;"; // Query truy van bang cau lenh cua SQL script

   $stmt = $pdo->prepare($query); /*- Dùng phương thức $pdo->prepare($query) để chuẩn bị truy vấn SQL.
    Điều này giúp tránh SQL Injection vì sử dụng prepared statement. -*/


   $stmt->bindParam(":email", $email); //gan gia tri truy van


   $stmt->execute(); // thuc thi cau lenh SQL

   $result = $stmt->fetch(PDO::FETCH_ASSOC);
   return $result;
}

function set_user(object $pdo, string $username, string $email, string $pwd)
{
   $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
   $stmt = $pdo->prepare($query);

   $options = [
      'cost' => 12
   ];

   $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

   $stmt->bindParam(":username", $username);
   $stmt->bindParam(":pwd", $hashedPwd);
   $stmt->bindParam(":email", $email);

   $stmt->execute();
}
