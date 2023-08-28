<!-- Carousel wrapper -->
<div id="mobileSlider" class="carousel slide mobileSlider" data-mdb-ride="carousel" data-mdb-touch="true"> 
  <!-- Static Content for slider -->
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xl-6" data-wow-delay="0.5s">
        <h1>Heritage &amp; Tradition</h1>
      </div> 
      
      <!-- Inner -->
      <div class="col-sx-12 col-xl-3">
      <div id="scene" class="carousel-inner slide"> 
          <!-- Single item -->
          <?php if( have_rows('slider_1') ): ?>
          <?php while ( have_rows( 'slider_1' ) ): the_row();

          // Get sub field values.
          $image = get_sub_field( 'image' );
          ?>
          <div class="carousel-item animate__animated animate__fadeIn" data-interval="4000" data-mdb-touch="true"> 
            <div class="row">
            <img src="<?php echo esc_url( $image['url'] ); ?>" class="d-block w-80 panel__img-col  col-sm-12 col-xl-6" alt="..." /> 
            <img  src="/wp-content/uploads/2021/02/bertho-van-der-westhuizen-signature.png" class="d-block w-30 col-sm-12  col-xl-6" alt="..."  /> 
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
          <div id="altoRouge" class="alto-rouge carousel-item animate__animated animate__fadeIn active" data-interval="4000" data-mdb-touch="true">
            <div class="row">
               <img src="<?php echo esc_url( $image['url'] ); ?>" class="d-block w-80 panel__img-col col-sm-12 col-xl-6" alt="..." /> 
          <img 
        src="/wp-content/uploads/2022/04/Alto-100-White_trasparent4x-8.png"
        class="d-block w-40 col-sm-12 col-xl-6"
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
               <img src="<?php echo esc_url( $image['url'] ); ?>" class="d-block w-80 panel__img-col col-sm-12 col-xl-6" alt="..." /> 
          <img 
        src="/wp-content/uploads/2021/02/bertho-van-der-westhuizen-signature.png"
        class="d-block w-30 col-sm-12 col-xl-6"
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
             <img src="<?php echo esc_url( $image['url'] ); ?>" class="d-block w-80 panel__img-col col-sm-12 col-xl-6" alt="..." /> 
          <img 
        src="/wp-content/uploads/2021/02/bertho-van-der-westhuizen-signature.png"
        class="d-block w-30 col-sm-12  col-xl-6"
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
               <img src="<?php echo esc_url( $image['url'] ); ?>" class="d-block w-80 panel__img-col col-sm-12  col-xl-6" alt="..." /> 
          <img 
        src="/wp-content/uploads/2021/02/bertho-van-der-westhuizen-signature.png"
        class="d-block w-30 col-sm-12 col-xl-6"
        alt="..."
      /> </div> </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
				<div class="call-to-action col-sm-12"> <a href="<?php the_field('primary_button_url');?>" class="btn primary-button fill col-sm-12 col-xl-5" role="button">Discover Our History</a> <a href="<?php the_field('secondary_button_url');?>" class="btn secondary-button outline col-sm-12 col-xl-5" role="button">Shop Our Wines</a> 
          <!--<button class="btn primary-button fill col-xl-5">Discover Your History</button>
					<button class="btn secondary-button outline col-xl-5">Shop Our Wines</button> --> 
        </div>
      </div>
      <!-- Inner --> 
    </div>
  </div>
  <?php include 'socials-svg.php';?>
   <!-- Controls -->
 <a class="carousel-control-prev" data-mdb-target="#mobileSlider" role="button" data-mdb-slide="prev">
     <?php if (have_rows('slider_1')) : ?>
         <?php
            while (have_rows('slider_1')) : the_row();

                // Get sub field values.
                $caption = get_sub_field('slider_1_previous_wine');
            ?>
             <?php echo $caption ?> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span>
 <img src="/wp-content/uploads/2022/04/iconmonstr-angel-right-thin-240.png"/>
         <?php endwhile; ?>
     <?php endif; ?>
 </a> <a class="carousel-control-next" data-mdb-target="#mobileSlider" role="button" data-mdb-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span>
 <img src="/wp-content/uploads/2022/04/iconmonstr-angel-right-thin-240.png"/> </a>
<!-- Carousel wrapper -->
  </div>