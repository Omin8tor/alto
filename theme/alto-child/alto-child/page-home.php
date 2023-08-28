<?php
/*
		Template Name: Home
*/
get_header();
?>
<?php include 'components/slider.php';?>
<?php include 'components/mobile-slider.php';?>
<?php include 'components/pre-loader.php';?>
<div class="row">
	<div class="container welcome">
		<main class="col-xl-12" data-wow-duration="2s" data-wow-delay="1s">
			<?php the_field('welcome');?>
		</main>
		<hr class="rotate-90 col-xl-12">
	</div>
	<div class="our-wine-products">
		<div class="container">
			<div class="col-xl-12">
				<?php the_field('our_wine');?>
				<div class="woocommerce columns-4  row">
					<?php if( have_rows('products') ): ?>
				<?php
				while ( have_rows( 'products' ) ): the_row();?>
					<div class="col-xl-3">
						<img class="static-image" src="<?php the_sub_field('image');?>">
						<img class="hover-image" src="<?php the_sub_field('hover_image');?>">
						<h2 class="woocommerce-loop-category__title"><?php the_sub_field('title');?></h2>
						<div class="hover">
							<div class="product-info">
							<h4><?php the_sub_field('title');?><br>
							<?php the_sub_field('product_price');?></h4>
								</div>
							<a href="<?php the_sub_field('product_link');?>" class="btn primary-button fill" role="button">View</a>
						</div>
					</div>
				<?php endwhile;?>
				<?php endif;?>
				</div>
				<a href="<?php the_field('shop_collection_button_url');?>" class="btn primary-button fill" role="button">View our collection</a>
			</div>
		</div>
	</div>
	<div class="alto-winery">
		<div class="container">
			<div class="col-xl-12">
				<?php the_field('our_winery');?>
				<!-- Winery ------------->
				<?php if( have_rows('our_location') ): ?>
				<?php
				while ( have_rows( 'our_location' ) ): the_row();

				// Get sub field values.
				//$image = get_sub_field( 'image' );
				//$content = get_sub_field( 'content' );

				?>
				<div class="row">
					<div class="col-xl-7 pictureContainer">
						<img id="hover" src="<?php the_sub_field('image');?>">
						<img id="moveover" src="<?php the_sub_field('image_hover');?>"> 
					</div>
					<?php /*?><div class="col-xl-1"> 
						<img id="moveover" src="<?php the_sub_field('image_hover');?>"> </div><?php */?>
					<div class="col-xl-4">
						<?php the_sub_field('content');?>
			<a href="<?php the_field('our_location_button_url');?>" class="btn secondary-button outline" role="button">View now</a>						
			<!--  <button class="btn secondary-button outline">View now</button> -->
					</div>
				</div>
				<?php endwhile;?>
				<?php endif;?>
			</div>
			<div class="col-xl-12">
				<!-- Winery ------------->
				<?php if( have_rows('our_wine_collection') ): ?>
				<?php
				while ( have_rows( 'our_wine_collection' ) ): the_row();

				// Get sub field values.
				//$image = get_sub_field( 'image' );
				//$content = get_sub_field( 'content' );

				?>
				<div class="row">
					<div class="col-xl-4">
						<?php the_sub_field('content');?>
						<a href="<?php the_field('our_wine_collection_button_url');?>" class="btn secondary-button outline" role="button">View our collection</a>
						<!-- <button class="btn secondary-button outline">View our collection</button> -->
					</div>
					<?php /*?><div class="col-xl-1"> <img id="moveover" src="<?php the_sub_field('image_hover');?>"> </div><?php */?>
					<div id="Swop" class="col-xl-7 pictureContainer"> 
						<img id="moveover" src="<?php the_sub_field('image_hover');?>">
						<img id="hover" src="<?php the_sub_field('image');?>"> 
					</div>
				</div>
				<?php endwhile;?>
				<?php endif;?>
			</div>
			<div class="col-xl-12">
				<!-- Winery ------------->
				<?php if( have_rows('wine_tasting') ): ?>
				<?php
				while ( have_rows( 'wine_tasting' ) ): the_row();

				// Get sub field values.
				//$image = get_sub_field( 'image' );
				//$content = get_sub_field( 'content' );

				?>
				<div class="row">
					<div class="col-xl-7 pictureContainer"> 
						<img id="hover" src="<?php the_sub_field('image');?>"> 
						<img id="moveover" src="<?php the_sub_field('image_hover');?>">
					</div>
					<div class="col-xl-4">
						<?php the_sub_field('content');?>
						<a href="<?php the_field('wine_tasting_button_url');?>" class="btn secondary-button outline" role="button">Book a tasting</a>						
						<!-- <button class="btn secondary-button outline">Book a tasting</button> -->
					</div>
				</div>
				<?php endwhile;?>
				<?php endif;?>
			</div>
		</div>
	</div>
	<?php include 'components/team-carousel.php';?>
	<?php echo do_shortcode('[instagram-feed feed=1]');?>	
	<?php include 'components/pre-footer.php';?>
</div>
<?php get_footer();?>
