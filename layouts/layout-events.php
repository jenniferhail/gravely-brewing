<?php
$args = array(
	'post_type' 		=> 'gravely_events',
	'posts_per_page'	=> -1,
    // 'paged'			=> $paged,
	'meta_key'			=> 'date',
    'orderby'			=> 'meta_value',
    'order'				=> 'ASC',
	// Display events that occur today and into the future
	'meta_query' => array(
        array(
            'key' => 'date',
            'value' => date("Y/m/d"),
            'compare' => '>=',
            'type' => 'DATE'
        )
    )
);
// The query
$the_query = new WP_Query($args);

$events_title = get_sub_field('events_list_title');
?>

<section class="layout slider">
	<?php include(locate_template('layouts/component-intro.php')); ?>
	<div class="wrapper">
		<div class="content">

			<?php if ($the_query->have_posts()) : ?>

				<div class="poster-slider">
					<ul class="poster-list">

						<!-- the loop -->
					    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

							<?php
								// Event post type fields
								$poster = get_field('poster');
								$poster_id = $poster['ID'];
								$poster_url = $poster['url'];
								$poster_alt = $poster['alt'];
								$poster_large = $poster['sizes']['large'];
							?>

							<?php if ($poster): ?>
								<li class="poster-item">
									<div class="poster">
										<a href="#" class="img-hover" data-featherlight="<?php echo $poster_url; ?>"><i class="fas fa-search"></i>View Poster</a>
										<img <?php acf_responsive_image($poster_id, $poster_large, '434px'); ?> alt="<?php the_title(); ?>">
									</div>
								</li>
							<?php endif; ?>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

					</ul>
				</div>

			<?php endif; ?>

		</div>
	</div>
</section>

<section class="layout listing event-listing">
	<?php if ($events_title): ?>
		<div class="intro">
			<div class="wrapper">
				<h1 class="small-ass-heading"><?php echo $events_title; ?></h1>
			</div>
		</div>
	<?php endif; ?>
	<div class="wrapper">
		<div class="content">
			<?php if ($the_query->have_posts()) : ?>
				<ul class="list-items event-items">
					<!-- the loop -->
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

						<?php
							$date = get_field('date');
							$format_in = 'Y/m/d'; // the format your value is saved in (set in the field options)
							$format_out = 'm/d/Y'; // the format you want to end up with
							$event_date = DateTime::createFromFormat($format_in, get_field('date'));
							$event_date_end = DateTime::createFromFormat($format_in, get_field('date_end'));

							$today = date('Y/m/d');
							$description = get_field('description');

							$thumbnail = get_field('square_thumbnail');
							$thumbnail_id = $thumbnail['ID'];
							$thumbnail_url = $thumbnail['url'];
							$thumbnail_thumb = $thumbnail['sizes']['medium'];

							$link = get_field('event_link');
							if ($link) {
			                    $link_url = $link['url'];
			                    $link_title = $link['title'];
			                    $link_target = $link['target'];

			                    if ($link_target == NULL) {
			                        $link_target = '_self';
			                    }
							}
						?>

						<li class="item event-item">
							<div class="col col-img">
								<?php if ($thumbnail): ?>
									<img <?php acf_responsive_image($thumbnail_id, $thumbnail_thumb, '300px'); ?> alt="<?php the_title(); ?>">
								<?php else: ?>
									<img src="<?php echo $template_url; ?>/app/assets/img/music/gravely-event-placeholder.jpg" alt="<?php the_title(); ?>">
								<?php endif; ?>
							</div>
							<div class="col">
								<h2 class="item-title"><?php the_title(); ?></h2>
								<p class="item-date"><?php echo $event_date->format( $format_out ); ?><?php if ($event_date_end != NULL): ?> &ndash; <?php echo $event_date_end->format( $format_out ); ?><?php endif; ?></p>
							</div>
							<div class="col col-details">
								<?php if ($description): ?>
									<p class="item-description"><?php echo $description; ?></p>
								<?php endif; ?>
							</div>
							<div class="col">
								<?php if ($link && $date >= $today ): ?>
									<div class="buttons">
										<?php echo '<a href="' . $link_url . '" target="' . $link_target . '" class="btn"><span class="label">' . $link_title . '</span><span class="btn-fill"></span></a>'; ?>
									</div>
								<?php endif; ?>
							</div>
						</li>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</ul>
			<?php else: ?>
				<h2 class="item-title">Check back soon for our next event.</h2>
			<?php endif; ?>
			<div class="layout-button">
				<?php include(locate_template('layouts/component-button.php')); ?>
			</div>
		</div>
	</div>
</section>
