<?php

	$post_type = get_sub_field('post_type');
	$filter_type = get_sub_field('filter_by_category');
	$posts_to_show = get_sub_field('posts_to_show');
	$number_of_posts = get_sub_field('number_of_posts');
	$order_by = get_sub_field('order_by');
    $view = get_sub_field('view');
	$search = get_sub_field('search');

	$term_obj = get_sub_field($post_type . '_taxonomy');

	$tax_query = '';
	if ($term_obj) {
		$tax_query = array(
			'tax_query' => array(
				array(
					'taxonomy' => $term_obj->taxonomy,
					'terms'    => $term_obj->term_id,
				),
			),
		);
	}

    $classes = $post_type . ' ' . $view . ' ' . $filter_type;

	if($posts_to_show == 'all'){
		$posts_per_page = -1;
	} else {
		$posts_per_page = $number_of_posts;
	}

    if ($view == 'grid' || $view == 'slider') {
        $classes .= ' cards medium';
    }

	$args = array(
		'post_type'			=> $post_type,
		'posts_per_page'	=> $posts_per_page,
		'orderby'           => $order_by,
		$tax_query
	);

	$the_query = new WP_Query($args);
?>

<section id="<?php echo $layout_index; ?>" class="layout listing <?php echo $classes; ?>">

	<?php include(locate_template('layouts/component-intro.php')); ?>

    <div class="wrapper">
        <div class="content">

			<?php if($the_query->have_posts() || $post_type == 'custom') : ?>

            	<?php include(locate_template('layouts/views/list-item.php')); ?>

			<?php endif; ?>

			<?php include(locate_template('layouts/component-button.php')); ?>
        </div>
    </div>
</section>
