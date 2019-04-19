<?php 
 
function set_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('ionicons', "https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css");
}

add_action('wp_enqueue_scripts', 'set_resources');

//Register nav menus

register_nav_menus(array(
    'main-menu' => __('Main Menu'),
    'secondary-menu' => __('Secondary Menu'),
));


add_filter( 'nav_menu_link_attributes', 'set_wp_menu_links_class', 10, 3 );

function set_wp_menu_links_class( $atts, $item, $args ) {
    $atts['class'] = 'nav-link';
    return $atts;
}
?>