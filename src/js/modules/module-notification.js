var nf,
notification = {
	settings: {
		notice: $('.notification'),
		header: $('.header'),
		homePage: $('body.home'),
		main: $('.main'),
		close: $('.notification .close'),
		content: $('.notification .drawer .content'),
		wrapper: $('.notification .drawer')
	},
	init: function() {
		nf = this.settings;
		this.bindUIActions();
		console.log('notification loaded!');
		notification.adjustPage();
	},
	bindUIActions: function() {

		// Caching the window width
		var windowWidth = $(window).width();

		// When the window is resized, recache the window width and fire the adjustPage function
		$(window).resize(function() {
			windowWidth = $(window).width();
			notification.adjustPage();
		});

		// Close the notification banner
		nf.close.on('click', function() {
			nf.notice.addClass('hide');
			// document.cookie = 'notification=1';

			// Reset header position
			nf.header.css('top', '0');

			// Reset main padding-top
			if (windowWidth > 681) {
				if (nf.homePage.length) {
					// If home page & larger than mobile
					nf.main.css('padding-top', '80px');
				} else {
					nf.main.css('padding-top', '160px');
				}
			} else {
				if (nf.homePage.length) {
					// If home page & mobile
					nf.main.css('padding-top', '100px');
				} else {
					nf.main.css('padding-top', '160px');
				}
			}

			var notificationID = $('#notification').data('notification-id');
			document.cookie = 'notification=' + notificationID;
		});

		// Toggle the banner open
		nf.content.on('click', function() {
			$(this).closest('.wrapper').find('.container').slideToggle( '3000', function() {
				// Animation complete.
			});
			if (nf.wrapper.hasClass('open')) {
				nf.wrapper.removeClass('open');
			} else {
				nf.wrapper.addClass('open');
			}
		});

	},
	adjustPage: function() {
		if (nf.notice.length) {
			// Get height of notification banner & header
			var noticeHeight = nf.notice.outerHeight();
			var headerHeight = nf.header.outerHeight();
			// console.log('Notification height = ' + noticeHeight);

			if (nf.notice.hasClass('hide')) {
				// Reset header position
				nf.header.css('top', '0');
				noticeHeight = 20;
			} else {
				// Set position of header from top
				nf.header.css('top', noticeHeight);
			}

			// Reset main padding-top
			if (windowWidth > 681) {
				if (nf.homePage.length) {
					// If home page & larger than mobile
					var mainPadding = noticeHeight + headerHeight;
					nf.main.css('padding-top', mainPadding);
				} else {
					var mainPadding = noticeHeight + headerHeight + 60;
					nf.main.css('padding-top', mainPadding);
				}
			} else {
				if (nf.homePage.length) {
					// If home page & mobile
					var mainPadding = noticeHeight + headerHeight - 50;
					nf.main.css('padding-top', mainPadding);
				} else {
					var mainPadding = noticeHeight + headerHeight + 30;
					nf.main.css('padding-top', mainPadding);
				}
			}

		}
	}
};
