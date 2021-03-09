<?php
	$card_size = get_sub_field('card_size');
	$cards_per_row = get_sub_field('cards_per_row');

	if (get_sub_field('image_offset')) {
		$offset = 'offset';
	} else {
		$offset = null;
	}

	$classes = $card_size . ' ' . $cards_per_row . ' ' . $offset;

    $intro = get_sub_field('intro');
    $display_intro = $intro['display_intro'];
    $title = $intro['title'];
    $subtitle = $intro['subtitle'];

	if ($card_size == 'large') {
		$card_title_size = 'class="medium-ass-heading"';
		$card_subtitle_size = 'class="h2"';
	} else {
		$card_title_size = null;
		$card_subtitle_size = 'class="h5"';
	}

?>

<section id="<?php echo $layout_index; ?>" class="layout cards <?php echo $classes; ?>">

	<?php include(locate_template('layouts/component-intro.php')); ?>

    <div class="wrapper">
        <div class="content">

            <?php if( have_rows('cards') ): ?>

            	<ul class="card-list"<?php if ($card_size == 'small'): ?> data-aos="fade-up"<?php endif; ?>>
            	<?php while( have_rows('cards') ): the_row(); ?>

					<?php
						$image = get_sub_field('image');
					    $image_id = $image['ID'];
					    $image_url = $image['url'];
					    $image_alt = $image['alt'];
					    $image_large = $image['sizes']['large'];
						$image_position = get_sub_field('image_position');

						$hover = get_sub_field('image_hover');
					    $hover_id = $hover['ID'];
					    $hover_url = $hover['url'];
					    $hover_alt = $hover['alt'];
					    $hover_large = $hover['sizes']['large'];
					?>

            		<li class="card">
						<?php if ($image_position == 'right'): ?>
							<div class="col col-text">
								<div class="headings">
									<?php if (get_sub_field('title')): ?>
										<h2 <?php echo $card_title_size; ?>><?php the_sub_field('title'); ?></h2>
									<?php endif; ?>
									<?php if (get_sub_field('subtitle')): ?>
										<h3 <?php echo $card_subtitle_size; ?>><?php the_sub_field('subtitle'); ?></h2>
									<?php endif; ?>
								</div>
								<?php the_sub_field('content'); ?>
								<?php include(locate_template('layouts/component-button.php')); ?>
							</div>
							<?php if ($image): ?>
								<div class="col col-img">
									<img <?php acf_responsive_image($image_id, $image_large, '1600px'); ?>  alt="<?php echo $image_alt; ?>" />
									<img class="img-hover" <?php acf_responsive_image($hover_id, $hover_large, '1600px'); ?>  alt="<?php echo $hover_alt; ?>" />
								</div>
							<?php endif; ?>
						<?php else: ?>
							<?php if ($image): ?>
								<div class="col col-img">
									<img <?php acf_responsive_image($image_id, $image_large, '1600px'); ?>  alt="<?php echo $image_alt; ?>" />
									<img class="img-hover" <?php acf_responsive_image($hover_id, $hover_large, '1600px'); ?>  alt="<?php echo $hover_alt; ?>" />
								</div>
							<?php endif; ?>
							<div class="col col-text">
								<div class="headings">
									<?php if (get_sub_field('title')): ?>
										<h2 <?php echo $card_title_size; ?>><?php the_sub_field('title'); ?></h2>
									<?php endif; ?>
									<?php if (get_sub_field('subtitle')): ?>
										<h3 <?php echo $card_subtitle_size; ?>><?php the_sub_field('subtitle'); ?></h2>
									<?php endif; ?>
								</div>
								<?php the_sub_field('content'); ?>
								<?php include(locate_template('layouts/component-button.php')); ?>
							</div>
						<?php endif; ?>
            		</li>

            	<?php endwhile; ?>
            	</ul>
            <?php endif; ?>

        </div>
    </div>
</section>
