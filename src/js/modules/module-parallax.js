var am,
animations = {
	settings: {
		mainWindow: $(window),
		animationEls: $('.animatable'),
		parallaxEls: $('.parallax'),
		scrollTop: 0
	},
	init: function() {
		am = this.settings;
		this.bindUIActions();
		// Optional - Expose scoped vars to global $. Use in console with $.expose
		$.expose.am = am;
		$.expose.animations = animations;
		console.log('animations loaded!');
		animations.runAnimations();
		animations.runParallax();
	},
	bindUIActions: function() {
		am.mainWindow.scroll(function(){
			am.scrollTop = am.mainWindow.scrollTop();
			animations.runAnimations();
			animations.runParallax();
		});
	},
	runAnimations: function(){
		am.animationEls.each(function(){
			var thisEl = $(this);
			if(thisEl.visible(true)){
				thisEl.addClass('active');
			}
		});
	},
	runParallax: function(){
		am.parallaxEls.each(function(){
			var thisEl = $(this);
			var thisParent = thisEl.parent();
			var parentDistance = thisParent.offset().top - am.scrollTop;
			var movement = parentDistance*(thisEl.data('speed'));
			if(thisParent.visible){
				thisEl.css('transform', 'translate3d(0, ' + movement + 'px, 0)');
			}
		});
	}
};
