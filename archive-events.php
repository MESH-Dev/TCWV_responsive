<?php
  get_header();
?>

<div class="page_wrap">
    <div class="container">
        <!--<div class="leftsidebtn"><img src="<?php //('template_url'); ?>/images/get_involved.png" /></div>
        <div class="rightsidebtn"><img src="<?php //bloginfo('template_url'); ?>/images/explore.png" /></div> -->
    </div>

<div class="container content">

	<div class="page_title row">
    <div class="six columns">
    	<h1>Upcoming Events</h1>
    </div>
  </div>


    <div id="blogmain-events" class="row" ><!-- style="position: relative;  width:1040px; z-index: 10;  overflow-y: hidden; height: 2263px; left:-10px;" -->
      <div id="upcoming" class="grid">
      <?php
      // args
            $args = array(
            	'post_type'		=> 'events',
            	'posts_per_page'	=> -1,
            	'orderby'		=> 'date',
            	'order'			=> 'DESC'
            );

            // query
            $wp_query = new WP_Query( $args );
      ?>

      <?php
		   $cnt = 1;
           $num = -1;
		  while ( $wp_query->have_posts() ) : the_post(); ?>

      <?php
        $event_date = get_field('end_date');
        $todays_date = date('Y-m-d');

        $event_date = strtotime($event_date);
        $todays_date = strtotime($todays_date);

        if($event_date > $todays_date ){ ?>

        <?php

            $num = $num + 1;

            if($num == 2){
                $num = 0;
            }

        ?>

      <!--FUTURE-->
		   <!--<div id="future" class="span6 left">-->
       <div class=" card <?php echo 'b'.$num ?>"><!--  span6 --><!-- left  -->
  			  <div class="box">
    				   <div class="content box_content blogbox">

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
      					  </div><!-- mod_social -->
    				   </div> <!-- end blogbox -->
  			  </div><!-- end box -->
        
		  </div><!--END SPAN6 LEFT-->

       <?php }

       endwhile;
       wp_reset_query();

    ?>
</div>
    <div class="spacer"></div>

    	<div class="page_title row">
         <div class="six columns">
    	     <h1>Past Events</h1>
         </div>
      </div>
     <!-- <div class="leftAngle"></div> -->

    <!--PAST-->
    <div id="past" class="grid">
          <?php
		        $num = -1;


		        while ( have_posts() ) : the_post(); ?>

          <?php
            $event_date = get_field('end_date');
            $todays_date = date('Y-m-d');

            $event_date = strtotime($event_date);
            $todays_date = strtotime($todays_date);


            if($event_date < $todays_date){ ?>

            <?php

                $num = $num + 1;

                if($num == 2){
                 $num = 0;
                }

            ?>

      <!--BOX-->
		   <div class="  card <?php echo 'b'.$num ?>"><!-- span6 --><!-- left -->
			  <div class="box">
				   <div class="content box_content blogbox">

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
					  </div> <!-- end mod_social -->
				   </div> <!-- end blogbox -->
			  </div><!-- box -->
       
		  </div> <!--END SPAN6 LEFT-->



       <?php

        }

       ?>




       <?php

       endwhile;
       wp_reset_query();



       ?>
       <!--END PAST -->
       </div>

       <style>
       .spacer {
        width: 100%;
        height: 50px;
        clear: both;
        background: transparent;
       }

   /* .b0 {
        float: left; margin-right: 30px; padding-right: 30px;


       }

     .b1 {
        float: right; margin-right: -30px;
       }*/

       .leftAngle {
         width: 11px;
         height: 9px;
         background: #f00;
         margin-top: -18px;
         background: transparent url('<?php bloginfo('template_url'); ?>/images/leftangle.png') no-repeat;
       }

       </style>


       <script type='text/javascript'>
       //$(function(){

    //     $("#past").isotope({
    //          itemSelector : '.box'
    //         });
       //
       //
    //    });
      
      // $('.grid').masonry({
      //   // options
      //   itemSelector: '.card',
      //   columnWidth: 48%
      // });
       </script>










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
