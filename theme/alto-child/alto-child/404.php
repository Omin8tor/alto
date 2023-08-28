<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage alto_child
 * @since Alto Child 1.0
 */

get_header(); ?>
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <img src="/wp-content/uploads/2021/01/red-wine-stain.png" align="center" width="100%">
      </div>
      <div class="col-md-6 align-self-center">
        <h1>404</h1>
        <h2>UH OH! You're lost.</h2>
        <p>The page you are looking for does not exist.
          How you got here is a mystery. But you can click the button below
          to go back to the homepage.
        </p>
        <a href="/" class="btn primary-button fill" role="button">HOME</a>
      </div>
    </div>
  </div>
</main>


<?php get_footer();?>