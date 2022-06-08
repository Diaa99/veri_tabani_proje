<?php
session_start();

$con = mysqli_connect("localhost","root","","website");
$pass = $_POST["pass"];
$userName = $_POST['userName'];

function message_()
{
    echo "<script> alert('User name or passwrord not correct!');
    window.location.href='login.php';
    </script>";
}

$ch=false;
$sql="select user_id,username,email,password from user where username = '$userName' and password = '$pass'";
$res=mysqli_query($con,$sql);
$data = $res->fetch_assoc();
if($data['username']==$userName && $pass==$data['password'])
{

	$_SESSION['email']=$data['username'];
	$_SESSION['password']=$data['password'];
	$_SESSION['customerid']=$data['user_id'];
	$_SESSION['email2']=$data['email'];

	header('location: ../cart.php');
	
    

}
else{
	include("login.php");
	message_();
}

?>

