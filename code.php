<?php

session_start();
require 'dbcon.php';
if (isset($_POST['register'])) {
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$add = mysqli_real_escape_string($con,$_POST['address']);
	//echo "Hello your Email is ".$email ." And Password is ".$paasword ." ".$add." ".$city." ".$state;
	$query="INSERT INTO `firstsignup`( `email`, `password`, `address`) VALUES('$email', '$password', '$add')";
    $run_query=mysqli_query($con,$query);
    
    if($run_query)
    {
        $_SESSION['message']="User Created Sucessfully ";
        $_SESSION['email']=$email;
        //print_r($run_query);
        header("Location:index.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Customer Not Created Sucessfully ";
        header("Location:index.php");
        exit(0);
    }
}
if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	
	$query="SELECT * FROM `firstsignup` WHERE `email`='$email' and `password`='$password' ";
    $run_query=mysqli_query($con,$query);
    
    if($run_query)
    {
        $_SESSION['message']="User Created Sucessfully ";
        //print_r($run_query);
        $_SESSION['email']=$email;
        header("Location:index.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Customer Not Created Sucessfully ";
        header("Location:contact.php");
        exit(0);
    }
}
?>