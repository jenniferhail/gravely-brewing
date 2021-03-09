var ml,
moduleLoader = {
	settings: {
		mainWindow: $(window),
		loaderEl: $('.screen-loader')
	},
	init: function() {
		ml = this.settings;
		this.bindUIActions();
		// Optional - Expose scoped vars to global $. Use in console with $.expose
		$.expose.ml = ml;
		$.expose.moduleLoader = moduleLoader;
		console.log('Module Loader Loaded!');
	},
	bindUIActions: function() {
		ml.mainWindow.load(moduleLoader.removeLoader);
	},
	removeLoader: function(){
		ml.loaderEl.addClass('hide');
		window.setTimeout(function(){
	        ml.loaderEl.addClass('remove');
	    }, 1200);
	}
};
