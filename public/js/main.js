(function ($) {
	"use strict";

/*=============================================
	=    		 Preloader			      =
=============================================*/
function preloader() {
	$('#preloader').delay(0).fadeOut();
};

$(window).on('load', function () {
	preloader();
	mainSlider();
	aosAnimation();
	wowAnimation();
});



/*=============================================
	=    		Mobile Menu			      =
=============================================*/
//SubMenu Dropdown Toggle
if ($('.menu-area li.dropdown ul').length) {
	$('.menu-area .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');

}

//Mobile Nav Hide Show
if ($('.mobile-menu').length) {

	var mobileMenuContent = $('.menu-area .main-menu').html();
	$('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);

	//Dropdown Button
	$('.mobile-menu li.dropdown .dropdown-btn').on('click', function () {
		$(this).toggleClass('open');
		$(this).prev('ul').slideToggle(500);
	});
	//Menu Toggle Btn
	$('.mobile-nav-toggler').on('click', function () {
		$('body').addClass('mobile-menu-visible');
	});

	//Menu Toggle Btn
	$('.mobile-menu .menu-backdrop,.mobile-menu .close-btn, .submenu li, .navigation li').on('click', function () {
		$('body').removeClass('mobile-menu-visible');
	});
}


/*=============================================
	=    	   Data Background  	         =
=============================================*/
$("[data-background]").each(function () {
	$(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
})


/*=============================================
	=     Menu sticky & Scroll to top      =
=============================================*/
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 245) {
		$("#sticky-header").removeClass("sticky-menu");
		$('.scroll-to-target').removeClass('open');

	} else {
		$("#sticky-header").addClass("sticky-menu");
		$('.scroll-to-target').addClass('open');
	}
});


/*=============================================
	=    		 Scroll Up  	         =
=============================================*/
if ($('.scroll-to-target').length) {
  $(".scroll-to-target").on('click', function () {
    var target = $(this).attr('data-target');
    // animate
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 1000);

  });
}



/*=============================================
	=    		 Main Slider		      =
=============================================*/
function mainSlider() {
	var BasicSlider = $('.slider-active');
	BasicSlider.on('init', function (e, slick) {
		var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
		doAnimations($firstAnimatingElements);
	});
	BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
		var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
		doAnimations($animatingElements);
	});
	BasicSlider.slick({
		autoplay: true,
		autoplaySpeed: 5000,
		dots: false,
		fade: true,
		arrows: false,
		responsive: [
			{ breakpoint: 767, settings: { dots: false, arrows: false } }
		]
	});

	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function () {
			var $this = $(this);
			var $animationDelay = $this.data('delay');
			var $animationType = 'animated ' + $this.data('animation');
			$this.css({
				'animation-delay': $animationDelay,
				'-webkit-animation-delay': $animationDelay
			});
			$this.addClass($animationType).one(animationEndEvents, function () {
				$this.removeClass($animationType);
			});
		});
	}
}


/*=============================================
	=    		 Accordion			      =
=============================================*/
$(function () {
	$("#accordion").accordion();
});


/*=============================================
	=    		Top Selling Active		     =
=============================================*/
$('.plant-active').owlCarousel({
	loop: true,
	margin: 0,
	items: 1,
	autoplay: true,
	autoplayTimeout: 2000,
	autoplaySpeed: 1000,
	navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
	nav: false,
	animateOut: 'fadeOut',
	autoplayHoverPause: true,
	mouseDrag: false,
	dots: false,
})


/*=============================================
	=    		Project Active		      =
=============================================*/
$('.project-active').slick({
	dots: true,
	infinite: true,
	speed: 1000,
	autoplay: true,
	arrows: false,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});


/*=============================================
	=    		Project Active		      =
=============================================*/
$('.related-project-active').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: true,
	arrows: false,
	slidesToShow: 3,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});


/*=============================================
	=          New Project Active           =
=============================================*/
$('.new-project-active').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: true,
	arrows: false,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});


/*=============================================
	=    		Brand Active		      =
=============================================*/
$('.brand-active').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: true,
	arrows: false,
	slidesToShow: 6,
	slidesToScroll: 2,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});


/*=============================================
	=    		Testimonial Active		    =
=============================================*/
$('.testimonial-active').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: true,
	arrows: false,
	slidesToShow: 2,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});


/*=============================================
	=       New Testimonial Active        =
=============================================*/
$('.new-testimonial-active').slick({
	dots: true,
	infinite: true,
	speed: 2000,
	autoplay: true,
	arrows: false,
	slidesToShow: 1,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});


/*=============================================
	=    		 Product  Active		     =
=============================================*/
$('.related-product-active').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: false,
	arrows: true,
	slidesToShow: 3,
	slidesToScroll: 1,
	prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
	nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});


/*=============================================
	=    	Shop Details Active  	       =
=============================================*/
$('.shop-details-active').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	dots: false,
	fade: true,
	asNavFor: '.shop-details-nav'
});
$('.shop-details-nav').slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	asNavFor: '.shop-details-active',
	arrows: false,
	dots: false,
	centerMode: true,
	centerPadding: '0px',
	focusOnSelect: true,
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: false,
			}
		},
	]
});


/*=============================================
	=    		Odometer Active  	       =
=============================================*/
$('.odometer').appear(function (e) {
	var odo = $(".odometer");
	odo.each(function () {
		var countNumber = $(this).attr("data-count");
		$(this).html(countNumber);
	});
});


/*=============================================
	=    		Magnific Popup		      =
=============================================*/
$('.popup-image').magnificPopup({
	type: 'image',
	gallery: {
		enabled: true
	}
});

/* magnificPopup video view */
$('.popup-video').magnificPopup({
	type: 'iframe'
});


/*=============================================
	=    		Isotope	Active  	      =
=============================================*/
$('.h-product-active,.shop-banner-active').imagesLoaded(function () {
	// init Isotope
	var $grid = $('.h-product-active,.shop-banner-active').isotope({
		itemSelector: '.grid-item',
		percentPosition: true,
		masonry: {
			columnWidth: '.grid-sizer',
		}
	});
	// filter items on button click
	$('.product-menu').on('click', 'button', function () {
		var filterValue = $(this).attr('data-filter');
		$grid.isotope({ filter: filterValue });
	});

});
//for menu active class
$('.product-menu button,.product-weight ul li').on('click', function (event) {
	$(this).siblings('.active').removeClass('active');
	$(this).addClass('active');
	event.preventDefault();
});


/*=============================================
	=    		 Aos Active  	         =
=============================================*/
function aosAnimation() {
	AOS.init({
		duration: 1000,
		mirror: true,
		once: true,
		disable: 'mobile',
	});
}


/*=============================================
	=    	  Countdown Active  	         =
=============================================*/
$('[data-countdown]').each(function () {
	var $this = $(this), finalDate = $(this).data('countdown');
	$this.countdown(finalDate, function (event) {
		$this.html(event.strftime('<div class="time-count"><span>%D</span>Days</div>'));
	});
});



/*=============================================
	=    	   Paroller Active  	         =
=============================================*/
if ($('.paroller').length) {
	$('.paroller').paroller();
}



/*=============================================
	=    	   Toggle Active  	         =
=============================================*/
$('.cat-toggle').on('click', function () {
	$('.category-menu').slideToggle(500);
	return false;
});




/*=============================================
	=    		 Cart Active  	         =
=============================================*/
$(".cart-plus-minus").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
$(".qtybutton").on("click", function () {
	var $button = $(this);
	var oldValue = $button.parent().find("input").val();
	if ($button.text() == "+") {
		var newVal = parseFloat(oldValue) + 1;
	} else {
		// Don't allow decrementing below zero
		if (oldValue > 0) {
			var newVal = parseFloat(oldValue) - 1;
		} else {
			newVal = 0;
		}
	}
	$button.parent().find("input").val(newVal);
});



/*=============================================
	=    		 Wow Active  	         =
=============================================*/
function wowAnimation() {
	var wow = new WOW({
		boxClass: 'wow',
		animateClass: 'animated',
		offset: 0,
		mobile: false,
		live: true
	});
	wow.init();
}


})(jQuery);

// blog js

$('.blog-active').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: false,
	arrows: true,
	slidesToShow: 4,
	slidesToScroll: 1,
	prevArrow: '<i class="fas fa-angle-left"></i>',
	nextArrow: '<i class="fas fa-angle-right"></i>',
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
			}
		},
	]
});


// ---------blog-subpage-----

function myFunction1() {
  var dots = document.getElementById("dots1");
  var moreText = document.getElementById("more1");
  var btnText = document.getElementById("myBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
function myFunction2() {
	var dots = document.getElementById("dots2");
	var moreText = document.getElementById("more2");
	var btnText = document.getElementById("myBtn2");
  
	if (dots.style.display === "none") {
	  dots.style.display = "inline";
	  btnText.innerHTML = "Read more"; 
	  moreText.style.display = "none";
	} else {
	  dots.style.display = "none";
	  btnText.innerHTML = "Read less"; 
	  moreText.style.display = "inline";
	}
  }
  function myFunction3() {
	var dots = document.getElementById("dots3");
	var moreText = document.getElementById("more3");
	var btnText = document.getElementById("myBtn3");
  
	if (dots.style.display === "none") {
	  dots.style.display = "inline";
	  btnText.innerHTML = "Read more"; 
	  moreText.style.display = "none";
	} else {
	  dots.style.display = "none";
	  btnText.innerHTML = "Read less"; 
	  moreText.style.display = "inline";
	}
  }
  function myFunction4() {
	var dots = document.getElementById("dots4");
	var moreText = document.getElementById("more4");
	var btnText = document.getElementById("myBtn4");
  
	if (dots.style.display === "none") {
	  dots.style.display = "inline";
	  btnText.innerHTML = "Read more"; 
	  moreText.style.display = "none";
	} else {
	  dots.style.display = "none";
	  btnText.innerHTML = "Read less"; 
	  moreText.style.display = "inline";
	}
  }
  function myFunction5() {
	var dots = document.getElementById("dots5");
	var moreText = document.getElementById("more5");
	var btnText = document.getElementById("myBtn5");
  
	if (dots.style.display === "none") {
	  dots.style.display = "inline";
	  btnText.innerHTML = "Read more"; 
	  moreText.style.display = "none";
	} else {
	  dots.style.display = "none";
	  btnText.innerHTML = "Read less"; 
	  moreText.style.display = "inline";
	}
  }
  function myFunction6() {
	var dots = document.getElementById("dots6");
	var moreText = document.getElementById("more6");
	var btnText = document.getElementById("myBtn6");
  
	if (dots.style.display === "none") {
	  dots.style.display = "inline";
	  btnText.innerHTML = "Read more"; 
	  moreText.style.display = "none";
	} else {
	  dots.style.display = "none";
	  btnText.innerHTML = "Read less"; 
	  moreText.style.display = "inline";
	}
  }
  function myFunction7() {
	var dots = document.getElementById("dots7");
	var moreText = document.getElementById("more7");
	var btnText = document.getElementById("myBtn7");
  
	if (dots.style.display === "none") {
	  dots.style.display = "inline";
	  btnText.innerHTML = "Read more"; 
	  moreText.style.display = "none";
	} else {
	  dots.style.display = "none";
	  btnText.innerHTML = "Read less"; 
	  moreText.style.display = "inline";
	}
  }

// end blog js


// product js

    $('.product-active').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	autoplay: false,
	arrows: true,
	slidesToShow: 4,
	slidesToScroll: 1,
	prevArrow: '<i class="fas fa-angle-left"></i>',
	nextArrow: '<i class="fas fa-angle-right"></i>',
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
			}
		},
	]
});

// end product js
// -------------testimonial modal form-js Mona-------------//

// ------------Mobile number-js----------------//
$(function () {
	$("#txtnum").keypress(function (e) {
		var keyCode = e.keyCode || e.which;

		$("#lblError").html("");

		//Regex for Valid Characters i.e. Numbers.
		var regex = /^[0-9]+$/;

		//Validate TextBox value against the Regex.
		var isValid = regex.test(String.fromCharCode(keyCode));
		if (!isValid) {
			$("#lblError").html("Only Numbers allowed.");
		}

		return isValid;
	});
});

// ----------------------name-js-----------------------//
$(function () {
	$("#txtname").keypress(function (e) {
		var keyCode = e.keyCode || e.which;

		$("#lblError1").html("");

		//Regex for Valid Characters i.e. Numbers.
		var regex = /^[A-Za-z]+$/;

		//Validate TextBox value against the Regex.
		var isValid = regex.test(String.fromCharCode(keyCode));
		if (!isValid) {
			$("#lblError1").html("Only Characters allowed.");
		}

		return isValid;
	});
});


// =====================
function inVisible(element) {
	//Checking if the element is
	//visible in the viewport
	var WindowTop = $(window).scrollTop();
	var WindowBottom = WindowTop + $(window).height();
	var ElementTop = element.offset().top;
	var ElementBottom = ElementTop + element.height();
	//animating the element if it is
	//visible in the viewport
	if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop)
	  animate(element);
  }
  
  function animate(element) {
	//Animating the element if not animated before
	if (!element.hasClass('ms-animated')) {
	  var maxval = element.data('max');
	  var html = element.html();
	  element.addClass("ms-animated");
	  $({
		countNum: element.html()
	  }).animate({
		countNum: maxval
	  }, {
		//duration 5 seconds
		duration: 5000,
		easing: 'linear',
		step: function() {
		  element.html(Math.floor(this.countNum) + html);
		},
		complete: function() {
		  element.html(this.countNum + html);
		}
	  });
	}
  
  }
  
  //When the document is ready
  $(function() {
	//This is triggered when the
	//user scrolls the page
	$(window).scroll(function() {
	  //Checking if each items to animate are 
	  //visible in the viewport
	  $("p[data-max]").each(function() {
		inVisible($(this));
	  });
	})
  });

// ------------Mobile number-js----------------//
$(function () {
	$(".txtnum1").keypress(function (e) {
		var keyCode = e.keyCode || e.which;

		$("#lblError").html("");

		//Regex for Valid Characters i.e. Numbers.
		var regex = /^[0-9]+$/;

		//Validate TextBox value against the Regex.
		var isValid = regex.test(String.fromCharCode(keyCode));
		if (!isValid) {
			$("#lblError").html("Only Numbers allowed.");
		}

		return isValid;
	});
});

// ----------------------name-js-----------------------//
$(function () {
	$(".txtname1").keypress(function (e) {
		var keyCode = e.keyCode || e.which;

		$("#lblError1").html("");

		//Regex for Valid Characters i.e. Numbers.
		var regex = /^[A-Za-z]+$/;

		//Validate TextBox value against the Regex.
		var isValid = regex.test(String.fromCharCode(keyCode));
		if (!isValid) {
			$("#lblError1").html("Only Characters allowed.");
		}

		return isValid;
	});
});
