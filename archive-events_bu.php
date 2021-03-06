<?php
  get_header();
?>

<div class="page_wrap">
    <div class="container">
        <!--<div class="leftsidebtn"><img src="<?php //('template_url'); ?>/images/get_involved.png" /></div>
        <div class="rightsidebtn"><img src="<?php //bloginfo('template_url'); ?>/images/explore.png" /></div>--->
    </div>
 
<div class="container content"> 
	
	<div class="page_title row">
    	<h1>Events</h1>
 
    </div>

	 <!--BLOGMAIN-->
    <div id="blogmain" class="row" style="position: relative; overflow-x: visible; width:1040px; z-index: 10;  overflow-y: hidden; height: 2263px; left:-10px;">
      

      
      <?php 
		   $cnt = 1;
		  while ( have_posts() ) : the_post(); ?>
      
      <?php 
        $event_date = get_field('end_date');
        $todays_date = date('Y-m-d');
      
        if($event_date > $todays_date){ ?> 
      
      <!--PAST-->
		   <div id="past" class="span6 left">
			  <div class="box">
				   <div class="box_content blogbox">
					  
					   <?php
					  if ( has_post_thumbnail() ) {
						  the_post_thumbnail('mod-thumb');
					  }
					  ?>
					  <h3> <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                      <div class="eventdate"><?php echo get_field('start_date'); ?></div>
					  <div class="mod_excerpt"><?php the_excerpt(); ?></div>
					  
					  <div class="mod_social">
						  <a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"></a> 
                        <a class="twitter" href="http://twitter.com/intent/tweet?url=<?php the_permalink();?>&text=<?php the_title(); ?>" target="_blank"></a>
                        <span class="st_sharethis_custom sharebtn_post" st_url="<?php the_permalink();?>" st_title="<?php the_title(); ?>"></span>
                        <span class="st_email_custom sharebtn_post" st_url="<?php the_permalink();?>" st_title="<?php the_title(); ?>"></span>  
					  </div>
				   </div>     
			  </div>
        <!--END SPAN6 LEFT-->
		  </div>
    
      
       <?php
            }
       $cnt++; 
       endwhile;  
       wp_reset_query();
       
       ?> 
      

      <!--END BLOG MAIN-->
    </div>
	<div id="nav-below" class="navigation" style="width:300px; height:200px; ">
     
      <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>  
	</div>  
</div> 
</div>   
<div class="clear"></div>

<?php  get_footer(); ?>