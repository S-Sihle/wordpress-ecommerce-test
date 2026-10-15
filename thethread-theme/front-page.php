
<?php
/**
 * THE THREAD homepage.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="site-content" class="site-content">

    <section class="hero-section">
        <div class="container hero-content">
            <p class="hero-eyebrow">
                <?php esc_html_e( 'EVERYDAY ESSENTIALS', 'thethread' ); ?>
            </p>

            <h1>
                <?php esc_html_e( 'Wear Your Identity.', 'thethread' ); ?>
            </h1>

            <p class="hero-description">
                <?php esc_html_e( 'Discover everyday pieces made for your style. From relaxed tees to comfortable hoodies, find your next favourite.', 'thethread' ); ?>
            </p>

            <a class="button button-primary" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">
                <?php esc_html_e( 'Shop Collection', 'thethread' ); ?>
            </a>
        </div>
    </section>

    <section class="featured-products-section">
        <div class="container">
            <div class="section-heading">
                <p class="section-eyebrow">
                    <?php esc_html_e( 'THE COLLECTION', 'thethread' ); ?>
                </p>

                <h2>
                    <?php esc_html_e( 'Everyday Favourites', 'thethread' ); ?>
                </h2>

                <p>
                    <?php esc_html_e( 'Simple essentials. Easy to wear.', 'thethread' ); ?>
                </p>
            </div>

            <?php
            if ( class_exists( 'WooCommerce' ) ) {
                $featured_products = wc_get_products(
                    array(
                        'status'   => 'publish',
                        'featured' => true,
                        'limit'    => 3,
                    )
                );

                if ( $featured_products ) {
                    echo '<div class="product-grid">';

                    foreach ( $featured_products as $product ) {
                        $product_id = $product->get_id();

                        echo '<article class="product-card">';

                        echo '<a class="product-image" href="' . esc_url( get_permalink( $product_id ) ) . '">';

                        echo $product->get_image(
                            'woocommerce_thumbnail',
                            array( 'loading' => 'lazy' )
                        );

                        echo '</a>';

                        echo '<h3 class="product-title">';
                        echo '<a href="' . esc_url( get_permalink( $product_id ) ) . '">';
                        echo esc_html( $product->get_name() );
                        echo '</a>';
                        echo '</h3>';

                        echo '<p class="product-price">';
                        echo wp_kses_post( $product->get_price_html() );
                        echo '</p>';

                        echo '</article>';
                    }

                    echo '</div>';
                } else {
                    echo '<p class="empty-products-message">';
                    esc_html_e( 'Our collection is being prepared. Check back soon.', 'thethread' );
                    echo '</p>';
                }
            }
            ?>

            <div class="section-footer">
                <a class="button button-secondary" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">
                    <?php esc_html_e( 'View All Products', 'thethread' ); ?>
                </a>
            </div>
        </div>
    </section>

    <section class="brand-message-section">
        <div class="container">
            <p class="section-eyebrow">
                <?php esc_html_e( 'THE THREAD', 'thethread' ); ?>
            </p>

            <h2>
                <?php esc_html_e( 'Style That Fits Your Everyday.', 'thethread' ); ?>
            </h2>

            <p>
                <?php esc_html_e( 'Build your look with versatile essentials designed to fit your routine.', 'thethread' ); ?>
            </p>

            <a class="button button-primary" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">
                <?php esc_html_e( 'Explore the Store', 'thethread' ); ?>
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
