<?php
/*
Template Name: Organization
*/
 get_header();
?>

<div class="page_wrap">

 
    <div class="container content row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="page_title row">
            
        	   <h1>Organization</h1>
           
        </div>
        <div class="row">
        	<div class="back"><a href="<?php bloginfo('url'); ?>"> Back Home</a></div>
        </div>
        <div class="row">
        
        	<div class="single_side page_side">
            	<h3>About TechConnectWV</h3>
            	<ul>
					<li><a href="<?php echo get_permalink(8); ?>">Mission</a></li>
                    <li><a href="<?php echo get_permalink(182); ?>">Leadership</a></li>
                    <li><a href="<?php echo get_permalink(189); ?>">Partners</a></li>
                    <li><a href="<?php echo get_permalink(191); ?>">Sponsors</a></li>
                    <!--<li><a href="<?php //echo get_permalink(211); ?>">Programs</a></li>-->
                </ul>
                 
            </div>
        	<div class="single_content post eight columns">
            	<h2 class="org"><?php the_title();?></h2>
                 <div class="content">
					 <?php
                          if ( has_post_thumbnail() ) {
                              the_post_thumbnail();
                          }
                    ?>
                    <?php the_content(); ?>
                </div>
            </div>
            
        </div>
        <?php endwhile; endif; ?>
        
    </div>
</div>   
 
<?php  get_footer(); ?>


