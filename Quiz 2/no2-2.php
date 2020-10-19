<?php include "connect.php" ?>

<html>
<head>
<meta chatset="utf8">
</head>

<body>
  


<?php

$stmt = $pdo->prepare("SELECT*FROM course");
$stmt = $pdo->prepare("SELECT*FROM register");
$stmt = $pdo->prepare("SELECT*FROM student");
$stmt->execute();

echo"<table border=1>";
echo"<th>";
echo "ชื่อนักศึกษาที่ลงทะเบียนวิชา WEB APPLICATION PROGRAMMING ";
echo "</th>";


echo"</table>";


?>

</body>
</html>

