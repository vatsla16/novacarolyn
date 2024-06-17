<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); 
    $featured_image = get_field('featured_image');
    $featured_items = get_field('featured_items');
?>

    <main id="main-content" class="homepage">
        <section id="page-content">
            <div class="featured-section">
                <img src="<?php echo esc_url($featured_image['url']); ?>" alt="<?php echo esc_attr($featured_image['alt']); ?>">
            </div>
            <div class="container">
                <div class="featured-painting-section">
                    <div class="featured-painting-section-title mt-4 mb-4">
                        <span>Featured Paintings</span>
                    </div>
                    <?php if( $featured_items ): ?>
                        <ul class="featured-painting-section-items">
                            <?php foreach( $featured_items as $featured_item ):
                                $image = get_field( 'image', $featured_item->ID );
                                $permalink = get_permalink( $featured_item->ID );
                                $title = get_field('title', $featured_item->ID);
                            ?>
                                <li class="featured-painting-section-item">
                                    <a href="<?php echo esc_url( $permalink ); ?>">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <button class="button--secondary see-more mt-3 mb-4">See More</button>
                    <?php endif; ?>
                </div>
                <div class="subscription-form">
                    <div class="subscription-form-title mt-4 mb-4">
                        <span>Subscribe to the newsletter</span>
                    </div>
                    <?php echo do_shortcode('[ninja_form id=2]'); ?>
                </div>
            </div>
        </section>
    </main>


<?php endwhile; endif; ?>

<?php get_footer();