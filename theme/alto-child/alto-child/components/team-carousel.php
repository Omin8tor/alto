<!-- Carousel wrapper -->
<div
  id="teamCarousel"
  class="carousel slide carousel-fade carousel-multi-item"
  data-mdb-ride="carousel"
>
	<!-- ##### wilbur added another closing div at the bottom when he commented out the other carousels -->
	
	<div class="container">
		<div class="row carousel-header">
			<div class="col-xl-6">
				<h1>Alto</h1>
				<h2>Wine Maker</h2>
			</div>
			<!-- Indicators -->
			<!--<ol class="carousel-indicators">
				<li data-mdb-target="#teamCarousel" data-mdb-slide-to="0" class="active"></li>
				<li data-mdb-target="#teamCarousel" data-mdb-slide-to="1"></li>
				<li data-mdb-target="#teamCarousel" data-mdb-slide-to="2"></li>
			</ol>-->
			
			<!-- Inner -->
			<div class="carousel-inner">
					<!-- Single item -->
					<?php if( have_rows('member_one') ): ?>
					<?php while ( have_rows( 'member_one' ) ): the_row();?>
					<div class="carousel-item active">
						<div class="row">
							<div class="col-sm-12 col-xl-5"> <img src="<?php the_sub_field('image'); ?>" class="d-block w-100" alt="..."/> </div>
							<div class="col-sm-12 col-xl-5">
								<?php the_sub_field('content');?>
								<a href="<?php the_sub_field('button_url');?>" class="btn secondary-button outline">Read Now</a>
							</div>
						</div>
					</div>
					<?php endwhile;?>
					<?php endif;?>
					<!-- -->
					<!-- Single item -->
<?php /*?>					<?php if( have_rows('member_two') ): ?>
					<?php while ( have_rows( 'member_two' ) ): the_row();?>
					<div class="carousel-item">
						<div class="row">
							<div class="col-xl-5"> <img src="<?php the_sub_field('image'); ?>" class="d-block w-100" alt="..."/> </div>
							<div class="col-xl-5">
								<?php the_sub_field('content');?>
								<button class="btn secondary-button outline">Read Now</button>
							</div>
						</div>
					</div>
					<?php endwhile;?>
					<?php endif;?>
					<!-- -->
					<!-- Single item -->
					<?php if( have_rows('member_three') ): ?>
					<?php while ( have_rows( 'member_three' ) ): the_row();?>
					<div class="carousel-item">
						<div class="row">
							<div class="col-xl-5"> <img src="<?php the_sub_field('image'); ?>" class="d-block w-100" alt="..."/> </div>
							<div class="col-xl-5">
								<?php the_sub_field('content');?>
								<button class="btn secondary-button outline">Read Now</button>
							</div>
						</div>
					</div>
					<?php endwhile;?>
					<?php endif;?><?php */?>
					<!-- -->
			</div>
			<!-- Inner --> 
			
		</div>
	</div>
</div>
	<!-- Controls --> 
<!--	<a
    class="carousel-control-prev"
    href="#teamCarousel"
    role="button"
    data-mdb-slide="prev"
  > <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </a> <a
    class="carousel-control-next"
    href="#teamCarousel"
    role="button"
    data-mdb-slide="next"
  > <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next Winemaker</span> </a> </div>-->
<!-- Carousel wrapper --> 
<!--<script>
	
document.getElementById('teamContent').style.display = "none";
	
document.getElementById('carousel').onmouseover = function() {
	document.getElementById('teamContent').style.display = "block";
}	
document.getElementById('carousel').onmouseleave = function() {
	document.getElementById('teamContent').style.display = "none";
}
</script>-->