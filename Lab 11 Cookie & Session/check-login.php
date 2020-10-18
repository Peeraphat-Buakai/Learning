<?php

include "connect.php";
session_start();

$stmt = $pdo->prepare("SELECT *FROM member WHERE username = ? AND password = ?");
$stmt->bindParam(1,$_POST["username"]);
$stmt->bindParam(2,$_POST["password"]);
$stmt->execute();
$row = $stmt->fetch();

if(!empty($row)){
  session_regenerate_id();
  $_SESSION["fullname"] = $row["name"];
  $_SESSION["username"] = $row["username"];

  echo"
    เข้าส่ระบบสำเร็จ<br>
    <a href='user-home.php'>ไปยังหน้าหลักผู้ใช้</a>
  ";
}else{
  echo"
    ไม่สำเร็จ ชื่อหรือรหัสผ่านไม่ถูกต้อง
    <a href='login.html'>เข้าสู่ระบบอีกครั้ง</a>
  ";
}


?>