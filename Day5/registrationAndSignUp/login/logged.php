<?php
session_start();

if( isset($_POST['email']) )
{

include 'config.php';
     $myusername=$_POST['email']; 
     $mypassword=$_POST['password']; 
     
      $sql="SELECT * FROM company WHERE email='$myusername' AND pass='$mypassword'";
      $result=mysqli_query($conn, $sql);
      $count=mysqli_num_rows($result);
          if($count==1)
                {
               $sql="SELECT email, status FROM company WHERE email='$myusername'";
               $result=mysqli_query($conn , $sql);
               while( $row = mysqli_fetch_assoc( $result ) ) {
                	$myusername = bugRemoval($row['email']);
                	$status = bugRemoval($row['status']);
                }
                 
                 if($status=='1')
                 {
                      $_SESSION["myusername"]=$myusername;
                      echo"<script type='text/javascript'>
                      window.location.href='dashboard.php';
                      
                      </script>";
                 }
                 if($status=='0')
                 {
                      $_SESSION["myusername"]=$myusername;
                      echo"<script type='text/javascript'>
                      alert('Your profile is not active');
                      window.location.href='index.php';
                      </script>";
                 }
                 else 
                 {
                      $_SESSION["myusername"]=$myusername;
                      echo"<script type='text/javascript'>
                      alert('Something went wrong contact admin/dev');
                      window.location.href='index.php';
                      </script>";
                 }
          }
          else
          {
               echo"<script type='text/javascript'>
               alert('The username or password you entered is incorrect');
               window.location.href='login.php';
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