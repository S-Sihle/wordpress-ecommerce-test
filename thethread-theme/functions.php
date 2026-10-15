
<?php
/**
 * THE THREAD theme functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Set up theme features.
 */
function thethread_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );

    add_theme_support(
        'woocommerce',
        array(
            'thumbnail_image_width' => 400,
            'single_image_width'    => 800,
            'product_grid'          => array(
                'default_rows'    => 3,
                'min_rows'        => 1,
                'max_rows'        => 6,
                'default_columns' => 3,
                'min_columns'     => 2,
                'max_columns'     => 4,
            ),
        )
    );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'thethread' ),
            'footer'  => __( 'Footer Menu', 'thethread' ),
        )
    );
}
add_action( 'after_setup_theme', 'thethread_setup' );

/**
 * Load the theme stylesheet.
 */
function thethread_enqueue_assets() {
    wp_enqueue_style(
        'thethread-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'thethread_enqueue_assets' );

add_filter( 'template_include', function ( $template ) {
    if ( function_exists( 'is_shop' ) && is_shop() ) {
        error_log( 'THE THREAD SHOP TEMPLATE: ' . $template );
    }

    return $template;
}, 999 );