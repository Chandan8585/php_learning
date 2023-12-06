<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
     $name = $_POST["userName"];
     $email = $_POST["email"];
     $mobile = $_POST["mobile"];
     $password = $_POST["password"];
 }


?>
<div class="detail">
 <h1>
 <?php echo $name;?></h1>
 <h2><?php echo $email;?></h2>
 <h3><?php echo $mobile;?></h3>
  <h3><?php echo $password; ?></h3>
</div>

