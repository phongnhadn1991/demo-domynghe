﻿
/* readyEvent
------------------------------------------------------------------------*/

$(function () {

	$('.js_slider_main').slick({
		dots: false,
		arrows: false,
		fade: false,
		autoplay: true,
		pauseOnHover: false,
		infinite: true,
		speed: 1000,
		autoplaySpeed: 5000,
		lazyLoad: 'ondemand'
	});

	$('.js-inview').on('inview', function (event, isInView) {
		$(this).addClass('js-inview-in');
	});

	// smoothScroll ---------------------------//
	var speed = 1000,
		easing = 'swing',
		pcPosition = -0,
		tabPosition = -0,
		spPosition = -0;

	$('a').not('.noscroll').on('click', function () {
		var href = $(this).attr('href'),
			case1 = href.charAt(0) == '#',
			case2 = location.href.split('#')[0] == href.split('#')[0];
		if (case1 || case2) {
			if (case2)
				href = '#' + href.split('#')[1];

			$target = $(href);

			if ($target.length) {
				$html.add($body).not(':animated').animate({ scrollTop: String($target.offset().top + (abi.pc ? pcPosition : abi.tab ? tabPosition : spPosition)) }, speed, easing);

				return false;
			}
		}
	});

	// outerPageAnchorLink ---------------------------//
	if (window.location.href.split('#')[1] == undefined || window.location.href.split('#')[1].indexOf('=') == -1) {
		var $target = $('#' + window.location.href.split('#')[1]),
			adjust = (abi.pc) ? pcPosition : (abi.tab) ? tabPosition : spPosition;

		if ($target.length) {
			$w.on('load', function () {
				var targetPosition = $target.offset().top;
				$html.add($body).animate({ scrollTop: String(targetPosition + adjust) }, 10);
			});
		}
	}

	/* アコーディオン -----------------------------------------------------*/
	$('.accordion').on('click', function () {
		if (!$(this).is('.sp_only') || $(this).is('.sp_only') && abi.sp) {
			var $next = $(this).next();
			if (!$next.is(':animated')) $next.slideToggle(300).prev().toggleClass('active');
		}
	});

});

// auto height
function matchHeight($o, m) {
	$o.css('height', 'auto')
	var foo_length = $o.length;
	for (var i = 0; i < Math.ceil(foo_length / m); i++) {
		var maxHeight = 0;
		for (var j = 0; j < m; j++) {
			if ($o.eq(i * m + j).height() > maxHeight) {
				maxHeight = $o.eq(i * m + j).height();
			}
		}
		for (var k = 0; k < m; k++) {
			$o.eq(i * m + k).height(maxHeight);
		}
	}
}