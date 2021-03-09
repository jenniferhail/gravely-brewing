<?php if($posts) : ?>

    <?php
        $taxonomy = get_object_taxonomies($post_type);
        $terms = get_terms($taxonomy);
    ?>

    <?php // if ($post_type !== 'bdas_classes'): ?>
        <form class="filter active dropdown">
            <!-- Loop through categories to create a select list to filter with -->
            <?php if ($post_type == 'bdas_services'): ?>
                <select name="taxonomy-filter" class="select-filter" id="select-<?php echo $taxonomy[0]; ?>" data-taxonomy="<?php echo $taxonomy[0]; ?>">
                    <option value="all">Choose a category</option>
                    <?php foreach ($terms as $term): ?>
                        <option value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
                    <?php endforeach; ?>
                </select>
            <?php endif; ?>

			<?php if ($post_type !== 'gravely_events'): ?>
				<?php if ($filter_type == 'filter_on_tap'): ?>
					<div class="filter-toggle"><span class="filter-title">Doc's Hefe</span>
						<div class="arrow-icon"><span class="left-bar"></span><span class="right-bar"></span></div>
					</div>
					<!-- Loop through beers to create a list to filter with -->
					<ul name="taxonomy-filter" class="list-filter menu transition" id="list-on-tap" data-taxonomy="beer-on-tap">
						<?php foreach ($terms as $term): ?>
							<li><a href="#" data-term-id="<?php echo $term->term_id; ?>" data-glass-type="1" data-beer-fill="#F9B53D"><?php echo $term->name; ?></a></li>
						<?php endforeach; ?>
						<!-- <li><a href="#" data-term-id="1" data-glass-type="1" data-beer-fill="#F9B53D" class="active">Doc's Hefe</a></li>
						<li><a href="#" data-term-id="2" data-glass-type="2" data-beer-fill="#D80D8D">Channel Orange</a></li>
						<li><a href="#" data-term-id="3" data-glass-type="3" data-beer-fill="#1565c0">Shine On</a></li>
						<li><a href="#" data-term-id="4" data-glass-type="3" data-beer-fill="#123456">Czech Two</a></li>
						<li><a href="#" data-term-id="5" data-glass-type="4" data-beer-fill="#44ee01">Sprockets</a></li>
						<li><a href="#" data-term-id="6" data-glass-type="2" data-beer-fill="#ddFA30">La Bamba</a></li>
						<li><a href="#" data-term-id="7" data-glass-type="1" data-beer-fill="#0d0d0d">Freedom Rock</a></li> -->
					</ul>
				<?php else: ?>
					<div class="filter-toggle"><span class="filter-title">All Beer</span>
						<div class="arrow-icon"><span class="left-bar"></span><span class="right-bar"></span></div>
					</div>
					<!-- Loop through categories to create a list to filter with -->
					<ul name="taxonomy-filter" class="list-filter menu transition" id="list-beer-types" data-taxonomy="beer-types">
						<li><a href="#" id="view-all" data-term-id="all" class="active">All Beer</a></li>
						<?php foreach ($terms as $term): ?>
							<li><a href="#" data-term-id="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></a></li>
						<?php endforeach; ?>
						<li><a href="#" id="view-ales" data-term-id="1">Ales</a></li>
						<li><a href="#" id="view-lagers" data-term-id="2">Lagers</a></li>
						<li><a href="#" id="view-pilsners" data-term-id="3">Pilsners</a></li>
						<li><a href="#" id="view-stouts" data-term-id="4">Stouts</a></li>
						<li><a href="#" id="view-sours" data-term-id="5">Sours</a></li>
						<li><a href="#" id="view-hefeweizens" data-term-id="6">Hefeweizens</a></li>
						<li><a href="#" id="view-limited" data-term-id="7">Limited</a></li>
					</ul>
				<?php endif; ?>
			<?php endif; ?>
        </form>
    <?php // endif; ?>

    <ul class="list-items <?php echo $post_type; ?>-items">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php
                if ($taxonomy) {
                    $terms = wp_get_post_terms(get_the_id(), $taxonomy);
                    $data = 'data-' . $taxonomy[0] . '="';
                    foreach ($terms as $term) {
                        $data .= $term->term_id . ' ';
                    }
                    $data .= '"';
                } else {
                    $data = '';
                }
            ?>
            <li class="item <?php echo $post_type; ?>-item" <?php echo $data; ?>>
                <div class="col">
                    <?php if ($post_type == 'bdas_services'): ?>
                        <h2 class="h4 title fake-heading-2"><?php echo the_field('item_code') . ': '; ?><?php the_title(); ?></h2>
                    <?php else : ?>
                        <h2 class="h4 title"><?php the_title(); ?></h2>
                    <?php endif; ?>
                </div>
                <?php if ($post_type == 'bdas_classes'): ?>
                    <div class="col date-time">
                            <p class="date fake-heading-2">Date: <?php the_field('date'); ?></p>
                            <p class="time fake-heading-2">Time: <?php the_field('start_time'); ?> - <?php the_field('end_time'); ?></p>
                    </div>
                    <div class="col">
                            <p class="location fake-heading-2">Location: <?php the_field('location'); ?></p>
                    </div>
                    <div class="col description-col">
                        <p class="description"><?php the_field('description'); ?></p>
                            <?php $buttons = get_field('buttons'); ?>
                            <?php if($buttons) : ?>
                                <?php include(locate_template('layouts/component-button.php')); ?>
                            <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if($post_type !== 'bdas_classes') : ?>
                <div class="col">
                    <?php the_content(); ?>
                </div>
                <?php endif; ?>
                <?php if ($post_type == 'bdas_services'): ?>
                <div class="col">
                        <p class="price fake-heading-2"><?php the_field('price'); ?></p>
                </div>
                <?php endif; ?>
            </li>

       <?php endwhile; ?>
        <?php if ($post_type !== 'bdas_classes'): ?>
       <li class="no-results" aria-hidden="true">No results</li>
        <?php endif; ?>
   </ul>
   <?php wp_reset_postdata(); ?>
<?php endif; ?>
