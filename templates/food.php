<?php
/* Template Name: Food Page */
get_header();
$home_url = home_url();
$template_url = get_template_directory_uri();
?>

<?php if(have_rows('layouts')) : ?>
	<?php while (have_rows('layouts')) : the_row(); ?>
		<?php 
			$layout_type = get_row_layout();
			$layout_index = 'layout-' . get_row_index();
		?>
		<?php include(locate_template('layouts/layout-' . $layout_type . '.php')); ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
