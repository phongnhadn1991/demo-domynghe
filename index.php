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
			<div class="c_about margin-pc__bottom--60 margin-sp__bottom--30">
				<div class="container">
					<div class="c_about__wrap">
						<div class="c_about__text">
							<div class="img_title">
								<img src="<?php echo LOCATION_FILE ?>/images/home/typo_about.png" alt="">
							</div>
							<div class="txt">
								<p>Handicraft production and service HoNaico-oprative was established in 2004 and is the member of Viet Nam Co-operative Union and Viet Nam chamber of Commerce and industry (VCCI).We specialize in producing art handicraft products . Which made of : rattan , bamboo , leaves , seagrass , waterhyacinth and poly rattan furnitures indoor and outdoor.</p>
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
			<div class="c_product margin-pc__bottom--40 margin-sp__bottom--20">
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

			<div class="c_news margin-pc__bottom--60 margin-sp__bottom--30">
				<div class="container">
					<h2 class="st_title line center">
						<span class="small">Updated news</span>
						<span class="big">Lates News</span>
					</h2>
					<div class="list_news col_2">
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3"><img src="<?php echo LOCATION_FILE ?>/images/home/img_news1.jpg" alt=""></div>
								</div>
								<div class="item__text">
									<h3>
										<p>Title news info Handicraft production</p>
									</h3>
									<p class="date_post"><i class="ion-android-time"></i> <span>5/2/2020</span></p>
									<p class="txt_des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi consequuntur aspernatur aperiam cum officiis excepturi.</p>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3"><img src="<?php echo LOCATION_FILE ?>/images/home/img_news2.jpg" alt=""></div>
								</div>
								<div class="item__text">
									<h3>
										<p>Title news info Handicraft production</p>
									</h3>
									<p class="date_post"><i class="ion-android-time"></i> <span>5/2/2020</span></p>
									<p class="txt_des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi consequuntur aspernatur aperiam cum officiis excepturi.</p>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3"><img src="<?php echo LOCATION_FILE ?>/images/home/img_news1.jpg" alt=""></div>
								</div>
								<div class="item__text">
									<h3>
										<p>Title news info Handicraft production</p>
									</h3>
									<p class="date_post"><i class="ion-android-time"></i> <span>5/2/2020</span></p>
									<p class="txt_des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi consequuntur aspernatur aperiam cum officiis excepturi.</p>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3"><img src="<?php echo LOCATION_FILE ?>/images/home/img_news2.jpg" alt=""></div>
								</div>
								<div class="item__text">
									<h3>
										<p>Title news info Handicraft production</p>
									</h3>
									<p class="date_post"><i class="ion-android-time"></i> <span>5/2/2020</span></p>
									<p class="txt_des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi consequuntur aspernatur aperiam cum officiis excepturi.</p>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3"><img src="<?php echo LOCATION_FILE ?>/images/home/img_news1.jpg" alt=""></div>
								</div>
								<div class="item__text">
									<h3>
										<p>Title news info Handicraft production</p>
									</h3>
									<p class="date_post"><i class="ion-android-time"></i> <span>5/2/2020</span></p>
									<p class="txt_des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi consequuntur aspernatur aperiam cum officiis excepturi.</p>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<div class="item__thumb">
									<div class="thumb thumb--4x3"><img src="<?php echo LOCATION_FILE ?>/images/home/img_news2.jpg" alt=""></div>
								</div>
								<div class="item__text">
									<h3>
										<p>Title news info Handicraft production</p>
									</h3>
									<p class="date_post"><i class="ion-android-time"></i> <span>5/2/2020</span></p>
									<p class="txt_des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi consequuntur aspernatur aperiam cum officiis excepturi.</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div><!-- /.c_news -->

			<div class="c_partners">
				<div class="container">
					<h2 class="st_title line center">
						<span class="small">Cooperation and development</span>
						<span class="big">Our Partner</span>
					</h2>
					<div class="list_partners">
						<div class="item">
							<div class="item__thumb">
								<div class="thumb thumb--5x3">
									<img src="<?php echo LOCATION_FILE ?>/images/home/img_partner1.png" alt="">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="item__thumb">
								<div class="thumb thumb--5x3">
									<img src="<?php echo LOCATION_FILE ?>/images/home/img_partner2.png" alt="">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="item__thumb">
								<div class="thumb thumb--5x3">
									<img src="<?php echo LOCATION_FILE ?>/images/home/img_partner1.png" alt="">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="item__thumb">
								<div class="thumb thumb--5x3">
									<img src="<?php echo LOCATION_FILE ?>/images/home/img_partner2.png" alt="">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="item__thumb">
								<div class="thumb thumb--5x3">
									<img src="<?php echo LOCATION_FILE ?>/images/home/img_partner1.png" alt="">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="item__thumb">
								<div class="thumb thumb--5x3">
									<img src="<?php echo LOCATION_FILE ?>/images/home/img_partner2.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.c_partners -->
		</div><!-- /#contents -->
		<?php include LOCATION_ROOT_DIR . "/templates/footer.php"; ?>
	</div>
	<!-- #abi_page -->
</body>

</html>