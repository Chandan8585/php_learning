<?php
session_start();

if( isset($_POST['email']) ||isset($_POST['username']) ||isset($_POST['password']) )
{

include 'config.php';
     $username=$_POST['username']; 
     $myemail=$_POST['email'];
     $mypassword=$_POST['password']; 
     
      $sql="SELECT * FROM company WHERE email='$email'";
      $result=mysqli_query($conn, $sql);
      $count=mysqli_num_rows($result);
      if(count == 1){
         $sql = "UPDATE company SET pass = '$mypassword', name = '$myusername'  WHERE email=$myemail";
             $result=mysqli_query($conn , $sql);
               while( $row = mysqli_fetch_assoc( $result ) ) {
                	$myusername = $row['username'];
                	$mypassword = $row['password'];
                }
      }
}