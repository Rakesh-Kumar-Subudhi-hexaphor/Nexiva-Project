/***************************************************
==================== JS INDEX ======================
	Preloader activation
	Mobile Menu Js
	Mobile Menu-2 Js
	Sidebar Toggle
	Body overlay Js
	Search form Js
	Sticky Header Js
	Data Css js
	Nice Select Js
	Hero active  Js
	Masonary Js
	MagnificPopup
	Wow Js
	Counter Js
	Parallax Js
	Case Study Slider Js
	Case Study-2 Slider Js
	Portfolio Slider Js
	Testimonial Slider Js
	Testimonial-2 Slider Js
	Testimonial-3 Slider Js
	Service Slider Js
	Brand Slider Js
	Brand-2 Slider Js

	---- Updated Js List -------
	Sticky Header Js
	Nice Select Js
	Search form Js
	Hero active Js
	Update Testimonial Js
	Update Team Js
	Update Team Js 3
	Update Testimonial 2 Js
	Services Details Circle Js
	menu-last js
	Hero five contact form activation
	Brand Four Js
	Brand Five Js
	location-item Map Js
	related post js
	
****************************************************/

"use strict";
var windowOn = $(window);

// ================ SMOOTH SCROLL FIX ================
// Add 'is-scrolling' class during scroll to disable animations
let isScrollingTimer;
windowOn.on('scroll', function () {
	// Add class to disable animations during scroll
	$('body').addClass('is-scrolling');

	// Clear previous timer
	clearTimeout(isScrollingTimer);

	// Remove class after scrolling stops
	isScrollingTimer = setTimeout(function () {
		$('body').removeClass('is-scrolling');
	}, 150);
});

// Optional: Improve WOW.js initialization to prevent conflicts
$(window).on('load', function () {
	// Initialize WOW.js with better settings
	if (typeof WOW !== 'undefined') {
		new WOW({
			mobile: false, // Disable animations on mobile
			offset: 100, // Trigger animations earlier
			live: false, // Don't watch for new elements (better performance)
			scrollContainer: null,
			resetAnimation: false // Don't reset on scroll back
		}).init();
	}
});

// Force smooth scroll behavior
$(document).ready(function () {
	// Ensure smooth scroll is enabled
	$('html').css('scroll-behavior', 'smooth');

	// Fix for anchor links with smooth scrolling
	$('a[href^="#"]').on('click', function (e) {
		if (this.hash !== "") {
			e.preventDefault();

			const hash = this.hash;
			const target = $(hash);
			const headerHeight = $('#header-sticky').outerHeight() || 100;

			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top - headerHeight
				}, 800, 'swing');

				// Add hash to URL without jumping
				if (history.pushState) {
					history.pushState(null, null, hash);
				} else {
					location.hash = hash;
				}
			}
		}
	});
});
// ================ END SMOOTH SCROLL FIX ================






window.addEventListener('load', function () {
	// Get the preloader element
	const preloader = document.querySelector('.preloader');

	// Add 'loaded' class to trigger fade-out
	if (preloader) {
		preloader.classList.add('loaded');

		// Remove preloader from DOM after fade completes
		setTimeout(function () {
			preloader.style.display = 'none';
		}, 500); // Match this with CSS transition duration
	}
});


(function ($) {
	"use strict";
	var windowOn = $(window);

	//Preloader activation
	$(window).on('load', function (event) {
		$('.preloader').delay(500).fadeOut(500);
	});

	// Mobile Menu Js
	$('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "991",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	});

	// Mobile Menu-2 Js
	$('#mobile-menu-2').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "991",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	});

	// Sidebar Toggle
	$(".offcanvas__close,.offcanvas-overlay").on("click", function () {
		$(".offcanvas__info").removeClass("info-open");
		$(".offcanvas-overlay").removeClass("overlay-open");
	});
	$(".sidebar__toggle").on("click", function () {
		$(".offcanvas__info").addClass("info-open");
		$(".offcanvas-overlay").addClass("overlay-open");
	});

	// Body overlay Js
	$(".body-overlay").on("click", function () {
		$(".offcanvas__area").removeClass("opened");
		$(".body-overlay").removeClass("opened");
	});

	// Search form Js
	$(".search__toggle").on("click", function () {
		$(".search__button").toggleClass("search__open");
	});
	$("body > *:not(header)").on("click", function () {
		$(".search__button").removeClass("search__open");
	});

	// Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 100) {
			$("#header-sticky").removeClass("sticky");
		} else {
			$("#header-sticky").addClass("sticky");
		}
	});

	// Data Css js
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});

	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));
	});

	//  Hero active Js
	if (jQuery(".hero__active").length > 0) {
		let sliderActive1 = ".hero__active";
		let sliderInit1 = new Swiper(sliderActive1, {
			// Optional parameters
			slidesPerView: 1,
			slidesPerColumn: 1,
			paginationClickable: true,
			loop: true,
			effect: 'fade',
			autoplay: {
				delay: 5000,
			},
			// If we need pagination
			pagination: {
				el: ".banner-pagination-1",
				// dynamicBullets: true,
				clickable: true,
			},
			// Navigation arrows
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			a11y: false,
		});

		function animated_swiper(selector, init) {
			let animated = function animated() {
				$(selector + " [data-animation]").each(function () {
					let anim = $(this).data("animation");
					let delay = $(this).data("delay");
					let duration = $(this).data("duration");

					$(this)
						.removeClass("anim" + anim)
						.addClass(anim + " animated")
						.css({
							webkitAnimationDelay: delay,
							animationDelay: delay,
							webkitAnimationDuration: duration,
							animationDuration: duration,
						})
						.one(
							"webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
							function () {
								$(this).removeClass(anim + " animated");
							}
						);
				});
			};
			animated();
			// Make animated when slide change
			init.on("slideChange", function () {
				$(sliderActive1 + " [data-animation]").removeClass("animated");
			});
			init.on("slideChange", animated);
		}

		animated_swiper(sliderActive1, sliderInit1);
	}

	// Masonary Js
	$('.grid').imagesLoaded(function () {
		// init Isotope
		var $grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: '.grid-item',
			}
		});

		// filter items on button click
		$('.case__filter-button').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});

		//for menu active class
		$('.case__filter-button button').on('click', function (event) {
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});

	});

	// MagnificPopup image view
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	// MagnificPopup video view
	$(".popup-video").magnificPopup({
		type: "iframe",
	});

	//  Wow Js
	new WOW().init();

	//  Counter Js
	$('.counter, .about4-counter-number').counterUp({
		delay: 10,
		time: 1000
	});

	//  Parallax Js
	if ($('.scene').length > 0) {
		$('.scene').parallax({
			scalarX: 10.0,
			scalarY: 15.0,
		});
	};

	// Case Study Slider Js
	var CaseStudy = new Swiper('.case-study-active', {
		spaceBetween: 30,
		slideToClickedSlide: true,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		pagination: {
			el: ".Case-pagination",
			clickable: true,
			renderBullet: function (index, className) {
				return '<span class="' + className + '">' + '<button>' + (index + 1) + '</button>' + "</span>";
			},
		},
		navigation: {
			nextEl: ".case-study-button-next",
			prevEl: ".case-study-button-prev",
		},
		breakpoints: {
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	})


	// Case Study-2 Slider Js
	var caseStudy = new Swiper('.case-study__active-2', {
		slidesPerView: 4,
		spaceBetween: 30,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		scrollbar: {
			el: '.swiper-scrollbar',
			dynamicBullets: true,
			hide: false,
		},
		navigation: {
			nextEl: ".portfolio__button-next",
			prevEl: ".portfolio__button-prev",
		},
		observer: true,
		observeParents: true,
		breakpoints: {
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	// Portfolio Slider Js
	var portfolio = new Swiper('.portfolio__slider-active', {
		slidesPerView: 3,
		spaceBetween: 50,
		loop: true,
		observer: true,
		observeParents: true,
		autoplay: {
			delay: 3000,
		},
		// If we need pagination
		pagination: {
			el: ".portfolio__pagination",
			clickable: true,
		},
		// If we need navigation
		navigation: {
			nextEl: ".portfolio__button-next-2",
			prevEl: ".portfolio__button-prev-2",
		},
		breakpoints: {
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
				spaceBetween: 30,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	// Testimonial Slider Js
	var testimonial = new Swiper('.testimonial__active', {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		centeredSlides: true,
		roundLengths: true,
		autoplay: {
			delay: 3000,
		},
		navigation: {
			nextEl: ".testimonial__button-next",
			prevEl: ".testimonial__button-prev",
		},
		breakpoints: {
			'1400': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
				centeredSlides: false,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	// Testimonial-2 Slider Js
	var testimonial2 = new Swiper('.testimonial__active-2', {
		slidesPerView: 3,
		spaceBetween: 30,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		navigation: {
			nextEl: ".testimonial__button-next",
			prevEl: ".testimonial__button-prev",
		},
		breakpoints: {
			'1400': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	// Testimonial-3 Slider Js
	var testimonial3 = new Swiper('.testimonial__active-3', {
		slidesPerView: 3,
		spaceBetween: 30,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		navigation: {
			nextEl: ".testimonial__button-next-2",
			prevEl: ".testimonial__button-prev-2",
		},
		breakpoints: {
			'1400': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	// Service Slider Js
	var services = new Swiper('.services__slider-active', {
		slidesPerView: 4,
		spaceBetween: 100,
		centeredSlides: true,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		navigation: {
			nextEl: ".services-button-next",
			prevEl: ".services-button-prev",
		},
		breakpoints: {
			'1920': {
				slidesPerView: 4,
			},
			'1400': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	// Brand Slider Js

	// Brand-2 Slider Js
	var brandTwo = new Swiper('.brand__active-2', {
		slidesPerView: 5,
		spaceBetween: 50,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		breakpoints: {
			'1400': {
				slidesPerView: 5,
			},
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 2,
			},
			'570': {
				slidesPerView: 3,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	/* ------------ Updated Js List ----------------------- */
	// Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 100) {
			$("#bd-ud-header-sticky").removeClass("bd-ud-sticky");
		} else {
			$("#bd-ud-header-sticky").addClass("bd-ud-sticky");
		}
	});

	windowOn.on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 100) {
			$("#header-sticky").removeClass("bd-ud-sticky-2");
		} else {
			$("#header-sticky").addClass("bd-ud-sticky-2");
		}
	});

	// Nice Select Js 
	$('select').niceSelect();

	// Search form Js
	$(".bd-ud-search__toggle").on("click", function () {
		$(".bd-ud-search__button").toggleClass("search__open");
	});
	$("body > *:not(header)").on("click", function () {
		$(".bd-ud-search__button").removeClass("search__open");
	});

	//  Hero active Js
	if (jQuery(".hero-active-three").length > 0) {
		let sliderActive1 = '.hero-active-three';
		let sliderInit1 = new Swiper(sliderActive1, {
			// Optional parameters
			slidesPerView: 1,
			slidesPerColumn: 1,
			speed: 3000,
			effect: "fade",

			paginationClickable: true,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			pagination: {
				el: ".slider-paginations",
				clickable: true,
				renderBullet: function (index, className) {
					return '<span class="' + className + '">0' + (index + 1) + "</span>";
				}
			},

			a11y: false
		});
	}

	if (jQuery(".hero-active-four").length > 0) {
		let sliderActive2 = '.hero-active-four';
		let sliderInit2 = new Swiper(sliderActive2, {
			// Optional parameters
			slidesPerView: 1,
			slidesPerColumn: 1,
			speed: 3000,
			effect: "fade",
			paginationClickable: true,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			pagination: {
				el: ".slider-paginations",
				clickable: true,
			},
			a11y: false
		});
	}

	// Update Testimonial 2 Js
	$('.bd-ud-testimonial-active').slick({
		dots: false,
		infinite: true,
		autoplay: false,
		speed: 300,
		pauseOnHover: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		vertical: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="flaticon-016-right-arrow-3"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="flaticon-017-left-arrow"></i></button>',
		responsive: [
			{
				breakpoint: 768,
				settings: {
					vertical: false,

				}
			},
			{
				breakpoint: 480,
				settings: {
					vertical: false,
				}
			}
		]
	});

	// Update Team Js 
	var udTeam = new Swiper('.bd-ud-team-active', {
		slidesPerView: 4,
		spaceBetween: 30,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		pagination: {
			el: ".bd-ud-team-pagination",
			clickable: true,
		},
		breakpoints: {
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	// Update Team Js 3
	var bdPortfolio3 = new Swiper('.bd-ud-portfolio3-active', {
		slidesPerView: 3,
		spaceBetween: 60,
		centeredSlides: false,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		navigation: {
			nextEl: ".bd-ud-portfolio3-button-next",
			prevEl: ".bd-ud-portfolio3-button-prev",
		},
		breakpoints: {
			'1400': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 3,
				spaceBetween: 40,
			},
			'768': {
				slidesPerView: 2,
				spaceBetween: 40,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});


	// Update Testimonial 2 Js
	$('.bd-ud-testimonial2-active').slick({
		dots: false,
		infinite: true,
		autoplay: false,
		speed: 300,
		pauseOnHover: false,
		slidesToShow: 2,
		slidesToScroll: 1,
		vertical: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
		responsive: [
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});

	// Services Details Circle Js 
	$("#percentage").waypoint(function () {
		// circle-1
		$('#circle-1').circleProgress({
			value: 0.75,
			size: 90,
			thickness: 2,
			// lineCap: 'round',
			emptyFill: "#dfe8ed",
			fill: '#0E84E1'
		}).on('circle-animation-progress', function (event, progress) {
			$(this).find('.counter_percentage').html(Math.round(75 * progress) + '<i>%</i>');
		});

		$('#circle-2').circleProgress({
			value: 0.95,
			size: 90,
			thickness: 2,
			// lineCap: 'round',
			emptyFill: "#dfe8ed",
			fill: '#0E84E1'
		}).on('circle-animation-progress', function (event, progress) {
			$(this).find('.counter_percentage').html(Math.round(95 * progress) + '<i>%</i>');
		});

	}, {
		offset: 'bottom-in-view'
	});

	// menu-last js
	$(".bd-ud-main-menu nav > ul > li, .main-menu nav > ul > li").slice(-4).addClass("menu-last");

	// Hero five contact form activation
	$("#open-form").on("click", function () {
		$(".et-hero__contact-wrapper").addClass("active");
	});

	$("#close-form").on("click", function () {
		$(".et-hero__contact-wrapper").removeClass("active");
	});

	// Brand Four Js 
	var brandFour = new Swiper('.brand4-slider-active', {
		slidesPerView: 6,
		spaceBetween: 50,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		breakpoints: {
			'1600': {
				slidesPerView: 6,
			},
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 3,
			},
			'575': {
				slidesPerView: 2,
				spaceBetween: 30,
			},
			'320': {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	// Brand Five Js 
	var brandFive = new Swiper('.brand5-slider-active', {
		slidesPerView: 4,
		spaceBetween: 50,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		breakpoints: {
			'1600': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 3,
			},
			'575': {
				slidesPerView: 2,
				spaceBetween: 30,
			},
			'320': {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	// location-item Map Js
	$(".location-item").on("mouseenter", function () {
		$(this).addClass("active").siblings().removeClass("active");
	});

	// related post js
	var CaseStudy = new Swiper('.et-news2-related-active', {
		spaceBetween: 30,
		slideToClickedSlide: true,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		pagination: {
			el: ".Case-pagination",
			clickable: true,
			renderBullet: function (index, className) {
				return '<span class="' + className + '">' + '<button>' + (index + 1) + '</button>' + "</span>";
			},
		},
		navigation: {
			nextEl: ".et-news2-button-next",
			prevEl: ".et-news2-button-prev",
		},
		breakpoints: {
			'1400': {
				slidesPerView: 2,
			},
			'1200': {
				slidesPerView: 2,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	})


})(jQuery);



// var card = document.querySelector('.js-profile-card');
// var closeBtn = document.querySelectorAll('.js-message-close');

// btn.addEventListener('click',function (e) {
// 		e.preventDefault();
// 		card.classList.add('active');
// });

// closeBtn.forEach(function (element, index) {
// 	console.log(element);
// 	element.addEventListener('click', function (e) {
// 		e.preventDefault();
// 		card.classList.remove('active');
// 	});
// });

// **********
/* =====================================
	 BRAND LOGO CONTINUOUS AUTO SCROLL
===================================== */

var brand = new Swiper(".brand__actiive", {
	loop: true,

	slidesPerView: "auto",
	spaceBetween: 40,

	speed: 9000, // slower = smoother continuous

	autoplay: {
		delay: 0,
		disableOnInteraction: false,
		waitForTransition: false, // ✅ critical — removes pause
	},

	freeMode: true,
	freeModeMomentum: false,
	allowTouchMove: false,

	loopedSlides: 20,           // ✅ clone more slides
	loopAdditionalSlides: 20,   // ✅ prevent loop gap

	breakpoints: {
		0: { spaceBetween: 20 },
		768: { spaceBetween: 30 },
		1200: { spaceBetween: 40 }
	}
});


document.addEventListener("DOMContentLoaded", function () {
	document.querySelectorAll(".footer-dropdown-toggle").forEach(toggle => {
		toggle.addEventListener("click", function (e) {
			e.preventDefault();
			this.parentElement.classList.toggle("active");
		});
	});
});



// mosue glow
const glow = document.querySelector(".mouse-glow");

document.addEventListener("mousemove", (e) => {
	glow.style.top = e.clientY + "px";
	glow.style.left = e.clientX + "px";
});

// Hover effect on clickable items
document.querySelectorAll("a, button").forEach((el) => {
	el.addEventListener("mouseenter", () => {
		glow.style.background = "rgba(151, 71, 255, 0.18)";
		glow.style.boxShadow = "0 0 80px rgba(151, 71, 255, 0.55)";
	});

	el.addEventListener("mouseleave", () => {
		glow.style.background = "rgba(14, 132, 225, 0.12)";
		glow.style.boxShadow = "0 0 50px rgba(14, 132, 225, 0.35)";
	});
});


// card reveal scroll effect

const cards = document.querySelectorAll(".cap-card");

const observer = new IntersectionObserver(
	(entries) => {
		entries.forEach((entry, index) => {
			if (entry.isIntersecting) {
				setTimeout(() => {
					entry.target.classList.add("show");
				}, index * 200);
			}
		});
	},
	{ threshold: 0.2 }
);

cards.forEach((card) => observer.observe(card));


// swipe card why choose us in about page 

var swiper = new Swiper(".chooseSwiper", {
	loop: true,
	spaceBetween: 25,
	grabCursor: true,
	centeredSlides: true,

	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},

	breakpoints: {
		0: { slidesPerView: 1 },
		768: { slidesPerView: 2 },
		1024: { slidesPerView: 3 },
	},
});

new Swiper(".testimonial-slider", {
	slidesPerView: 2,
	spaceBetween: 30,
	loop: true,

	navigation: {
		nextEl: ".array-next",
		prevEl: ".array-prev",
	},

	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},

	breakpoints: {
		0: {
			slidesPerView: 1,
		},
		992: {
			slidesPerView: 2,
		},
	},
});




// technology card logic 

document.addEventListener("DOMContentLoaded", function () {

	const buttons = document.querySelectorAll(".filter-btn");
	const cards = document.querySelectorAll(".blog-grid > div");

	buttons.forEach(btn => {
		btn.addEventListener("click", () => {

			// remove active from all
			buttons.forEach(b => b.classList.remove("active"));
			btn.classList.add("active");

			const filter = btn.dataset.filter;

			cards.forEach(card => {
				const categories = card.dataset.category || "";

				if (filter === "all" || categories.includes(filter)) {
					card.style.display = "block";
				} else {
					card.style.display = "none";
				}
			});

		});
	});

});





