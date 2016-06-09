<?php
  get_header();
?>

<div id="homeholder2"></div>
<div id="resourcesholder">
<div class="page_wrap">
    <div class="container sides">
        <!--<a href="<?php bloginfo('url'); ?>"><div class="resources-home-btn" ><img src="<?php bloginfo('template_url'); ?>/images/home_left.png" /></div></a>-->
         
    </div>
 
<div class="container content"> 
	
	<div class="page_title row">
        
    	   <h1>Enterprise Resources </h1>
        
    </div>
    <div class="row">
    	<div class="resource_categories six columns" >
         
            <ul id="filters">
            <?php 
				/*  $terms = get_terms('resourcecategories');
				   $count = count($terms);
				   if ( $count > 0 ){
					   foreach ( $terms as $term ) {
						   $tid =  $term->term_id;
						   if(($tid == 25)||($tid == 26)||($tid == 27)){continue;} 
						 echo '<a href="#" data-filter=".'.$term->slug.'" class="'.$term->slug.'"><li class="resource_cat">' . $term->name . "</li></a>";
						  
					   }
				   }	*/
			?>
            <a href="#" data-filter=".research_development" class="research_development"><li class="resource_cat">Research &amp; Development</li></a>
            <a href="#" data-filter=".starting_your_business" class="starting_your_business"><li class="resource_cat">Starting Your Business</li></a>
            <a href="#" data-filter=".getting_funded" class="getting_funded"><li class="resource_cat">Getting Funded</li></a>
            <a href="#" data-filter=".technical_and_operantional_assistance" class="technical_and_operantional_assistance"><li class="resource_cat">Technical and Operational Assistance</li></a>  
            <a href="#" data-filter=".growing_expanding" class="growing_expanding"><li class="resource_cat">Growing/Expanding</li></a>
            <a href="#" data-filter="*" class="all yellow"><li class="resource_cat">Show All </li></a>
            </ul>
        </div>
        
        <div class="resource_text six columns">
        	<?php 
			$page_id = 150;
			$page_data = get_page( $page_id );
			echo apply_filters('the_content', $page_data->post_content); 
			?>
            <img src="<?php bloginfo('template_url'); ?>/images/resources_key.jpg" />
        </div>
    </div>

	<div  class="resource_desc"><!-- style="width:460px;" -->
    	<div id='research_development'  style="display:none">
        	<h3 class="research_development">Reasearch and Development</h3>
            <p>From universities to private R&amp;D organizations, there are several entities in the state to assist researchers and innovators as they develop and deploy new technologies.  Our goal is to nurture the growth of technology jobs to drive and diversify the economy with the startup of successful ventures, bringing innovative, life-changing products and services to market.</p> 
         </div>
         <div id='starting_your_business' style="display:none">
        	<h3 class="starting_your_business" >Starting Your Business</h3>
            <p>Thinking of starting a business?  Need help writing a business plan, or figuring out what paperwork to file with state agencies?  Searching for sample legal documents and model templates?  Looking for guidance on making a pitch?  Trying to determine where there might be office space to locate your business?  These agencies and organizations can help:</p> 
         </div>
         <div id='getting_funded' style="display:none">
        	<h3 class="getting_funded">Getting Funded</h3>
            <p>Entrepreneurs, start-up firms, and small businesses need investment dollars to grow and be successful. Investment capital may be used to assess the market, evaluate the competition, develop a prototype, prepare a marketing and sales plan, and scale up for manufacturing. Funds may also be used for actual distribution, sales, and marketing. Potential funding sources include:</p> 
         </div>
         <div id='technical_and_operantional_assistance' style="display:none">
        	<h3 class="technical_and_operantional_assistance">Technical and Operational Assistance</h3>
            <p>Do you need help with advanced manufacturing solutions, making a prototype, or using computer-aided design?  Looking for help with tech transfer?  Do you have workforce training needs, or want to learn about selling to the government? Expert help and mentoring is available to help you convert a great idea into a scalable business.  </p> 
         </div>
         <div id='growing_expanding' style="display:none">
        	<h3 class="growing_expanding">Growing/Expanding</h3>
            <p>Connect with these organizations to help your business expand or grow in a new direction.  Learn from other entrepreneurs in your field or area.  Hear what's being discussed and take advantage of networking opportunities offered by the following organizations.  t.</p> 
         </div>
     </div>    
    <div id="blogmain" class="row" ><!-- style="position: relative; overflow-x: visible; width:1040px; z-index: 10;  overflow-y: hidden; height: 2263px; left:-10px;" -->
      
           <?php 
		   $cnt = 1;
		    $args = array(
						  'post_type' => 'resources',
						  'posts_per_page'=> -1,
						  'orderby' => 'title',
						  'order' => 'asc'
					 );
		  			query_posts( $args );
		  while ( have_posts() ) : the_post(); ?>
		  <?php $terms = wp_get_post_terms($post->ID, 'resourcecategories');?>
							
		   <div class="left card six columns <?php foreach ( $terms as $term ){echo $term->slug. " "; }?>"  ><!-- span6 left six columns  -->
			  <div class="box" style="">
                <div class="content">
				   <div class="box_content blogbox resourcebox" >
					  
					  <h3> <a href="<?php echo the_field('page_link');?>" title="<?php the_title(); ?>" target="_blank";><?php the_title(); ?></a></h3>
                       
					  <div class="mod_excerpt " ><?php the_content(); ?>
					  
					  <?php $s=0; foreach ( $terms as $term ){
						 $slg =  $term->slug;
						 if($slg == 'research_development'){ if($s > 0){echo ", ";} echo '<span class="'.$slg.'">'. $term->name .'</span>'; $s++;}
						 if($slg == 'starting_your_business'){if($s > 0){echo ", ";}echo '<span class="'.$slg.'">'. $term->name .'</span>'; $s++;}
						 if($slg == 'technical_and_operantional_assistance'){if($s > 0){echo ", ";}echo '<span class="'.$slg.'">'. $term->name .'</span>'; $s++;}
						 if($slg == 'growing_expanding'){if($s > 0){echo ", ";}echo '<span class="'.$slg.'">'. $term->name .'</span>'; $s++;}
						 if($slg == 'getting_funded'){if($s > 0){echo ", ";}echo '<span class="'.$slg.'">'. $term->name .'</span>'; $s++;}
						  
						  }?>
 
                      </div>
						<p class="resource_icons" align="right">
                        	<?php  $s=0; foreach ( $terms as $term ){
						 		$tid =  $term->term_id;  ?> 
                        	<?php if($tid == 25){ ?><img src="<?php bloginfo('template_url'); ?>/images/acorn_icon.png" /> <?php }?>
                        	<?php if($tid == 26){ ?><img src="<?php bloginfo('template_url'); ?>/images/sapling_icon.png" /><?php }?>
                        	<?php if($tid == 27){ ?><img src="<?php bloginfo('template_url'); ?>/images/treeicon.png" /><?php }?>
                            
                          <?php   }?>
						</p> 
                         
				   </div>   
               </div>
			  </div>
		  </div>
		 <?php $cnt++; endwhile;  wp_reset_query();?> 

    </div>
	  
</div> 
</div>  
</div> 
<div class="clear"></div>

<?php  get_footer(); ?>