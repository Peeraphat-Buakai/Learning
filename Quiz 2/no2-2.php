<?php include "connect.php" ?>

<html>
<head>
<meta chatset="utf8">
</head>

<body>
  


<?php

$stmt = $pdo->prepare("SELECT*FROM register");
$stmt->execute();

echo"<table border=1>";
echo"<tr>";
echo"<th>";
echo "ชื่อนักศึกษาที่ลงทะเบียนวิชา WEB APPLICATION PROGRAMMING ";
echo "</th>";
echo"</tr>";

while($row=$stmt->fetch()){
echo"<tr>";
echo"<td> $row[course_id] <td>";
echo"</tr>";
}
echo"</table>";


?>

</body>
</html>

