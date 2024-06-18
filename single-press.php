<?php /* Template Name: Single Press */
get_header(); 

?>

<?php if (have_posts()) : while (have_posts()) : the_post();
    $title = get_field('title');
    $description = get_field('description');
    $image = get_field('image');
    $date = get_field( 'date');
?>

    <main id="main-content" class="single-painting single-press">
        <section class="page-content">
            <div class="container">
                <div class="single-painting-section single-press-section mt-4 mb-4">
                    <div class="single-painting-section-right single-press-section-right">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                    <div class="single-painting-section-left single-press-section-left">
                        <span class="title"><?php echo $title; ?></span>
                        <small class="date"><?php echo $date; ?></small>
                        <span><?php echo $description; ?></span>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php endwhile; endif; ?>

<?php get_footer();