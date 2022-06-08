<?php

session_start();

include('../partials/connect.php');
$user=$_SESSION['customerid'];

$email = $_POST['Email'];
$address= $_POST['adress'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];

$sql = "update user set email='$email', adress='$address',phone='$phone',password='$pass' where user_id = '$user'";
if(mysqli_query($connect,$sql))
{
    echo "<script> alert('user information updated successfylly');
    window.location.href='profile.php';
    </script>";
}

?>