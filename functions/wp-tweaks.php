<?php

    function cc_mime_types($mimes)
    {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter('upload_mimes', 'cc_mime_types');

	//======================================================================
    // CUSTOMIZE COLOR PICKER
    //======================================================================
	function my_acf_input_admin_footer() {

	?>
		<script type="text/javascript">

			(function($) {

				acf.add_filter('color_picker_args', function( args, $field ){

					// define the new palette
					args.palettes = ['#FCE23C', '#e29236', '#b53838', '#ea5b5b', '#EF6A39', '#2b1700', '#c4882f', '#e2a71d']

					// return
					return args;

				});

			})(jQuery);

		</script>

	<?php

	}

	add_action('acf/input/admin_footer', 'my_acf_input_admin_footer');


    //======================================================================
    // REPLACE EXCERPT
    //======================================================================
    // Replaces the excerpt "Read More" text with a link
    function new_excerpt_more($more)
    {
        global $post;
        return '<a class="moretag" href="'. get_permalink($post->ID) . '"> ...read more.</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    //======================================================================
    // SPEED UP ACF
    //======================================================================
    // Drastically speed up the load times of the post edit page!
    add_filter('acf/settings/remove_wp_meta_box', '__return_true');

    // =========================================================================
    // ADD RSS LINKS TO HEAD SECTION
    // =========================================================================
    add_theme_support('automatic-feed-links');

    // =========================================================================
    // REMOVE JUNK FROM HEAD AND STUFF
    // =========================================================================
    remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
    remove_action('wp_head', 'wp_generator'); // remove wordpress version

    remove_action('wp_head', 'feed_links', 2); // remove rss feed links
    remove_action('wp_head', 'feed_links_extra', 3); // remove all extra rss feed links

    remove_action('wp_head', 'index_rel_link'); // remove link to index page
    remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)

    remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
    remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

    remove_action('wp_head', 'rest_output_link_wp_head'); // remove JSON link from head
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

    // =========================================================================
    // REGISTERING SIDEBAR
    // =========================================================================
    // if (function_exists('register_sidebar')) {
    //     register_sidebar(array(
    //         'name' => 'Sidebar Widgets',
    //         'id'   => 'sidebar-widgets',
    //         'description'   => 'These are widgets for the sidebar.',
    //         'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //         'after_widget'  => '</div>',
    //         'before_title'  => '<h2>',
    //         'after_title'   => '</h2>'
    //     ));
    // }

	// =========================================================================
    // GRAVITY FORMS HIDE LABELS
    // =========================================================================
	add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

    // =========================================================================
    // HIDE ADMIN BAR ON FRONTEND
    // =========================================================================
    // This is not recommended by default
    ## add_filter('show_admin_bar', '__return_false');

    // =========================================================================
    // ENABLES FEATURED IMAGES FOR PAGES AND POSTS
    // =========================================================================
    // This enables post thumbnails for all post types,
    // if you want to enable this feature for specific post types,
    // use the array to include the type of post
    ## add_theme_support('post-thumbnails', array('post', 'page'));
    add_theme_support('post-thumbnails');

    // =========================================================================
    // ENABLES 100% JPEG QUALITY
    // =========================================================================
    // Wordpress will compress uploads to 90% of their original size
    add_filter('jpg_quality', 'high_jpg_quality');
        function high_jpg_quality()
        {
            return 100;
        }

    // =========================================================================
    // TITLE TAG - RECOMMENDED
    // =========================================================================
    // Since Version 4.1, themes should use add_theme_support() in the functions.php
    // file in order to support title tag
    function theme_slug_setup()
    {
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'theme_slug_setup');

    // =========================================================================
    // WORDPRESS CONTENT WIDTH - REQUIRED
    // =========================================================================
    // Since Version 2.6, themes need to specify the $content_width variable

    // Using this feature you can set the maximum allowed width for any content
    // in the theme, like oEmbeds and images added to posts.

    // Using this theme feature, WordPress can scale oEmbed code to a specific
    // size (width) in the front-end, and insert large images without breaking the
    // main content area. Also, using this feature you lay the ground for other
    // plugins to perfectly integrate with any theme, since plugins can access the
    // value stored in $content_width.
    if (! isset($content_width)) {
        $content_width = 900;
    }


    // =========================================================================
    // ADD NEW IMAGE SIZES WHEN UPLOADING MEDIA
    // =========================================================================
    // Name the type of size, provide the demensions, and determine
    // how the image should be cropped, if cropped at all
    ## add_image_size( 'cropped-blog', 370, 220, array( 'center', 'center' ) );

    // =========================================================================
    // REGISTER MENUS
    // =========================================================================
    // If more than one menu is neccessary, you can register several
    // and assign different menu items to each or use one menu for
    // desktop and another for mobile
    register_nav_menu( 'main-menu', 'Main Menu' );
    register_nav_menu( 'mobile', 'Mobile Menu' );

    // =========================================================================
    // REGISTER A DASHBOARD WIDGET...PENDING FUTURE PROJECT
    // =========================================================================
    // add_action('wp_dashboard_setup', 'custom_dashboard_widgets');
    //
    // function custom_dashboard_widgets() {
    // 	global $wp_meta_boxes;
    // 	wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
    // }
    //
    // function custom_dashboard_help() {
    // echo '<p>Toss something here.</p>';
    // }

    // =========================================================================
    // ADDING THAT SWEET MIGHTILY LOGO TO THE LOGO SCREEN
    // =========================================================================
    // function custom_login_logo() {
    // 	echo '<style type="text/css">
    // 	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/custom-login-logo.png) !important; }
    // 	</style>';
    // }
    // add_action('login_head', 'custom_login_logo');

    // =========================================================================
    // ADD A FORMAT MENU TO TINYMCE
    // =========================================================================
    // function wpb_mce_buttons_2($buttons) {
    // 	array_unshift($buttons, 'styleselect');
    // 	return $buttons;
    // }
    // add_filter('mce_buttons_2', 'wpb_mce_buttons_2');
    //
    // function my_mce_before_init_insert_formats( $init_array ) {
    //
    // 	$style_formats = array(
    // 		array(
    // 			'title' => 'Small Text',
    // 			'block' => 'span',
    // 			'classes' => 'small',
    // 			'wrapper' => true,
    // 		),
    // 	);
    // 	// Insert the array, JSON ENCODED, into 'style_formats'
    // 	$init_array['style_formats'] = json_encode( $style_formats );
    //
    // 	return $init_array;
    //
    // }
    // add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

    // =========================================================================
    // Redirect to failed login screen instead of wp-login
    // =========================================================================
    // function custom_login_fail( $username ) {
    //
    // 	 $referrer = $_SERVER['HTTP_REFERER'];  // where did the post submission come from?
    //
    // 	 // if there's a valid referrer, and it's not the default log-in screen
    // 	 if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
    //
    // 		  wp_redirect(home_url() . '/?login=failed' );
    //
    // 		  exit;
    //
    // 	 }
    //
    // }
    // add_action( 'wp_login_failed', 'custom_login_fail' );

    // =========================================================================
    // Redirect to front-end login screen instead of wp admin login screen
    // =========================================================================
    // add_action('wp', 'redirect_private_page_to_login');
    //
    // function redirect_private_page_to_login(){
    //
    // 	global $wp_query;
    //
    // 	$queried_object = get_queried_object();
    //
    // 	if (isset($queried_object->post_status) && $queried_object->post_status == "private" && !is_user_logged_in()) {
    //
    // 		wp_redirect(home_url('/?login=active&redirect_to='.get_permalink($queried_object->ID))); exit;
    //
    // 	}
    //
    // }

    // =========================================================================
    // Extend Rest API
    // =========================================================================
    // add_action( 'rest_api_init', 'rest_api_filter_add_filters' );
    //
    // // Add filter param
    // function rest_api_filter_add_filters() {
    //
    // 	foreach ( get_post_types( array( 'show_in_rest' => true ), 'objects' ) as $post_type ) {
    //
    // 		add_filter( 'rest_' . $post_type->name . '_query', 'rest_api_filter_add_filter_param', 10, 2 );
    // 	}
    // }
    //
    // // Add custom authors param to filter
    // function rest_api_filter_add_filter_param( $args, $request ) {
    //
    // 	// Bail out if no filter parameter is set.
    // 	if ( empty( $request['filter'] ) || ! is_array( $request['filter'] ) ) {
    //
    // 		return $args;
    //
    // 	}
    // 	$filter = $request['filter'];
    //
    // 	if ( isset( $filter['posts_per_page'] ) && ( (int) $filter['posts_per_page'] >= 1 && (int) $filter['posts_per_page'] <= 100 ) ) {
    //
    // 		$args['posts_per_page'] = $filter['posts_per_page'];
    //
    // 	}
    //
    // 	global $wp;
    //
    // 	$vars = apply_filters( 'rest_query_vars', $wp->public_query_vars );
    //
    // 	$vars[] = 'custom_authors';
    //
    // 	foreach ( $vars as $var ) {
    //
    // 		if ( isset( $filter[ $var ] ) ) {
    //
    // 			if($var === 'custom_authors'){
    //
    // 				// Reset to regular meta query
    // 				$var = 'meta_query';
    //
    // 				// If custom authors is set then explode to array and loop through the values creating multiple meta queryies
    // 				$i = 0;
    //
    // 				$filter[$var]['relation'] = 'OR';
    //
    // 				$authorsarray = explode(',', $filter['custom_authors']);
    //
    // 				foreach($authorsarray as $author){
    //
    // 					$filter[$var][$i]['key'] = 'author';
    //
    // 					$filter[$var][$i]['value'] = $author;
    //
    // 					$filter[$var][$i]['compare'] = 'IN';
    //
    // 					$i++;
    // 				}
    // 			}
    //
    // 			$args[$var] = $filter[$var];
    //
    // 		}
    // 	}
    //
    // 	return $args;
    //
    // }
    //
    // function my_rest_query_vars($valid_vars) {
    //
    // 	$valid_vars = array_merge($valid_vars, array('meta_query'));
    //
    // 	return $valid_vars;
    //
    // }
    //
    // add_filter('rest_query_vars', 'my_rest_query_vars');

    // =========================================================================
    // Two Column Gravity Forms — http://www.jordancrown.com/multi-column-gravity-forms/
    // =========================================================================
    function gform_column_splits($content, $field, $value, $lead_id, $form_id)
    {
        if (!IS_ADMIN) { // only perform on the front end

            // target section breaks
            if ($field['type'] == 'section') {
                $form = RGFormsModel::get_form_meta($form_id, true);

                // check for the presence of multi-column form classes
                $form_class = explode(' ', $form['cssClass']);
                $form_class_matches = array_intersect($form_class, array( 'two-column', 'three-column' ));

                // check for the presence of section break column classes
                $field_class = explode(' ', $field['cssClass']);
                $field_class_matches = array_intersect($field_class, array('gform_column'));

                // if field is a column break in a multi-column form, perform the list split
                if (!empty($form_class_matches) && !empty($field_class_matches)) { // make sure to target only multi-column forms

                    // retrieve the form's field list classes for consistency
                    // $form = RGFormsModel::add_default_properties($form);
                    $description_class = rgar($form, 'descriptionPlacement') == 'above' ? 'description_above' : 'description_below';

                    // close current field's li and ul and begin a new list with the same form field list classes
                    return '</li></ul><ul class="gform_fields '.$form['labelPlacement'].' '.$description_class.' '.$field['cssClass'].'"><li class="gfield gsection empty">';
                }
            }
        }

        return $content;
    }
    add_filter('gform_field_content', 'gform_column_splits', 10, 5);
