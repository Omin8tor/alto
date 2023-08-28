<?php
/*
	Template Name: Recipes
	Template Post Type: post, page, product
*/

get_header();
?>
<div class="row">
<div class="container">
<main class="col-xl-12">
<?php the_field('content');?>
<?php the_post_thumbnail(); ?>
	<?php /*?><div class="row flavours">
	<div class="col-xl-6">
	<?php the_field('flavours_first_column');?>
	</div>
	<div class="col-xl-6">
	<?php the_field('flavours_second_column');?>
	</div>
	</div><?php */?>
	<?php /*?><div class="row">
	<?php if (get_field('servings')):?>
	<div class="col-xl-4 recipe-details">
		<h4>Servings</h4>
	<?php the_field('servings');?>
	</div>
		<?php endif;?>
	<?php if (get_field('prep_time')):?>
	<div class="col-xl-4 recipe-details">
		<h4>Prep Time</h4>
	<?php the_field('prep_time');?>
	</div>
		<?php endif;?>
	<?php if (get_field('cook_time')):?>
	<div class="col-xl-4 recipe-details">
		<h4>Cook Time</h4>
	<?php the_field('cook_time');?>
	</div>
		<?php endif;?>
	</div><?php */?>
	<?php if( have_rows('recipe_steps') ): ?>
	 <?php while( have_rows('recipe_steps') ): the_row();?>
	<div class="row ingredients">
		<h2><?php the_sub_field('recipe_title');?></h2>
	<div class="col-xl-6">
		<?php if ( get_sub_field('recipe_ingredients')):?>
		<h3>Ingredients</h3>
	<?php the_sub_field('recipe_ingredients');?>
		<?php endif; ?>
	</div>
	<div class="col-xl-6">
		<?php if ( get_sub_field('recipe_instructions')):?>
		<h3>Instructions</h3>
	<?php the_sub_field('recipe_instructions');?>
		<?php endif; ?>
	</div>
	</div>
	<?php endwhile;?>
	<?php endif;?>
	<div class="row call-to-action">
	<div class="col-xl-3">
	<a href="<?php the_field('download_url');?>" download class="btn primary-button fill" role="button">Download Recipe</a>
	</div>
	<div class="col-xl-3">
	<a href="<?php the_field('wine_link');?>" class="btn primary-button fill" role="button">More about the wine</a>
	</div>
	</div>
</div>
</div>
</div>
<?php get_footer();?>
