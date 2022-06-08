<?php
include("../partials/connect.php");
session_start();
$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
$id = $_SESSION['ord_id'];
$user_id=$_SESSION['customerid'];
if($status)
{
    $sql = "update order_ set status = '$status' where order_id='$id' and user_id='$user_id'";
    if($connect->query($sql))
    {
        echo"
        <script>
        alert('status updated successfully!');
        window.location.href='orders.php';
        </script>";
    }
    
}

?>