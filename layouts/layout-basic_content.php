<?php
    $basic_content = get_sub_field('basic_content');
	$layout_id = get_sub_field('layout_id');
	$stacked = get_sub_field('stacked');

	if ($layout_id) {
		$id = 'id="' . $layout_id . '"';
	} else {
		$id = 'id="' . $layout_index . '"';
	}
?>

<?php if ($stacked): ?>
	<section <?php echo $id; ?> class="layout basic-content stack">
	    <div class="wrapper">
	        <div class="content">
				<?php include(locate_template('layouts/component-intro.php')); ?>
				<div class="copy">
					<?php echo $basic_content; ?>
				</div>
				<?php include(locate_template('layouts/component-button.php')); ?>
	        </div>
	    </div>
	</section>
<?php else: ?>
	<section <?php echo $id; ?> class="layout basic-content" data-aos="fade-up">
		<?php include(locate_template('layouts/component-intro.php')); ?>
	    <div class="wrapper">
	        <div class="content">
				<div class="copy">
					<?php echo $basic_content; ?>
				</div>
				<?php include(locate_template('layouts/component-button.php')); ?>
	        </div>
	    </div>
	</section>
<?php endif; ?>
