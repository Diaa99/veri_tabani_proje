<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include ("partials/head.php");
?>
<body class="animsition">
	<?php
	include ("partials/header.php");


?>

	<!-- breadcrumb -->
	<section class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb__text">
					<h4>Shoping Cart</h4>

					<div class="breadcrumb__links">
					<a href="index.php">Home</a>
					<span>Shoping Cart</span>
				  	</div>
				</div>
			</div>
		</div>
	</div>
</section>

	<!-- Shoping Cart -->
	<div class="bg0 p-t-75 p-b-85">
		<div class="container" style="max-width: 1331px;">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Image</th>
									<th class="column-2">Name</th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5" style="padding:0;">Update</th>
									<th class="column-6" style="padding-right:40px;">Remove</th>

								</tr>
								<?php 
								$total=0;
								if (isset($_SESSION['cart'])) {
									
									foreach ($_SESSION['cart'] as $key => $value) {
									
									$total=$total+$value['item_price']*$value['quantity'];



								?>
								<tr class="table_row">

									<td class="column-1"><?php echo "<img style='padding:5px;border-radius:10px;' src='{$value['cart_img']}' width='100px' height='150px'/>" ;?></td>
									<td class="column-2"><?php echo $value['item_name'] ?>;</td>
									<td class="column-3">$ <?php echo $value['item_price'] ?></td>
									<td class="column-4">
										<form action="cartupdate.php" method="POST">
											
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fa-solid fa-minus"></i>
											</div>

											<input name="quantity" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="<?php echo $value['quantity'] ?>">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fa-solid fa-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5">
										<button class="btn btn-sm btn-outline-primary" name="update">Update</button>
											<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
											</form>
										</td>

									<td class="column-6">
										<div class="">
											<form action="cartremove.php" method="POST">
											<button class="btn btn-sm btn-outline-danger" style="margin-right:40px;"  name="remove">Remove</button>
											<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
											</form>
										</div>
									</td>
								</tr>
								<?php }
									
								} ?>
								
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								
							</div>

							
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30" style="text-align: center;">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									$<?php echo $total ?>
								</span>
							</div>
						</div>

						<button onclick="location.href='cart2.php'" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	
		

	<?php
	include('partials/footer.php');
	?>
</body>
</html>