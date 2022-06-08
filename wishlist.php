<!DOCTYPE html>
<html lang="en">
<?php
session_start();

include('partials/connect.php');
include ("partials/head.php");

?>
<body class="animsition">
	<?php
	include ("partials/header.php");


?>

<section class="breadcrumb-option" style="    background: #e56f7aab;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__text">
					<h4>Wishlist Page</h4>

					<div class="breadcrumb__links">
					<a href="index.php">Home</a>
					<span style="    color: #7a5f5f;">Wishlist Page</span>
				  	</div>
				</div>
			</div>
		</div>
	</div>
</section>

	<br>
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">

	



			</div>

			<div class="row isotope-grid">
				<?php
				if(!empty($_SESSION['customerid']))
				{
				$customerid=$_SESSION['customerid'];
				include("partials/connect.php");
				$sql="SELECT * FROM  product
                INNER JOIN wishlist
                on product.product_id=wishlist.product_id where user_id='$customerid'";
				$results=$connect->query($sql);


				while ($final=$results->fetch_assoc()) {


				?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $final['category_id'] ?>">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?php echo $final['image'] ?>" alt="IMG-PRODUCT" style="min-height: 400px; max-height: 400px">

							<a href="details.php?details_id=<?php echo $final['product_id']?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $final['title'] ?>;
								</a>

								<span class="stext-105 cl3">
									$<?php echo $final['price'] ?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a   href='read.php?cart=<?php  echo $final['product_id'] ?>' class="btn-addwish-b2 dis-block pos-relative js-addwish-" name = "test" product_id=<?php echo $final['product_id'] ?>>
									<img style="z-index:10 ;" class="icon-heart2 dis-block trans-04 ab-t-l" href='read.php?cart=<?php  echo $final['product_id'] ?>' src="images/icons/icon-heart-01.png" alt="ICON">

									<img style="z-index:10 ;" class="icon-heart1 dis-block trans-04" href='read.php?cart=<?php  echo $final['product_id'] ?>' src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php } }?>

				
			</div>

		</div>
	</div>
		

	<?php
	include('partials/footer.php');
	?>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script type="text/javascript">
  
  jQuery(document).ready(function($){
      var test = '667'
      //console.log(test)

      $.ajax({
        url: '/wp-admin/admin-ajax.php',
        data: {
          'action': 'php_tutorial',
          'php_test': test
        },
        success: function(data){
          console.log("Happy")
        }
      });

  });

</script>
</body>
</html>