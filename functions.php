<?php

function elementorchild_enqueue_styles() {
    $parent_style = 'elementor';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        //wp_get_theme()->get('1.3.1')
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'elementorchild_enqueue_styles' );

function remove_customize() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('customize');
}
add_action( 'wp_before_admin_bar_render', 'remove_customize' );

add_action( 'admin_menu', function() {
    global $current_user;
    $current_user = wp_get_current_user();
    $user_name = $current_user->user_login;

	if(is_admin() &&  $user_name != 'USERNAME') {
		$customizer_url = add_query_arg( 'return', urlencode( remove_query_arg( wp_removable_query_args(), wp_unslash( $_SERVER['REQUEST_URI'] ) ) ), 'customize.php' );
		remove_submenu_page( 'themes.php', $customizer_url );
	}
}, 999 );

function display_year() {
    $year = date('Y');
    return $year;
}
add_shortcode('year', 'display_year');

function single_post_meta_before( $post_id, $settings ) {
    //echo '<div> I am at the beginning of the post meta. </div>';
} 
add_action( 'uael_single_post_before_meta', 'single_post_meta_before', 10, 2 );

/* MULTIPLE SKINS ON POST */
/* --- */
add_action( 'elementor/widget/posts/skins_init', function( $widget ) {
    //include custom skin file
    include_once(get_stylesheet_directory(). '/elementor-post-wdget-custom-skins-class.php');
    // register the skin to the posts widget
    $widget->add_skin( new cards_multi_badge_skin( $widget ) );
    $widget->add_skin( new cards_multi_badge_skin_tags( $widget ) );
    $widget->add_skin( new cards_multi_badge_skin_category( $widget ) );
    $widget->add_skin( new cards_multi_badge_skin_careers( $widget ) );
} );