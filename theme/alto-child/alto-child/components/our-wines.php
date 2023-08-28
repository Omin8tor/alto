<!--Secondary Content is content based under the main content --
Content split into 2 ------------------------------------------>
<div class="alto-wines">
	<?php if( have_rows('mphs') ): ?>
	<?php while( have_rows('mphs') ): the_row();?>
	<div class="row mphs" style="background-image:url('https://alto.co.za/wp-content/uploads/2021/01/MPHS.png');">
	<div class="row right-image" style="background-image:url('https://alto.co.za/wp-content/uploads/2021/01/MPHS-2.png');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4">
					<?php the_sub_field('wine_content');?>
					<a href="<?php the_sub_field('button_url');?>">
					<button class="btn primary-button fill">
					<?php the_sub_field('button_text');?>
					</button>
					</a> 
				</div>
				<div class="col-md-6 col-xl-6"	>
					<img src="<?php the_sub_field('wine_image');?>" class="d-block w-30"></div>
			</div>
		</div>
	</div>
	</div>
	<?php endwhile;?>
	<?php endif;?>
</div>
<div class="alto-wines">
	<?php if( have_rows('cabernet_sauvignon') ): ?>
	<?php while( have_rows('cabernet_sauvignon') ): the_row();?>
	<div class="row cabernet_sauvignon" style="background-image:url('https://alto.co.za/wp-content/uploads/2021/01/Alto-Cabernet-Sauvignon-1.png');">
	<div class="row left-image" style="background-image:url('https://alto.co.za/wp-content/uploads/2021/01/Alto-Cabernet-Wine.png');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-6">
					<img src="<?php the_sub_field('wine_image');?>" class="d-block w-30">
				</div>
				<div class="col-md-6 col-xl-4">
					<?php the_sub_field('wine_content');?>
					<a href="<?php the_sub_field('button_url');?>">
					<button class="btn primary-button fill">
					<?php the_sub_field('button_text');?>
					</button>
					</a> </div>
			</div>
		</div>
	</div>
	<?php endwhile;?>
	<?php endif;?>
</div>
</div>
<div class="alto-wines">
	<?php if( have_rows('shiraz') ): ?>
	<?php while( have_rows('shiraz') ): the_row();?>
	<div class="row shiraz" style="background-image:url('https://alto.co.za/wp-content/uploads/2021/01/Alto-Cabernet-Sauvignon-1.png');">
	<div class="row right-image" style="background-image:url('https://alto.co.za/wp-content/uploads/2021/02/Alto-Shiraz-Wine-1.png');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-5">
					<?php the_sub_field('wine_content');?>
					<a href="<?php the_sub_field('button_url');?>">
					<button class="btn primary-button fill">
					<?php the_sub_field('button_text');?>
					</button>
					</a> 
				</div>
				<div class="col-md-6 col-xl-6">
					<img src="<?php the_sub_field('wine_image');?>" class="d-block w-30"></div>
			</div>
		</div>
	</div>
	<?php endwhile;?>
	<?php endif;?>
</div>
</div>
<div class="alto-wines">
	<?php if( have_rows('rogue') ): ?>
	<?php while( have_rows('rogue') ): the_row();?>
	<div class="row rogue" style="background-image:url('https://alto.co.za/wp-content/uploads/2021/01/Alto-Cabernet-Sauvignon-1.png');">
	<div class="row left-image" style="background-image:url('https://alto.co.za/wp-content/uploads/2021/01/Alto-Shiraz-Wine.png');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-6">
					<img src="<?php the_sub_field('wine_image');?>" class="d-block w-30">
				</div>
				<div class="col-md-6 col-xl-5">
					<?php the_sub_field('wine_content');?>
					<a href="<?php the_sub_field('button_url');?>">
					<button class="btn primary-button fill">
					<?php the_sub_field('button_text');?>
					</button>
					</a> </div>
			</div>
		</div>
	</div>
	<?php endwhile;?>
	<?php endif;?>
</div>
</div>
<div class="alto-wines">
	<?php if( have_rows('blend') ): ?>
	<?php while( have_rows('blend') ): the_row();?>
	<div class="row blend" style="background-image:url('https://alto.co.za/wp-content/uploads/2021/01/Alto-Cabernet-Sauvignon-1.png');">
	<div class="row right-image" style="background-image:url('https://alto.co.za/wp-content/uploads/2021/03/Estate-Blend-Background-2.png');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-5">
					<?php the_sub_field('wine_content');?>
					<a href="<?php the_sub_field('button_url');?>">
					<button class="btn primary-button fill">
					<?php the_sub_field('button_text');?>
					</button>
					</a> 
				</div>
				<div class="col-md-6 col-xl-6">
					<img src="<?php the_sub_field('wine_image');?>" class="d-block w-30"></div>
			</div>
		</div>
	</div>
	<?php endwhile;?>
	<?php endif;?>
</div>
</div>
