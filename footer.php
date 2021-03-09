<?php $template_url = get_template_directory_uri(); ?>

</main>

<footer class="footer" role="contentinfo">
    <div class="wrapper">
        <div class="content">
			<div class="copyright">
				<p><?php the_field('footer_content', 'option'); ?></p>
				<p><?php the_field('footer_hours', 'option'); ?></p>
				<!-- <p><span>Monday to Thursday: 2 PM to 10 PM</span><span>Friday to Saturday: 12 PM to 1 AM</span><span>Sunday: 12 PM to 10 PM</span></p> -->
			</div>
			<div class="row">
				<div class="col">
					<?php include(locate_template('inc/newsletter.php')); ?>
	            </div>
	            <div class="col">
	                <ul class="menu">
	                    <li><a href="/beer">Beer</a></li>
	                    <li><a href="/events">Events</a></li>
	                    <li><a href="/food">Food</a></li>
						<?php
							$argsMain = array(
								'menu' => 'main-menu',
								'container' => 'false',
								'items_wrap' => '%3$s'
							);
						 ?>
						<?php wp_nav_menu($argsMain);?>
	                </ul>
	                <a href="#" class="logo"><img src="<?php echo $template_url; ?>/app/assets/img/logo-footer.svg" alt="Gravely Logo"></a>
					<ul class="social">
						<?php if (have_rows('footer_social', 'option')): ?>

							<ul class="social-list">

							<?php while (have_rows('footer_social', 'option')): the_row(); ?>
								<?php
									$network = get_sub_field('network');
									$link = get_sub_field('link');
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'];

									if ($link_target == null) {
										$link_target = '_self';
									}
								?>
								<li class="social-item">
									<?php if ($network == 'facebook'): ?>
										<a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
									<?php elseif ($network == 'twitter'): ?>
										<a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
									<?php elseif ($network == 'instagram'): ?>
										<a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
									<?php elseif ($network == 'snapchat'): ?>
										<a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
									<?php elseif ($network == 'pinterest'): ?>
										<a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
									<?php elseif ($network == 'googleplus'): ?>
										<a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
									<?php elseif ($network == 'linkedin'): ?>
										<a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
									<?php elseif ($network == 'youtube'): ?>
										<a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
									<?php elseif ($network == 'vimeo'): ?>
										<a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
									<?php endif; ?>
								</li>

							<?php endwhile; ?>

							</ul>

						<?php endif; ?>
						<li><a href="http://instagram.com/gravelybrewing/" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="http://www.facebook.com/gravelybrewing" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="http://twitter.com/gravelybrewing" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a href="https://www.yelp.com/biz/gravely-brewing-louisville" target="_blank"><i class="fab fa-yelp"></i></a></li>
						<li><a href="https://untappd.com/GravelyBrewingCo" target="_blank"><i class="fab fa-untappd"></i></a></li>
					</ul>
	            </div>
	            <div class="col">
					<div class="seals-logos">
	                    <img src="<?php echo $template_url; ?>/app/assets/img/Brewery-Certified-Independent-Craft-Brewers-Association-logo.jpg" class="logo" alt="BA Beer Seal">
	                </div>
	            </div>
			</div>
        </div>
    </div>
</footer>

<?php if ( have_rows('download', 'option') ): ?>
	<div class="hidden">
		<ul class="download-forms">
			<?php while ( have_rows('download', 'option') ) : the_row(); ?>

				<?php
					$download = get_sub_field('link');
					if ($download) {
						$download_url = $download['url'];
						$download_title = $download['title'];
						$download_target = $download['target'];

						if ($download_target == NULL) {
							$download_target = '_self';
						}
						echo '<li><a href="' . $download_url . '" target="' . $download_target . '"><i class="far fa-arrow-alt-circle-down"></i>' . $download_title . '</a></li>';
					}
				?>
			<?php endwhile; ?>
		</ul>
	</div>
<?php endif; ?>

<?php if (get_field('popup_display', 'option')): ?>
    <div class="option popup" data-delay="<?php the_field('popup_delay', 'option'); ?>" data-duration="<?php the_field('popup_duration', 'option'); ?>">
        <div class="wrapper">
            <div class="content">
                <h3><?php the_field('popup_title', 'option'); ?></h3>
                <?php the_field('popup_content', 'option'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php the_field('ga_tracking_id', 'option'); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php the_field('ga_tracking_id', 'option'); ?>');
</script>

</div> <!-- Close page -->

</body>
</html>
