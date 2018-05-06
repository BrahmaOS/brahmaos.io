$(function(){
	var player = videojs('brahmaos-video');
	player.on('timeupdate', function () {
		// 如果 currentTime() === duration()，则视频已播放完毕
		if (player.duration() !== 0 && player.currentTime() === player.duration()) {
			// 播放结束
			$('#home').css("display", 'flex');
			$('#brahmaos-video').css("display", 'none');
			$('.video-overlay').css("display", 'block');
		}
	});
	
	$('#play-video').click(function(){
		player.play();
		
		$('#home').css("display", 'none');
		$('#brahmaos-video').css("display", 'block');
		$('.video-overlay').css("display", 'none');
		
		player.requestFullscreen();
	});
	
	function autodivheight(){ //函数：获取尺寸
		//获取浏览器窗口高度
		var winHeight, winWidth=0;
		if (window.innerHeight){
			winHeight = window.innerHeight;
			winWidth = window.innerWidth;
		} else if ((document.body) && (document.body.clientHeight))
			winHeight = document.body.clientHeight;
		winWidth = document.body.clientWidth;
		//通过深入Document内部对body进行检测，获取浏览器窗口高度
		if (document.documentElement && document.documentElement.clientHeight)
			winHeight = document.documentElement.clientHeight;
		winWidth = document.documentElement.clientWidth;
		//DIV高度为浏览器窗口的高度
		document.getElementById("header").style.height= winHeight +"px";
		document.getElementById("brahmaos-video").style.width= winWidth +"px";
		player.width(winWidth);
		player.height(winHeight);
	}
	window.onresize=autodivheight; //浏览器窗口发生变化时同时变化DIV高度
	
	// 提交
	$('#submmit').click(function(){
		// email
		var email = $('#email').val();
		var password = $('#password').val();
		var remember = 0;
		if ($('#remember').prop('checked')){
			remember = 1;
		}
		
		var data = {email : email, password: password, remember: remember}
		
		$('#submmit').attr('disabled', 'disabled')
		if (email && password){
			
			$.ajax({
				url: "/sign-in",
				type: 'POST',
				xhrFields: {
					withCredentials: true // 这里设置了withCredentials
				},
				crossDomain: true,
				data: data,
				credentials: 'same-origin',
				success: function(data,status,xhr) {
					xhr.getResponseHeader('Set-Cookie');
					if (data.code !== 0){
						$('#error-message').html(data.msg);
					} else {
						window.location.href = data.data['location'];
					}
					$('#submmit').attr('disabled', false)
				},
				error: function(err) {
					console.error(err)
				}
			})
			
			// $.post('/api/sign-in',data , function(data){
			// 	if (data.code !== 0){
			// 		$('#error-message').html(data.msg);
			// 	} else {
			// 		window.location.href = data.data['location'];
			//    }
			// });
		}
	});
	
	// os-demand
	$('.os-demand').click(function () {
		var select = $('.os-demand-select');
		var src = select.children('img:first-of-type').attr('src').replace('-select', '');
		select.children('img:first-of-type').attr('src',src);
		
		select.removeClass('os-demand-select');
		
		$(this).addClass('os-demand-select');
		src = $(this).children('img:first-of-type').attr('src').replace('.png', '');
		$(this).children('img:first-of-type').attr('src', src + '-select.png');
	});
	
	autodivheight();
	
	
	function is_mobile() {
		var regex_match = /(nokia|iphone|android|motorola|^mot-|softbank|foma|docomo|kddi|up.browser|up.link|htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte-|longcos|pantech|gionee|^sie-|portalmmm|jigs browser|hiptop|^benq|haier|^lct|operas*mobi|opera*mini|320x320|240x320|176x220)/i;
		var u = navigator.userAgent;
		if (null == u) {
			return true;
		}
		var result = regex_match.exec(u);
		
		if (null == result) {
			return false
		} else {
			return true
		}
	}
	
	if(!is_mobile()){
		player.play();
	}
});

/* -----------------------------
Pre Loader
----------------------------- */
$(window).load(function() {
	'use strict';
	$('.loading-icon').delay(500).fadeOut();
	$('#preloader').delay(800).fadeOut('slow');
});



/* -----------------------------
round Animation
----------------------------- */
$(window).ready(function() {
	'use strict';
	$.vegas('slideshow', {
		loop: false,
		backgrounds:[
			{ src:'/images/site2/bg-slider/v2.jpeg', fade:1000, zindex: -10 }
	  	]
	});
});
/* ----------------------------- 
Backgroung slider
----------------------------- */
// $(window).ready(function() {
// 	'use strict';
// 	var animation = ['wobble', 'tada', 'rubberBand', 'bounce', 'hingle'];
//
//
// 	$('.round-animated').mouseenter(function() {
// 		var element = $(this);
// 		var random = Math.floor(Math.random() * animation.length);
// 		element.addClass('animated');
// 		element.addClass(animation[random]);
// 		element.mouseleave(function(){
// 			element.removeClass(animation[random])
// 			element.removeClass('animated')
// 		});
// 	});
//
//
// });



/* -----------------------------
Scroll into viewPort Animation
----------------------------- */
$(document).ready(function() {	
	'use strict';
	$('.animated').appear(function() {
		var element = $(this),
			animation = element.data('animation'),
			animationDelay = element.data('animation-delay');
			if ( animationDelay ) {

				setTimeout(function(){
					element.addClass( animation + " visible");
				}, animationDelay);

			} else {
				element.addClass( animation + " visible");
			}
	});
});

/* -----------------------------
BxSlider
----------------------------- */
$(document).ready(function() {
	'use strict';
	$('.testimonial-slider').bxSlider({
		pagerCustom: '#bx-pager',
		pager: true,
		touchEnabled: true,
		controls: false
	});
});

				
/* ----------------------------- 
Main navigation
----------------------------- */
$(document).ready(function() {
	'use strict';
	$('.nav').onePageNav({
		currentClass: 'current',
		scrollSpeed: 1000,
		easing: 'easeInOutQuint'
	});
	$(window).bind('scroll', function(e) {
		var scrollPos = $(window).scrollTop();
		scrollPos > 220 ? $('.sticky-section').addClass('nav-bg') : $('.sticky-section').removeClass('nav-bg');
	});
});