<?php
	$display_newsletter = get_field('newsletter_display', 'option');
	$title = get_field('newsletter_title', 'option');
	$button_text = get_field('newsletter_button_text', 'option');
	$popup_title = get_field('newsletter_popup_title', 'option');
	$popup_copy = get_field('newsletter_popup_copy', 'option');
	$placeholder = get_field('newsletter_email_placeholder', 'option');
	$submit_button = get_field('newsletter_submit_button', 'option');
	if ($placeholder == '') {
		$placeholder = 'Email address';
	}
	if ($submit_button == '') {
		$submit_button = 'Subscribe';
	}
?>

<?php if ($display_newsletter): ?>
	<div class="newsletter-signup">
		<?php if ($title): ?>
			<h2 class="title small-ass-heading"><?php echo $title; ?></h2>
		<?php endif; ?>
		<?php if ($button_text): ?>
			<div class="buttons">
				<a data-fancybox data-src="#newsletter" href="javascript:;" class="btn"><span class="label"><?php echo $button_text; ?></span><span class="btn-fill"></span></a>
			</div>
		<?php endif; ?>
	</div>
	<!-- Begin Mailchimp Signup Form -->
	<div id="newsletter" class="newsletter">
		<div class="form-intro">
			<?php if ($popup_title): ?>
				<h2><?php echo $popup_title; ?></h2>
			<?php endif; ?>
			<?php if ($popup_copy): ?>
				<div class="copy"><?php echo $popup_copy; ?></div>
			<?php endif; ?>
		</div>
		<div id="mc_embed_signup">
			<form action="https://gravelybrewing.us15.list-manage.com/subscribe/post?u=7514ec36a2dd36e3773ad3600&amp;id=f84690afbc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
					<div class="mc-field-group">
						<label for="mce-EMAIL" style="display:none;">Email Address </label>
						<input type="email" value="" placeholder="<?php echo $placeholder; ?>" name="EMAIL" class="required email" id="mce-EMAIL">
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7514ec36a2dd36e3773ad3600_f84690afbc" tabindex="-1" value=""></div>
					<div class="clear"><input type="submit" value="<?php echo $submit_button; ?>" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				</div>
			</form>
		</div>
	</div>
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
	<script type='text/javascript'>
	(function($)
	{
	window.fnames = new Array();
	window.ftypes = new Array();
	fnames[0] = 'EMAIL';
	ftypes[0] = 'email';
	fnames[1] = 'FNAME';
	ftypes[1] = 'text';
	fnames[2] = 'LNAME';
	ftypes[2] = 'text';
	fnames[3] = 'TEXTYUI_3';
	ftypes[3] = 'text';
	fnames[4] = 'TEXTAREAY';
	ftypes[4] = 'text';
	fnames[5] = 'TEXT3';
	ftypes[5] = 'text';
	fnames[6] = 'TEXT4';
	ftypes[6] = 'text';
	}(jQuery));
	var $mcj = jQuery.noConflict(true);
	</script>
	<!--End mc_embed_signup-->
<?php endif; ?>
