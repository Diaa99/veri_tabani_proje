<?php 
include('../partials/connect.php');
$newid=$_GET['del_id'];

$sql="Delete from order_ where order_id='$newid'";
$sql2="Delete from order_details where order_id='$newid'";


if (mysqli_query($connect,$sql2) && mysqli_query($connect,$sql)) {
	header('location: orders.php');
}else{
	echo "Not Deleted";
}










?>