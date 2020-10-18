<html>
  <head>
    <meta charset="utf-8">
  </head>
<body>
  <?php
  
    $lang = $_GET["lang"];
    setcookie("lang",$lang,time()+30*60);

      if ($_COOKIE["lang"] == "th") {
        echo"ยินดีตอนรับ";
      }
      else if($_COOKIE["lang"] == "en"){
        echo"Welcome";
      }
  ?>
</body>
</html>