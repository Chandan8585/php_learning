<!-- Rendering Form Details on the same page -->

<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
     if($_POST["userName"])
     {
         $name = $_POST["userName"];
         $email = $_POST["email"];
         $mobile = $_POST["mobile"];
         $password = $_POST["password"];
     }
     
 }


?>
<html>
    <style>
    .container{
        display: flex;
        padding: auto;
        border: 2px solid black;
    }
        .form{
            display: flex;
            flex-direction: column;
            height: 80vh;
            width: 80vw;
        }
    </style>
    <body>
        <section class="container">
             <form class="form" action="" method="post">
            <label for="userName" class="name">UserName</label>
            <input name="userName" class="nameInput" type="text"  >
             <label for="email" class="email">Email ID</label>
            <input name="email" class="emailInput" type="email">
             <label for="mobile" class="mobile">Mobile</label>
            <input name="mobile" class="mobileInput" type="number">
            <label for="password" class="password">Password</label>
            <input name="password" class="passwordInput" type="password">
            <button type="submit">Submit</button>
        </form>
        </section>
        <?php if($_POST["userName"])
        { 
        ?>
        <section>
            <div class="detail">
         <h1>
         <?php echo $name;?></h1>
         <h2><?php echo $email;?></h2>
         <h3><?php echo $mobile;?></h3>
          <h3><?php echo $password; ?></h3>
        </div>

        </section>
        <?php
        }
        ?>
       </body>
</html>




