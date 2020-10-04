<html>
  <head>
  <meta charset="UTF-8">
</head>

<body>
  
<?php

  $a = $_POST["a"];
  $b = $_POST["b"];
  $opt = $_POST["opt"];

  $plus = $a + $b;
  $del = $a - $b;
  $mul = $a * $b;
  $div = $a  / $b;

echo "<script>;
   console.log('a = ' + $a);
   console.log('b = ' +$b);
   </script>";

  if ($opt == "plus") {
    echo "ผลลัพธ์ = " .  $plus; 
  }else if( $opt == "del"){
    echo "ผลลัพธ์ = " . $del; 
  }else if( $opt == "mul"){
    echo "ผลลัพธ์ = " . $mul; 
  }else if( $opt == "div"){
    echo "ผลลัพธ์ = " . $div; 
  }

  

  //  "<script>";
  //  "console.log($b)";
  //  "</script>";

?>



</body>

</html>