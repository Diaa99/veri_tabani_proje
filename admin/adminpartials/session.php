<?php
session_start();

if(empty($_SESSION['adminEmail'] AND $_SESSION['adminPass'])){
	header('location: adminlogin.php');
}



?>