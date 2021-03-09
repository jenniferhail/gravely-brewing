<?php if($posts) : ?>
    <div class="glide">
        <div class="glide__track" data-glide-el="track">
            <div class="card-list glide__slides <?php echo $post_type; ?>-items">

                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="card fill-white glide__slide <?php echo $post_type; ?>-item">
                        <div class="col">
                            <div class="image">
                                <?php $thumbnail_id = get_post_thumbnail_id( get_the_id() ); ?>
                                <?php echo wp_get_attachment_image( $thumbnail_id, 'medium' ); ?>
                            </div>
                            <h2 class="h6"><?php the_title(); ?></h2>
                            <?php echo custom_excerpt(30); ?>
                        </div>
                        <div class="buttons">
                            <a href="<?php the_permalink(); ?>" class="btn black">Button</a>
                        </div>
                    </div>

               <?php endwhile; ?>
           </div>
       </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fal fa-chevron-left" aria-hidden="true"></i></button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fal fa-chevron-right" aria-hidden="true"></i></button>
        </div>
    </div>
   <?php wp_reset_postdata(); ?>
<?php endif; ?>
