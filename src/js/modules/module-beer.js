var mb,
moduleBeer = {
	settings: {
		toggleBtns: $('.layout.beerlisting ul.toggle-options a.heading-title'),
		spotifyEls: $('.spotify-embed'),
		sellSheetEls: $('.sell-sheet')
	},
	init: function() {
		mb = this.settings;
		this.bindUIActions();
		// Optional - Expose scoped vars to global $. Use in console with $.expose
		$.expose.mb = mb;
		$.expose.moduleBeer = moduleBeer;
		console.log('Module Beer Loaded!');
	},
	bindUIActions: function() {
		moduleBeer.slickIt;

		mb.toggleBtns.click(function(evt){
			moduleBeer.toggleContent(evt, this);
		});

		if (mb.spotifyEls.length > 0) {
			mb.spotifyEls.each(function(){
				// console.log('Spotify embed found');
				var spotifyEl = jQuery(this);
				var spotifyToggle = spotifyEl.find('a.song-toggle');

				$( this ).find( '.song-toggle' ).click(function(evt){
					// console.log('You just clicked a song toggle.');
					// console.log( evt );
					evt.preventDefault();
					if (spotifyEl.hasClass('active')) {
						spotifyEl.removeClass('active');
					} else {
						spotifyEl.addClass('active');
						// Lazy load Spotify embeds
						var myLazyLoad = new LazyLoad({
						    elements_selector: "iframe"
						});
					}
				});
			});
		}
		// if (mb.sellSheetEls.length > 0) {
		// 	mb.sellSheetEls.each(function(){
		// 		$(this).find('.sell-sheet-link').click(function(evt){
		// 			evt.preventDefault();
		// 		});
		// 	});
		// }

	},
	toggleContent: function(evt, ele) {
		evt.preventDefault();

		// Make sure we didnt click the already active toggle
		var $ele = $(ele);

		if($ele.hasClass('active')) {
		   return;
		} else {
			var parentUl = $ele.parents('.toggle-options');
			var contentEl = $ele.parents('.intro').next();
			var contentTarget = $ele.data('content');

			// Reverse the order of the parent ul
			parentUl.toggleClass('reverse');

			// Remove active class from all toggle buttons
			parentUl.find('[data-content]').removeClass('active');

			// Add active class to selected toggle
			parentUl.find('[data-content=' + contentTarget + ']').addClass('active');

			// Remove active class from all content sections
			contentEl.find('[data-content]').removeClass('active');

			// Add active class to selected content
			contentEl.find('[data-content=' + contentTarget + ']').addClass('active');
		}
		slickIt();
	}
};
