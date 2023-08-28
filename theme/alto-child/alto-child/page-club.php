<?php
/*
		Template Name: Club Members
*/
get_header();
?>
<?php include 'components/banners.php';?>
<?php include 'components/main-content.php';?>
<div class="container">
<ul class="nav nav-tabs" id="clubTab" role="tablist">
    <li class="nav-item" role="presentation"> <a class="nav-link active" id="classic" role="button" href="/wine-club/#classic">Alto classic club</a> </li>
    <li class="nav-item" role="presentation"> <a class="nav-link" id="premium" role="button" href="/wine-club/la-residence-club-member">Alto LA RESIDENCE CLUB</a> </li>
  </ul>
</div>
<div class="tab-content" id="clubTabContent">
  <div class="club-member" id="classic" role="tabpanel" aria-labelledby="classic-tab">
    <?php if( have_rows('classic_content') ): ?>
    <?php while( have_rows('classic_content') ): the_row();?>
    <div class="members">
      <div class="club-banner"> <img src="<?php the_sub_field('image');?>">
        <h1>
          <?php the_sub_field('club_title');?>
        </h1>
      </div>
      <div class="container">
        <div class="members-content">
          <?php the_sub_field('content');?>
          <!-- Standard Button -->
          <?php if (get_sub_field('button_text')):?>
          <button type="button" class="btn primary-button fill modal-button" data-bs-toggle="modal" data-bs-target="#myLogin">
          <?php the_sub_field('button_text');?>
          </button>
          <div class="logged-in message">
            <p>You are currently logged in.</p>
          </div>
          <?php endif;?>
        </div>
      </div>
    </div>
    <?php endwhile;?>
    <?php endif;?>
  </div>
</div>
<?php get_footer();?>
