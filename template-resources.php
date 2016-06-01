<?php
/*
Template Name: Resources
*/
get_header();
?>

<div class="page_wrap">
    <div class="container">
        <div class="leftsidebtn"><img src="<?php bloginfo('template_url'); ?>/images/get_involved.png" /></div>
        <div class="rightsidebtn"><img src="<?php bloginfo('template_url'); ?>/images/explore.png" /></div>
    </div>
 
<div class="container content"> 
	
	<div class="page_title row">
		<div class="six columns">
    		<h1>Enterprise Resourcesee</h1>
		</div>
    </div>

	 
    <div id="blogmain" class="row" style="position: relative; overflow-x: visible; width:1040px; z-index: 10;  overflow-y: hidden; height: 2263px; left:-10px;">
      
           <?php 
		   $cnt = 1;
		  while ( have_posts() ) : the_post(); ?>
		  
		   <div class="span6 <?php if($cnt%2 == 1) echo 'left'; else echo 'right';?>">
			  <div class="box">
				   <div class="box_content blogbox">
					  
					  <h3> <a href="<?php echo the_field('page_link');?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                       
					  <div class="mod_excerpt"><?php the_content(); ?></div>
					  
					  
				   </div>     
			  </div>
		  </div>
		 <?php $cnt++; endwhile;  wp_reset_query();?> 

    </div>
	<div id="nav-below" class="navigation" style="width:300px; height:200px; ">
     
      <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>  
	</div>  
</div> 
</div>   
<div class="clear"></div>

<?php  get_footer(); ?>