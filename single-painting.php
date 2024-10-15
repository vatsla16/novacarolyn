<?php /* Template Name: Single Painting */
get_header(); 

?>

<?php if (have_posts()) : while (have_posts()) : the_post();
    $title = get_field('title');
    $description = get_field('description');
    $image = get_field('image');
    $medium = get_field('painting_medium');
?>

    <main id="main-content" class="single-painting">
        <section class="page-content">
            <div class="container">
                <div class="single-painting-section mt-4 mb-4">
                    <div class="single-painting-section-right">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                    <div class="single-painting-section-left">
                        <?php if ($title): ?><span class="title"><?php echo $title; ?></span><?php endif; ?>
                        <?php if ($medium): ?><span class="medium"><?php echo implode( ' | ', $medium ); ?></span><?php endif; ?>
                        <?php if ($description): ?><p><?php echo $description; ?></p><?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>


<?php endwhile; endif; ?>

<?php get_footer();