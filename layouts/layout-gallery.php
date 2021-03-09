<?php
    $images = get_sub_field('gallery');
    $size = 'large'; // (thumbnail, medium, large, full or custom size)

	$display_content = get_sub_field('display_content');
	$content = get_sub_field('content');
	$content_position = $content['position'];
	$content_title = $content['title'];
	$content_subtitle = $content['subtitle'];
	$content_wysiwyg = $content['wysiwyg'];
	$display_button = $content['display_button'];

	$offset_setting = get_sub_field('offset');

	if ($offset_setting == 'left') {
		$offset = 'offset-left';
	} elseif ($offset_setting == 'right') {
		$offset = 'offset-right';
	} else {
		$offset = NULL;
	}

	$align = get_sub_field('align');

	$classes = $align . ' ' . $offset;

?>

<section id="<?php echo $layout_index; ?>" class="layout gallery">
	<?php include(locate_template('layouts/component-intro.php')); ?>
    <div class="wrapper">
        <div class="content">
            <?php if($images): ?>
				<?php
					$i = 1;
					$count = count($images);
				?>
                <div class="gallery-wrapper <?php echo $classes; ?>">
					<!-- Left Column -->
					<div class="col col-gallery">
						<?php if ( $display_content && $content_position == 'left' ): ?>

							<?php if ( have_rows('content') ) : ?>
								<?php while( have_rows('content') ) : the_row(); ?>

									<div class="text">

										<?php if ($content_title): ?>
											<div class="headings">
												<h2 class="medium-ass-heading"><?php echo $content_title; ?></h2>
												<?php if ($content_subtitle): ?>
													<h3 class="h2"><?php echo $content_subtitle; ?></h3>
												<?php endif; ?>
											</div>
										<?php endif; ?>

										<?php echo $content_wysiwyg; ?>

										<?php if ($display_button): ?>
											<?php if ( have_rows('button') ) : ?>
										        <div class="buttons">
											        <?php while( have_rows('button') ) : the_row(); ?>
														<?php
															$link = get_sub_field('link');
															$lightbox = get_sub_field('lightbox');
											                if ($link) {
											                    $link_url = $link['url'];
											                    $link_title = $link['title'];
											                    $link_target = $link['target'];

											                    if ($link_target == NULL) {
											                        $link_target = '_self';
											                    }

																$jpg = ".jpg";
																$jpeg = ".jpeg";
																$png = ".png";
																$youtube = "youtube";
																$youtu_be = "youtu.be";
																$vimeo = "vimeo";

																if ($lightbox) {
																	if ( stripos( $link_url, $jpg ) !== false ) {
																		// Open jpg normally
																		$lightbox = 'data-featherlight="' . $link_url . '" ';
																	} elseif ( stripos( $link_url, $jpeg ) !== false ) {
																		// Open jpeg normally
																		$lightbox = ' data-featherlight="' . $link_url . '" ';
																	} elseif ( stripos( $link_url, $png ) !== false ) {
																		// Open png normally
																		$lightbox = 'data-featherlight="' . $link_url . '" ';
																	} elseif ( stripos( $link_url, $youtube ) !== false ) {
																		// Open a youtube video
																		$lightbox = 'data-featherlight="iframe" data-featherlight-iframe-width="640" data-featherlight-iframe-height="480" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true"';
																	} elseif ( stripos( $link_url, $youtu_be ) !== false ) {
																		// Open a youtube video
																		$lightbox = 'data-featherlight="iframe" data-featherlight-iframe-width="640" data-featherlight-iframe-height="480" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true"';
																	} elseif ( stripos( $link_url, $vimeo ) !== false ) {
																		// Open a vimeo video
																		$lightbox = 'data-featherlight="iframe" data-featherlight-iframe-width="640" data-featherlight-iframe-height="480" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true"';
																	} else {
																		// Do not open a pdf in a lightbox
																		// Do not open links in an iframe (because the screen loader runs and doesn't hide)
																		$lightbox = NULL;
																	}
																} else {
																	$lightbox = NULL;
																}
																echo '<a href="' . $link_url . '" target="' . $link_target . '"' . $lightbox . 'class="btn"><span class="label">' . $link_title . '</span><span class="btn-fill"></span></a>';
															}
														?>
													<?php endwhile; ?>
												</div>
											<?php endif; ?>
										<?php endif; ?>

									</div>

								<?php endwhile; ?>
							<?php endif; ?>

						<?php endif; ?>
						<div class="flex-gallery">
							<?php foreach( $images as $image ): ?>
								<?php if ($i % 2 !== 0): ?>
									<!-- Odd images -->
									<img data-aos="fade-up" class="img" <?php acf_responsive_image($image['ID'], $size, '700px'); ?> alt="<?php echo $image['alt']; ?>">
								<?php endif; ?>
								<?php $i++; ?>
		                    <?php endforeach; ?>
						</div>
					</div>
					<!-- Right Column -->
					<div class="col col-gallery">
						<?php if ( $display_content && $content_position == 'right' ): ?>

							<?php if ( have_rows('content') ) : ?>
								<?php while( have_rows('content') ) : the_row(); ?>

									<div class="text">

										<?php if ($content_title): ?>
											<div class="headings">
												<h2 class="medium-ass-heading"><?php echo $content_title; ?></h2>
												<?php if ($content_subtitle): ?>
													<h3 class="h2"><?php echo $content_subtitle; ?></h3>
												<?php endif; ?>
											</div>
										<?php endif; ?>

										<?php echo $content_wysiwyg; ?>

										<?php if ($display_button): ?>
											<?php if ( have_rows('button') ) : ?>
										        <div class="buttons">
											        <?php while( have_rows('button') ) : the_row(); ?>
														<?php
															$link = get_sub_field('link');
															$lightbox = get_sub_field('lightbox');
											                if ($link) {
											                    $link_url = $link['url'];
											                    $link_title = $link['title'];
											                    $link_target = $link['target'];

											                    if ($link_target == NULL) {
											                        $link_target = '_self';
											                    }

																$jpg = ".jpg";
																$jpeg = ".jpeg";
																$png = ".png";
																$youtube = "youtube";
																$youtu_be = "youtu.be";
																$vimeo = "vimeo";

																if ($lightbox) {
																	if ( stripos( $link_url, $jpg ) !== false ) {
																		// Open jpg normally
																		$lightbox = ' data-featherlight="' . $link_url . '" ';
																	} elseif ( stripos( $link_url, $jpeg ) !== false ) {
																		// Open jpeg normally
																		$lightbox = ' data-featherlight="' . $link_url . '" ';
																	} elseif ( stripos( $link_url, $png ) !== false ) {
																		// Open png normally
																		$lightbox = ' data-featherlight="' . $link_url . '" ';
																	} elseif ( stripos( $link_url, $youtube ) !== false ) {
																		// Open a youtube video
																		$lightbox = ' data-featherlight="iframe" data-featherlight-iframe-width="640" data-featherlight-iframe-height="480" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true"';
																	} elseif ( stripos( $link_url, $youtu_be ) !== false ) {
																		// Open a youtube video
																		$lightbox = ' data-featherlight="iframe" data-featherlight-iframe-width="640" data-featherlight-iframe-height="480" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true"';
																	} elseif ( stripos( $link_url, $vimeo ) !== false ) {
																		// Open a vimeo video
																		$lightbox = ' data-featherlight="iframe" data-featherlight-iframe-width="640" data-featherlight-iframe-height="480" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true"';
																	} else {
																		// Do not open a pdf in a lightbox
																		// Do not open links in an iframe (because the screen loader runs and doesn't hide)
																		$lightbox = NULL;
																	}
																} else {
																	$lightbox = NULL;
																}
																echo '<a href="' . $link_url . '" target="' . $link_target . '"' . $lightbox . 'class="btn"><span class="label">' . $link_title . '</span><span class="btn-fill"></span></a>';
															}
														?>
													<?php endwhile; ?>
												</div>
											<?php endif; ?>
										<?php endif; ?>

									</div>

								<?php endwhile; ?>
							<?php endif; ?>

						<?php endif; ?>
						<div class="flex-gallery">
							<?php foreach( $images as $image ): ?>
								<?php if ($i % 2 == 0): ?>
									<!-- Even images -->
									<img data-aos="fade-up" class="img" <?php acf_responsive_image($image['ID'], $size, '700px'); ?> alt="<?php echo $image['alt']; ?>">
								<?php endif; ?>
		                    <?php $i++; endforeach; ?>
						</div>
					</div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
