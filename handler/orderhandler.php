<?php
session_start();
include('../partials/connect.php');

$total=$_POST['total'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$customerid=$_SESSION['customerid'];
$payment=$_POST['payment'];
$email = $_POST['Email'];
echo $email;

$sql="INSERT INTO order_(user_id, adress, phone, total, payMethod) VAlUES('$customerid','$address','$phone','$total', '$payment')";
$connect->query($sql);


$sql2="SELECT * from last_order";
$result=$connect->query($sql2);
$final=$result->fetch_assoc();
$orderid=$final['order_id'];



foreach ($_SESSION['cart'] as $key => $value) {
	$proid=$value['item_id'];
	$quantity=$value['quantity'];


	$sql3="INSERT Into order_details(order_id,product_id,quantity) VAlUES('$orderid','$proid','$quantity')";
	$connect->query($sql3);
	# code...
}
if ($payment=="paypal") {
	$_SESSION['total']=$total;
	header('location: paypal.php');
}else{
	echo "<script> alert('ORDER IS PLACED');
		window.location.href='../index.php';
		</script>";
}
unset($_SESSION['cart']);

?>