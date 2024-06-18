<?php /* Template Name: About */
get_header(); 

?>

<?php if (have_posts()) : while (have_posts()) : the_post();
    $description = get_field('description');
    $image = get_field('image');
?>

    <main id="main-content" class="about">
        <section class="page-content">
            <div class="container">
                <div class="about-section mt-4 mb-4">
                    <div class="about-section-right">
                        <span><?php echo $description; ?></span>
                    </div>
                    <div class="about-section-left">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php endwhile; endif; ?>

<?php get_footer();