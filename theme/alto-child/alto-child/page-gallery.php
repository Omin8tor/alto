<?php
/*
		Template Name: Gallery
*/
get_header();?>
<?php include 'components/banners.php';?>
<?php include 'components/gallery.php';?>
<?php echo do_shortcode('[instagram-feed feed=1]');?>
<?php get_footer();?>