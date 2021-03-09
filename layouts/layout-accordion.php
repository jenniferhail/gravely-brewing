<section id="<?php echo $layout_index; ?>" class="layout accordion">
	<?php include(locate_template('layouts/component-intro.php')); ?>
    <div class="wrapper">
        <div class="content">

            <?php if( have_rows('acc_item') ): ?>
            	<ul class="acc-list">
            	<?php while( have_rows('acc_item') ): the_row(); ?>

            		<li class="acc-item">
                        <h3 class="title"><?php the_sub_field('title'); ?></h3>
                        <div class="acc-content">
                            <div class="acc-content-wrapper">
                                <?php the_sub_field('content'); ?>
                                <?php include(locate_template('layouts/component-button.php')); ?>
                            </div>
                        </div>
            		</li>

            	<?php endwhile; ?>
            	</ul>
            <?php endif; ?>

        </div>
    </div>
</section>
