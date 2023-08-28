<!-- Carousel wrapper -->
<div id="mainSlider" class="carousel slide desktopSlider" data-mdb-ride="carousel" data-mdb-touch="true"> 
  <!-- Static Content for slider -->
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-3 col-xl-5">
        <h1>Heritage &amp; Tradition</h1>
        <div class="call-to-action"> <a href="<?php the_field('primary_button_url');?>" class="btn primary-button fill col-sm-12 col-xl-5" role="button">JOIN OUR WINE CLUB</a> <a href="<?php the_field('secondary_button_url');?>" class="btn secondary-button outline col-sm-12 col-xl-5" role="button">Shop Our Wines</a> 
          <!--<button class="btn primary-button fill col-xl-5">Discover Your History</button>
					<button class="btn secondary-button outline col-xl-5">Shop Our Wines</button> --> 
        </div>
      </div>
      <!-- Indicators --> 
      <!--<ol class="carousel-indicators">
				<li data-mdb-target="#mainSlider" data-mdb-slide-to="0" class="active"></li>
				<li data-mdb-target="#mainSlider" data-mdb-slide-to="1"></li>
				<li data-mdb-target="#mainSlider" data-mdb-slide-to="2"></li>
			</ol>--> 
      
      <!-- Inner -->
      <div class="col-sx-12 col-md-6 col-xl-7">
        <div id="scene" class="carousel-inner slide"> 
          <!-- Single item -->
          <?php if( have_rows('slider_1') ): ?>
          <?php while ( have_rows( 'slider_1' ) ): the_row();

          // Get sub field values.
          $image = get_sub_field( 'image' );
          ?>
          <div class="carousel-item animate__animated animate__fadeIn" data-interval="4000" data-mdb-touch="true"> 
            <div class="row">
            <img src="<?php echo esc_url( $image['url'] ); ?>" class="d-block w-80 panel__img-col  col-6" alt="..." /> 
            <img  src="/wp-content/uploads/2021/02/bertho-van-der-westhuizen-signature.png" class="d-block w-30  col-6" alt="..."  /> 
          </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
					
          <!-- Single item -->
          <?php if( have_rows('slider_2') ): ?>
          <?php  while ( have_rows( 'slider_2' ) ): the_row();

          // Get sub field values.
          $image = get_sub_field( 'image' );
          ?>
          <div  class="carousel-item animate__animated animate__fadeIn active" data-interval="4000" data-mdb-touch="true">
            <div class="row">
               <img src="<?php echo esc_url( $image['url'] ); ?>" class="d-block w-80 panel__img-col  col-6" alt="..." /> 
          <img 
        src="/wp-content/uploads/2022/04/Alto-100-White_trasparent4x-8.png"
        class="d-block w-30  col-7"
        alt="..."
      />
      </div> 
    </div>
          <?php endwhile; ?>
          <?php endif; ?>
					
          <!-- Single item -->
          <?php if( have_rows('slider_3') ): ?>
          <?php  while ( have_rows( 'slider_3' ) ): the_row();

          // Get sub field values.
          $image = get_sub_field( 'image' );
          ?>
          <div class="carousel-item animate__animated animate__fadeIn" data-interval="4000" data-mdb-touch="true">
            <div class="row">
               <img src="<?php echo esc_url( $image['url'] ); ?>" class="d-block w-80 panel__img-col  col-6" alt="..." /> 
          <img 
        src="/wp-content/uploads/2021/02/bertho-van-der-westhuizen-signature.png"
        class="d-block w-30  col-6"
        alt="..."
      /></div> </div>
          <?php endwhile; ?>
          <?php endif; ?>
					
          <!-- Single item -->
          <?php if( have_rows('slider_4') ): ?>
          <?php  while ( have_rows( 'slider_4' ) ): the_row();

          // Get sub field values.
          $image = get_sub_field( 'image' );
          ?>
          <div class="carousel-item animate__animated animate__fadeIn" data-interval="4000" data-mdb-touch="true">
          <div class="row">
             <img src="<?php echo esc_url( $image['url'] ); ?>" class="d-block w-80 panel__img-col  col-6" alt="..." /> 
          <img 
        src="/wp-content/uploads/2021/02/bertho-van-der-westhuizen-signature.png"
        class="d-block w-30  col-6"
        alt="..."
      /> </div> </div>
          <?php endwhile; ?>
          <?php endif; ?>
          <!-- Single item -->
          <?php if( have_rows('slider_5') ): ?>
          <?php  while ( have_rows( 'slider_5' ) ): the_row();

          // Get sub field values.
          $image = get_sub_field( 'image' );
          ?>
          <div class="carousel-item animate__animated animate__fadeIn" data-interval="4000" data-mdb-touch="true">
            <div class="row">
               <img src="<?php echo esc_url( $image['url'] ); ?>" class="d-block w-80 panel__img-col  col-6" alt="..." /> 
          <img 
        src="/wp-content/uploads/2021/02/bertho-van-der-westhuizen-signature.png"
        class="d-block w-30  col-6"
        alt="..."
      /> </div> </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <!-- Inner --> 
      <!-- Alto Signature Image -->
    </div>
  </div>
  <?php include 'socials-svg.php';?>
  <?php include 'controls-for-slider.php';?>
</div>
<!-- Carousel wrapper -->
