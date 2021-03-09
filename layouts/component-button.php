<?php if (get_sub_field('display_button')): ?>
    <?php if ( have_rows('button') ) : ?>
        <div class="buttons">
        <?php while( have_rows('button') ) : the_row(); ?>
            <?php
                $link = get_sub_field('link');
				$lightbox = get_sub_field('lightbox');
                if ($link) {
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'];

                    if ($link_target == NULL) {
                        $link_target = '_self';
                    }

					$jpg = ".jpg";
					$png = ".png";
					$youtube = "youtube";
					$youtu_be = "youtu.be";
					$vimeo = "vimeo";

					if ($lightbox) {
						if ( stripos( $link_url, $jpg ) !== false ) {
							// Open jpg normally
							$lightbox = 'data-featherlight="' . $link_url . '" ';
						} elseif ( stripos( $link_url, $png ) !== false ) {
							// Open png normally
							$lightbox = 'data-featherlight="' . $link_url . '" ';
						} elseif ( stripos( $link_url, $youtube ) !== false ) {
							// Open a youtube video
							$lightbox = 'data-featherlight="iframe" data-featherlight-iframe-width="640" data-featherlight-iframe-height="480" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true"';
						} elseif ( stripos( $link_url, $youtu_be ) !== false ) {
							// Open a youtube video
							$lightbox = 'data-featherlight="iframe" data-featherlight-iframe-width="640" data-featherlight-iframe-height="480" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true"';
						} elseif ( stripos( $link_url, $vimeo ) !== false ) {
							// Open a vimeo video
							$lightbox = 'data-featherlight="iframe" data-featherlight-iframe-width="640" data-featherlight-iframe-height="480" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true"';
						} else {
							// Do not open a pdf in a lightbox
							// Do not open links in an iframe (because the screen loader runs and doesn't hide)
							$lightbox = NULL;
						}
					} else {
						$lightbox = NULL;
					}
                    echo '<a href="' . $link_url . '" target="' . $link_target . '"' . $lightbox . 'class="btn"><span class="label">' . $link_title . '</span><span class="btn-fill"></span></a>';
                }
            ?>
        <?php endwhile; ?>
        </div>
    <?php endif; ?>

<?php endif; ?>
