<?php
	$delay = 0;
	$intro = get_sub_field('intro');
    $display_intro = $intro['display_intro'];
    $title = $intro['title'];
    $subtitle = $intro['subtitle'];
    $style = $intro['styles'];

	$bottles = get_sub_field('bottles');
	$size = 'medium'; // (thumbnail, medium, large, full or custom size)

?>

<section id="<?php echo $layout_index; ?>" class="layout basic-content">
	<?php if( $bottles ): ?>
		<div class="wrapper">
			<div class="content">
				<div class="featured-image beer-bottles">
			    <?php foreach( $bottles as $bottle ): ?>
					<div class="bottle" data-aos="fade-left" data-aos-delay="<?php echo $delay; ?>">
						<img <?php acf_responsive_image($bottle['ID'], $size, '125px'); ?>  alt="<?php echo $bottle['alt']; ?>" />
					</div>
				<?php $delay += 100; endforeach; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if ($display_intro): ?>
	    <div class="intro" data-aos="fade-up" data-aos-anchor=".bottle:last-child" data-aos-delay="<?php $delay += 100; echo $delay; ?>">
			<div class="wrapper">
				<h2 class="title <?php echo $style; ?>"><?php echo $title; ?></h2>
		        <?php if ($subtitle): ?>
		            <p class="summary"><?php echo $subtitle; ?></p>
		        <?php endif; ?>
			</div>
	    </div>
	<?php endif; ?>
</section>
