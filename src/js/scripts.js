moduleLoader.init();
moduleHero.init();
moduleAnchors.init();
moduleBeer.init();
moduleEvents.init();
moduleFilter.init();
animations.init(); // Module-parallax
notification.init(); // Module-notification
// moduleNewsletterForm.init();

// Caching the window width and the slick-it element
var windowWidth = $(window).width();
var slickItEl = $('.slick-it');

// When the window is resized, recache the window width and fire the slickIt function
$(window).resize(function() {
	windowWidth = $(window).width();
	slickIt();
	moduleBeer.init();
});

function slickIt() {

	// If slick has been intialized, destroy it so that we can reslick
	if ($('.slick-it.slick-initialized').length) {
		slickItEl.slick('destroy');
	}
	var slickSettings = {};
	// Because rows do not work with slicks responsive, we init different slick settings at different screen sizes
	if	(windowWidth > 768) {
		slickSettings = {
			rows: 4,
			slidesPerRow: 1,
			// slidesToShow: 4,
			// slidesToScroll: 4,
			arrows: true,
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i>See more</button>',
			prevArrow: null,
		}
	} else {
		slickSettings = {
			// rows: 2,
			// slidesPerRow: 1,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i>See more</button>',
			prevArrow: null,
		}
	}
	if ($('.slick-it').length) {
		slickItEl.slick(slickSettings);
	}

}

slickIt();

function posterSlick() {

	var posterSlider = $('.poster-list');

	if (posterSlider.length > 0) {
		// console.log('Found .poster-list');
		posterSlider.slick({
			arrows: true,
			dots: false,
			draggable: false,
			swipe: false,
			centerMode: true,
			slidesToShow: 3,
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
			prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
			responsive: [
				{
					breakpoint: 600,
					settings: {
						centerPadding: '50px',
						slidesToShow: 1
					}
				}
			]
		});
	}

}

posterSlick();

// Parallax with Rellax.js
var rellaxEl = document.querySelectorAll('.rellax');

if (rellaxEl.length > 0) {
	console.log('The rellax class exists. ' + rellaxEl.length); // value

	var rellax = new Rellax('.rellax', {
	    speed: -2,
	    center: true,
	    wrapper: null,
	    round: true,
	    vertical: true,
	    horizontal: false
	});
}

// ------------------------------------------------------ //
// Gravity Forms Customization
// ------------------------------------------------------ //
// Position submit button & add download button to footer
var gformFooter = $( '#gform_2 .gform_footer' );
var formDownloads = $( '.download-forms' );
if (gformFooter.length) {
	// Gravity Forms — Move the Submit button out of its default position and place it after the last field in right column
	gformFooter.insertAfter( $( '#field_2_5 .ginput_container' ) );
	// Add download buttons into the contact form footer
	gformFooter.append( formDownloads );
}
// Open popup when donate option is clicked or checked
var gFormDonate = $('#gform_2 #choice_2_1_2');
var checked = gFormDonate.prop('checked');
var gFormDonatePop = $('#gform_2 .form-popup');

if (gFormDonate.length && gFormDonatePop.length) {
	gFormDonate.change(function() {
        if (gFormDonate.is(":checked")) {
            // console.log('The donate option is checked.');
			$.featherlight(gFormDonatePop, {});
        }
	});
}

AOS.init({
	duration: 600,
});
