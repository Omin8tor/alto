 <!-- Controls -->
 <a class="carousel-control-prev" data-mdb-target="#mainSlider" role="button" data-mdb-slide="prev">
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
 </a> <a class="carousel-control-next" data-mdb-target="#mainSlider" role="button" data-mdb-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span>
 <img src="/wp-content/uploads/2022/04/iconmonstr-angel-right-thin-240.png"/> </a>