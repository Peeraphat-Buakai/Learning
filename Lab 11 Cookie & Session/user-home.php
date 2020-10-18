<?php  session_start(); ?>

<html>

<body>
  <h1>สวัสดี<?=$_SESSION["fullname"]?></h1>
  <?php 
    include "product-list.php";
  ?>
  หากต้องการออกจากระบบโปรดคลิก<a href="logout.php">ออกจากระบบ</a>
</body>

</html>