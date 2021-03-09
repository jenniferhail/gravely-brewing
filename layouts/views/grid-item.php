<?php if($posts) : ?>
    <div class="card-list <?php echo $post_type; ?>-items">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <div class="card fill-white <?php echo $post_type; ?>-item">
                <div class="col">
                    <div class="image">
                        <?php $thumbnail_id = get_post_thumbnail_id( get_the_id() ); ?>
                        <?php echo wp_get_attachment_image( $thumbnail_id, 'medium' ); ?>
                    </div>
                    <h2 class="h6"><?php the_title(); ?></h2>
                    <?php echo custom_excerpt(30); ?>
                </div>
                <div class="buttons">
                    <a href="<?php the_permalink(); ?>" class="btn black">Read more</a>
                </div>
            </div>

       <?php endwhile; ?>
   </div>
   <?php wp_reset_postdata(); ?>
<?php endif; ?>
