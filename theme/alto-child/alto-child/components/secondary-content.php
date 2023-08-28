<!--Secondary Content is content based under the main content --
Content split into 2 ------------------------------------------>
<div class="secondary-content members-information">
	<?php if( have_rows('secondary_content') ): ?>
	<?php while( have_rows('secondary_content') ): the_row();?>
	<div class="row" style="background-image:url('<?php the_sub_field('image');?>');">
		<div class="container">
			<div class="col-xl-12">
				<div class="col-sm-12 col-md-6 col-xl-8">
					<img src="<?php the_sub_field('image');?>">
				</div>
				<div class="col-sm-12 col-md-6 col-xl-4">
					<?php the_sub_field('content');?>
					<!-- Standard Button -->
					<?php if (get_sub_field('button_text')):?>
					<a href="<?php the_sub_field('button_url');?>">
					<button class="btn primary-button fill">
					<?php the_sub_field('button_text');?>
					</button>
					</a> <?php endif;?>
						<!-- Booking button Wine Tasting Page -->
					<?php if (is_page( array('299') )) { ?>
					<?php if (get_sub_field('button_text')):?>
					<button type="button" class="btn primary-button fill" data-bs-toggle="modal" data-bs-target="#myModal">
					<?php the_sub_field('button_text');?>
					</button>
					<?php endif;?>
					<?php } ?>
						<!-- Booking button Login and Register(Wine Club Page) -->
					<?php if (is_page( array('831', '626') )) { ?>
					<?php if (get_sub_field('button_text')):?>
					<button type="button" class="btn primary-button fill modal-button" data-bs-toggle="modal" data-bs-target="#myLogin">
					<?php the_sub_field('button_text');?>
					</button>
					<div class="logged-in message"><p>You are currently logged in.</p></div>
					<?php endif;?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile;?>
	<?php endif;?>
</div>
<?php include 'modal.php';?>
