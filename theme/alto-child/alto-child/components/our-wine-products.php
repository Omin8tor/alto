<div class="container">
	<?php if( have_rows('secondary_content') ): ?>
	<?php while( have_rows('secondary_content') ): the_row();?>
	<div class="members">
<div class="members-content">
<?php the_sub_field('content');?>
</div>
<div class="col-xl-12">
<?php echo do_shortcode('[products limit="2" columns="2" category="membership-packs"]');?>
</div>
		</div>
	<?php endwhile;?>
	<?php endif;?>
</div>