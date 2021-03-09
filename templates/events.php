<?php
$args = array(
    'post_type' => 'gravely_events',
    'posts_per_page' => 1
);

// the query
$the_query = new WP_Query($args); ?>

<?php if ($the_query->have_posts()) : ?>

    <!-- pagination here -->

    <!-- the loop -->
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <?php
            $poster = get_field('poster');
            $poster_url = $poster['url'];
            $poster_alt = $poster['alt'];

            $title = get_the_title();
            $date = get_field('date');
            $time = get_field('time');
            $description = get_field('description');
            $ticket_info = get_field('ticket_info');
        ?>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
