<?php
    $intro = get_sub_field('intro');
    $display_intro = $intro['display_intro'];
    $title = $intro['title'];
    $subtitle = $intro['subtitle'];
    $style = $intro['styles'];
?>
<?php if ($display_intro): ?>
    <div class="intro">
		<h2 class="title <?php echo $style; ?>"><?php echo $title; ?></h2>
        <?php if ($subtitle): ?>
            <p class="summary"><?php echo $subtitle; ?></p>
        <?php endif; ?>
    </div>
<?php endif; ?>
