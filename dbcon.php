<?php 
$host = "127.0.0.1";
$username = "root";
$pass = "";
$con = mysqli_connect($host, $username, $pass, "mydb");
// $con=mysql_connect("localhost","root","","mydb");
if ($con) {
	echo "Connected";
}
else
{
	echo "Not Connected"; 	
}


?>