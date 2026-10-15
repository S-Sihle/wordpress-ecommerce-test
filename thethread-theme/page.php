
<?php
/**
 * Standard page template.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="site-content" class="site-content">
    <div class="container page-container">

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="page-<?php the_ID(); ?>" <?php post_class( 'page-content' ); ?>>

                <h1 class="page-title">
                    <?php the_title(); ?>
                </h1>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">',
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>

            </article>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>
