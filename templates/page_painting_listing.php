<?php /* Template Name: Painting Listing */
get_header(); 

$painting_args = array(
    'post_type' => 'painting',
    'post_status' => 'publish',
    'tax_query' => array(
      'relation' => 'OR',
    ),
    'meta_query' => array(
      'relation' => 'AND',
    ),
    'order' => 'desc'
);
$painting_query = new WP_Query($painting_args);
?>

<?php if ( $painting_query->have_posts() ) : ?>

    <main id="main-content" class="painting-listing">
        <section id="page-content">
            <div class="painting-listing-container">
                <?php $i = 0; foreach ($painting_query->posts as $painting):
                    $image = get_field( 'image', $painting->ID );
                    $permalink = get_permalink( $painting->ID );
                ?>
                    <div class="painting-<?php echo $i++; ?>">
                        <a href="<?php echo esc_url( $permalink ); ?>">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

<?php endif; ?>

<?php get_footer();