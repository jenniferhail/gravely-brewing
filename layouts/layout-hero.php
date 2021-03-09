<?php
    $bg_settings = get_sub_field('bg_settings');
    $image = get_sub_field('image');
    $video = get_sub_field('video');
	$bg_parallax = get_sub_field('parallax');
	$stacked = get_sub_field('stacked');

    $title = get_sub_field('title');

	if ($bg_parallax) {
		$parallax = ' rellax" data-rellax-speed="-2"';
	} else {
		$parallax = '"';
	}

	if ($stacked) {
		$classes = 'stack';
	} else {
		$classes = NULL;
	}

    if ($bg_settings == 'image') {
        $background = '<div class="background' . $parallax . ' style="background-image: url(' . $image['url'] . ');"></div>';
    } elseif ($bg_settings == 'video') {
        $background = '<video autoplay loop class="video-background" muted plays-inline> <source src="https://player.vimeo.com/external/158148793.hd.mp4?s=8e8741dbee251d5c35a759718d4b0976fbf38b6f&profile_id=119&oauth2_token_id=57447761" type="video/mp4"> </video>';
    } else {
        exit;
    }
?>

<section id="<?php echo $layout_index; ?>" class="layout hero <?php echo $classes; ?>">
	<?php if ($title): ?>
		<div class="intro">
			<h2 class="title large-ass-heading" data-aos="fade-up"><?php echo $title; ?></h2>
		</div>
	<?php endif; ?>
    <div class="content">
		<?php include(locate_template('layouts/component-button.php')); ?>
		<?php
			if (get_sub_field('link_image')) {
				$hero = get_sub_field('hero_link');
				$hero_url = $hero['url'];
				$hero_title = $hero['title'];
				$hero_target = $hero['target'];

				if ($hero_target == NULL) {
					$hero_target = '_self';
				}
				echo '<a href="' . $hero_url . '" target="' . $hero_target . '" class="hero-link" alt="' . $hero_title . '"></a>';
			}
		?>
		<?php echo $background; ?>
    </div>
</section>
