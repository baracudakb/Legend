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
		


		<!-- page content -->


			
<div class="slider">
	<span class="previous-collection indication">Previous Collection</span> <a class="link-prev" href="/Collection/Gent-Quartz-Collection.aspx" id="plcRoot_Layout_zoneContent_pageplaceholder1_partPlaceholder_Layout_ctl00_lnkPrevCollection">&lt;</a>
	<div class="holder collection-overview">
		<div class="frame">
			<ul class="slideshow">
				<li>
					<div class="image">
						<img alt="" height="379" src="/theme/Kamil/images/kolekce1.png" width="406" /></div>
					<div class="text-block">
						<h2>
							Gent Automatic</h2>
						<p>
							Men's watches by Certina travel alongside the life of today's modern man with top class and reliability. They strike the right chord with sobriety and harmony in sport-classical product lines, while in extreme sport series, their cutting-edge technology and dynamism exude bold, exclusive character.</p>
						<ul class="btn-list">
							<li>
								<a href="/Technology.aspx">Technology</a></li>
							<li>
								<a href="/Collection/WatchFinder.aspx">Watch Finder</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<span class="next-collection indication">Next Collection</span> <a class="link-next" href="/Collection/Lady-Quartz-Collection.aspx" id="plcRoot_Layout_zoneContent_pageplaceholder1_partPlaceholder_Layout_ctl00_lnkNextCollection">&gt;</a></div>
<div id="main">
<div class="main-holder">
	<div class="form-block">
		<ul class="product-list">
			<li>
				<div class="photo">
					<a href="/Collection/Gent-Automatic-Collection/DS-1.aspx?m=1" id="plcRoot_Layout_zoneContent_pageplaceholder1_partPlaceholder_Layout_ctl00_rptProductFamilies_ctl00_rptProductImages_ctl00_lnkFamilyDetail"><img alt="" src="/theme/Kamil/images/model1.png" width="235" height="420" /> </a> </div>
				<h3 class="title">
					<a class="family-link" href="/Collection/Gent-Automatic-Collection/DS-1.aspx">DS 1</a></h3>
				
			</li>
			<li>
				<div class="photo">
					<a href="/Collection/Gent-Automatic-Collection/DS-1.aspx?m=1" id="plcRoot_Layout_zoneContent_pageplaceholder1_partPlaceholder_Layout_ctl00_rptProductFamilies_ctl00_rptProductImages_ctl00_lnkFamilyDetail"><img alt="" src="/theme/Kamil/images/model1.png" width="235" height="420" /> </a> </div>
				<h3 class="title">
					<a class="family-link" href="/Collection/Gent-Automatic-Collection/DS-1.aspx">DS 1</a></h3>
				
			</li><li>
				<div class="photo">
					<a href="/Collection/Gent-Automatic-Collection/DS-1.aspx?m=1" id="plcRoot_Layout_zoneContent_pageplaceholder1_partPlaceholder_Layout_ctl00_rptProductFamilies_ctl00_rptProductImages_ctl00_lnkFamilyDetail"><img alt="" src="/theme/Kamil/images/model1.png" width="235" height="420" /> </a> </div>
				<h3 class="title">
					<a class="family-link" href="/Collection/Gent-Automatic-Collection/DS-1.aspx">DS 1</a></h3>
				
			</li>
			
		</ul>
	</div>
</div>
</div>
			

					<?php get_page_content(); ?>

				

		




<!-- include the footer template -->
<?php include('footer.inc.php'); ?>