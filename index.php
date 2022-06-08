<!DOCTYPE html>
<html lang="en">
<?php
session_start();

include ("partials/head.php");
?>
<body class="animsition">
	<?php
	include ("partials/header.php");
	include ("partials/slider.php");

include ("partials/banner.php");


?>
		


	<!-- Product -->
	<section class="bg0 best_seller p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10 ">
				<h3 class="ltext-103 cl5 best_title">
					Best Sellers
				</h3>
			</div>


			<div class="row isotope-grid">
				<?php 
				include("partials/connect.php");
				$sql="Select * from best_seller";

				$results=$connect->query($sql);
				
				while ($final=$results->fetch_assoc()) { ?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $final['category_id'] ?>">
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?php echo $final['image'] ?>" alt="IMG-PRODUCT" class="pro_img" style="min-height: 400px; max-height: 400px">
							<a href="details.php?details_id=<?php echo $final['product_id']?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $final['title'] ?>
								</a>

								<span class="stext-105 cl3">
									$<?php echo $final['price'] ?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
<?php } ?>
				
				
			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="product.php" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04 load_btn">
					Load More
				</a>
			</div>
		</div>
	</section>


	
<section class="categories spad">
	<?php
		include("partials/connect.php");
		$sql="Select * from product where week_deal = 1";
		$res = $connect->query($sql);
		$data = $res->fetch_assoc();
	
	
	{?>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
					<div class="categories__text">
					<h2>Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories</h2>
					</div>
					</div>
					<div class="col-lg-4">

					<div class="categories__hot__deal">
					<img src="images/xproduct-sale.png.pagespeed.ic.n2J8U5DKGJ.webp" alt="" data-pagespeed-url-hash="1370157075" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
					<div class="hot__deal__sticker">
					<span>Sale Of</span>
					<h5><?php echo "{$data['price']} $" ?></h5>
					</div>
				</div>
			</div>
		<div class="col-lg-4 offset-lg-1">
				<div class="categories__deal__countdown">
				<span>Deal Of The Week</span>
				<h2><?php echo $data['title'] ?></h2>
				<div class="categories__deal__countdown__timer" id="countdown">
				<div class="cd-item">
				<span>
					<?php
					$now = date('Y-m-d H:i:s');
					$to_date = date('Y-m-d H:i:s',strtotime($now.'+ 7day'));
					$now_date = strtotime($now);
					$todate = strtotime($to_date);
					$diff = $todate-$now_date;
					echo gmdate('d',$diff);
					?>
				</span>
				<p>Days</p>
				</div>
				<div class="cd-item">
				<span>
					<?php
					echo gmdate('H',$diff);

					?>
				</span>
				<p>Hours</p>
				</div>
				<div class="cd-item">
				<span>
					<?php
					echo gmdate('i',$diff);
					
					?>
				</span>
				<p>Minutes</p>
				</div>

				<div class="cd-item">
				<span><?php 
					echo gmdate('s',$diff);
				
				?></span>
				<p>Seconds</p>
				</div>
				</div>
				<a href="#" class="cat_btn">Shop now</a>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</section>


<div class="section_4" >

    <h1>Customer Testimonials</h1>


    <div class="feedback">
        <div class="logo"  data-aos="fade-left"
        data-aos-duration="800">
            <svg width="83" height="82" viewBox="0 0 83 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.5364 2.52468C32.1411 1.00064 33.6147 0 35.2544 0H44.3086C47.0704 0 49.0013 2.73252 48.0789 5.33581L21.8613 79.3358C21.2955 80.9327 19.7851 82 18.091 82H5.89064C3.06548 82 1.13065 79.1507 2.17265 76.5247L31.5364 2.52468Z" fill="#E69D85" fill-opacity="0.78"/>
                <path d="M64.567 2.52468C65.1718 1.00064 66.6454 0 68.285 0H77.3392C80.101 0 82.0319 2.73252 81.1096 5.33581L54.8919 79.3358C54.3262 80.9327 52.8157 82 51.1216 82H38.9212C36.0961 82 34.1613 79.1507 35.2033 76.5247L64.567 2.52468Z" fill="#E69D85" fill-opacity="0.78"/>
                </svg>
                
        </div>
        <div class="title"  data-aos="fade-right"
        data-aos-duration="800">
            <h2>The best shopping site I've tried</h2>
        </div>
        <div class="comment"  data-aos="fade-up"
        data-aos-duration="800">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium quas quisquam non? Quas voluptate nulla minima deleniti optio ullam nesciunt, numquam corporis et asperiores laboriosam sunt, praesentium suscipit blanditiis. Necessitatibus id alias reiciendis, perferendis facere pariatur dolore veniam autem esse non voluptatem saepe provident nihil molestiae.
            </p>
        </div>
        <div class="info"  data-aos="fade-down"
        data-aos-duration="800">
            <img src="images/swap_2.png" data-aos="zoom-out-left" id="person" alt="person">
            <div class="name_loc">
                <p class="name_">Omar Rami</p>
                <p  class="name_ country">JORDAN-AMMAN</p>
            </div>
        </div>
    </div>

        <div class="swap">
            <div class="swap_1 swap_"></div>
            <div class="swap_2 swap_ active_2"></div>
            <div class="swap_3 swap_"></div>
        </div>
        
</div>
</div>


<?php
include ("partials/footer.php");
?>
<script src="js/script.js"></script>
<script>
		var now = <?php echo date("Y-m-d")?>;
		var toDate =  <?php $now= date("Y-m-d")*1000;
		echo date("Y-m-d",strtotime($now.'7 days'));
		?>*1000;
		console.log(toDate);

		var x = setInterval(function()
		{
			now = now+1000;
			var dis = toDate-now;

			var days = Math.floor(dist / (1000 * 60 * 60 * 24));
			var hours = Math.floor((dist % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((dist % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((dist % (1000 * 60)) / 1000);
			console.log(seconds);
		})
</script>
</body>
</html>