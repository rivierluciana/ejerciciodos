<?php
/**Función para agregar la hoja de estilo dinámica */
wp_enqueue_style( 'style', get_stylesheet_uri() );
/**Limitar extracto */
function wpdocs_custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length',  999);

set_post_thumbnail_size( 250, 250 ); // 50 pixels wide by 50 pixels tall, resize mode

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' ); 
  }

function register_mi_menu() {
    register_nav_menu('mi-menu',__( 'menu rivier' ));
    }
    add_action( 'init', 'register_mi_menu' );

//nuevas posiciones widget
function endeos_widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-widget',
        'before_widget' => '<div class="section-sidebar">',
        'after_widget'  => '</div>',
    ) );
}

add_action( 'widgets_init', 'endeos_widgets_init' );
?>
