<?php
include("partials/connect.php");
$ord_id = $_GET['orderID'];
$status= $_GET['status'];
if($status=="preparing")
{
    $sql = "delete from order_ where order_id='$ord_id'";
    $connect->query($sql);
    echo
    "
    <script>
    alert('order canceled successfully');
    window.location.href='customerorderpage.php';
    </script>
    ";
    
}
else{
   
    echo"<script>
    alert('You cant cancel order at this point');
    
    window.location.href='customerorderpage.php';
    </script>
    ";

}
?>
