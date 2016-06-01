<?php

 get_header();
?>

<div class="page_wrap">
    <div class="container">
        <!--<div class="leftsidebtn"><img src="<?php bloginfo('template_url'); ?>/images/get_involved.png" /></div>
        <div class="rightsidebtn"><img src="<?php bloginfo('template_url'); ?>/images/explore.png" /></div>-->
    </div>
 
    <div class="container content row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="page_title row">
        	<h1><?php foreach((get_the_category()) as $category) {$catname =$category->cat_name; $catslug =$category->slug; echo $catname;} ?></h1>
        </div>
        <div class="row">
        	<div class="back"><a href="<?php bloginfo('url'); ?>/category/<?php echo $catslug;?> "> Back to <?php echo $catname;?></a></div>
        </div>
        <div class="row">
        	<div class="single_side">
            	<h3>Recent News</h3>
            	<ul>
                	<?php $args = array(
						  'cat'      => 11,
						  'posts_per_page'=> 3
					 );
		  			query_posts( $args );
		  			while ( have_posts() ) : the_post(); ?>
                    	 <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li> 
                     <?php endwhile; wp_reset_query(); ?>
                </ul>               
                <h3>Recent Blog Posts</h3>
            	<ul>
                    <?php $args = array(
						  'cat'      => 10,
						  'posts_per_page'=> 3
					 );
		  			query_posts( $args );
		  			while ( have_posts() ) : the_post(); ?>
                    	 <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li> 
                     <?php endwhile; wp_reset_query(); ?>
                </ul>  
                <h3>Upcoming Events</h3>
            	<ul>
                    <?php $args = array(
                          'post_type' => 'events',
                          'posts_per_page'=> 3
                     );
                    query_posts( $args );
                    while ( have_posts() ) : the_post(); ?>
                         <?php 
                            $event_date = get_field('end_date');
                            $todays_date = date('Y-m-d');
                           
                            $event_date = strtotime($event_date);
                            $todays_date = strtotime($todays_date);
                             
                          
                            if($event_date > $todays_date ){ 


                         ?>
                         <li><a href="<?php the_permalink();?>"><?php the_title();?></a><br></li> 

                         <?php } ?>
                     <?php endwhile; wp_reset_query(); ?>
                </ul> 
            </div>
        	<div class="single_content post">
            	<div class="singletitle"> 
                	<h2><?php the_title(); ?></h2>
               		<div class="thedate"><? the_date();?></div>
                </div>    
                <div class="singlesocial">
                	<span class='st_email_custom sharebtn ' displayText='Email'></span>
                    <span class='st_twitter_custom sharebtn ' displayText='Twitter'></span>
                    <span class='st_facebook_custom sharebtn ' displayText='Facebook'></span>
                    <span class='st_sharethis_custom sharebtn ' displayText='ShareThis'></span>
                </div>
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
