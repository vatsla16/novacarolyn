<?php /* Template Name: Press Listing */
get_header(); 

$press_args = array(
    'post_type' => 'press',
    'post_status' => 'publish',
    'tax_query' => array(
      'relation' => 'OR',
    ),
    'meta_query' => array(
      'relation' => 'AND',
    ),
    'order' => 'desc'
);
$press_query = new WP_Query($press_args);
?>

<?php if ( $press_query->have_posts() ) : ?>

    <main id="main-content" class="blog-listing press-listing">
        <section id="page-content">
            <div class="container">
                <div class="blog-listing-container press-listing-container">
                    <?php foreach ($press_query->posts as $press):
                        $image = get_field( 'image', $press->ID );
                        $date = get_field( 'date', $press->ID );
                        $permalink = get_permalink( $press->ID );
                        $summary = get_field( 'summary', $press->ID );
                        $title = get_field( 'title', $press->ID );
                    ?>
                        <div class="blog press card">
                            <div class="blog-left press-left">
                                <a href="<?php echo esc_url( $permalink ); ?>">
                                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                                </a>
                            </div>
                            <div class="blog-right press-right">
                                <div class="blog-right-top press-right-top card-body">
                                    <a class="reverse-hover" href="<?php echo esc_url( $permalink ); ?>"><?php echo $title; ?></a>
                                    <?php if ($summary): ?><span class="summary"><?php echo $summary; ?></span><?php endif; ?>
                                    <?php if ($date): ?><span class="date mt-4"><?php echo $date; ?></span><?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

<?php endif; ?>

<?php get_footer();