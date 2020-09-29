<html>
<head>
</head>

<body>
  
  <?php
  
    $message = "สวัสดี <br>";
    echo $message;
    $myName = 'Peeraphat';
    $age = 20;

  ?>

ชื่อ : <?=$myName?><br>
อายุ : <?=$age?> 

<?php

$person = array("fullname" =>"John", "height"=>"173","age"=>"43");

foreach ($person as $key => $value) {
  echo $key . " = " . $value . "<br>" ;
}

?>
</body>
</html>