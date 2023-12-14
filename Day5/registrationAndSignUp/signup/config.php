<?php
error_reporting(E_ALL);
date_default_timezone_set('Asia/Kolkata');

$host = "localhost"; 
$username = "zupzuptektestnet_Abhishek"; 
$password = "Chandan@123"; 
$dbname = "zupzuptektestnet_loginForm";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn,"SET NAMES utf8");
	
?>

<?php 
function bugRemoval($variable)
{
return(mysqli_real_escape_string($GLOBALS['conn'],$variable));
}

?>