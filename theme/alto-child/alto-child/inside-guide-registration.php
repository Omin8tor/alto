<?php
/*
		Template Name: Custom Registration
*/
get_header();?>
<style>
    .wpbf-navigation.wpbf-navigation-transparent {
	box-shadow: 0 22px 25px -40px;
}
    .container {
        margin: auto;
        padding: 25vh 20px 100px;
    }
    .cr-form {
	width: 450px;
	max-width: 100%;
	margin: auto;
	z-index: 5;
	position: relative;
	padding: 20px;
	border: 1px solid #ececec;
	background-color: #fff;
}
.cr-stain {
	position: absolute;
	transform: rotate(-160deg);
	right: -300px;
	left: 0;
	margin: auto;
	z-index: 0;
	opacity: 0.8;
	width: 310px;
	bottom: 50%;
	top: 90%;
}
.gchoice.gchoice_7_4_2 {
	margin-top: 20px;
}
#gform_submit_button_7 {
	width: 100% !important;
	background-color: #881218;
	color: white;
	text-transform: uppercase;
	font-weight: 400;
}
.logged-in-message {
	padding: 30px;
	background-color: whitesmoke;
	border-left: 3px solid  #881218;
	margin: 50px 20px 0px;
}
.post-password-form {
	margin-top: 240px;
}
@media only screens and (max-width: 720px) {
    .cr-stain {
	bottom: 40%;
	top: 37%;
}
}
</style>
<div class="entry-content">
<?php
// STARTS - wrapp your content with this conditional statement
if ( post_password_required() ) :

    // if your post is password protected with our Pro version, show our password form instead
    echo get_the_password_form();

/* display the password protected content if the correct password is entered */ 
else : ?>
<div class="container">
    <div class="cr-form">
<!-- Custom registration -->
<?php
if ( is_user_logged_in() ) {

    echo '<div class="logged-in-message">';
    echo 'You are currently logged in: <a href="/my-account/">My Account</a>';
    echo '</div>';

    } else {
        echo '<img class="cr-stain" src="https://alto.co.za/wp-content/uploads/2021/01/red-wine-stain.png" alt="register" title="register to become a member on alto">';
        echo do_shortcode('[gravityform id="7" title="false" ajax="true"]');

    }
    ?>
    </div>
</div>
<?php endif;
// ENDS - hide custom fields with PPWP password protection
?>

<?php get_footer();?>