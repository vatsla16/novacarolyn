<?php /* Template Name: Single Blog */
get_header(); 

?>

<?php if (have_posts()) : while (have_posts()) : the_post();
    $title = get_field('title');
    $description = get_field('description');
    $image = get_field('image');
    $mediums = get_field( 'painting_medium');
?>

    <main id="main-content" class="single-blog">
        <section class="page-content">
            <div class="single-blog-section mt-4 mb-4">
                <span class="single-blog-section-title"><?php echo $title; ?></span>
                <?php if ( $mediums) : ?>
                    <span class="medium">
                        <?php echo implode( ' | ', $mediums ); ?>
                    </span>
                <?php endif; ?>
                <?php if ($image): ?>
                    <div class="single-blog-section-image">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                <?php endif; ?>
                <div class="container">
                    <div class="single-blog-section-desc"><?php echo $description; ?></div>
                </div>
            </div>
        </section>
    </main>


<?php endwhile; endif; ?>

<?php get_footer();