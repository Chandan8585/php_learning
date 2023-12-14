<?php
session_start();

if( isset($_POST['email']) )
{
include 'config.php';
     $myemail=$_POST['email']; 
     $mypassword=$_POST['password']; 
     $myusername = $_POST['name'];
     
      $sql="SELECT * FROM company WHERE email='$myemail'";
      $result=mysqli_query($conn, $sql);
      $count=mysqli_num_rows($result);
          if($count==0)
                {
               $sql="INSERT INTO company (name ,email, pass) VALUES ('$myusername', '$myemail', '$mypassword')";

               $result=mysqli_query($conn , $sql);
                }
          else
          {
               echo"<script type='text/javascript'>
               alert('The username or password you entered already exist');
               window.location.href='signup.php';
               </script>";
          }
}
else
{
     echo"<script type='text/javascript'>
     alert('Oops something went wrong');
     window.location.href='index.php';
     </script>";
}
?>