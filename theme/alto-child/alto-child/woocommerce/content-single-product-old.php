<?php
/**
 * Custom Single Product Page > Please find original here: /plugins/woocommerce/templates/content-single-product.php
 */

defined( 'ABSPATH' ) || exit;

global $product;

do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
		echo get_the_password_form(); // WPCS: XSS ok.
		return;
}
?>
<section class="custom-single-product" style="background-image:url('<?php the_field('product_background_image');?>');">
		<div class="wpbf-container">
				<?php
				do_action( 'woocommerce_before_single_product_summary' );
				?>
				<div class="custom-summary custom-entry-summary">
						<?php
						do_action( 'woocommerce_single_product_summary' );
						?>
					<?php include 'accordion.php';?>
				</div>
		</div>
</section>
<section id="inner-content" class="custom-related">
<div class="custom-related-products">
		<?php
		do_action( 'woocommerce_after_single_product_summary' );
		?>
		<?php do_action( 'woocommerce_after_single_product' ); ?>
</div>
</section>
<?php get_footer();?>
