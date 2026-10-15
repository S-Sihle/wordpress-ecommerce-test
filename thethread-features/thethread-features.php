
<?php
/**
 * Plugin Name: The Thread Features
 * Description: Custom WooCommerce functionality for The Thread store.
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 8.0
 * Author: The Thread
 * Text Domain: thethread-features
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Display a promotional banner on the WooCommerce shop page.
 */
function thethread_display_shop_promo() {
    ?>
    <section class="thethread-promo" aria-label="<?php esc_attr_e( 'Store promotion', 'thethread-features' ); ?>">
        <div class="thethread-promo__content">
            <p class="thethread-promo__eyebrow">
                <?php esc_html_e( 'THE THREAD ESSENTIALS', 'thethread-features' ); ?>
            </p>

            <h2>
                <?php esc_html_e( 'Your Everyday Style Starts Here.', 'thethread-features' ); ?>
            </h2>

            <p>
                <?php esc_html_e( 'Explore versatile essentials made for everyday wear.', 'thethread-features' ); ?>
            </p>
        </div>
    </section>
    <?php
}

add_action( 'woocommerce_before_shop_loop', 'thethread_display_shop_promo', 5 );

/**
 * Load the promotional banner styles on the shop page.
 */
function thethread_features_enqueue_styles() {
    if ( ! function_exists( 'is_shop' ) || ! is_shop() ) {
        return;
    }

    wp_register_style(
        'thethread-features',
        false,
        array(),
        '1.0.0'
    );

    wp_enqueue_style( 'thethread-features' );

    $css = '
        .thethread-promo {
            margin: 24px 0 36px;
            padding: 40px 28px;
            background: #f5f5f3;
            color: #111111;
            text-align: center;
        }

        .thethread-promo__content {
            max-width: 720px;
            margin: 0 auto;
        }

        .thethread-promo__eyebrow {
            margin: 0 0 12px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .thethread-promo h2 {
            margin: 0 0 14px;
            color: #111111;
            font-size: clamp(26px, 4vw, 40px);
            line-height: 1.2;
        }

        .thethread-promo__content > p:last-child {
            margin-bottom: 0;
            color: #6b6b6b;
        }

        @media (max-width: 600px) {
            .thethread-promo {
                padding: 30px 18px;
            }
        }
    ';

    wp_add_inline_style( 'thethread-features', $css );
}

add_action( 'wp_enqueue_scripts', 'thethread_features_enqueue_styles' );
