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
    <section class="content" style="
        display: flex;
    flex-direction: column;
    height: 80vh;
    justify-content: center;
    ">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-9" style="width: 33.33%; text-align:center">
         <a href="products.php">
            <button class="btn_te" style="
            color: green;
              height: 200px;
              border-radius: 15px;
              width: 85%;
              border:none;
              color: #1a1f1a;
              font-size: 19px;
              background-color: #e86375;
            
            ">Add Products</button>
          </a>
        </div>
        <div class="col-sm-9" style="width: 33.33%; text-align:center">
         <a href="categories.php">
            <button class="btn_te" style="
            color: green;
              height: 200px;
              width: 85%;
              border:none;
              color: #1a1f1a;
              font-size: 19px;

              border-radius: 15px;
              background-color: #ffd099;
            
            ">Add Categories</button>
          </a>
        </div>
         <div class="col-sm-9" style="width: 33.33%; text-align:center">
         <a href="orders.php">
            <button class="btn_te" style="
            color: green;
              height: 200px;
              width: 85%;
              border-radius: 15px;
              border:none;
              color: #1a1f1a;
              font-size: 19px;
              background-color: #afd6ad;
            
            ">See all Orders</button>
          </a>
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
