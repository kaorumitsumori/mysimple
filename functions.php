<?php

// Thumbnail
add_theme_support('post-thumbnails');


//  Menu
register_nav_menus(
    array(
    'Global-navi' => 'Global-navi', 
    'Footer-navi' => 'Footer-navi',
    )
); 


//  Permalink on every thumbnails
add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );
    function my_post_image_html( $html, $post_id, $post_image_id ) {
        $html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
        return $html;
    }

//  Register our sidebars and widgetized areas.
function my_widgets_init() {
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar_widget01',
		'before_widget' => '<div class="container bg-white mb-5 py-5">',
		'after_widget' => '</div>',
    ) );
    
    register_sidebar( array(
		'name' => 'Footer About',
		'id' => 'footer_widget01',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="d-inline-block py-3 border-bottom border-info">',
		'after_title' => '</h4>',
    ) );
    
    register_sidebar( array(
		'name' => 'Footer Twitter',
		'id' => 'footer_widget02',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="d-inline-block py-3 border-bottom border-info">',
		'after_title' => '</h4>',
	) );

}
add_action( 'widgets_init', 'my_widgets_init' );







?>