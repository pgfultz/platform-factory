var miniChatOpen = false;
var serviceNeeded = 'Develop a website or App';
var projectDescribe = '';
var serviceName, serviceEmail, serviceTel = '';

(function ($) {
	"use strict";
	var nav = $('nav');
  var navHeight = nav.outerHeight();
  
  $('.navbar-toggler').on('click', function() {
    if( ! $('#mainNav').hasClass('navbar-reduce')) {
      $('#mainNav').addClass('navbar-reduce');
    }
  })

  // Preloader
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
	  $('.back-to-top').fadeIn('slow');
	  $('.whatsapp-link').css('bottom', '70px');
    } else {
	  $('.back-to-top').fadeOut('slow');
	  $('.whatsapp-link').css('bottom', '20px');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

	/*--/ Star ScrollTop /--*/
	$('.scrolltop-mf').on("click", function () {
		$('html, body').animate({
			scrollTop: 0
		}, 1000);
	});

	/*--/ Star Counter /--*/
	$('.counter').counterUp({
		delay: 15,
		time: 2000
	});

	/*--/ Star Scrolling nav /--*/
	$('a.js-scroll[href*="#"]:not([href="#"])').on("click", function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: (target.offset().top - navHeight + 5)
				}, 1000, "easeInOutExpo");
				return false;
			}
		}
	});

	// Closes responsive menu when a scroll trigger link is clicked
	$('.js-scroll').on("click", function () {
		$('.navbar-collapse').collapse('hide');
	});

	// Activate scrollspy to add active class to navbar items on scroll
	$('body').scrollspy({
		target: '#mainNav',
		offset: navHeight
	});
	/*--/ End Scrolling nav /--*/

	/*--/ Navbar Menu Reduce /--*/
	$(window).trigger('scroll');
	$(window).on('scroll', function () {
		var pixels = 50; 
		var top = 1200;
		if ($(window).scrollTop() > pixels) {
			$('.navbar-expand-md').addClass('navbar-reduce');
			$('.navbar-expand-md').removeClass('navbar-trans');
		} else {
			$('.navbar-expand-md').addClass('navbar-trans');
			$('.navbar-expand-md').removeClass('navbar-reduce');
		}
		if ($(window).scrollTop() > top) {
			$('.scrolltop-mf').fadeIn(1000, "easeInOutExpo");
		} else {
			$('.scrolltop-mf').fadeOut(1000, "easeInOutExpo");
		}
	});

	/*--/ Star Typed /--*/
	if ($('.text-slider').length == 1) {
    var typed_strings = $('.text-slider-items').text();
		var typed = new Typed('.text-slider', {
			strings: typed_strings.split(','),
			typeSpeed: 80,
			loop: true,
			backDelay: 1100,
			backSpeed: 30
		});
	}

	/*--/ Testimonials owl /--*/
	$('#testimonial-mf').owlCarousel({
		margin: 20,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
			}
		}
	});

})(jQuery);


function handleMiniChat(){
	if(miniChatOpen){
		$('.a-mini-chat').css('bottom', '-'+($('.a-mini-chat').height() + 4)+'px');
		miniChatOpen = false;
		$('.btn-open-close-mini-chat').html('<i class="fa fa-chevron-up"></i>');
	}else{
		$('.a-mini-chat').css('bottom', '0');
		miniChatOpen = true;
		$('.btn-open-close-mini-chat').html('<i class="fa fa-chevron-down"></i>');
	}
}

$('input[name="service-needed"]').change(function(e) {
	e.preventDefault();
	serviceNeeded = this.value;
	if(this.value == 'Other'){
		$('#other-service-needed').show();
		$('#other-service-needed').focus();
	}else{
		$('#other-service-needed').hide();
	}
});

function goToStepTwo(){

	if(serviceNeeded == 'Other'){
		if($('#other-service-needed').val() == ''){
			alert('Enter a valid data');
			serviceNeeded = 'Other';
		}else{
			serviceNeeded = $('#other-service-needed').val();
		}
	}

	if(serviceNeeded != 'Other'){
		$('.mini-chat-step1').hide();
		$('.mini-chat-step2').show();
	}
}

function goToStepThree(){

	if($('#service-needed-describe').val() == ''){
		alert('Enter a valid data');
		projectDescribe = '';
	}else{
		projectDescribe = $('#service-needed-describe').val();
	}

	if(projectDescribe != ''){
		$('.mini-chat-step2').hide();
		$('.mini-chat-step3').show();
	}
}

function goToStepFour(){

	let name, email, tel;

	name = $('#name-service-needed').val();
	email = $('#email-service-needed').val();
	tel = $('#tel-service-needed').val();

	if(name == '' || email == '' || tel == ''){
		alert('Fill in all fields');
	}else{
		serviceName = name;
		serviceEmail = email;
		serviceTel = tel;
	
		if(serviceName != '' && serviceEmail != '' && serviceTel != ''){
			$('.mini-chat-step3').hide();
			$('.mini-chat-step4').show();
		}
	}
}

function goToStepFive(){
	
	if(serviceNeeded != '' && projectDescribe != '' && serviceName != '' && serviceEmail != '' && serviceTel != ''){

		var dados = {
			service: serviceNeeded,
			description: projectDescribe,
			clientName: serviceName,
			clientEmail: serviceEmail,
			clientPhone: serviceTel
		};

		$.ajax({
			url: 'sys/book_call.php',
			type: 'POST',
			data: dados,
			dataType: 'JSON',
			success: function(retorno){
				if(retorno[0].status  == "error"){
					alert('An error has occurred!');
				}else{
					var win = window.open('https://calendly.com/c-o-gabriel/30min', '_blank');
					win.focus();
					$('.mini-chat-step4').hide();
					$('.mini-chat-step5').show();
				}
			}
		});

		//$('.mini-chat-step3').hide();
	}else{
		alert('An error has occurred! Reload the page and try again');
	}
}

function backStepMiniChat(step){
	if(step == 1){
		$('.mini-chat-step1').show();
		$('.mini-chat-step2').hide();
		$('.mini-chat-step3').hide();
		$('.mini-chat-step4').hide();
		$('.mini-chat-step5').hide();
	}
	if(step == 2){
		$('.mini-chat-step1').hide();
		$('.mini-chat-step2').show();
		$('.mini-chat-step3').hide();
		$('.mini-chat-step4').hide();
		$('.mini-chat-step5').hide();
	}
	if(step == 3){
		$('.mini-chat-step1').hide();
		$('.mini-chat-step2').hide();
		$('.mini-chat-step3').show();
		$('.mini-chat-step4').hide();
		$('.mini-chat-step5').hide();
	}
	if(step == 4){
		$('.mini-chat-step1').hide();
		$('.mini-chat-step2').hide();
		$('.mini-chat-step3').hide();
		$('.mini-chat-step4').show();
		$('.mini-chat-step5').hide();
	}
}

function handleBookFreeCall(){
	if(serviceNeeded != '' && projectDescribe != '' && serviceName != '' && serviceEmail != '' && serviceTel != ''){
		let urlBookCall = window.open('https://calendly.com/c-o-gabriel/30min', '_blank');
		urlBookCall.focus();
	}else{
		if(miniChatOpen){
			$('.a-mini-chat').css('bottom', '-'+($('.a-mini-chat').height() + 4)+'px');
			miniChatOpen = false;
			$('.btn-open-close-mini-chat').html('<i class="fa fa-chevron-up"></i>');
		}else{
			$('.a-mini-chat').css('bottom', '0');
			miniChatOpen = true;
			$('.btn-open-close-mini-chat').html('<i class="fa fa-chevron-down"></i>');
		}
	}
}

$('#form-contact-us').on('submit', function(e){
	e.preventDefault();

	var dados = {
		name: $('#name_contactus').val(),
		email: $('#email_contactus').val(),
		subject: $('#subject_contactus').val(),
		message: $('#message_contactus').val(),
	};

	$.ajax({
		url: 'sys/sendmessage.php',
		type: 'POST',
		data: dados,
		dataType: 'JSON',
		success: function(retorno){
			if(retorno[0].status  == "error"){
				$('#errormessage').show();
			}else{
				$('#sendmessage').show();
				
				$('#name_contactus').val('');
				$('#email_contactus').val('');
				$('#subject_contactus').val('');
				$('#message_contactus').val('');
			}
		}
	});

});