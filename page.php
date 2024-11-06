<?php get_header(); ?>
<main id="main-content">
    <section class="page-content mt-4 mb-4">
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="article-full">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; else : ?>
                <article>
                    <p>Sorry, no post was found!</p>
                </article>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>