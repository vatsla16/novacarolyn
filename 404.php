<?php get_header(); ?>

<main id="main-content">
	<section id="page-content">
		<div class="container">
			<h1>404.</h1>
			<p>Oops! The page you requested could not be found. <strong><?php global $wp; echo home_url( $wp->request ); ?></strong></p>
		</div>
	</div>
</main>

<?php get_footer();
