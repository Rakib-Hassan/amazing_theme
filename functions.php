<?php 
function amazing_script() {
	wp_enqueue_style('amazing-style', get_stylesheet_uri());
	wp_enqueue_script( 'post_like', get_template_directory_uri() . '/js/post_like.js', array('jquery'), '1.0', true );

}
add_action('wp_enqueue_scripts', 'amazing_script');

require_once get_template_directory() . '/kingcomposer/my_services_addons.php';

 add_filter('use_block_editor_for_post', '__return_false', 10);
//after_setup_theme


	function amazing_theme() {
		//Make theme available for translation.
		load_theme_textdomain('amazingplus001', get_template_directory() . '/languages');
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');
		// Let WordPress manage the document title.
		add_theme_support('title-tag');
		//Enable support for Post Thumbnails on posts and pages.
		add_theme_support('post-thumbnails');
		// This theme uses wp_nav_menu() in one location
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'amazingplus001' ),
		) );

		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('bizcola_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));
		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		//Add support for core custom logo.
		add_theme_support('custom-logo', array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		));
	}

add_action('after_setup_theme', 'amazing_theme');

//popular post function
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

//post view count
function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count views";
}
function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );
?>