<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			header.inc.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" > <!--<![endif]-->
<head>
<meta charset="utf-8">

  <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	
	<meta name="robots" content="index, follow">

	<link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	<link href="<?php get_theme_url(); ?>/assets/css/reset.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/style.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/kamil.css" rel="stylesheet">
<link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?php get_theme_url(); ?>/assets/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/nivo-slider/themes/kamil/kamil.css" type="text/css" media="screen" />	
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	
	<!--[if lt IE 7 ]>
    <script src="<?php get_theme_url(); ?>/assets/js/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

	<?php get_header(); ?>
	
</head> 
<body id="<?php get_page_slug(); ?>" >
	<div id="wrapper" class="home">
	<!-- site header -->
	<header>
		<div id="header">
			<div class="header-holder">
				
				<!-- logo/sitename -->
				<div class="header-block">

	<h1 class="logo"><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></h1>

	

</div>
				
				
				
				<!-- main navigation -->				
				<nav class="nav-block">
					<ul id="nav">
						<?php get_i18n_navigation(get_page_slug(FALSE),0,0); ?>
					</ul>
				</nav>
				<div class='add-nav'>

<ul>

<?php get_i18n_navigation('asdasdas',1,10); ?>

</ul>

</div>
			</div>
		</div>
<?php		
/*		<!-- breadcrumbs: only show when NOT on homepage -->
		<p class="breadcrumbs" >
			<span class="wrapper">
				<a href="<?php get_site_url(); ?>">Home</a> &nbsp;&nbsp;&#149;&nbsp;&nbsp; <?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b><?php get_page_clean_title(); ?></b>
			</span>
		</p>
*/	?>	
  </header>