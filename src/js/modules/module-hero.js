// When the page loads
// Start the counter
//
// On mouseover
// Stop the counter from counting
// Set the class of the hover menu item based on what they hover
//
// On mouse off
// Start the counter from the class that was just moused over

var mh,
moduleHero = {
	settings: {
		menuLinks: $('.header ul.menu a'),
		menuLogo: $('.header .logo'),
		heroContentEl: $('.hero.featured .content'),
		heroBackgrounds: $('.hero.featured .content .background'),
		heroForegrounds: $('.hero.featured .content .foreground'),
		spinningEl: $('.hero.featured .content .center-piece'),
		menuItemEls: $('.header ul.menu li'),
		totalSlides: 0,
		slide: 1,
		backgroundEls: $('.hero.featured .background'),
		foregroundEls: $('.hero.featured .foreground')
	},
	init: function() {
		mh = this.settings;
		this.bindUIActions();

		// Start header loop
		this.startSlides();

		// Optional - Expose scoped vars to global $. Use in console with $.expose
		$.expose.mh = mh;
		$.expose.moduleHero = moduleHero;
		console.log('Module Hero Loaded!');
	},
	bindUIActions: function() {

		// Get total number of slides
		mh.totalSlides = mh.menuItemEls.length;

		mh.spinningEl.on('transitionend webkitTransitionEnd oTransitionEnd', function () {
			// your event handler
			$(this).removeClass('spinning');
		});

		mh.menuLinks.on('mouseenter', function () {

			// Make sure that all classes are removed
			// mh.heroContentEl.removeClass(function (index, className) {
			// 	return (className.match (/(^|\s)move-\S+/g) || []).join(' ');
			// });

			// Cache the data attributeName
			// var moveData = $(this).data('move');
			// Add the class to the content div
			// mh.heroContentEl.addClass(moveData);

			// Remove active classes
			mh.backgroundEls.removeClass('active');
			mh.foregroundEls.removeClass('active');

			mh.spinningEl.addClass('spinning');

			var hoverSlide = $(this).parent().index() + 1;
			mh.slide = hoverSlide;

			var backgroundEl = $('.background:nth-child(' + mh.slide + ')');
			var foregroundEl = $('.foreground:nth-child(' + mh.slide + ')');

			backgroundEl.addClass('active');
			foregroundEl.addClass('active');

		});

	},
	interval: function() {

		mh.menuLinks.on('mouseenter', function () {
			var hoverSlide = $(this).parent().index() + 1;
			mh.slide = hoverSlide;
			if (mh.slide == mh.totalSlides) {
				mh.slide = 0;
			}
			// console.log('Rewrite mh.slide to: ' + mh.slide);
		});

		mh.slide++;
		var backgroundEl = $('.background:nth-child(' + mh.slide + ')');
		var foregroundEl = $('.foreground:nth-child(' + mh.slide + ')');

		// console.log(backgroundEl);
		// console.log(foregroundEl);

		// var heroClass = 'move-' + mh.slide;

		if (mh.slide == mh.totalSlides) {

			mh.slide = 0;
			// console.log('Slide ' + heroClass);

			// Make sure that all classes are removed
			// mh.heroContentEl.removeClass(function (index, className) {
			// 	return (className.match (/(^|\s)move-\S+/g) || []).join(' ');
			// });

			// Remove active classes
			mh.backgroundEls.removeClass('active');
			mh.foregroundEls.removeClass('active');

			// Add the class to the content div
			// mh.heroContentEl.addClass(heroClass);
			backgroundEl.addClass('active');
			foregroundEl.addClass('active');
			mh.spinningEl.addClass('spinning');

		} else {

			// console.log('Slide: ' + heroClass);

			// Make sure that all classes are removed
			// mh.heroContentEl.removeClass(function (index, className) {
			// 	return (className.match (/(^|\s)move-\S+/g) || []).join(' ');
			// });

			// Remove active classes
			mh.backgroundEls.removeClass('active');
			mh.foregroundEls.removeClass('active');

			// Add the class to the content div
			// mh.heroContentEl.addClass(heroClass);
			backgroundEl.addClass('active');
			foregroundEl.addClass('active');
			mh.spinningEl.addClass('spinning');

		}

	},
	startSlides: function() {

		var startInterval = setInterval(moduleHero.interval, 5000);

		mh.menuItemEls.hover( function() {
			clearInterval( startInterval );
		}, function() {
			startInterval = setInterval(moduleHero.interval, 5000);
		});

	}
};
