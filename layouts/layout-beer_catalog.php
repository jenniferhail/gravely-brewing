<?php
$catalog_args = array(
    'post_type' => 'gravely_beer',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
);
$catalog_query = new WP_Query($catalog_args);

$taxonomy = get_object_taxonomies('gravely_beer');
$terms = get_terms(array(
    'taxonomy' => 'gravely_beer_types',
    'hide_empty' => true,
));
?>

<section id="<?php echo $layout_index; ?>" class="layout listing">
	<?php include(locate_template('layouts/component-intro.php')); ?>
	<div class="wrapper">
		<div class="content">

			<form class="filter active dropdown">
				<div class="filter-toggle"><span class="filter-title">All Beer</span>
					<div class="arrow-icon"><span class="left-bar"></span><span class="right-bar"></span></div>
				</div>
				<!-- Loop through categories to create a list to filter with -->
				<ul name="taxonomy-filter" class="list-filter menu transition" id="list-beer-types" data-taxonomy="<?php echo $taxonomy[0]; ?>">
					<li><a href="#" id="view-all" data-term-id="all" class="active">All Beer</a></li>
					<?php foreach ($terms as $term): ?>
						<?php if ($term->slug != 'on-tap'): ?>
							<li><a href="#" id="view-<?php echo $term->slug; ?>" data-term-id="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></a></li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
			</form>

			<div class="filtered-list slider-list">
				<ul class="beer-list slick-it">
					<?php while ($catalog_query->have_posts()) : $catalog_query->the_post(); ?>
						<?php
                            $post_id = $catalog_query->post->ID;

                            if ($taxonomy) {
                                $terms = get_the_terms($catalog_query->post, $taxonomy);
                                $data = 'data-' . $taxonomy[0] . '="';
                                foreach ($terms as $term) {
                                    $data .= $term->term_id . ' ';
                                }
                                $data .= '"';
                            } else {
                                $data = '';
                            }
                            $sell_sheet = get_field('sell_sheet');
                            $song = get_field('spotify_embed');
                            $song_details = get_field('song_details');
                            $song_url = get_field('spotify_embed', false, false);
                            if (!strpos($song_url, 'embed')) {
                                $song_url = str_replace('.com/track', '.com/embed/track', $song_url);
                            }
                        ?>
						<li class="item" <?php echo $data; ?>>
							<div class="beer">
								<h3 class="title"><?php the_title(); ?></h3>
								<?php if (get_field('beer_style')): ?><span class="type"><?php the_field('beer_style'); ?></span><?php endif; ?><?php if (get_field('abv')): ?><span class="abv">ABV: <?php the_field('abv'); ?>%</span><?php endif; ?><?php if (get_field('ibu')): ?><span class="ibu">IBU: <?php the_field('ibu'); ?></span><?php endif; ?>
								<?php if (get_field('description')): ?>
									<p class="copy"><?php the_field('description'); ?></p>
								<?php endif; ?>
								<?php if ($sell_sheet['url']): ?>
									<div class="sell-sheet">
										<a class="sell-sheet-link" href="<?php echo $sell_sheet['url']; ?>" target="_self" data-featherlight="<?php echo $sell_sheet['url']; ?>">
											<svg class="small-glass" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 367.6 600" width="18"><style type="text/css">
											.st0{fill:none;stroke:#000000;stroke-width:11.2104;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
											</style><path class="st0" d="M56.2 582.7c-3.6 0-6.5-2.9-6.5-6.5l0 0c0-3.9 2.7-7.2 6.5-7.9 112.4-20.1 104.1-75.5 104.1-75.5v-50.2c15.7 0 45.2 0 45.2 0v50.2c0 0-8.2 55.4 104.1 75.5 3.8 0.7 6.5 4 6.5 7.9l0 0c0 3.6-2.9 6.5-6.5 6.5C309.7 582.7 178.7 596.1 56.2 582.7z"/><path class="st0" d="M46.1 9.9c0 0 11 63.1-24.7 191.9 -35.6 128.8 4.1 218.5 116.5 236.7 56.2 9.2 90.1 0 90.1 0 112.4-18.2 152.1-107.9 116.5-236.7C308.9 72.9 319.8 9.9 319.8 9.9H46.1z"/><path d="M324.7 207.2c-8.3-30.1-14.1-56.7-18.2-80 -109.3 6.1-206.2 2.3-247.1 0 -4.1 23.3-9.9 49.9-18.2 79.9 -18.3 66.2-15.5 120.6 8.1 157.4 18.4 28.6 49.3 46.6 91.9 53.5 15.5 2.5 30.6 3.8 45 3.8 0 0 0 0 0 0 23.1 0 36.4-3.4 36.4-3.4 0.7-0.2 1.4-0.3 2.1-0.5 42.6-6.9 73.5-24.9 91.8-53.5C340.2 327.8 343 273.4 324.7 207.2z"/>
										</svg><?php echo $sell_sheet['title']; ?>
										</a>
									</div>
								<?php endif; ?>
								<?php if ($song && $song_details): ?>
									<div class="spotify-embed">
										<div class="spotify-embed-inner">
											<div class="song-details">
												<a class="song-toggle" href="#"><svg class="play-btn" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg><?php echo $song_details; ?></a>
											</div>
											<div class="song-player">
												<iframe data-src="<?php echo $song_url; ?>" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
											</div>
										</div>
									</div>
								<?php endif; ?>
								<!-- <div class="badge">
											<img src="<?php // echo $badge_url;?>" alt="<?php // echo $badge_alt;?>">
										</div> -->
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
				<ul class="beer-cave"></ul>
			</div>

		</div>
	</div>
</section>

<?php wp_reset_postdata(); ?>
