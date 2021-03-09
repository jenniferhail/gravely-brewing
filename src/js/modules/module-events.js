var me,
moduleEvents = {
	settings: {
		itemsEls: $('.layout.events .items'),
		itemEls: $('.layout.events .item'),
		toggleBtns: $('.layout.events .items a.heading-title')
	},
	init: function() {
		me = this.settings;
		this.bindUIActions();
		// Optional - Expose scoped vars to global $. Use in console with $.expose
		$.expose.me = me;
		$.expose.moduleEvents = moduleEvents;
		console.log('Module Events Loaded!');
	},
	bindUIActions: function() {
		me.toggleBtns.click(function(evt){
			moduleEvents.toggleContent(evt, this);
		});
	},
	toggleContent: function(evt, ele){
		evt.preventDefault();
		// Make sure we didnt click the already active toggle
		var $ele = $(ele);
		if($ele.hasClass('active')){
		   return;
		} else {
			var parentEl = $ele.parents('.item');
			var contentTarget = $ele.data('content');
			// Remove all ative classes from toggles
			me.toggleBtns.removeClass('active');
			// Add active class to selected item
			$ele.addClass('active');
			// Remove all active classes from items
			me.itemEls.removeClass('active');
			// Add active class to selected item
			parentEl.addClass('active');
			// Toggle reverse class on items wrap
			me.itemsEls.toggleClass('reverse');
		} 
	}
};