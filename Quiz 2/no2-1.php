<?php include "connect.php" ?>

<html>
<head>
<meta chatset="utf8">
</head>

<body>
  
<?php

$stmt = $pdo->prepare("SELECT*FROM course");
$stmt->execute();

echo"
  <table border=1>
    <tr>
      <th>รายวิชา </th>
      <th>จำนวนคนลงทะเบียน</th>
    </tr>
";

while($row=$stmt->fetch()){
  echo "<tr>";
  echo "<td>$row[title]</td>";
  echo "<td>$row[credit]</td>";
  echo "</tr>";
}

echo "</table>";


?>

</body>
</html>

