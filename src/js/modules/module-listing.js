var mf,
moduleFilter = {
	settings: {
		mainWindow: jQuery(window),
		windowWidth: jQuery(window).width(),
		menuToggle: '',
		// filterGroups: jQuery('.form-wrap .filter.active'),
		filterGroups: jQuery('.filter.active'),
		textFilters: jQuery('.text-filter'),
		selectFilters: jQuery('.select-filter'),
		listFilters: jQuery('.list-filter'),
		filteredLists: jQuery('.filtered-list'),
		slickItEl: jQuery('.slick-it'),
		dropdownGroups: jQuery('.dropdown'),
		dropdownTitle: jQuery('.filter-toggle'),
		sliderCopy: jQuery('.slick-it')
	},
	init: function() {
		mf = this.settings;
		this.bindUIActions();
        console.log('moduleFilter loaded!');
	},
	bindUIActions: function() {
		mf.filterGroups.each(function(){
			var filterGroup = jQuery(this);
			var newDropdownTitle;
			if(filterGroup.find('.text-filter').length > 0) {
				var textFilter = filterGroup.find('.text-filter');
				textFilter.keydown(function(evt){
					if(evt.which == 13){
						evt.preventDefault();
					}
    			});
				textFilter.keyup(function(evt){
					evt.preventDefault();
					// console.log('text change');
					moduleFilter.filterData(filterGroup);
    			});
			}
			if(filterGroup.find('.select-filter').length > 0) {
				var selectFilter = filterGroup.find('.select-filter');
				selectFilter.change(function(){
					// console.log('select change');
					moduleFilter.filterData(filterGroup);
    			});
			}
			if(filterGroup.find('.list-filter').length > 0) {
				var listFilter = filterGroup.find('.list-filter a');
				var thisFilter = filterGroup.find('.list-filter a.active');
				var prevGlassType = filterGroup.find('.list-filter a.active').data('glass-type');
				var pourDuration;
				var thisList = filterGroup.closest('.content').find('.filtered-list');
				var sliderCopy = filterGroup.closest('.content').find('.slick-it').clone();
				// console.log(sliderCopy);
				listFilter.click(function(evt){
					thisFilter = jQuery(this);
					evt.preventDefault();
					if (thisFilter.hasClass('active')) {
						// If the active class already exists, do nothing
					} else {
						// Remove active class from all list-filter anchors
						listFilter.removeClass('active');
						jQuery('.tap-wrapper').removeClass('pouring');
						// Remove fade class from beer glass
						jQuery('.glasses-list .glass.slick-active').removeClass('fade');
						// Add active class to the clicked anchor
						$(this).addClass('active');

						// Change out filter toggle text to match selected filter
						newDropdownTitle = thisFilter.text();
						var thisFilterTitle = filterGroup.find('.filter-title');
						thisFilterTitle.html(newDropdownTitle);
						// console.log('Current dropdown title = ' + newDropdownTitle);

						// Determine which sorting method to use
						if (thisList.hasClass('slider-list')) {
							// console.log('This list is a slider.');
							moduleFilter.slickListing(filterGroup);
						} else {
							// console.log('This list is not a slider.');
							// moduleFilter.filterData(filterGroup);
							moduleFilter.filterData(filterGroup);
						}

						// If the on tap beer list slider exists, proceed
						if ( jQuery('.glasses-list').length > 0 ) {
							// Get the active beer color
							var thisBeerColor = thisFilter.data('beer-fill');
							// console.log('Current beer color ' + thisBeerColor);
							// Get the active glass type
							var thisGlassType = thisFilter.data('glass-type');
							// console.log('Current glass type ' + thisGlassType);

							if (thisGlassType == 1) {
								pourDuration = 3250;
							} else if (thisGlassType == 2) {
								// Done
								pourDuration = 2550;
							} else if (thisGlassType == 3) {
								pourDuration = 2500;
							} else if (thisGlassType == 4) {
								// Done
								pourDuration = 2200;
							} else if (thisGlassType == 5) {
								pourDuration = 2550;
							}

							// Change slider to the right glass type
							jQuery('.glasses-list').slick('slickGoTo', thisGlassType - 1);
							// Change beer color
							jQuery('.glasses-list .glass.slick-active .beerFill').css({ fill: thisBeerColor });

							jQuery('.tap-wrapper').addClass('pouring').stop().delay(pourDuration).queue(function(){
							  jQuery('.tap-wrapper').removeClass('pouring');
							});

							jQuery('.glasses-list .glass.slick-active .pour').css({ fill: thisBeerColor });

						}
					}
				});
				// On init check for active class and filter the results
				moduleFilter.filterData(filterGroup);
				// If the on tap beer list slider exists, proceed
				if ( jQuery('.glasses-list').length > 0 ) {

					// Get the active beer color
					var thisBeerColor = thisFilter.data('beer-fill');
					// Change beer color
					jQuery('.glasses-list .glass.slick-active .beerFill').css({ fill: thisBeerColor });
					// Change the svg pour color here
					jQuery('.glasses-list .glass.slick-active .pour').css({ fill: thisBeerColor });
					// console.log('First beer color: ' + thisBeerColor);

					// Get the active glass type
					var thisGlassType = thisFilter.data('glass-type');

					if (thisGlassType == 1) {
						pourDuration = 3250;
					} else if (thisGlassType == 2) {
						// Done
						pourDuration = 2550;
					} else if (thisGlassType == 3) {
						pourDuration = 2500;
					} else if (thisGlassType == 4) {
						// Done
						pourDuration = 2200;
					} else if (thisGlassType == 5) {
						pourDuration = 2550;
					}

					// Tilt the tap
					jQuery('.tap-wrapper').addClass('pouring').stop().delay(pourDuration).queue(function(){
					  jQuery('.tap-wrapper').removeClass('pouring');
					});
				}
			}
		});
		// // When the window is resized, recache the window width and fire the slickIt function
		// mf.mainWindow.resize(function() {
		// 	mf.windowWidth = $(window).width();
		// 	moduleFilter.slickListing();
		// });
		mf.dropdownGroups.each(function(){
			var dropdownGroup = jQuery(this);
			var dropdownMenu = dropdownGroup.find('.menu');
			dropdownGroup.click(function(evt){
				if (dropdownGroup.hasClass('visible')) {
					dropdownGroup.removeClass('visible');
					dropdownMenu.removeClass('in');
					dropdownMenu.addClass('out');
				} else {
					dropdownGroup.addClass('visible');
					dropdownMenu.removeClass('out');
					dropdownMenu.addClass('in');
					// console.log('The dropdown is active');
				}
			});
		});
	},
	filterData: function(ele){
		// ele returns jquery object of filter div that contains all filter fields
		var textValue = ele.find('.text-filter').val();
		var selectActive = false;
		var selectElement = ele.find('.select-filter');
		var selectValue = '';

		var listActive = false;
		var listElement = ele.find('.list-filter');
		var listValue = ele.find('.list-filter a.active').data('term-id');

		var count = 0;
		// if the select element is present
		if(selectElement.length > 0) {
			var selectTaxonomy = selectElement.data('taxonomy');
			if(selectElement.val() != 'all'){
				selectActive = true;
				selectValue = selectElement.val();
			}
		}

		if(listElement.length > 0) {
			var listTaxonomy = listElement.data('taxonomy');
			if(listValue != 'all'){
				listActive = true;
			}
		}

		ele.next().find('.no-results').hide();

		// Loop through the list elements
		ele.next().find('li.item').each(function(){
			var thisItem = jQuery(this);
			// Changing the thisItemData variable to only save one number so the on tap layout can correctly filter
			var thisItemData = thisItem.data(listTaxonomy);
				// thisItemData = "" + thisItemData;
			if(listActive){
				// Original: If the list item does not contain the text phrase fade it out
				// Current: If the list item does not exactly match the selected beer
				if (thisItemData != listValue) {
				// if (thisItemData.search(new RegExp(listValue, "i")) < 0) {
					thisItem.fadeOut();
				// Show the list item if the phrase matches and increase the count by 1
				} else {
					thisItem.show();
					count++;
				}
			} else {
				thisItem.show();
			}
		});
		if(count === 0){
			ele.next().find('.no-results').show();
		}
	},
	slickListing: function(ele){

		var listActive = false;
		var listElement = ele.find('.list-filter');
		var listValue = ele.find('.list-filter a.active').data('term-id');
		var beerCave = ele.closest('.content').find('.beer-cave');
		// var slickWrap = ele.closest('.content').find('.slider-list');
		var slickList = ele.closest('.content').find('.slick-it');
		var count = 0;

		if(listElement.length > 0){
			var listTaxonomy = listElement.data('taxonomy');
			if(listValue != 'all'){
				listActive = true;
			}
		}

		ele.next().find('.no-results').hide();

		// If slick has been intialized, destroy it so that we can reslick
		if ( $('.slick-it.slick-initialized').length ) {
			mf.slickItEl.slick('destroy');
		}

		// Move hidden beers back to the slider div
		beerCave.children().appendTo(slickList);

		// Loop through the list elements
		ele.next().find('li').each(function(){
			var thisItem = jQuery(this);
			var thisItemData = thisItem.data(listTaxonomy),
				thisItemData = "" + thisItemData;
			if(listActive) {
				// If the list item does not contain the text phrase, move to beer cave
				if (thisItemData.search(new RegExp(listValue, "i")) < 0) {
					thisItem.appendTo(beerCave);
				} else {
					count++;
				}
			}
		});
		if (count === 0){
			ele.next().find('.no-results').show();
		}

		if ( $('.slick-it').length ) {
			var slickSettings = {};
			// Because rows do not work with slicks responsive, we init different slick settings at different screen sizes
			if	(windowWidth > 768) {
				slickSettings = {
					rows: 4,
					slidesPerRow: 1,
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
			mf.slickItEl.slick(slickSettings);
		}
	}
}
