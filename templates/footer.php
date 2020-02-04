<div id="footer">
	<div id="pagetop">
		<a href="#abi_page"><img src="<?php echo LOCATION_FILE ?>images/common/ic_scroll.png" alt="Page Top"></a>
	</div>
	<div class="con_footer_t">
		<div class="inner_ft_t">
			<div class="box_left">
				<div class="box_logo">
					<p class="img"><img src="<?php echo LOCATION_FILE ?>images/common/logo_ft.png" alt=""></p>
				</div>
				<div class="box_txt">
					<h5 class="txt_st"><i class="ion-android-wifi"></i> Liên hệ với chúng tôi</h5>
					<p class="txt_add"><i class="ion-ios-location-outline"></i> Address: Van HamLet, Thien TanWard, Vinh Cuu Dist, Dong Nai.</p>
					<p class="txt_hotline"><i class="ion-ios-telephone-outline"></i> Telephone: 061.3927969</p>
					<p class="txt_hotline"><i class="ion-ios-telephone-outline"></i> Fax: 061.3927970</p>
					<p class="txt_zalo"></p>
					<p class="txt_email"><i class="ion-ios-email-outline"></i> Email suport: honaicoop@yahoo.com</p>
					<p class="txt_web"><i class="ion-ios-world-outline"></i> Website: <a href="https://www.http://honaicoop.com">www.honaicoop.com</a></p>
				</div>
			</div>
			<div class="box_right">
				<div class="box_txt_seo">
					<p class="txt">
						Handicraft production and service HoNaico-oprative was established in 2004 and is the member of Viet Nam Co-operative Union and Viet Nam chamber of Commerce and industry (VCCI).We specialize in producing art handicraft products . Which made of : rattan , bamboo , leaves , seagrass , waterhyacinth and poly rattan furnitures indoor and outdoor.
					</p>
				</div>
			</div>
		</div>
	</div><!-- /.con_footer_t -->
	<div class="con_footer_cpr">
		<div class="inner_ft_cpr">
			<div class="box_left">
				<p class="txt">Bản quyền thuộc về <a href="https://www.dhweb.vn">DHweb</a> © <?php echo get_copyright_date('2020'); ?></p>
			</div>
			<div class="box_right">
				<p class="txt">Thiết kế bởi <a href="https://www.facebook.com/maicongngoan91">Mai Công Ngoãn</a></p>
			</div>
		</div>
	</div>
</div><!-- /#footer -->

<?php
// コピーライトの年を返す
function get_copyright_date($then) {
	$now = date('Y');
	if ($then < $now) {
		return $then.'–'.$now;
	} else {
		return $then;
	}
}
?>