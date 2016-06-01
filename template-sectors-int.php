<?php
/*
Template Name: Sectors Interior
*/
 get_header();
?>

<div class="page_wrap">
 
 
    <div class="container content row">
    	<div class="back"><a href="<?php bloginfo('url'); ?>/sectors-landing/"> Back to Sectors</a></div>
        <div class="sector_heads row clear" >
            <a href="<?php bloginfo('url'); ?>/sectors-landing/chemical-and-advanced-materials/"><img src="<?php bloginfo('template_url'); ?>/images/head_chem.gif" height="49" width="240" /></a>
            <a href="<?php bloginfo('url'); ?>/sectors-landing/biotechnology/"><img src="<?php bloginfo('template_url'); ?>/images/head_biotech.gif" height="41" width="240" /></a>
            <a href="<?php bloginfo('url'); ?>/sectors-landing/biometrics/"><img src="<?php bloginfo('template_url'); ?>/images/head_biometric.gif" height="49" width="240" /></a>
            <a href="<?php bloginfo('url'); ?>/sectors-landing/advanced-energy/"><img src="<?php bloginfo('template_url'); ?>/images/head_energy.gif" height="48" width="240" /></a>
        </div>
 
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="main_img row">
           <?php  if ( has_post_thumbnail() ) {
                        the_post_thumbnail('sector-head');
                    }
			?>
        </div>
       
        <div class="sector_con row">
        	<div class="sector_content post">
            	<h2 class="single_sector_title"><span class="<?php if(is_page(23))echo "yellow"; if(is_page(21))echo "orange";  if(is_page(28))echo "sectorgreen"; if(is_page(25))echo "sectorblue";  ?>"><?php the_title(); ?></span></h2>
            	<?php the_content(); ?>
            </div>
            <div class="sector_side <?php $slug = basename(get_permalink()); echo $slug;?>">
            	<h3>Case Studies</h3>
                <?php echo get_field('case_study'); ?>
                <?php endwhile; endif; ?>
 
                	<?php //echo get_field('related_news'); ?>
                    <?php if(is_page(23))
					{
						$args = array('posts_per_page' => 1,
									  'post_type' => 'post',
									  'taxonomy' => 'sectors',
									  'term' => 'biometrics'
									  
									  );
						query_posts($args);
						if (have_posts()) :
						
						while (have_posts()) : the_post(); ?> 
                        <h3>Related News</h3>      
							<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
						<?php endwhile; ?>

						<?php else :

						endif; wp_reset_query; 
						
						
						
						$args = array('post_type' => 'events','posts_per_page' => -1	  );
						query_posts($args);
						if (have_posts()) :
						$x = 0;
						while (have_posts()) : the_post(); ?> 
                        	<?php if ($x==0){
                        		if (has_term('biometrics', 'sectors')){ ?>      
								<h3>Related Events</h3> <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
                            	<?php $x++; }?>
                            <?php }?>
						<?php endwhile; ?>

						<?php else : 

						endif; wp_reset_query;  
					} 
                    
					if(is_page(21))
					{
						$args = array('posts_per_page' => 1,
									  'post_type' => 'post',
									  'taxonomy' => 'sectors',
									  'term' => 'chemicals-and-advanced-materials'
									  
									  );
						query_posts($args);
						if (have_posts()) :
						while (have_posts()) : the_post(); ?>       
							<h3>Related News</h3> <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
						<?php endwhile; ?>

						<?php else :

						endif; wp_reset_query; 
						
						$args = array('post_type' => 'events','posts_per_page' => -1	  );
						query_posts($args);
						if (have_posts()) :
						$x = 0;
						while (have_posts()) : the_post(); ?> 
                        	<?php if ($x==0){
                        		if (has_term('chemicals-and-advanced-energy', 'sectors')){ ?>      
								<h3>Related Events</h3> <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
                            	<?php $x++; }?>
                            <?php }?>
						<?php endwhile; ?>

						<?php else : 

						endif; wp_reset_query; 
					}
					if(is_page(28))
					{
						$args = array('posts_per_page' => 1,
									  'post_type' => 'post',
									  'taxonomy' => 'sectors',
									  'term' => 'advanced-energy'
									  
									  );
						query_posts($args);
						if (have_posts()) :
						while (have_posts()) : the_post(); ?>       
							<h3>Related News</h3> <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
						<?php endwhile; ?>

						<?php else :

						endif; wp_reset_query; 
						
						$args = array('post_type' => 'events','posts_per_page' => -1	  );
						query_posts($args);
						if (have_posts()) :
						$x = 0;
						while (have_posts()) : the_post(); ?> 
                        	<?php if ($x==0){
                        		if (has_term('advanced-energy', 'sectors')){ ?>      
								<h3>Related Events</h3> <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
                            	<?php $x++; }?>
                            <?php }?>
						<?php endwhile; ?>

						<?php else : 

						endif; wp_reset_query; 
					}
					
					if(is_page(25))
					{
						$args = array('posts_per_page' => 1,
									  'post_type' => 'post',
									  'taxonomy' => 'sectors',
									  'term' => 'biotechnology'
									  
									  );
						query_posts($args);
						if (have_posts()) :
						while (have_posts()) : the_post(); ?>       
							<h3>Related News</h3> <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
						<?php endwhile; ?>

						<?php else :

						endif; wp_reset_query;  
						
						$args = array('post_type' => 'events','posts_per_page' => -1	  );
						query_posts($args);
						if (have_posts()) :
						$x = 0;
						while (have_posts()) : the_post(); ?> 
                        	<?php if ($x==0){
                        		if (has_term('biotechnology', 'sectors')){ ?>      
								<h3>Related Events</h3> <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
                            	<?php $x++; }?>
                            <?php }?>
						<?php endwhile; ?>

						<?php else : 

						endif; wp_reset_query; 
					}
					?>
                
                
            </div>
        </div>
        
        
    </div>
  
</div>   
 
<?php  get_footer(); ?>
