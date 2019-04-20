<?php 
 
function set_resources(){
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('ionicons', "https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css");
    
    wp_enqueue_script('bootstrap-util', get_stylesheet_directory_uri() . '/scss/bootstrap-4.3.1/js/dist/util.js');
    wp_enqueue_script('bootstrap-collapse', get_stylesheet_directory_uri() . '/scss/bootstrap-4.3.1/js/dist/collapse.js');
    wp_enqueue_script('bootstrap-dropdown', get_stylesheet_directory_uri() . '/scss/bootstrap-4.3.1/js/dist/tab.js');
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