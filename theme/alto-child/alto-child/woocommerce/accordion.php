<div class="accordion" id="accordion">
	<!-- Accordion Five-->
	<?php if( get_field('vineyards') ): ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Vineyards
        </button>
      </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
      <div class="accordion-body">
        <?php the_field('vineyards');?>
      </div>
    </div>
  </div>
	<?php endif; ?>
	<!-- Accordion Two-->
	<?php if( get_field('winemaking') ): ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Winemaking
        </button>
      </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
      <div class="accordion-body">
        <?php the_field('winemaking');?>
      </div>
    </div>
  </div>
	<?php endif; ?>
	<!-- Accordion Three-->
	<?php if( get_field('winemakers_comments') ): ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Winemakers Comments
        </button>
      </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
      <div class="accordion-body">
        <?php the_field('winemakers_comments');?>
      </div>
    </div>
  </div>
	<?php endif; ?>
	<!-- Accordion Seven-->
	<?php if( get_field('awards') ): ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          Awards
        </button>
      </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordion">
      <div class="accordion-body">
        <?php the_field('awards');?>
      </div>
    </div>
  </div>
	<?php endif; ?>
	<!-- Accordion Four-->
	<?php if( get_field('food_pairing') ): ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Food Pairing
        </button>
      </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
      <div class="accordion-body">
        <?php the_field('food_pairing');?>
      </div>
    </div>
  </div>
	<?php endif; ?>
	<!-- Accordion Five-->
	<?php if( get_field('analysis') ): ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Analysis
        </button>
      </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
      <div class="accordion-body">
        <?php the_field('analysis');?>
      </div>
    </div>
  </div>
	<?php endif; ?>
	<!-- Accordion Six-->
	<?php if( get_field('background') ): ?>
	<div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          Background
        </button>
      </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordion">
      <div class="accordion-body">
        <?php the_field('background');?>
      </div>
    </div>
  </div>
	<?php endif; ?>	
</div>