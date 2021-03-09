<!doctype html>
<?php $site_url = site_url(); ?>
<?php $template_url = get_template_directory_uri(); ?>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<?php if (is_search()) {
    ?>
		<meta name="robots" content="noindex, nofollow">
	<?php
} ?>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="//ajax.googleapis.com" rel="dns-prefetch">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $template_url; ?>/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $template_url; ?>/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $template_url; ?>/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo $template_url; ?>/favicons/site.webmanifest">
	<link rel="mask-icon" href="<?php echo $template_url; ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="<?php echo $template_url; ?>/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="<?php echo $template_url; ?>/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<?php if (is_singular()) {
        wp_enqueue_script('comment-reply');
    } ?>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="page">

	<?php if (get_field('cookie_notice_display', 'option')): ?>
		<div class="option cookie-notice">
			<button class="close">Close</button>
			<div class="wrapper">
				<div class="content">
					<p><?php the_field('cookie_notice_content', 'option'); ?></p>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="screen-loader">
        <svg version="1.1" id="L3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
        <circle fill="none" stroke="#e48d3b" stroke-width="4" cx="50" cy="50" r="44" style="opacity:1;"/>
          <circle fill="#fff" stroke="#e48d3b" stroke-width="3" cx="8" cy="54" r="6" >
            <animateTransform
              attributeName="transform"
              dur="2s"
              type="rotate"
              from="0 50 48"
              to="360 50 52"
              repeatCount="indefinite" />
          </circle>
        </svg>
    </div>

	<?php include(locate_template('inc/notification.php')); ?>

    <header class="header" role="banner">

		<div class="header-wrapper">

			<div class="logo-wrapper">
				<a href="/" class="logo"><img src="<?php echo $template_url; ?>/app/assets/img/logo-nav.svg" alt="Gravely Brewing Company"></a>
				<span class="tagline">Fresh beer is everything.</span>
			</div>

			<div class="nav-wrapper">
				<nav class="nav" role="navigation">
					<ul class="menu">
		                <li><a href="/beer" data-move="move-1">Beer</a></li>
		                <li><a href="/events" data-move="move-2">Events</a></li>
		                <li><a href="/food" data-move="move-3">Food</a></li>
		            </ul>
		        </nav>
				<nav class="nav nav-2">
					<ul class="menu-2">
						<?php
		                    $argsMain = array(
		                        'menu' => 'main-menu',
		                        'container' => 'false',
		                        'items_wrap' => '%3$s'
		                    );
		                 ?>
						<?php wp_nav_menu($argsMain);?>
					</ul>
				</nav>
			</div>

		</div>

		<nav class="mobile-nav" role="navigation">

			<div class="mobile-nav-wrapper">

				<div class="hamburger closed">

					<div class="burger-main">
						<div class="burger-inner">
							<span class="top"></span>
							<span class="mid"></span>
							<span class="bot"></span>
						</div>
					</div>

					<div class="svg-main">
						<svg class="svg-circle">
						    <path class="path" fill="none" stroke="#181214" stroke-miterlimit="10" stroke-width="4" d="M27,2C13.2,2,2,13.2,2,27s11.2,25,25,25s25-11.2,25-25S40.8,2,27,2"/>
						</svg>
					</div>

					<div class="path-burger">
						<div class="animate-path">
							<div class="path-rotation"></div>
						</div>
					</div>

				</div>

				<ul class="mobile-menu">
					<?php
						$args = array(
							'menu' => 'mobile',
							'container' => 'false',
							'items_wrap' => '%3$s'
						);
					 ?>
					<?php wp_nav_menu($args);?>
					<ul class="social">
	                    <?php if (have_rows('footer_social', 'option')): ?>

	                    	<ul class="social-list">

	                    	<?php while (have_rows('footer_social', 'option')): the_row(); ?>
	                            <?php
                                    $network = get_sub_field('network');
                                    $link = get_sub_field('link');
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'];

                                    if ($link_target == null) {
                                        $link_target = '_self';
                                    }
                                ?>
	                    		<li class="social-item">
	                                <?php if ($network == 'facebook'): ?>
	                                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
	                                <?php elseif ($network == 'twitter'): ?>
	                                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
	                                <?php elseif ($network == 'instagram'): ?>
	                                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
	                                <?php elseif ($network == 'snapchat'): ?>
	                                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
	                                <?php elseif ($network == 'pinterest'): ?>
	                                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
	                                <?php elseif ($network == 'googleplus'): ?>
	                                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
	                                <?php elseif ($network == 'linkedin'): ?>
	                                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
	                                <?php elseif ($network == 'youtube'): ?>
	                                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
	                                <?php elseif ($network == 'vimeo'): ?>
	                                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
	                                <?php endif; ?>
	                    		</li>

	                    	<?php endwhile; ?>

	                    	</ul>

	                    <?php endif; ?>
	                    <li><a href="http://instagram.com/gravelybrewing/" target="_blank"><i class="fab fa-instagram"></i></a></li>
	                    <li><a href="http://www.facebook.com/gravelybrewing" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
	                    <li><a href="http://twitter.com/gravelybrewing" target="_blank"><i class="fab fa-twitter"></i></a></li>
	                    <li><a href="https://www.yelp.com/biz/gravely-brewing-louisville" target="_blank"><i class="fab fa-yelp"></i></a></li>
	                    <li><a href="https://untappd.com/GravelyBrewingCo" target="_blank"><i class="fab fa-untappd"></i></a></li>
	                </ul>
	            </ul>

			</div>

		</nav>

    </header>

    <main id="top" class="main" role="main">
