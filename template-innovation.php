<?php
/*
Template Name: Innovation
*/
 get_header();
?>

<div class="page_wrap">
    <div class="container">
        <!--<div class="leftsidebtn"><img src="<?php bloginfo('template_url'); ?>/images/get_involved.png" /></div>
        <div class="rightsidebtn"><img src="<?php bloginfo('template_url'); ?>/images/explore.png" /></div> -->
    </div>
 
<div class="container content"> 
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="page_title row">
      
      	 <h1><?php the_title();?></h1>
      
    </div>
    <div class="span_12 row page_text no-bot-pad">
   		<?php the_content();?>
	</div>
    <?php endwhile; endif; ?>
    <div id="modmain" class="row">
    	 <div class="span6 left six columns"> 
        	<div class="box">
            	<h2><a href="<?php bloginfo('url'); ?>/sectors-landing">Innovation Sectors</a></h2>
                 <div class="box_content content innovbox">
                 	
                 	<?php 
					$args = array(
						'post_type'      => 'page',
						'posts_per_page' => 1,
						'page_id' => 18
					);
					query_posts( $args );
					while ( have_posts() ) : the_post();
					
					if ( has_post_thumbnail() ) {
                        the_post_thumbnail('mod-thumb');
                    }
					?>
					<h3 class="green"> <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<div class="mod_excerpt"><?php the_excerpt(); ?></div>
                    
                     
                      
                    
					<?php endwhile; wp_reset_query();?>
                 </div>
                 
            </div>
            <?php dynamic_sidebar('innovation-left'); ?>
                
        </div>
        
        <!--SPAN6 LEFT-->
        <div class="span6 right six columns">
        
        <!--SUCCESS STORIES-->
        	<div class="box">
            	<h2><a href="<?php bloginfo('url'); ?>/category/success-stories/">Success Stories</a></h2>
                 <div class="box_content content innovbox">
                	
          <?php 
					$args = array(
						'cat' => 13,
						'posts_per_page' =>1
					);
					query_posts( $args );
          
					while ( have_posts() ) : the_post();
					
					if(has_post_thumbnail()) {
                the_post_thumbnail('mod-thumb');
              }
              
					?>
					<h3 class="green"> <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<div class="mod_excerpt">
            <?php the_excerpt(); ?>
          </div>
                    
					<?php endwhile; wp_reset_query();?>
                    
                </div>
            </div>
            
          <!--PROGRAMS-->
        	<div class="box">
            
            <h2>
              <a href="<?php bloginfo('url'); ?>/programs/">Programs</a>
            </h2>
              
          <div class="box_content content innovbox">
                	
          <?php 
					
          $args = array(
            'post_type'=>'page',
            'post__in' => array(211)
					);
					
          query_posts( $args);
          
					while ( have_posts() ) : the_post();
					
					if(has_post_thumbnail()) {
                the_post_thumbnail('mod-thumb');
              }
              
					?>
					<h3 class="green">
            <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </h3>
					
          
          <div class="mod_excerpt">
            <?php the_excerpt(); ?>
          </div>
                    
					<?php endwhile; wp_reset_query();?>
                    
                </div>
            </div>  
            
        
        	<?php dynamic_sidebar('innovation-right'); ?> 

     <!--END SPAN6 LEFT-->            
       </div>
         
         

    </div>
    <div class="clear"></div>
</div> 
</div>   
<div class="clear"></div>
<?php  get_footer(); ?>
