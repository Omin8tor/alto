<?php
/*
		Template Name: Residance Members
*/
get_header();
?>
<section class="header banner" style="background-image: url('<?php the_field('background_image', 626);?>');">
		<div class="container title">
				<h1><?php the_field('banner_title', 626);?></h1>
		</div>
</section>
<!--This section appears under the main banner of a page-->
<main class="col-xl-12">
<?php the_field('main_content', 626);?>
</main>
<div class="container">
  <ul class="nav nav-tabs" id="clubTab" role="tablist">
    <li class="nav-item" role="presentation"> <a class="nav-link" id="classic" role="button" href="/wine-club/#classic">Alto classic club</a> </li>
    <li class="nav-item" role="presentation"> <a class="nav-link active" id="premium" role="button" href="/wine-club/la-residence-club-member">Alto LA RESIDENCE CLUB</a> </li>
  </ul>
</div>
<div class="tab-content" id="clubTabContent">
  <div class="la-residence" id="premium" aria-labelledby="premium-tab">
    <?php if( have_rows('premium_content', 626) ): ?>
    <?php while( have_rows('premium_content', 626) ): the_row();?>
    <div class="members">
      <div class="club-banner"> <img src="<?php the_sub_field('image');?>">
        <h1>
          <?php the_sub_field('club_title');?>
        </h1>
      </div>
      <div class="container">
        <div class="members-content">
          <?php the_sub_field('content');?>
        </div>
        <div class="col-xl-12"> <?php echo do_shortcode('[products limit="2" columns="2" category="membership-packs"]');?> </div>
      </div>
    </div>
    <?php endwhile;?>
    <?php endif;?>
  </div>
</div>
<script>
   // Scroll to animated content
// use this docu ready //
jQuery(function($) {

$("html, body").delay(200).animate({ scrollTop: $('#premium').offset().top }, 1000);

}); // end
</script>
<?php get_footer();?>
