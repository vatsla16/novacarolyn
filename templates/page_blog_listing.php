<?php /* Template Name: Blog Listing */
get_header(); 

$blog_args = array(
    'post_type' => 'blog',
    'post_status' => 'publish',
    'tax_query' => array(
      'relation' => 'OR',
    ),
    'meta_query' => array(
      'relation' => 'AND',
    ),
    'order' => 'desc'
);
$blog_query = new WP_Query($blog_args);
?>

<?php if ( $blog_query->have_posts() ) : ?>

    <main id="main-content" class="blog-listing">
        <section id="page-content">
            <div class="container">
                <div class="blog-listing-container">
                    <?php foreach ($blog_query->posts as $blog):
                        $image = get_field( 'image', $blog->ID );
                        $mediums = get_field( 'painting_medium', $blog->ID );
                        $permalink = get_permalink( $blog->ID );
                        $summary = get_field( 'summary', $blog->ID );
                        $title = get_field( 'title', $blog->ID );
                    ?>
                        <div class="blog card">
                            <div class="blog-left">
                                <a href="<?php echo esc_url( $permalink ); ?>">
                                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                                </a>
                            </div>
                            <div class="blog-right">
                                <div class="blog-right-top card-body">
                                    <a class="reverse-hover" href="<?php echo esc_url( $permalink ); ?>"><?php echo $title; ?></a>
                                    <span class="summary"><?php echo $summary; ?></span>
                                </div>
                                <?php if ( $mediums) : ?>
                                    <span class="medium card-footer">
                                        <?php echo implode( ' | ', $mediums ); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

<?php endif; ?>

<?php get_footer();