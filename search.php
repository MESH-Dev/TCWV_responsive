<?php
  get_header();
?>

<div class="page_wrap">
    <div class="container">
        <!--<div class="leftsidebtn"><img src="<?php bloginfo('template_url'); ?>/images/get_involved.png" /></div>
        <div class="rightsidebtn"><img src="<?php bloginfo('template_url'); ?>/images/explore.png" /></div>-->
    </div>
 
<div class="container content"> 
	
	<div class="page_title row">
    	<h1> Search Results </h1>
 
    </div>
 <?php if (have_posts()) : ?>
	 <div class="searchhead">
        	Results for: "<?php echo get_search_query(); ?>"
        </div>
    <div id="blogmain" class="row" style="position: relative; overflow-x: visible; width:1040px; z-index: 10;  overflow-y: hidden; height: 2263px; left:-10px;">
      	
           <?php 
		   $cnt = 1;
		   
		
		  while ( have_posts() ) : the_post(); ?>
		   <div class="span6  left">
			  <div class="box">
				   <div class="box_content blogbox">
					  <div class="date"><?php the_time('F j, Y'); ?></div>
					   <?php
					  if ( has_post_thumbnail() ) {
						  the_post_thumbnail('mod-thumb');
					  }
					  ?>
					  <h3> <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					  <div class="mod_excerpt"><?php the_excerpt(); ?></div>
					  
					  
				   </div>     
			  </div>
		  </div>
		 <?php $cnt++; endwhile;?>
		

    </div>
   <?php   else : ?>

		<div class="searchhead">
        
        No posts found.  <br /><br />
        
        <form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
               	 	<input type="text" id="s" name="s" value="" />
		       		<input type="submit" value="Search &#8250;&#8250;" id="searchsubmit" />
				</form>	
        
        </div>

	<?php endif; 
		 
		  wp_reset_query();?> 
    
    
	<div id="nav-below" class="navigation" style="width:300px; height:200px; ">
     
      <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>  
	</div>  
</div> 
</div>   
<div class="clear"></div>

<?php  get_footer(); ?>
 