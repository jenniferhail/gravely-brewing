<?php
/* Template Name: Home Page */
get_header();
$home_url = home_url();
$template_url = get_template_directory_uri();
?>

<section class="layout hero featured">
    <div class="content">
        <div class="backgrounds">
            <div class="background background-beer active"></div>
            <div class="background background-music"></div>
            <div class="background background-food"></div>
        </div>
        <div class="center-piece"></div>
        <div class="foregrounds">
            <div class="foreground foreground-beer active"></div>
            <div class="foreground foreground-music"></div>
            <div class="foreground foreground-food"></div>
        </div>
        <div class="g"></div>
    </div>
</section>

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
