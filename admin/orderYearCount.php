<?php
include('../partials/connect.php');
$year = $_POST['year'];
$connect->query("set @m = '$year'");
$connect->query("call order_count(@m)");
$res = $connect->query("select @m as count");
$data = $res->fetch_assoc();
if($data['count'])
{
$count = $data['count'];
echo "<script>alert('count of order in {$year} are {$count}');window.location.href='orders.php';</script>";
}
else
{
    echo "<script>alert('there is no order in that year');window.location.href='orders.php'</script>";

}
?>
