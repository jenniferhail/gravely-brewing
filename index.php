<?php get_header(); ?>

	<div class="interior-page">
		<?php if(have_rows('layouts')) : ?>

			<?php while (have_rows('layouts')) : the_row(); ?>

				<?php 
					$layout_type = get_row_layout();
					$layout_index = 'layout-' . get_row_index();
				?>
				<?php include(locate_template('layouts/layout-' . $layout_type . '.php')); ?>

			<?php endwhile; ?>

		<?php endif; ?>
	</div>

<?php get_footer(); ?>
