<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			tempate.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/


# Get this theme's settings based on what was entered within it's plugin. 
# This function is in functions.php 
Innovation_Settings();

# Include the header template
include('header.inc.php'); 
?>
		
		<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
		effect: 'fade',
		controlNav: false
	
	
	
	});
});
</script>
		<div class="slider-wrapper theme-kamil">
    <div id="slider" class="nivoSlider">
        <img src="/theme/Kamil/images/banner.png" alt="" />
        <a href="http://dev7studios.com"><img src="/theme/Kamil/images/banner2.png" alt=""  /></a>
        <img src="/theme/Kamil/images/banner.png" alt=""  />
        <img src="/theme/Kamil/images/banner2.png" alt="" />
    </div>
</div>

		<!-- page content -->
		
			

			

					<?php get_page_content(); ?>

				

		




<!-- include the footer template -->
<?php include('footer.inc.php'); ?>