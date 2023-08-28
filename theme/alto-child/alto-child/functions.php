<?php
/**
 * Functions.
 *
 * @package Page Builder Framework Child
 */

defined( "ABSPATH" ) || die( "Can't access directly" );

/**
 * Child theme setup.
 */
function wpbf_child_theme_setup() {

	// Textdomain.
	load_child_theme_textdomain( 'page-builder-framework-child', WPBF_CHILD_THEME_DIR . '/languages' );

}
add_action( 'after_setup_theme', 'wpbf_child_theme_setup' );

/**
 * Enqueue scripts & styles.
 */
function wpbf_child_scripts() {

	// Styles.
	wp_enqueue_style( 'wpbf-style-child', WPBF_CHILD_THEME_URI . '/style.css', false, WPBF_CHILD_VERSION );

	// Scripts (uncomment if needed).
	// wp_enqueue_script( 'wpbf-site-child', WPBF_CHILD_THEME_URI . '/js/site-child.js', false, WPBF_CHILD_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'wpbf_child_scripts', 13 );

add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_loop_ajax_add_to_cart', 10, 2 );
function quantity_inputs_for_loop_ajax_add_to_cart( $html, $product ) {
    if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
        // Get the necessary classes
        $class = implode( ' ', array_filter( array(
            'button',
            'product_type_' . $product->get_type(),
            $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
            $product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
        ) ) );

        // Adding embeding <form> tag and the quantity field
        $html = sprintf( '%s%s<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>%s',
        '<form class="cart">',
        woocommerce_quantity_input( array(), $product, false ),
        esc_url( $product->add_to_cart_url() ),
        esc_attr( isset( $quantity ) ? $quantity : 1 ),
        esc_attr( $product->get_id() ),
        esc_attr( $product->get_sku() ),
        esc_attr( isset( $class ) ? $class : 'button' ),
        esc_html( $product->add_to_cart_text() ),
        '</form>'
        );
    }
    return $html;
}

add_action( 'wp_footer' , 'archives_quantity_fields_script' );

function archives_quantity_fields_script(){
    //if( is_shop() || is_product_category() || is_product_tag() ): ?>
    <script type='text/javascript'>
        jQuery( document ).ready( function( $ ) {
        $( document ).on( 'change', '.quantity .qty', function() {
            $( this ).parent( '.quantity' ).next( '.add_to_cart_button' ).attr( 'data-quantity', $( this ).val() );
            //alert("Changed");
        });
    });
        
        jQuery(function($) {
            // Update quantity on 'a.button' in 'data-quantity' attribute (for ajax) 
            $(".add_to_cart_button.product_type_simple").on('click', function() {
                var $button = $(this);
                $button.data('quantity', $button.parent().find('input.qty').val());
            });
            // remove old "view cart" text, only need latest one thanks!
            $(document.body).on("adding_to_cart", function() {
                $("a.added_to_cart").remove();
            });
        });
    </script>
    <?php //endif;
}

//add_action( 'woocommerce_checkout_before_customer_details', 'bbloomer_notice_shipping' );
 
//function bbloomer_notice_shipping() {
//echo '<p class="shop-notice">We will be taking a festive break. All orders received from Wednesday 15.12.2021 will be processed for dispatch after Tuesday 04.01.2022 for delivery the week thereafter.</p>';
//}

//add_action( 'woocommerce_product_query', 'wpdd_limit_shop_categories' );
/**
 * Show products from specific product categories on the Shop page.
 */
/*function wpdd_limit_shop_categories( $q ) {
    $tax_query = (array) $q->get( 'tax_query' );

    $tax_query[] = array(
		'taxonomy' => 'product_cat',
		'field' => 'slug',
		'terms' => array( 'membership-packs', 'm-p-h-s', 'cabernet-sauvignon', 'shiraz', 'alto-range' ),
		'include_children' => true,
    );

    $q->set( 'tax_query', $tax_query );
}*/

/* Registration form to reload page after form submission */
add_filter( 'gform_confirmation', function ( $confirmation, $form, $entry, $ajax ) {
    GFCommon::log_debug( __METHOD__ . '(): running.' );
 
    $forms = array( 6 ); // 1 is the form ID
 
    if ( ! in_array( $form['id'], $forms ) ) {
        return $confirmation;
    }
 
    if ( isset( $confirmation['redirect'] ) ) {
		// current page url
		global $wp;
		$url = esc_url_raw( home_url( add_query_arg( $_GET, $wp->request ) ) );
		
        GFCommon::log_debug( __METHOD__ . '(): Redirect to URL: ' . $url );

		$confirmation = '<div class="gform_confirmation_wrapper">Registration successful! This page will now refresh.</div>';
		$confirmation .= "<script type=\"text/javascript\">setTimeout(function () { window.location.assign('$url') }, 3500);</script>";
    }
 
    return $confirmation;
}, 10, 4 );