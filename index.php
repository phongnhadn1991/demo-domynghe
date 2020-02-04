<?php
$page = 'homepage';
include __DIR__ . "/config/include.php";
?>
<!-- *** stylesheet *** -->
<?php include LOCATION_ROOT_DIR . "/templates/common_css.php"; ?>
<link href="<?php echo echo_version(LOCATION_FILE . 'css/homepage.css', LOCATION_FILE_DIR); ?>" rel="stylesheet" media="all">
<!-- *** javascript *** -->
<?php include LOCATION_ROOT_DIR . "/templates/common_js.php"; ?>
<script src="<?php echo echo_version(LOCATION_FILE . 'js/homepage.min.js', LOCATION_FILE_DIR); ?>"></script>
</head>

<body id="<?php echo $page; ?>">
	<div id="abi_page">
		<?php include LOCATION_ROOT_DIR . "/templates/header.php"; ?>
		<div id="contents">
			<div class="c_slider">
				<div class="box_slider js_slider_main">
					<div class="box">
						<img data-lazy="<?php echo LOCATION_FILE ?>/images/home-slider-1.jpg" alt="images">
					</div>
					<div class="box">
						<img data-lazy="<?php echo LOCATION_FILE ?>/images/home-slider-1.jpg" alt="images">
					</div>
				</div>
			</div><!-- /.c_slider -->
			<div class="c_about">
				<div class="container">
					<div class="c_about__wrap">
						<div class="c_about__text">
							<div class="img_title">
								<img src="<?php echo LOCATION_FILE ?>/images/home/typo_about.png" alt="">
							</div>
							<div class="txt">
								<p>Lấy cảm hứng từ mong muốn mang đến những sản phẩm mang tính độc đáo cho ngôi nhà của bạn. NGÔI NHÀ ĐÔI đã và đang nỗ lực không ngừng nhằm đưa đến tay khách hàng những sản phẩm thật sự độc đáo đầy tính thân thiện cho không gian sống của bạn thêm phong phú. Đến với NGÔI NHÀ ĐÔI chúng tôi cam kết chất lượng sản phẩm cùng sự thỏa mãn của khách hàng là mục tiêu hàng đầu của chúng tôi.</p>
							</div>
							<div class="btn_group">
								<a href="#" class="btn btn__basic">View more</a>
							</div>
						</div>
						<div class="c_about__thumb">
							<img src="<?php echo LOCATION_FILE ?>/images/home/img_about.jpg" alt="">
						</div>
					</div>
				</div>
			</div><!-- /.c_about -->
			<div class="c_product">
				<div class="container">
					<h2 class="st_title line center">
						<span class="small">The best products</span>
						<span class="big">Featured Products</span>
					</h2>
					<div class="list_product col_3">
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3">
										<img src="<?php echo LOCATION_FILE ?>/images/home/img_pro1.jpg" alt="">
									</div>
								</div>
								<div class="item__text">
									<h4 class="text_title">
										<p>Outdoor furniture-dining set</p>
									</h4>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3">
										<img src="<?php echo LOCATION_FILE ?>/images/home/img_pro2.jpg" alt="">
									</div>
								</div>
								<div class="item__text">
									<h4 class="text_title">
										<p>Outdoor furniture-sofa set</p>
									</h4>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3">
										<img src="<?php echo LOCATION_FILE ?>/images/home/img_pro3.jpg" alt="">
									</div>
								</div>
								<div class="item__text">
									<h4 class="text_title">
										<p>Poly Basket & Poly Storage</p>
									</h4>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3">
										<img src="<?php echo LOCATION_FILE ?>/images/home/img_pro4.jpg" alt="">
									</div>
								</div>
								<div class="item__text">
									<h4 class="text_title">
										<p>Natural Accessories</p>
									</h4>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3">
										<img src="<?php echo LOCATION_FILE ?>/images/home/img_pro5.jpg" alt="">
									</div>
								</div>
								<div class="item__text">
									<h4 class="text_title">
										<p>Poly Basket & Poly Storage</p>
									</h4>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3">
										<img src="<?php echo LOCATION_FILE ?>/images/home/img_pro6.jpg" alt="">
									</div>
								</div>
								<div class="item__text">
									<h4 class="text_title">
										<p>Water hyacinth furnitures</p>
									</h4>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3">
										<img src="<?php echo LOCATION_FILE ?>/images/home/img_pro6.jpg" alt="">
									</div>
								</div>
								<div class="item__text">
									<h4 class="text_title">
										<p>Water hyacinth furnitures</p>
									</h4>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3">
										<img src="<?php echo LOCATION_FILE ?>/images/home/img_pro6.jpg" alt="">
									</div>
								</div>
								<div class="item__text">
									<h4 class="text_title">
										<p>Water hyacinth furnitures</p>
									</h4>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3">
										<img src="<?php echo LOCATION_FILE ?>/images/home/img_pro6.jpg" alt="">
									</div>
								</div>
								<div class="item__text">
									<h4 class="text_title">
										<p>Water hyacinth furnitures</p>
									</h4>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div><!-- /.c_product -->
		</div><!-- /#contents -->
		<?php include LOCATION_ROOT_DIR . "/templates/footer.php"; ?>
	</div>
	<!-- #abi_page -->
</body>

</html>