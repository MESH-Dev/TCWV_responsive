<?php
/*
Template Name: Get Involved
*/
 get_header();
?>
<div id="homeholder"></div>
<div id="getinvolvedholder">
<div class="page_wrap">
    <div class="container sides">
        <!--<a href="<?php bloginfo('url'); ?>"><div class="involved-home-btn"><img src="<?php bloginfo('template_url'); ?>/images/home_right.png" /></div></a>-->
    </div>
 
<div class="container content"> 
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="page_title row">
        <div class="six columns">
    	   <h1><?php the_title();?></h1>
       </div>
    </div>
    
   

    <div id="modmain" class="row">
    	 <div class="span6 left six columns">
         	<div class="page_text">
            	<?php the_content();?>
            </div>
            <?php endwhile; endif; ?>
            
        	<div class="box">
                <h2><a href="<?php bloginfo('url'); ?>/category/blog/">TechConnectWV Blog</a></h2>
                <div class="content">
            	
                     <div class="box_content modbox">
                     	
                     	<?php 
    					$args = array(
    						'cat'      => 10,
    						'posts_per_page' =>1
    						
    					);
    					query_posts( $args );
    					while ( have_posts() ) : the_post();
    					
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
                          
                        
    					<?php endwhile; wp_reset_query();?>
                     </div>
                </div> 
            </div>
             
            <?php dynamic_sidebar('get-involved-left'); ?> 
                
        </div>
        <div class="span6 right six columns">
        	<div class="box">
            	<div class="joinhead"></div>
                <div class="content">
                    <div class="mailform">
                         <form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" style="margin-bottom:3;">
         
                            <input type="text" name="ea" onfocus="if(this.value == 'Enter Email Here...') { this.value = ''; }" value="Enter Email Here..." >
                            <input type="submit" name="go" value="SUBMIT" class="submit">
                            <input type="hidden" name="llr" value="iwyt4vdab">
                            <input type="hidden" name="m" value="1103470650056">
                            <input type="hidden" name="p" value="oi">
                         </form>
                    </div>
                </div>
            </div>
            
            <div class="box">
                <h2>Get Connected</h2>
                <div class="content">
                    <div class="box_content modbox">
                    <p>Follow our blog or sign up for TechConnectWV emails to find out the latest news on the innovation economy. Connect with us and get the latest feeds through Facebook and Twitter...
                    </p>
                    <div class="mod_social">
    						<a class="facebook" href="http://www.facebook.com/pages/TechConnectWV/115661065144741"></a> 
                            <a class="twitter" href="https://twitter.com/#!/techconnectwva"></a> 
                            <a class="linkedin" href="http://www.linkedin.com/groups/TechConnectWV-3797184?mostPopular=&gid=3797184"></a>
                            <a class="rss" href="http://techconnectwv.org/feed"></a> 
                             
                        </div>
                    </div>
                </div>
            </div>
        	<div class="box">
                <h2><a href="<?php bloginfo('url'); ?>/category/press-releases/">Recent Press Releases</a></h2>
                <div class="content">
                	
                     <div class="box_content modbox pr">
                     	
                     	<?php 
    					$args = array(
    						'cat'      => 12,
    						'posts_per_page' =>3
    						
    					);
    					query_posts( $args );
    					while ( have_posts() ) : the_post();
    				 
    					?>
    					<h3> <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
    					
                        
                         
                          
                        
    					<?php endwhile; wp_reset_query();?>
                        <p style="text-align: right;"><a class="more" href="http://techconnectwv.org/category/press-releases/">View All &#8250;&#8250;</a></p> 
                     </div>
                 </div>
            </div>
            
            <div class="box">
                <h2><a href="<?php bloginfo('url'); ?>/category/newsletters/">Recent Newsletters</a></h2>
                <div class="content">
                	
                     <div class="box_content modbox pr">
                     	
                     	<?php 
    					$args = array(
    						'cat'      => 18,
    						'posts_per_page' =>3
    						
    					);
    					query_posts( $args );
    					while ( have_posts() ) : the_post();
    				 
    					?>
    					<h3> <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
    					
                        
                         
                          
                        
    					<?php endwhile; wp_reset_query();?>
                        <p style="text-align: right;"><a class="more" href="<?php bloginfo('url'); ?>/category/newsletters/">View All &#8250;&#8250;</a></p> 
                     </div>
                 </div>
            </div>
            
        	<?php dynamic_sidebar('get-involved-right'); ?>     
       </div>
         
         
         
    </div>
    <div class="clear"></div>
</div> 
</div>   
</div>
<div class="clear"></div>
<?php  get_footer(); ?>
