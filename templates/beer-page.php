<?php
/* Template Name: Beer */
get_header();
$home_url = home_url();
$template_url = get_template_directory_uri();
?>

<?php // if(have_rows('layouts')) : ?>
	<?php // while (have_rows('layouts')) : the_row(); ?>
		<?php // $layout_type = get_row_layout(); ?>
		<?php // include(locate_template('layouts/layout-' . $layout_type . '.php')); ?>
	<?php // endwhile; ?>
<?php // endif; ?>

<section class="layout listing filter_on_tap">
	<div class="intro">
		<div class="wrapper">
			<h2 class="h1 title">On tap right now at Gravely.</h2>
			<p class="summary">A time stamp will go here.</p>
		</div>
	</div>
	<div class="wrapper">
		<div class="content">
			<div class="flex-wrap">
				<form class="filter active dropdown">
					<div class="filter-toggle"><span class="filter-title">Doc's Hefe</span>
						<div class="arrow-icon"><span class="left-bar"></span><span class="right-bar"></span></div>
					</div>
					<!-- Loop through beers to create a list to filter with -->
					<ul name="taxonomy-filter" class="list-filter menu transition" id="list-on-tap" data-taxonomy="beer-on-tap">
						<li><a href="#" data-term-id="1" data-glass-type="1" data-beer-fill="#F9B53D" class="active">Doc's Hefe</a></li>
						<li><a href="#" data-term-id="2" data-glass-type="2" data-beer-fill="#ED792B">Channel Orange</a></li>
						<li><a href="#" data-term-id="3" data-glass-type="3" data-beer-fill="#F9B53D">Shine On</a></li>
						<li><a href="#" data-term-id="4" data-glass-type="3" data-beer-fill="#F9B53D">Czech Two</a></li>
						<li><a href="#" data-term-id="5" data-glass-type="4" data-beer-fill="#F9B53D">Sprockets</a></li>
						<li><a href="#" data-term-id="6" data-glass-type="2" data-beer-fill="#E0D375">La Bamba</a></li>
						<li><a href="#" data-term-id="7" data-glass-type="1" data-beer-fill="#F9B53D">Freedom Rock</a></li>
					</ul>
				</form>
				<ul class="filtered-list beers-on-tap">
					<li class="item" data-beer-on-tap="1">
						<div class="beer">
							<h3 class="title">Doc's Hefe</h3>
							<span class="type">IPA (Blood Orange Remix)</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="song">

									</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>
					<li class="item" data-beer-on-tap="2">
						<div class="beer">
							<h3 class="title">Channel Orange</h3>
							<span class="type">IPA (Blood Orange Remix)</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="song">

									</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>
					<li class="item" data-beer-on-tap="3">
						<div class="beer">
							<h3 class="title">Shine On</h3>
							<span class="type">IPA (Blood Orange Remix)</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="song">

									</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>
					<li class="item" data-beer-on-tap="4">
						<div class="beer">
							<h3 class="title">Czech Two</h3>
							<span class="type">IPA (Blood Orange Remix)</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="song">

									</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>
					<li class="item" data-beer-on-tap="5">
						<div class="beer">
							<h3 class="title">Sprockets</h3>
							<span class="type">IPA (Blood Orange Remix)</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="song">

									</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>
					<li class="item" data-beer-on-tap="6">
						<div class="beer">
							<h3 class="title">La Bamba</h3>
							<span class="type">IPA (Blood Orange Remix)</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="song">

									</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>
					<li class="item" data-beer-on-tap="7">
						<div class="beer">
							<h3 class="title">Freedom Rock</h3>
							<span class="type">IPA (Blood Orange Remix)</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="song">

									</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>
				</ul>
				<div class="beer-glasses">
					<ul class="glasses-list">
						<li class="glass pilsner">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 530">
								<g id="pilsner"><rect x="37" y="85.3" class="beerFill" width="426" height="426"/><path class="st3" d="M0 0v530h500V0H0zM327 265.7c-12.9 51.1-12.9 143.4-11.3 176.7 0.3 5.7-3.9 10.6-9.7 11.4 -21.3 3.1-39 4.7-60 4.7 0 0 0 0 0 0 -23.5 0-38.9-2-52.2-4 -5.7-0.9-9.8-5.7-9.6-11.4 1.6-33.4 1.7-126-11.3-177.4 -13.8-54.6-20.7-126.3-22.4-175.2 4.7-0.4 10.8-0.9 18.2-1.3 -0.1 16 0.5 31.9 1.5 47.7 1.4 21.9 3.7 43.6 6.6 65.1 1.5 10.8 3 21.5 4.8 32.3 1.7 10.7 3.6 21.4 5.6 32.1 2 10.7 4.2 21.2 6.5 31.9l8.7 31.3 -5.4-31.9c-1.2-10.7-2.2-21.5-3.2-32.2 -0.9-10.7-1.7-21.5-2.3-32.3 -0.7-10.7-1.1-21.5-1.5-32.2 -0.7-21.5-0.7-43 0.1-64.3 0.6-16.4 1.8-32.7 3.6-48.8 37.5-1.7 92.1-2.4 155.9 2.6C347.8 139.2 340.8 211.1 327 265.7z"/><path d="M250.9 530c-33.5 0-61.1-5.1-78.2-9.3 -9.2-2.3-14.9-11.3-13.1-20.6 1.7-8.2 4-21.6 5.5-38.9 0.1-1.2 0.8-2.3 1.8-3.1 1-0.7 2.3-1 3.5-0.7 16.6 4 77.1 15.9 159.3 0.1 1.2-0.2 2.4 0.1 3.4 0.8 1 0.7 1.6 1.8 1.7 3 1.6 17.3 3.9 30.8 5.5 39 1.9 9.3-3.9 18.4-13.2 20.6C299.8 527.6 274 530 250.9 530zM173.2 466.8c-1.6 15.4-3.7 27.4-5.2 35 -1 4.8 2 9.5 6.8 10.7 28.1 7 85 16.2 150.3 0.2 4.8-1.2 7.9-5.9 6.9-10.7 -1.5-7.7-3.7-19.8-5.2-35.3C251.7 480.4 194.8 471.5 173.2 466.8zM246 473.4c-39.4 0-66.8-5.5-77.1-8 -2-0.5-3.4-2.4-3.2-4.5 3.5-38.8 2.6-136.9-11.5-194.3 -12.1-49-19-102.6-21-163.9 -1.2-36.2-0.6-66.2-0.3-77.4 0.3-9.1 7.3-16.5 16.4-17.1 99.3-7 174.3-2.5 202-0.2 9 0.7 15.9 8.1 16.2 17.1 0.3 11.3 0.9 41.4-0.3 77.8 0 0 0 0 0 0 -2.1 61.3-9 114.9-21 163.9 -14.1 57.3-15 155.3-11.5 194 0.2 2.2-1.3 4.1-3.4 4.6C298.9 471.3 270.2 473.4 246 473.4zM174.4 457.9c19.9 4.4 75.7 13.5 151.2-0.4 -3-39.6-2.5-134 12.1-193 11.9-48.4 18.7-101.4 20.8-162.1 1.2-36.1 0.6-66 0.3-77.2 -0.1-4.7-3.7-8.5-8.4-8.8 -27.5-2.2-102-6.7-200.7 0.2 -4.7 0.3-8.4 4.2-8.5 8.9 -0.3 11.2-0.9 41 0.3 76.9 2.1 60.7 8.9 113.8 20.8 162.2C176.9 323.7 177.4 418.4 174.4 457.9zM362.7 102.5L362.7 102.5 362.7 102.5zM323.4 507.5c2-0.5 3.3-2.4 2.9-4.4 -1.1-5.2-2.4-11.6-3.6-20.6 -0.6-4.6-4.9-7.9-9.5-7.2 -22.5 3.4-45 4.2-67.1 4.2 -24.9 0-45.1-1.3-59.3-3.5 -4.6-0.7-9 2.5-9.6 7.2 -0.7 5-1.4 8.5-2.1 12.4 -1.1 6.5 3.1 12.6 9.5 14 14.5 3.1 37.6 6.7 65.3 6.7C275 516.2 299.7 513.3 323.4 507.5z"/></g>
							</svg>
						</li>
						<li class="glass pint">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 530">
								<g id="pint"><rect x="37" y="85.3" class="beerFill" width="426" height="426"/><path class="st3" d="M0 0v530h500V0H0zM335.7 473.1c-1.2 14.4-12 26.2-26.3 28.7 -17.2 3-39.3 5.7-64 5.7 -19.1 0-37.5-1.6-54.8-4.8 -14.1-2.6-24.8-14.2-26.1-28.5l-26-301c4.6 0.5 9.7 0.9 15.4 1.4l22.5 185.2 5.1-183.3c43.7 2.4 106.1 3.1 180.2-3.8L335.7 473.1z"/><path d="M245.4 530c-26.8 0-56.4-3-86.1-11.5 -8.3-2.4-14.4-9.9-15.2-18.5L107.2 72.2c-0.3-4 1-7.9 3.8-10.8 2.8-2.9 6.7-4.5 10.7-4.3 136.7 5.3 225.1 1.9 256.7 0.2 4-0.2 7.9 1.3 10.7 4.2 2.8 2.9 4.2 6.8 3.8 10.8l-36.9 427.3c-0.8 9-7.1 16.5-15.8 18.7C322.4 522.7 287.3 530 245.4 530zM121.1 65.5c-1.5 0-2.9 0.6-4 1.7 -1.1 1.2-1.6 2.7-1.5 4.3l36.9 427.7c0 0 0 0 0 0 0.5 5.2 4.1 9.7 9.1 11.1 73.9 21.4 148 6.9 176.4-0.3 5.2-1.3 9-5.8 9.5-11.2L384.4 71.6c0.1-1.6-0.4-3.1-1.5-4.2 -1.1-1.1-2.5-1.7-4.1-1.6 -31.8 1.7-120.4 5.1-257.5-0.2C121.2 65.5 121.2 65.5 121.1 65.5z"/></g>
							</svg>
						</li>
						<li class="glass stein">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 530">
								<g id="stein"><rect x="37" y="85.3" class="beerFill" width="426" height="426"/><path class="st3" d="M0 0v530h500V0H0zM340.8 497.9c-68.6 26-175.8 5.3-175.8 5.3 -52-145.5-33.4-230.9-33.4-230.9 0.4-7.9 5.4-8.1 5.4-8.1s3.8-1 10.7-2.4c0 7.7 0.2 15.5 0.6 23.1 0.9 18.3 2.6 36.5 4.9 54.6 1.2 9 2.5 18 4 27 1.5 9 3.1 17.9 4.8 26.8 1.8 8.9 3.6 17.7 5.7 26.6l7.9 26 -4.6-26.6c-0.9-8.9-1.7-17.9-2.3-26.8 -0.6-9-1.2-17.9-1.5-26.9 -0.4-9-0.6-17.9-0.7-26.8 -0.1-17.9 0.4-35.7 1.7-53.4 0.7-9.2 1.6-18.4 2.9-27.4 41.2-6.1 115.5-11.8 197.6 6.4 0 0 5 0.3 5.4 8.1C374.1 272.3 392.9 352.4 340.8 497.9z"/><path d="M493 325.9c-0.7-18.7-7.5-34.1-20.2-45.8 -17.5-16.1-46.4-24.7-79.9-23.9 -1.2-27.9-3.9-45.4-4.2-47.7 -0.6-9.3-6.2-12.3-9.6-12.7 -71.6-15.8-136.5-15-178.4-11.5 -43.4 3.6-71 10.6-74.5 11.5 -3.3 0.4-8.9 3.5-9.5 12.7 -0.5 3.2-5.7 40-4.4 94.4 1.3 52.3 9.1 132.2 39 215.7 0.5 1.4 1.7 2.5 3.2 2.7 0.3 0.1 30.7 5.8 69.9 7.9 10 0.5 19.6 0.8 28.9 0.8 39.8 0 73-4.9 99-14.8 1.2-0.4 2.1-1.4 2.5-2.5 6.3-17.6 11.6-35 16.1-51.9 8.1-1.9 40-10 58.3-22.4C463.6 415 495.2 385.2 493 325.9zM347.3 508c-21.6 7.9-59.9 16.1-122.4 12.8 -32.4-1.7-58.7-6-66.5-7.3 -28.8-81.5-36.4-159.3-37.7-210.5 -1.4-56 4.3-93 4.3-93.3 0-0.1 0-0.3 0.1-0.4 0.2-3.3 1.2-4.7 2.1-4.9 0.4 0 0.4 0 0.8-0.1 1.1-0.3 114.3-29.9 249.5 0 0.4 0.1 0.3 0.1 0.6 0.1 0.9 0.3 1.9 1.7 2.1 5 0 0.2 0 0.3 0.1 0.5 0 0.3 3.2 19.6 4.4 51.4v38.6c0 0.5 0.1 0.9 0.2 1.3C383.6 350.9 376.1 426.8 347.3 508zM393.3 299.9c0-0.2 0-0.3 0-0.5 2.4-2.8 15.5-6.2 22.1-6.6 21.7-1.3 40.3 15.4 43.2 38.7 3.7 29.6-22.7 59.5-48.7 74.8 -10.9 6.4-20.8 10.4-29.4 12C389.5 372 392.6 330.9 393.3 299.9zM469 388.9c-9.6 14.9-23.3 28-44.7 42.5 -14.4 9.8-39 16.9-50.7 20l5.6-24.3c10.4-1.4 21.9-5.8 35-13.5 14.7-8.6 28.5-21 38-34.1 11.7-16.2 16.9-33.1 14.9-49 -1.6-12.9-7.6-24.8-16.9-33.4 -9.7-8.9-22.2-13.5-35.2-12.7 -0.2 0-12.5 1.1-21.4 5.2 0.1-8.9 0-17.2-0.3-24.9 31.2-0.7 58 7.1 73.8 21.7 11 10.1 16.9 23.6 17.5 39.9C485.4 350.7 480.4 371.2 469 388.9z"/></g>
							</svg>
						</li>
						<li class="glass tulip">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 530">
								<g id="tulip"><rect x="37" y="85.3" class="beerFill" width="426" height="426"/><path class="st3" d="M0 0v530h500V0H0zM351.2 356.1c-13.9 21.7-37.3 35.3-69.5 40.5 -0.5 0.1-1.1 0.2-1.6 0.4 0 0-10.1 2.6-27.5 2.6 0 0 0 0 0 0 -10.9 0-22.4-1-34.1-2.9 -32.3-5.2-55.7-18.9-69.6-40.5 -17.9-27.9-20-69.1-6.1-119.2 6.3-22.8 10.7-42.9 13.8-60.5 3.7 0.2 8.1 0.4 13 0.7 -0.3 2.5-0.6 5-0.9 7.5 -1.3 9.8-3.1 19.6-5.5 29.2 -0.6 2.4-1.2 4.8-1.9 7.2 -0.6 2.4-1.4 4.7-2.1 7.1l-2.4 7.5c-0.8 2.6-1.5 5.2-2.2 7.7 -5.2 20.7-6.6 42.4-3.1 63.2 1.7 10.4 4.7 20.6 9.1 30 2.2 4.7 4.8 9.3 8.1 13.4 1.6 2.1 3.4 4 5.3 5.7 2 1.7 4.1 3.2 6.6 4.1 -2.3-1.1-4.2-2.8-5.9-4.7 -1.7-1.9-3.2-3.9-4.5-6.1 -2.6-4.3-4.6-8.9-6.2-13.7 -3.2-9.5-4.9-19.5-5.3-29.5 -1-19.9 2.6-39.8 9.6-58.1 0.9-2.3 1.8-4.6 2.8-6.8l3.1-6.9c1.1-2.4 2.2-4.8 3.2-7.3 1-2.5 2-4.9 2.9-7.4 3.7-9.9 6.8-20.1 9.5-30.3 0.9-3.6 1.8-7.1 2.6-10.7 37.5 1.2 92.2 1.8 151.7-1.5 3.1 17.6 7.5 37.8 13.8 60.6C371.2 287 369.1 328.3 351.2 356.1z"/><path d="M271.4 453.2v-34.7c7.8-0.8 12.5-2 13.7-2.2 38-6.2 65.8-22.8 82.9-49.3 21-32.8 24-79.5 8.6-135.2 -26.3-95.2-18.7-143-18.6-143.4 0.2-1.2-0.1-2.5-0.9-3.5s-2-1.5-3.2-1.5H146.3c-1.2 0-2.4 0.6-3.2 1.5 -0.8 1-1.1 2.2-0.9 3.5 0.1 0.5 7.8 47.9-18.6 143.4 -15.4 55.7-12.4 102.5 8.6 135.2 17.1 26.6 45 43.2 83.1 49.4 4.7 0.8 9.2 1.4 13.5 1.8v35.1c0 0.2 0 0.4 0 0.6 0.1 0.4 1.1 9.5-7.2 20.4 -14.4 19-45 27.9-68.2 32 -4.9 0.9-8.4 5.2-8.4 10.2 0 5 4 9 8.9 9.2 30.8 3.4 62.5 4.5 91 4.5 54.9 0 98.2-4.1 101.5-4.5 5-0.1 8.9-4.2 8.9-9.2 0-5-3.5-9.3-8.4-10.2 -23.2-4.1-53.8-13.1-68.2-32 -8.3-10.9-7.2-20-7.2-20.4C271.3 453.6 271.4 453.4 271.4 453.2zM139.3 362.3c-19.7-30.7-22.3-75-7.5-128.4 14-50.8 18.4-87.9 19.6-110.1 0.8-15.7 0.3-26.3-0.2-32h197.8c-0.5 5.7-1.1 16.4-0.2 32.1 1.2 22.2 5.6 59.4 19.6 110.1 14.8 53.3 12.1 97.7-7.5 128.4 -15.7 24.5-41.7 39.8-77.3 45.6 -0.1 0-0.3 0.1-0.4 0.1 -0.2 0.1-25.5 6.6-66.5-0.1C181 402.1 155 386.8 139.3 362.3zM345.2 514.6c0.8 0.2 1.4 0.9 1.4 1.8 0 0.4-0.3 0.7-0.7 0.7 -0.1 0-0.3 0-0.4 0 -1 0.1-99.8 10-191.1 0 -0.1 0-0.3 0-0.5 0 -0.4 0-0.7-0.3-0.7-0.7 0-0.9 0.6-1.7 1.4-1.8 3-0.5 5.9-1.1 8.7-1.7 11.5 0.7 22.9 1 34.3 1.2 11.6 0.2 23.1 0.3 34.6 0.1 5.8 0 11.5-0.2 17.3-0.3 5.8-0.2 11.5-0.3 17.3-0.6 11.5-0.4 23-1.2 34.5-2.1 -11.5 0.2-23 0.2-34.5 0 -5.7-0.1-11.5-0.3-17.2-0.4 -5.7-0.2-11.5-0.4-17.2-0.7 -11.5-0.6-22.9-1.3-34.4-2.2 -4-0.3-8.1-0.7-12.1-1 19.8-6.8 34.2-16.2 42.8-28.1 9.1-12.5 8.6-23.4 8.3-25.6v-33.5h13.9c0.5 0 1.1 0 1.6 0 0.6 0 1.2 0 1.8 0h8.5v33.5c-0.2 2.2-0.8 13.2 8.3 25.6C283.9 495.9 308.8 508 345.2 514.6z"/></g>
							</svg>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="layout listing">
	<div class="intro">
		<div class="wrapper">
			<h2 class="h1 title">If fresh beer was a religion, this would be&nbsp;a&nbsp;church.</h2>
			<p class="summary">Stop by Gravely anytime and have a religious experience or two. Halle-ale-ujah!</p>
		</div>
	</div>
	<div class="wrapper">
		<div class="content">
			<form class="filter active dropdown">
				<div class="filter-toggle"><span class="filter-title">All Beer</span>
					<div class="arrow-icon"><span class="left-bar"></span><span class="right-bar"></span></div>
				</div>
				<!-- Loop through categories to create a list to filter with -->
				<ul name="taxonomy-filter" class="list-filter menu transition" id="list-beer-types" data-taxonomy="beer-types">
					<li><a href="#" id="view-all" data-term-id="all" class="active">All Beer</a></li>
					<li><a href="#" id="view-ales" data-term-id="1">Ales</a></li>
					<li><a href="#" id="view-lagers" data-term-id="2">Lagers</a></li>
					<li><a href="#" id="view-pilsners" data-term-id="3">Pilsners</a></li>
					<li><a href="#" id="view-stouts" data-term-id="4">Stouts</a></li>
					<li><a href="#" id="view-sours" data-term-id="5">Sours</a></li>
					<li><a href="#" id="view-hefeweizens" data-term-id="6">Hefeweizens</a></li>
					<li><a href="#" id="view-limited" data-term-id="7">Limited</a></li>
				</ul>
			</form>
			<div class="filtered-list slider-list">
				<ul class="beer-list slick-it">
					<li class="item" data-beer-types="1">
						<div class="beer">
							<h3 class="title">Brain Damage</h3>
							<span class="type">Double IPA</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="spotify-embed">
								<iframe src="https://open.spotify.com/embed/track/6QgjcU0zLnzq5OrUoSZ3OK" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
							</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>

					<li class="item" data-beer-types="1">
						<div class="beer">
							<h3 class="title">Blitzkrieg Bock</h3>
							<span class="type">Double IPA</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="song">

									</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>

					<li class="item" data-beer-types="1">
						<div class="beer">
							<h3 class="title">Celebrated Summer</h3>
							<span class="type">Double IPA</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="song">

									</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>

					<li class="item" data-beer-types="2">
						<div class="beer">
							<h3 class="title">Channel Orange</h3>
							<span class="type">Double IPA</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="song">

									</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>

					<li class="item" data-beer-types="2">
						<div class="beer">
							<h3 class="title">Debaser</h3>
							<span class="type">Double IPA</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="song">

									</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>

					<li class="item" data-beer-types="2">
						<div class="beer">
							<h3 class="title">Doc's Hefe</h3>
							<span class="type">Double IPA</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="song">

									</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>

					<li class="item" data-beer-types="2">
						<div class="beer">
							<h3 class="title">Faith</h3>
							<span class="type">Double IPA</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="song">

									</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>

					<li class="item" data-beer-types="3">
						<div class="beer">
							<h3 class="title">Feel The Darkness</h3>
							<span class="type">Double IPA</span><span class="abv">ABV: 5%</span><span class="ibu">IBU: 17</span>
							<p class="copy">This big boy is hoppy enough to do some delicious damage! Featuring whole cone Mosaic in tandem with Citra and Amarillo hops, prepare for a bright Double IPA with a crisp mouthfeel. But be careful: a few too many of these and you'll end up on
								the dark side of the moon, too.</p>
							<!-- <div class="song">

									</div> -->
							<!-- <div class="badge">
										<img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
									</div> -->
						</div>
					</li>
				</ul>
				<ul class="beer-cave"></ul>
			</div>
			<!-- <div class="no-results">
				<p>Check back soon for more beer!</p>
			</div> -->
		</div>
	</div>
</section>

<section class="layout basic-content">
	<div class="wrapper">
		<div class="content">
			<div class="featured-image beer-bottles">
				<div class="bottle" data-aos="fade-left">
					<img src="<?php echo $template_url; ?>/app/assets/img/beer/gravely-bottles-channel-orange.png" alt="Channel Orange">
				</div>
				<div class="bottle" data-aos="fade-left" data-aos-delay="100">
					<img src="<?php echo $template_url; ?>/app/assets/img/beer/gravely-bottles-debaser.png" alt="Debaser">
				</div>
				<div class="bottle" data-aos="fade-left" data-aos-delay="200">
					<img src="<?php echo $template_url; ?>/app/assets/img/beer/gravely-bottles-docs-hefe.png" alt="Doc's Hefe">
				</div>
				<div class="bottle" data-aos="fade-left" data-aos-delay="300">
					<img src="<?php echo $template_url; ?>/app/assets/img/beer/gravely-bottles-feel-the-darkness.png" alt="Feel the Darkness">
				</div>
				<div class="bottle" data-aos="fade-left" data-aos-delay="400">
					<img src="<?php echo $template_url; ?>/app/assets/img/beer/gravely-bottles-la-bamba.png" alt="La Bamba">
				</div>
				<div class="bottle" data-aos="fade-left" data-aos-delay="500">
					<img src="<?php echo $template_url; ?>/app/assets/img/beer/gravely-bottles-pinky-and-pointer.png" alt="Pinky and Pointer">
				</div>
				<div class="bottle" data-aos="fade-left" data-aos-delay="600">
					<img src="<?php echo $template_url; ?>/app/assets/img/beer/gravely-bottles-power-chord.png" alt="Power Chord">
				</div>
				<div class="bottle" data-aos="fade-left" data-aos-delay="700">
					<img src="<?php echo $template_url; ?>/app/assets/img/beer/gravely-bottles-sprockets.png" alt="Sprockets">
				</div>
			</div>
		</div>
	</div>
	<div class="intro" data-aos="fade-up" data-aos-delay="750">
		<div class="wrapper">
			<h2 class="h1 title">Now bottling our greatest hits.</h2>
			<p class="summary">Take our tap room to your living room with 22-oz bombers of our bombest beers. Available only at Gravely Brewing. (Coming soon.)</p>
		</div>
	</div>
</section>

<section id="gig-or-swig" class="layout contact">
    <div class="wrapper">
        <div class="content">
            <div class="form-wrapper">
                <?php gravity_form_enqueue_scripts(2, true);?>
                <?php echo do_shortcode('[gravityform id="2" title="true" description="true" ajax="true"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
