<?php
/**
 * Theme Footer.
 *
 * See also inc/template-parts/footer.php.
 *
 * @package Page Builder Framework
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

do_action( 'wpbf_before_footer' );

do_action( 'wpbf_footer' );

do_action( 'wpbf_after_footer' );

?>
</div>
<?php do_action( 'wpbf_body_close' ); ?>
<?php wp_footer(); ?>

<!--Bootstrap-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
<!-- END -------------------------------------------------------------------------------------->
<!-- GSAP JAvascript -------------------------------------------------------------------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<!-- END -------------------------------------------------------------------------------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous"></script>

<script>
//$('.carousel').carousel()
	// JS Animate
new WOW().init();
	
//document.getElementById('hideButton').onclick = function() {
//	document.getElementById('hide').style.display = "none";
//}
const showMsg = localStorage.getItem('showMsg');

      if(showMsg !== 'false'){
        $('#hide').show();
      }

      $('#hideButton').on('click', function(){
        $('#hide').fadeOut('slow');
        localStorage.setItem('showMsg', 'false');
      });

      $('#hideButton').on('click', function(e){
        e.preventDefault();
        localStorage.setItem('showMsg', null);
      });
	
	// Logout Menu Item
	if (window.innerWidth > 1000) { 
	document.getElementById('preheadAccount').onmouseover = function() {
		document.getElementById('preheadLogout').style.display = "block";
	}
	document.getElementById('preheadLogout').onmouseout = function() {
		document.getElementById('preheadLogout').style.display = "none";
	}
	}
</script>

<?php if (!is_user_logged_in()) { ?>
  <script type="text/javascript">
    // Promotional Auto Modal
    var myModal = new bootstrap.Modal(document.getElementById('promotionalAutoModal'), {})
    // Delay Modal on 10seconds
    document.addEventListener("DOMContentLoaded", function() {

      window.setTimeout(function() {
        // First check, if localStorage is supported.
        if (window.localStorage) {


          // Get the expiration date of the previous popup.
          var nextPopup = localStorage.getItem('nextloginpopupfinal');

          $("#modalClose, #modal-close").click(function() {

            // if (nextPopup > new Date()) {
            // return;
            // }

            // Store the expiration date of the current popup in localStorage.
            var expires = new Date();
            expires = expires.setHours(expires.getHours() + 720);

            localStorage.setItem('nextloginpopupfinal', expires);


          });


        }

        if (window.localStorage && nextPopup != null) {
          if (nextPopup > new Date()) {
            return;
          }

        }

        myModal.show()
      }, 3000);


    });
  </script>

<script>
// opens all tabs down to the specified tab
window.onload = function () {
        let url = document.location.toString();
        let splitHash = url.split("#");
        if (splitHash[1]) {document.getElementById(splitHash[1]).click();}
    };
</script>

<?php } ?>

</body>
</html>
