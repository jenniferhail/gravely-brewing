var ma,
moduleAnchors = {
	settings: {
		mainWindow: $(window),
		scrollableEls: $('html, body'),
		anchorEls: $('a[href*="#"]').not('[href="#"]').not('[href="#0"]')
	},
	init: function() {
		ma = this.settings;
		this.bindUIActions();
		// Optional - Expose scoped vars to global $. Use in console with $.expose
		$.expose.ma = ma;
		$.expose.moduleAnchors = moduleAnchors;
		console.log('Module Anchors Loaded!');
	},
	bindUIActions: function() {
		ma.anchorEls.click(function(evt){
			moduleAnchors.scrollToAnchor(evt, this);
		});
	},
	scrollToAnchor: function(evt, ele){
		if (location.pathname.replace(/^\//, '') == ele.pathname.replace(/^\//, '') && location.hostname == ele.hostname){
			// Figure out element to scroll to
			var target = $(ele.hash);
			target = target.length ? target : $('[name=' + ele.hash.slice(1) + ']');
			// Does a scroll target exist?
			if (target.length) {
				// Only prevent default if animation is actually gonna happen
				evt.preventDefault();
				ma.scrollableEls.animate({
					scrollTop: target.offset().top - 200
				}, 1000, function() {
					// Callback after animation
					// Must change focus!
					var $target = $(target);
					// $target.focus();
					if ($target.is(":focus")) { // Checking if the target was focused
						return false;
					} else {
						$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
						// $target.focus(); // Set focus again
					}
				});
			}
		}
	}
};
