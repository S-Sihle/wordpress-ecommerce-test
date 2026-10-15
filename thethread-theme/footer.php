
<?php
/**
 * Site footer.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<footer class="site-footer">
    <div class="container footer-inner">
        <p>
            &copy; <?php echo esc_html( wp_date( 'Y' ) ); ?>
            <?php bloginfo( 'name' ); ?>.
            <?php esc_html_e( 'All rights reserved.', 'thethread' ); ?>
        </p>

        <nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer menu', 'thethread' ); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'fallback_cb'    => false,
                )
            );
            ?>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
