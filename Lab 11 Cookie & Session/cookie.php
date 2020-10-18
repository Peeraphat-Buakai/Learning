<html>
<head>
<meta charset="utf-8">
</head>

<body>
  
<?php

  // setcookie("visit",0,time()+5);
  if (empty($_COOKIE["lang"])) {
    setcookie("visit",0,time()+15);
  }

  if (!isset($_COOKIE["en"])) {
    echo "Welcome";
  }else{
    $visit = $_COOKIE["th"];
    echo "ยินดีตอนรับ";
  }


?>

</body>

</html>