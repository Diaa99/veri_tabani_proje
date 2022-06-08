<?php
session_start();
include('partials/connect.php');
$prd= $_GET['cart'];
if(!empty($_SESSION['customerid'])){
$customerid=$_SESSION['customerid'];
$ch=1;
$sql_="select * from wishlist where user_id = '$customerid' and product_id='$prd'";
$res = $connect->query($sql_);
$data = $res->fetch_assoc();
if($data['user_id']==$customerid and $data['product_id']==$prd)
{
    $connect->query("Delete from wishlist where user_id = '$customerid' and product_id='$prd'");
    echo "<script> alert('product deleted from wishlist');
window.location.href='product.php';
</script>";
}
else{
$sql = "insert into wishlist(user_id,product_id,wishlist) values('$customerid','$prd','$ch')";
$connect->query($sql);
echo "<script> alert('product added to wishlist successfully');
window.location.href='product.php';
</script>";
}
}else
{
    echo
    "<script>
    alert('please log in to use this section');
    window.location.href='product.php';

    </script>";
}

?>