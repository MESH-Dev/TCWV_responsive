<?php
/*
Template Name: Sectors Landing
*/
 get_header();
?>

<div class="page_wrap">
    <div class="container">
        <!--<div class="leftsidebtn"><img src="<?php bloginfo('template_url'); ?>/images/get_involved.png" /></div>
        <div class="rightsidebtn"><img src="<?php bloginfo('template_url'); ?>/images/explore.png" /></div>-->
    </div>
 
    <div class="container content row">
        <div class="sector_top row">
            <div class="sector_title">
                <div class="transform">
                    <h1 >innovation sectors</h1>
                </div>
            </div>
            <div class="sectors chemical three columns">
                <div class="sh">
                    <a href="<?php bloginfo('url'); ?>/sectors-landing/chemical-and-advanced-materials/"><img src="<?php bloginfo('template_url'); ?>/images/head_chem.gif" height="49" width="240" /></a>
                </div>
                <div class="sector_bg">
                    <img src="<?php bloginfo('template_url'); ?>/images/sl_img_1.png">
                </div>
            </div>
            <div class="sectors biotech three columns">
                <div class="sh">
                    <a href="<?php bloginfo('url'); ?>/sectors-landing/biotechnology/"><img src="<?php bloginfo('template_url'); ?>/images/head_biotech.gif" height="41" width="240" /></a>
                </div>
                <div class="sector_bg">
                    <img src="<?php bloginfo('template_url'); ?>/images/sl_img_2.png"> 
                </div>
            </div>
            <div class="sectors biometric three columns">
                <div class="sh">
                    <a href="<?php bloginfo('url'); ?>/sectors-landing/biometrics/"><img src="<?php bloginfo('template_url'); ?>/images/head_biometric.gif" height="49" width="240" /></a>
                </div>
                <div class="sector_bg">
                    <img src="<?php bloginfo('template_url'); ?>/images/sl_img_3.png">
                </div>
            </div>
            <div class="sectors energy three columns">
                <div class="sh">
                    <a href="<?php bloginfo('url'); ?>/sectors-landing/advanced-energy/"><img src="<?php bloginfo('template_url'); ?>/images/head_energy.gif" height="48" width="240" /></a>
                </div>
                <div class="sector_bg">
                    <img src="<?php bloginfo('template_url'); ?>/images/sl_img_4.png">
                </div>
            </div>
        </div>
        <!-- <div class="sector_heads" >
            <a href="<?php bloginfo('url'); ?>/sectors-landing/chemical-and-advanced-materials/"><img src="<?php bloginfo('template_url'); ?>/images/head_chem.gif" height="49" width="240" /></a>
            <a href="<?php bloginfo('url'); ?>/sectors-landing/biotechnology/"><img src="<?php bloginfo('template_url'); ?>/images/head_biotech.gif" height="41" width="240" /></a>
            <a href="<?php bloginfo('url'); ?>/sectors-landing/biometrics/"><img src="<?php bloginfo('template_url'); ?>/images/head_biometric.gif" height="49" width="240" /></a>
            <a href="<?php bloginfo('url'); ?>/sectors-landing/advanced-energy/"><img src="<?php bloginfo('template_url'); ?>/images/head_energy.gif" height="48" width="240" /></a>
        </div> -->
      
        <!-- <div class="main_img row">
            <img src="<?php bloginfo('template_url'); ?>/images/sectors_head.jpg" width="1000" height="468" />
        </div> -->

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row">
        	<div class="sector_content landing seven columns">
                <div class="post">
            	   <?php the_content(); ?>
                </div>
            </div>
            <div class="sector_side sects five columns">
                <div class="content">
            	 <h3><a class="orange" href="<?php bloginfo('url'); ?>/sectors-landing/chemical-and-advanced-materials/">Chemicals and Advanced Materials</a></h3>
           	     <h3><a class="sectorblue" href="<?php bloginfo('url'); ?>/sectors-landing/biotechnology/">BioTechnology</a></h3>
            	 <h3><a class="yellow" href="<?php bloginfo('url'); ?>/sectors-landing/biometrics/">Biometrics</a></h3>
            	 <h3><a class="sectorgreen"href="<?php bloginfo('url'); ?>/sectors-landing/advanced-energy/">Advanced Energy</a></h3>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>
        
    </div>
  
</div>   
 
<?php  get_footer(); ?>
