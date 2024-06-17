<?php /* Template Name: Print Listing */
get_header(); 

$print_args = array(
    'post_type' => 'print',
    'post_status' => 'publish',
    'tax_query' => array(
      'relation' => 'OR',
    ),
    'meta_query' => array(
      'relation' => 'AND',
    ),
    'order' => 'desc'
);
$print_query = new WP_Query($print_args);
?>

<?php if ( $print_query->have_posts() ) : ?>

    <main id="main-content" class="print-listing">
        <section id="page-content">
            <div class="container">
                <div class="print-listing-container">
                    <?php foreach ( $print_query->posts as $print ):
                        $image = get_field( 'image', $print->ID );
                        $price = get_field( 'price', $print->ID );
                        $title = get_field( 'title', $print->ID );
                    ?>
                        <div class="print card" style="width: 18rem;">
                            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                            <div class="card-body">
                                <div class="card-title"><?php echo $title; ?></div>
                                <div class="card-text mb-2">
                                    <span class="print-price">Price: $<?php echo $price; ?></span>
                                </div>
                                <button id="requestButton" class="button--primary request-button" data-toggle="modal" data-target="requestModal" data-whatever="<?php echo $title; ?>">Request a print</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="requestModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="requestModalLabel">Request</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-x close-menu" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo do_shortcode('[ninja_form id=4]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php endif; ?>

<?php get_footer();
//[ninja_form id=4]