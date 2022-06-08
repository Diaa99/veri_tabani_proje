<?php 

$timestamp = date("YmdHis"); // output: 20150715164614
//session_start();

include ("partials/head.php");

include('connect.php');

?>
	<!-- Header -->
	<header>


			
			<div class="wrap-menu-desktop" style="background-color:white;" >
				<nav class="limiter-menu-desktop container" style="justify-content: space-between;">
					
					<!-- Logo desktop -->		
							<svg width="41" height="41" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M44.0662 15.4337C44.0662 23.1634 37.9586 29.3675 30.5 29.3675C23.0414 29.3675 16.9337 23.1634 16.9337 15.4337C16.9337 7.70407 23.0414 1.5 30.5 1.5C37.9586 1.5 44.0662 7.70407 44.0662 15.4337Z" stroke="url(#paint0_linear_1_6)" stroke-width="3"/>
					<path d="M29.3675 30.1325C29.3675 37.8279 23.1291 44.0663 15.4337 44.0663C7.73835 44.0663 1.5 37.8279 1.5 30.1325C1.5 22.4371 7.73835 16.1988 15.4337 16.1988C23.1291 16.1988 29.3675 22.4371 29.3675 30.1325Z" stroke="url(#paint1_linear_1_6)" stroke-width="3"/>
					<path d="M44.0662 45.5663C44.0662 53.2959 37.9586 59.5 30.5 59.5C23.0414 59.5 16.9337 53.2959 16.9337 45.5663C16.9337 37.8366 23.0414 31.6325 30.5 31.6325C37.9586 31.6325 44.0662 37.8366 44.0662 45.5663Z" stroke="url(#paint2_linear_1_6)" stroke-width="3"/>
					<path d="M59.5 30.5C59.5 37.9586 53.2959 44.0663 45.5663 44.0663C37.8366 44.0663 31.6325 37.9586 31.6325 30.5C31.6325 23.0414 37.8366 16.9337 45.5663 16.9337C53.2959 16.9337 59.5 23.0414 59.5 30.5Z" stroke="url(#paint3_linear_1_6)" stroke-width="3"/>
					<defs>
					<linearGradient id="paint0_linear_1_6" x1="30.5" y1="0" x2="30.5" y2="30.8675" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2D7B69" stop-opacity="0.62"/>
					<stop offset="1" stop-color="#145A64"/>
					</linearGradient>
					<linearGradient id="paint1_linear_1_6" x1="15.4337" y1="14.6988" x2="15.4337" y2="45.5663" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2D7B69" stop-opacity="0.62"/>
					<stop offset="1" stop-color="#145A64"/>
					</linearGradient>
					<linearGradient id="paint2_linear_1_6" x1="30.5" y1="30.1325" x2="30.5" y2="61" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2D7B69" stop-opacity="0.62"/>
					<stop offset="1" stop-color="#145A64"/>
					</linearGradient>
					<linearGradient id="paint3_linear_1_6" x1="45.5663" y1="15.4337" x2="45.5663" y2="45.5663" gradientUnits="userSpaceOnUse">
					<stop stop-color="#2D7B69" stop-opacity="0.62"/>
					<stop offset="1" stop-color="#145A64"/>
					</linearGradient>
					</defs>
          			  </svg>

					<!-- Menu desktop -->
	
					<div>
					<div class="menu-desktop">
						<ul class="main-menu">
						
							<li>
								<a class="active" href="index.php">Home</a>
							</li>

							<li>
								<a href="product.php">Shop</a>
							</li>

							<li>
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</div>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m" style="flex-grow: 0;">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
						<i style="font-size:20px;" class="fa-solid fa-magnifying-glass"></i>
						</div>
						<?php
						if (!empty($_SESSION['cart'])) {
							$qty=count($_SESSION['cart']);?>
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " onclick="location.href='cart.php'" data-notify="<?php echo $qty ?>">
						
						<?php }else{?>
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " onclick="location.href='cart.php'" data-notify="0">
						<?php } ?>
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<rect width="20" height="19.5833" fill="url(#pattern0)"/>
							<defs>
							<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
							<use xlink:href="#image0_35_75" transform="translate(0 -0.0106383) scale(0.015625 0.0159574)"/>
							</pattern>
							<image id="image0_35_75" width="64" height="64" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAB2AAAAdgB+lymcgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAO+SURBVHic7ZvJTxRBFIe/QdAI44KigkSMJoYTiQs3o+LBxERJPOtJLnrTi5F/AL2i4e6/4FURxcTl4EGPLolLIBpF3COOgcFDTZuhurq7arqqpzozX1KHrql6/as371VX9VIgW/qBU8AxoBfYUamfAWaBSeAm8DJjXc4ZBKaAZc1yBzhQF6WWaQMmgDL6gw9KGbgOtGau2hKdwF3MB66Kho2uRBYc2W0DbgFHI35/C0wjch+gDxgCdka0nwKOA4u2BLpmAvW/+RA4FNPvMPAoou81h3qtMkg458vAGNCi0b8FuKKwsQTsd6DXOqrZfqwGO1cVdiYtaXRGP2HRD9D752VagMcKe3usKHXEZcKC43I+iSMKe5dSanTKJCvFvklprwC8k2zeTmlzBbWEZhx90vF0SnvLwL2Ec6TCtgO2S8czylZmzErHvRZs/sd0mTmEuMytivi9KB0PIuaFNMiXvmKMzSXgCXA/5TmVXCT9sjarcsGFA154MDDd8lx3UCZ7gd/AWoP29WQBaNdpqDsJFsnP4EFo7dBpqOuALYq604gIqi4yo4o2pmVUYVduc0ZTc4g0Dvis2TcLVFqsOqBLUTen2TcLVFpUmkOkiQDfHdBQKeDcAXI4/QRKmn2zoAT8kuqcpoBP4R8ga3KaAg3nADmc8uAApyng0wQYIGtqpoBOJx0HtAHrpbqoCPgkHX/UEZGAbCPKpuyADQjtqekhvN0ciWh7HvH0Zhl4iuaGJIEi8KxicxE4F9FuRKGzx8L5GVAYHo5pvxs4CKy2cfIKayo2d8W0GSascyDJsM4tsa2KOjnUq3ldKTYpIR6rxVHTalBnDlBdTvJwFQCNS6GOA3zfCAU4iwDZyF/EXsA3viO0VeMkBeYQE4yPyGngJAV8DP8A48VQLQ7wcQIMMF4O15oCvmK8IWqmQMLvBWCzVJenFOgi4eFPkgM6Ca8W8xQBrSS8YpfkAN9vh8sY3x5PcoDvd4NljB+Q1OKAvEVA0wFxHUzngDLwxURRxswjNFZjdQ74ingNxVeWgG9SndUI8Dn8A4xWg6YRkEcHWJ0EG84Bcvj4vAYIMLon0IyAmN/aCb9plccI6CDmjbE4B+RtERRgtB9oFAdEpkGcAzoVdfPGcrJHlaabohrHOUBeUgJsM5aTPSqNkavXuLsl3cAHqe49cAM/nwsArAPOEn5tv5san1SbfO7qa0n1odU+4I8Hg6i1LAB70zgA4CQi5Os9GNPyAziRdvABvcA48ArxqLreg4sqJcSn9+NoflrzD2Z7D8Gy6cUaAAAAAElFTkSuQmCC"/>
							</defs>
							</svg>

						</div>


						<a href="wishlist.php" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti_" data-notify="<?php
						if(empty($_SESSION['customerid'])){
							echo 0;

						}
						else{
							$customerid=$_SESSION['customerid'];
							$sql = "select count(*) as count from wishlist where user_id = '$customerid'";
							$res = $connect->query($sql);
							$data = $res->fetch_assoc();
							echo $data['count'];
						}
						
						?>">
							<i style="color:#e56f7a;" class="fa-solid fa-heart"></i>
						</a>
						

						<a  href="<?php 
						if(!empty($_SESSION['customerid']))
						{
							echo 'handler/profile.php';
						}
						else{
							echo 'handler/login.php';
						}
						?>" >

						
						<i class="fa-regular fa-user user"></i>
						</a>
					<?php
						if(!empty($_SESSION['customerid']))
						{
								echo "<a href='customerorderpage.php' class='dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti_'><i class='fa-solid fa-truck'></i></a>";
						}
					
					?>

					</div>

					
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti " onclick="location.href='cart.php'" data-notify="">
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="">
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
		

			<ul class="main-menu-m" style="background-color: #1868457d;">
				<li>
					<a href="index.html">Home</a>
					
				</li>

				<li>
					<a href="shop.php">Shop</a>
				</li>



				<li>
					<a href="about.php">About</a>
				</li>

				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="fa-solid fa-magnifying-glass"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-02.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-03.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>