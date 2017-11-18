<?php
/*
Plugin Name:  Sticky/Fixed container for page builders
Plugin URI:   www.adamleone.com	
Description:  Create a sticky/fixed container if you have a theme that uses a page builder. Tested with Fusion Builder and Visual Bakery Composer
Version:      1.0
Author:       Adam Leone	
Author URI:   www.adamleone.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  stickyfixed
*/

add_action( 'wp_head', 'placein' );
function placein(){
  ?>
  <style type='text/css'>
  #fixedContainer {
		display:none;
		position: fixed;
		width: 100%;
		z-index: 9999;
    top: 32px;
		box-shadow: rgba(0,0,0,.117647) 0 1px 3px;
}
</style>
  
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script> 
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 20) {
    $('#fixedContainer').fadeIn();
  } else {
    $('#fixedContainer').fadeOut();
  }
});
</script>
  <?php
}
