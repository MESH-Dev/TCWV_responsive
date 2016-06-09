<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive  '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot;  '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo '  '; bloginfo('description'); }
		      else {
		          bloginfo('name');echo '  '; bloginfo('description'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
 
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"  media="screen"/>

	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 <meta name="viewport" content="width=device-width, initial-scale=1"/> <!-- , maximum-scale=1, user-scalable=1 -->

	<?php wp_head(); ?>
    
  
	<script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "9c034ddf-8a85-436d-8953-a5a1438be9a7"}); </script>

	<style>
		.col-3 {
			width: 23%;
			float: left;
			margin-right: 10px;
		}
		.col-4 {
			width: 33%;
			float: left;
		}
		.col-6 {
			width: 50%;
			float: left;
		}
		.col-9 {
			width: 75%;
			float: left;
		}
		.rowmarg {
			margin: 20px 0;
		}
	</style>

</head>

<body <?php body_class() ?> >
 
 	<header id="header">
		<div class="container clearfix" >
			<div class="nav-trigger"><i class="fa fa-fw fa-2x fa-bars"></i></div>
			<div class="four columns brand">
        		<div class="logo">
        			<a href="<?php bloginfo('url'); ?>">
        				<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="TechConnect West Virginia" title="TechConnect West Virginia">
        			</a>
        		</div>
    		</div>

    		<div class="eight columns top-nav">
    			<div class="sidr-close">X</div>
    			<div class="gateway">
		            <div class="search">
		            	<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
		               	 	<input type="text" id="s" name="s" value="" />
				       		<input type="submit" value="Search &#8250;&#8250;" id="searchsubmit" />
						</form>	
					</div>
		            <div class="social">
		            	<a href="<?php bloginfo('url'); ?>/feed" target="_blank"><span class='rss_custom' displayText='RSS'></span></a>
		            	<span class='st_email_custom sharebtn ' displayText='Email'></span>
		                <a href="http://www.linkedin.com/groups/TechConnectWV-3797184?mostPopular=&gid=3797184" target="_blank"><span class='linkedin_custom' displayText='RSS'></span></a>
		                <a href="https://twitter.com/#!/techconnectwv" target="_blank"><span class='twitter_custom sharebtn ' displayText='Twitter'></span></a>
		            	<a href="http://www.facebook.com/pages/TechConnectWV/115661065144741" target="_blank"><span class='facebook_custom sharebtn ' displayText='Facebook'></span></a>
		                <span class='st_sharethis_custom sharebtn ' displayText='ShareThis'></span>	
		            </div>
            	</div>
            <!-- <div class="clear">&nbsp;</div> -->
	            <nav class="nav clearfix">
	            	
	            	<?php wp_nav_menu( array('theme_location' => 'primary-menu' ) ); ?>
	            </nav> 
        	</div>
        </div>
    </header> 
    <div id="tagline" >
    	<div class="container" >
        	<div class="tag"><?php bloginfo('description'); ?></div>
        </div>
    </div>   
		 
