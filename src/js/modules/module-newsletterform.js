// $(document).ready( function () {
//     var $form = $('#mc-embedded-subscribe-form');
//
//     if ( $form.length > 0 ) {
//         $('#mc-embedded-subscribe').bind('click', function ( event ) {
//             if ( event ) event.preventDefault();
//             // validate_input() is a validation function I wrote, you'll have to substitute this with your own.
//             register($form);
//         });
//     }
// });
//
// function register($form) {
//     $.ajax({
//         type		: $form.attr('method'),
//         url			: $form.attr('action'),
//         data		: $form.serialize(),
//         cache       : false,
//         dataType    : 'json',
//         contentType	: "application/json; charset=utf-8",
//         error       : function(err) { alert("Could not connect to the registration server. Please try again later."); },
//         success     : function(data) {
//             if (data.result != "success") {
//                 // Something went wrong, do something to notify the user. maybe alert(data.msg);
// 				console.log('Mailchimp form DID NOT work.');
//             } else {
//                 // It worked, carry on...
// 				console.log('Mailchimp form worked.');
//             }
//         }
//     });
// }

// var mnf,
// moduleNewsletterForm = {
// 	settings: {
// 		form: $('#mc-embedded-subscribe-form'),
// 		submit: $('#mc-embedded-subscribe')
// 	},
// 	init: function() {
// 		mnf = this.settings;
// 		this.bindUIActions();
// 		// Optional - Expose scoped vars to global $. Use in console with $.expose
// 		$.expose.mnf = mnf;
// 		$.expose.moduleNewsletterForm = moduleNewsletterForm;
// 		console.log('Module Newsletter Form Loaded!');
// 	},
// 	bindUIActions: function() {
//
// 		if (mnf.form.length > 0) {
// 			mnf.submit.bind('click', function (evt) {
// 				evt.preventDefault()
// 				// register(mnf.form)
// 				moduleNewsletterForm.registerForm(mnf.form);
// 			});
// 		}
//
// 	},
// 	registerForm: function(ele) {
// 		console.log('The newsletter registerForm function will be called.');
//
// 		mnf.submit.val('Sending...');
//
// 		$.ajax({
// 			type: ele.attr('method'),
// 			url: ele.attr('action'),
// 			data: ele.serialize(),
// 			cache: false,
// 			dataType: 'json',
// 			contentType: 'application/json; charset=utf-8',
// 			error: function (err) {
// 				alert('Could not connect to the registration server. Please try again later.')
// 			},
// 			success: function (data) {
// 				$('#mc-embedded-subscribe').val('subscribe');
// 				if (data.result === 'success') {
// 					// Yeahhhh Success
// 					console.log(data.msg);
// 					$('#subscribe-result').css('color', '#b19565');
// 					$('#subscribe-result').html('<p>Thank you! A confirmation message is waiting in your inbox.</p>');
// 					$('#email').val('');
// 				} else {
// 					// Something went wrong, do something to notify the user.
// 					console.log(data.msg);
// 					$('#email').css('borderColor', '#ff8282');
// 					$('#subscribe-result').css('color', '#ff8282');
// 					$('#subscribe-result').html('<p>' + data.msg.substring(4) + '</p>');
// 				}
// 			}
// 		});
//
// 	}
// };
