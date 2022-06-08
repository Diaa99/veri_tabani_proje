
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

    <section class="content">

      <!-- Small boxes (Stat box) -->

      <div class="row">

        <div class="col-sm-9">

          <a href="products.php">

          <button style="
            color:#4ea148;
            width:80px;
            border:1px solid #4ea148;
            border-radius:5px;
            height:30px;
            background:transparent;
          ">Add New</button>

        </a>

       

          <?php

          include('../partials/connect.php');



          $sql="Select * from product";;

          $results=$connect->query($sql);

          while($final=$results->fetch_assoc()){ ?>
          <div style="padding-top: 3rem;">
            <img src=<?php echo "../{$final['image']}" ?> width="100px" height="100px">
            <a href="proshow.php?pro_id=<?php echo $final['product_id']?>">

            <h3><?php echo $final['product_id'] ?>: <?php echo $final['title']?></h3><br>



          </a>



          <a href="proupdate.php?up_id=<?php echo $final['product_id'] ?>">

            <button
            style="
            width:80px;
            border:1px solid #79a3ec;
            border-radius:5px;
            height:30px;
            background:transparent;
            "
            >Update</button>

          </a>



          <a href="prodelete.php?del_id=<?php echo $final['product_id'] ?>">

            <button style="
            color:#ec7997;
            width:80px;
            border:1px solid #ec7997;
            border-radius:5px;
            height:30px;
            background:transparent;
            ">Delete</button>

          </a>
          <div>
          <hr>





         <?php }

          ?>











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