<!DOCTYPE html>
<html>
<?php
include('adminpartials/session.php');
include('adminpartials/head.php');

?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include('adminpartials/header.php');
  include('adminpartials/aside.php');
  session_start();

  ?>
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-9">

          <?php
          include('../partials/connect.php');

          $id=$_GET['pro_id'];
          $connect->query("set @m = '$id'");
          $res = $connect->query("call get_order_details(@m)");
          $final = $res->fetch_assoc();
          $_SESSION['ord_id']=$final['order_id'];

          ?>

          <h3> CustomerNo : <?php echo $final['user_id']?> </h3><hr><br>

          <h3> Customer Name : <?php echo $final['username']?> </h3><hr><br>


          <h3> Total : <?php echo" {$final['Total']}$"?> </h3><hr><br>

          <h3> Address : <?php echo $final['adress']?> </h3><hr><br>
          



        </div>
        <div class="col-sm-9">

          <?php     
          ?>

          <h3> ProductNo : <?php echo $final['product_id']?> </h3><hr><br>

          <h3> quantity : <?php echo $final['quantity']?> </h3><hr><br>

          <form method="post" action="orderstatushandler.php">
                <select name="status" class="list" id="lang">
                  
                    <option  value="preparing" <?php if($final['status']=='preparing') echo 'selected' ?>>preparing</option>
                    <option value="on way" <?php if($final['status']=='on way') echo 'selected' ?>>on way</option>
                    <option value="Delivered" <?php if($final['status']=='Delivered') echo 'selected' ?>>Delivered</option>
                  </select>
                  
                  <hr><br>
                
                <button class="add_to_card btn btn-primary">Update status</button>

            </form>
          



        </div>

      
<div class="col-sm-3">
  
  </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 include('adminpartials/footer.php');
 ?>
</body>
</html>
