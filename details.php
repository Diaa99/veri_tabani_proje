<!DOCTYPE html>
<html lang="en">
<?php
include ("partials/head.php");
session_start();

?>
<body class="animsition">
	<?php
	include ("partials/header.php");



?>


	<!-- breadcrumb -->
	<div class="container">
		
	</div>
		

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<?php
				include("partials/connect.php");
				$id=$_GET['details_id'];
				$sql="Select * from product where product_id='$id'";
				$results=$connect->query($sql);
				$final=$results->fetch_assoc();

				?>
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								
								<div class="item-slick3" data-thumb="<?php echo $final['image'] ?>">
									<div class="wrap-pic-w pos-relative" style="height: 600px">
										<img src="<?php echo $final['image'] ?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php echo $final['image'] ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<div class="col_detl">
						<h4>Title </h4>
						<h4>
							<?php echo $final['title'] ?>
						</h4>
						</div>
						<div class="col_detl">
						<h4>Price</h4>
						<h4>
							$<?php echo $final['price'] ?>
						</span>
						</div>
						<div class="col_detl">
						<h4>Description</h4>
						<h4>
							<?php echo $final['description'] ?>
						</h4>
					</div>
						
						<!--  -->
						<div class="p-t-33">
							

							

							<div class="flex-w flex-r-m p-b-10" >
								<div class="size-204 flex-w flex-m respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10" style="margin-left: 50px;">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" >
											<i class="fa-solid fa-minus"></i>
										</div>
										

										<input class="mtext-104 cl3 txt-center num-product" type="number" min="1" name="num-product" value="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fa-solid fa-plus"></i>
										</div>
									</div>

									<button onclick="location.href='carthandler.php?cart_id=<?php echo $final['product_id'] ?>&cart_name=<?php echo $final['title'] ?>&cart_price=<?php echo $final['price'] ?>&cart_image=<?php echo $final['image'] ?>'"   class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Add to cart
									</button>
								</div>
							</div>	
						</div>

						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7" style=" margin-left: 64px;">
							
							<a href="#" class="social_icon fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="instagram">
								<i style="background:linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);   -webkit-background-clip: text;
  -webkit-text-fill-color: transparent; font-size:24px;" class="fa-brands fa-instagram"></i>
							</a>

							<a href="#" class="social_icon fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fa-brands fa-twitter" style="color:#00acee; font-size:24px;"></i>
							</a>

							<a href="#" class="social_icon fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="facebook">
								<i class="fa-brands fa-facebook" style="color: #4267B2; font-size:24px;"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<h2>Description</h2>
						</li>

					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<h6>
									<?php echo $final['description'] ?>
								</h6>
							</div>
						</div>

						<!-- - -->
						
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">

			<span class="stext-107 cl6 p-lr-25">
				<?php
				$connect->query("set @m = '$id'");
				$res = $connect->query("call get_category(@m);");
				$data = $res->fetch_assoc();
				echo $data['category_name'];
				?>
			</span>
		</div>
	</section>


	<!-- Related Products -->
	
	<!-- Footer -->
	<?php
	include('partials/footer.php');
	?>

</body>
</html>