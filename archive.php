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
    	<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1><?php single_cat_title(); ?></h1>

			<?php /* If this is a tag archive */ }
			elseif( is_tax() ) { 
             global $wp_query;
   			 $term = $wp_query->get_queried_object();
    			$title = $term->name;
				$taxid = $term->term_id?>
				<h1> <?php if ($taxid == 9){echo "<span style='font-size:24px'>" . $title ."</span>";} else echo $title; ?></h1>

			<?php /* If this is a daily archive */ }
			elseif( is_tag() ) { ?>
				<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h1>Archive for <?php the_time('F jS, Y'); ?></h1>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h1>Archive for <?php the_time('F, Y'); ?></h1>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h1 class="pagetitle">Author Archive</h1>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1 class="pagetitle">Blog Archives</h1>
			
			<?php } ?>
 
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
					  
					  <div class="mod_social">
						  <a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"></a> 
                        <a class="twitter" href="http://twitter.com/intent/tweet?url=<?php the_permalink();?>&text=<?php the_title(); ?>" target="_blank"></a>
                        <span class="st_sharethis_custom sharebtn_post" st_url="<?php the_permalink();?>" st_title="<?php the_title(); ?>"></span>
                        <span class="st_email_custom sharebtn_post" st_url="<?php the_permalink();?>" st_title="<?php the_title(); ?>"></span> 
					  </div>
				   </div>     
			  </div>
		  </div>
		 <?php $cnt++; endwhile; endif; wp_reset_query();?> 

    </div>
	<div id="nav-below" class="navigation" style="width:300px; height:200px; ">
     
      <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>  
	</div>  
</div> 
</div>   
<div class="clear"></div>

<?php  get_footer(); ?>