<div class="container page-top gallery">
	<div class="row">
		<?php
		$gallery = get_field( 'gallery' );
		$images = array();
		$items_per_page = 6;
		$total_items = count( $gallery );
		$total_pages = ceil( $total_items / $items_per_page );
		if ( get_query_var( 'paged' ) ) {
			$current_page = get_query_var( 'paged' );
		} elseif ( get_query_var( 'page' ) ) {
			$current_page = get_query_var( 'page' );
		} else {
			$current_page = 1;
		}
		$starting_point = ( ( $current_page - 1 ) * $items_per_page );
		if ( $gallery ) {
			$images = array_slice( $gallery, $starting_point, $items_per_page );
		}

		if ( !empty( $images ) ) {
			foreach ( $images as $image ): ?>
		<div class="col-lg-4 col-md-4 col-xs-6 thumb"> <a href="<?php echo esc_url($image['url']); ?>" class="fancybox" rel="ligthbox"> <img  src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="zoom img-fluid"> </a> </div>
		<?php
		endforeach;
		}
		?>
		<div class="pagination">
			<?php

			/**
			 * pagination
			 */
			$big = 999999999;
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'before_page_number' => '<span class="screen-reader-text">' . __( 'Page ', 'textdomain' ) . ' </span>'
			) );
			/**
			 * Set previous page
			 */
			if ( $total_pages > 1 && $current_page <= $total_pages && $current_page != 1 ) {
				echo '<a href="' . get_permalink() . ( ( $current_page - 1 ) != 1 ? 'page/' . ( $current_page - 1 ) . '/' : '' ) . '">' . __( '' ) . '</a>';
			}

			/**
			 * Set next page
			 */
			if ( $total_pages > 1 && $current_page < $total_pages && $current_page != $total_pages ) {
				echo '<a href="' . get_permalink() . 'page/' . ( $current_page + 1 ) . '/">' . __( '' ) . '</a>';
			}
			?>
		</div>
	</div>
</div>
<script>
$(window).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
</script>