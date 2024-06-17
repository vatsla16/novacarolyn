<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<title>
	<?php if(is_front_page()): ?>
		<?php wp_title(''); ?>
	<?php elseif(is_404()) : ?>
		404 - <?php echo get_bloginfo('name'); ?>
	<?php else: ?>
		<?php wp_title(''); ?>
	<?php endif;?>
</title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/favicon.ico">

<!-- Touch Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/mstile-150x150.png" sizes="150x150">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/android-chrome-512x512.png" sizes="512x512">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); $current_user = wp_get_current_user();?>>
	<a class="skip-link" href="#main-content"><?php echo __('Skip to main content', 'novaorigins'); ?></a>
	<header class="header d-none d-md-block">
		<div class="header-top mt-4 mb-4">
            <div class="container">
                <div class="row header-name no-hover">
                    <a href="/"><span>Carolyn Vienneau</span></a>
                </div>
            </div>
        </div>
        <div class="header-middle pt-3">
            <div class="container">
                <div class="row header-menu">
                    <?php 
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header',
                                'menu_id' => 'header-menu',
                                'items_wrap' => '<nav class="nav-header-menu" aria-labelledby="nav_header"><h2 id="nav_header" class="webaim-hidden">Header Menu</h2><ul id="%1$s" class="%2$s d-flex align-items-center">%3$s</ul></nav>'
                            )
                    ); ?>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="row align-items-center">
                <span>Pictou's Master of Colour</span>
            </div>
        </div>
	</header>

	<header class="header header-mobile d-md-none">
        <div class="header-top mt-4 mb-4">
            <div class="container">
                <div class="row header-name no-hover">
                    <a href="/"><span>Carolyn Vienneau</span></a>
                </div>
            </div>
        </div>
        <div class="header-middle pt-3">
            <div class="container">
                <div class="row header-menu">
                    <button class="hamburger active" aria-controls="mobile-menu">
                        <i class="fa-solid fa-bars open-menu" aria-hidden="true"></i>
                        <i class="fa-solid fa-x close-menu" aria-hidden="true"></i>
                        <span class="webaim-hidden">
                            <?php _e('Toggle Menu', 'novaorigins'); ?>
                        </span>
                    </button>
                    <?php 
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header',
                                'menu_id' => 'header-menu',
                                'items_wrap' => '<nav class="nav-header-menu" aria-labelledby="nav_header"><h2 id="nav_header" class="webaim-hidden">Header Menu</h2><ul id="%1$s" class="%2$s">%3$s</ul></nav>'
                            )
                    ); ?>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="row align-items-center">
                <span>Pictou's Master of Colour</span>
            </div>
        </div>
	</header>
