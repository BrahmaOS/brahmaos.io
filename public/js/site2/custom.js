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
	})
	
	autodivheight();
	player.play();
})

/* -----------------------------
Pre Loader
----------------------------- */
$(window).load(function() {
	'use strict';
	$('.loading-icon').delay(500).fadeOut();
	$('#preloader').delay(800).fadeOut('slow');
});


/* ----------------------------- 
Backgroung slider
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
NiceScroll
----------------------------- */	
$(document).ready(function() { 
	'use strict';
    $("html").niceScroll({
		cursorcolor: '#E74C3C',
		cursoropacitymin: '1',
		cursorborder: '0px',
		cursorborderradius: '0px',
		cursorwidth: '5px',
		cursorminheight: 60,
		horizrailenabled: false,
		zindex: 1090
	});
  });




				
/* ----------------------------- 
Card Style Script
----------------------------- */					
$(document).ready(function() {
	'use strict';
	var $el 			= $( '#card-ul' ),
		sectionFeature  = $('#section-feature'),
		baraja 			= $el.baraja();
	
		if ( $(window).width() > 480) {
			sectionFeature.appear(function(){
				baraja.fan({
					speed : 1500,
					easing : 'ease-out',
					range : 100,
					direction : 'right',
					origin : { x : 50, y : 200 },
					center : true
				});
			});
			$('#feature-expand').click(function() {
				baraja.fan({
					speed : 500,
					easing : 'ease-out',
					range : 100,
					direction : 'right',
					origin : { x : 50, y : 200 },
					center : true
				});
			}); 
		} else {
			sectionFeature.appear(function(){
				baraja.fan({
					speed : 1500,
					easing : 'ease-out',
					range : 80,
					direction : 'left',
					origin : { x : 200, y : 50 },
					center : true
				});
			});
			$('#feature-expand').click(function() {
				baraja.fan({
					speed : 500,
					easing : 'ease-out',
					range : 80,
					direction : 'left',
					origin : { x : 200, y : 50 },
					center : true
				});
			});
		}
		
	// Feature navigation
	$('#feature-prev').on( 'click', function( event ) {
		baraja.previous();
	});

	$('#feature-next').on( 'click', function( event ) {
		baraja.next();
	});
	
	// close Features
	$('#feature-close').on( 'click', function( event ) {
		baraja.close();
	});	
});

/* ----------------------------- 
Fitvids init
----------------------------- */
 $(document).ready(function(){
    'use strict';
    $('.video-content').fitVids();
 });


/* ----------------------------- 
IE 9 Placeholder fix
----------------------------- */
$('[placeholder]').focus(function() {
  var input = $(this);
  if (input.val() == input.attr('placeholder')) {
    input.val('');
    input.removeClass('placeholder');
  }
}).blur(function() {
  var input = $(this);
  if (input.val() == '' || input.val() == input.attr('placeholder')) {
    input.addClass('placeholder');
    input.val(input.attr('placeholder'));
  }
}).blur();



/* ----------------------------- 
Screenshot Load
----------------------------- */	
$(document).ready(function() {
	'use strict';
	$('.view-project').on('click', function(e) {
		e.preventDefault();
		
		var href 			= $(this).attr('href') + ' .portfolio-project',
			portfolioWrap	= $('.porfolio-container'),
			contentLoaded 	= $('#portfolio-load'),
			offset			= $('#section-screenshots').offset().top;
		
		portfolioWrap.animate({'left':'-120%'},{duration:400,queue:false});
		portfolioWrap.fadeOut(400);
		$('html, body').animate({scrollTop: offset},{duration:800,queue:true});
		setTimeout(function(){ $('#portfolio-loader').fadeIn('fast'); },300);
		
		setTimeout(function(){
            contentLoaded.load(href, function(){
                $('#portfolio-loader').fadeOut('fast');
                contentLoaded.fadeIn(600).animate({'left':'0'},{duration:800,queue:false});
                $('.back-button').fadeIn(600);
            });
        },400);
		
		
		
	});
	
	$('.backToProject').on('click', function(e){
		e.preventDefault();
		
		var portfolioWrap	= $('.porfolio-container'),
			contentLoaded 	= $('#portfolio-load');
			
		contentLoaded.animate({'left':'105%'},{duration:400,queue:false}).delay(300).fadeOut(400);
        $(this).parent().fadeOut(400);
		setTimeout(function(){
            portfolioWrap.animate({'left':'0'},{duration:400,queue:false});
            portfolioWrap.fadeIn(600);
        },500);
		
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
				
				
/* ----------------------------- 
MailCimp Plugin Script 
----------------------------- */
$(document).ready(function() {
	'use strict';
	$('#subscription-form').ajaxChimp({
		callback: mailchimpCallback,
		url: 'YOUR_URL' /* Replace it with your custom URL inside '' */
	});
	
	function mailchimpCallback(resp) {
		 if(resp.result === 'success') {
			$('.subscription-success')
				.html(resp.msg)
				.delay(500)
				.fadeIn(1000);

			$('.subscription-success').fadeOut(8000);
			
		} else if(resp.result === 'error') {
			$('.subscription-failed')
				.html(resp.msg)
				.delay(500)
				.fadeIn(1000);
				
			$('.subscription-failed').fadeOut(5000);
		}
		$('#subscription-form .input-email').val('');
	};
});

			

/* ----------------------------- 
Contact form
----------------------------- */			
$(document).ready(function() {
	'use strict';
	$('form.contact-form').on('submit', function(e) {
		$.post('contact/contact.php', $(this).serialize(), function(response) {
			if ($('.confirmation p').html() != "") {
				$('.confirmation p').replaceWith('<p><span class="fa fa-check"></span></p>');
			}
			$('.confirmation p').append(response).parent('.confirmation').show();
			$('html, body').animate({
				scrollTop: $('#section-contact').offset().top
				},{duration:800,queue:true});
			$('.form-item').val('');
			setTimeout(function() {
				$('.confirmation').hide();
			}, 8000);
		});
		// disable default action
		e.preventDefault();
	});

});
			
