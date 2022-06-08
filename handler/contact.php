<?php
include("../partials/connect.php");
$email=$_POST['email'];
$msg=$_POST['msg'];

$sql="INSERT INTO contact(email,msg) VALUES('$email','$msg')";

if($connect->query($sql))
{
    echo "<script> alert('message send it successfully');
    window.location.href='../index.php';
    </script>";
}


?>