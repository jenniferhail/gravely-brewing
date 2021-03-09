<section id="beer" class="layout beerlisting" data-aos="fade-up">
    <?php $beers = get_field('beers'); ?>
    <div class="wrapper">
        <div class="intro">
            <h1 class="subtitle"><?php echo $beers['headline']; ?></h1>
            <ul class="toggle-options">
                <li><a href="#" class="heading-title active" data-content="tap"><h2>Tap list</h2></a></li>
                <li><a href="#" class="heading-title" data-content="beer"><h2>Our beers</h2></a></li>
            </ul>
        </div>
        <div class="content">
            <div class="beer-list active" data-content="tap">

                <?php $posts = $beers['tap_list']; ?>

                <?php if ($posts): ?>
                    <?php foreach ($posts as $post): // variable must be called $post (IMPORTANT)?>
                        <?php setup_postdata($post); ?>
                        <?php $beer_types = get_the_terms(get_the_id(), 'gravely_beer_types'); ?>
                        <div class="item">
                            <div class="item-wrap">
                                <h3 class="title"><?php the_title(); ?></h3>
                                <p class="type">
                                    <?php foreach ($beer_types as $type): ?>
                                        <?php echo $type->name; ?>
                                    <?php endforeach; ?>
                                </p>
                                <p class="alcohol-contents">ABV: <?php the_field('abv'); ?>% - IBU: <?php the_field('ibu'); ?></p>
                            </div>
                            <?php
                                $badge = get_field('badge');
                                $badge_url = $badge['url'];
                                $badge_alt = $badge['alt'];
                            ?>

                            <?php if ($badge_url): ?>
                                <div class="badge">
                                    <img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>

                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly?>
                <?php endif; ?>

            </div>
            <div class="beer-list expanded slick-it" data-content="beer">

                <?php $posts = $beers['beer_list']; ?>

                <?php if ($posts): ?>
                    <!-- <ul> -->
                    <?php foreach ($posts as $post): // variable must be called $post (IMPORTANT)?>
                        <?php setup_postdata($post); ?>
                        <?php $beer_types = get_the_terms(get_the_id(), 'gravely_beer_types'); ?>
                        <div class="item">
                            <h3 class="title"><?php the_title(); ?></h3>
                            <div class="copy">
                                <p class="type">
                                    <?php foreach ($beer_types as $type): ?>
                                        <?php echo $type->name; ?>
                                    <?php endforeach; ?>
                                </p>
                                <p class="alcohol-contents">ABV: <?php the_field('abv'); ?>% - IBU: <?php the_field('ibu'); ?></p>
                            </div>
                            <p class="copy"><?php the_field('description'); ?></p>
                            <?php
                                $badge = get_field('badge');
                                $badge_url = $badge['url'];
                                $badge_alt = $badge['alt'];
                            ?>

                            <?php if ($badge_url): ?>
                                <div class="badge">
                                    <img src="<?php echo $badge_url; ?>" alt="<?php echo $badge_alt; ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                    <!-- </ul> -->
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly?>
                <?php endif; ?>

            </div>
            <div class="image">
                <img data-paroller-factor="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal" src="<?php echo $template_url; ?>/app/assets/img/beer-1.png" alt="">
            </div>
        </div>
    </div>
</section>
