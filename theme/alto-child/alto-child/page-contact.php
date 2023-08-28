<?php
/*
		Template Name: Contact us
*/
get_header();?>
<?php include 'components/banners.php';?>
<!--Secondary Content is content based under the main content --
Content split into 2 ------------------------------------------>
<div class="secondary-content">
		<div class="container">
	<div class="row">
				<div class="col-xl-5">
					<?php the_field('main_content');?>
				</div>
				<div class="col-xl-5">
					<?php echo do_shortcode('[gravityform id="2" title="true" description="true" ajax="true" tabindex="49"]
');?>
					</div>
		</div>
	</div>
</div>		
 <?php /*?><?php echo do_shortcode('[google_map_easy id="1"]');?><?php */?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.5990927191524!2d18.844813315659835!3d-34.00282998061945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcdb483b266797d%3A0xa61f1b3d99c79c29!2sAlto%20Estate!5e0!3m2!1sen!2sza!4v1610652503493!5m2!1sen!2sza" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<?php get_footer();?>