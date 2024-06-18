<?php /* Template Name: Contact */
get_header(); 

?>

<?php if (have_posts()) : while (have_posts()) : the_post();
    $description = get_field('description');
?>

    <main id="main-content" class="contact">
        <section class="page-content">
            <div class="container">
                <div class="contact-section mt-4 mb-4">
                    <div class="contact-section-desc">
                        <span><?php echo $description; ?></span>
                    </div>
                    <div class="contact-section-form">
                        <?php Ninja_Forms()->display(1) ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php endwhile; endif; ?>

<?php get_footer();