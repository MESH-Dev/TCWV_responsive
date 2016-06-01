<?php
/*
Template Name: Homepage
*/
 get_header();
?>
<div id="getinvolvedholder"></div>
<div id="resourcesholder"></div>

<div class="page_wrap">
    <div class="container sides">
        <a href="<?php bloginfo('url'); ?>/get-involved"><div class="home-involved-btn">
        <p style="display:none;">Check out our blog, sign up for our emails, join our Facebook page, follow us on LinkedIn and Twitter.  We want you to be involved with the Innovation Economy in West Virginia!</p><img src="<?php bloginfo('template_url'); ?>/images/get_involved.png" />

        </div></a>
        <a href="<?php bloginfo('url'); ?>/resources"><div class="home-resource-btn">
        <p style="display:none;">Explore all the exciting resources we've found throughout West Virginia to help you get started in the innovation economy.</p><img src="<?php bloginfo('template_url'); ?>/images/explore.png" /></div></a>
    </div>
<div id="slides">
    <div class="container">
    	<div class="row slidesrow">
            <div class="images">
                <div id="one" class="top">
             		 <img src="<?php bloginfo('template_url'); ?>/images/slide1.png"/>
                </div>
                <div id="two" class="middle">
                     <img src="<?php bloginfo('template_url'); ?>/images/slide2-X.png"/>
                </div>

                <div id="three" class="bottom">
                     <img src="<?php bloginfo('template_url'); ?>/images/slide3-X.png"/>
                </div>
                <div id="four" class="bottombottom">
                     <img src="<?php bloginfo('template_url'); ?>/images/wt.jpg"/>
                     <!--<img src="<?php //bloginfo('template_url'); ?>/images/TCWV_slide_new.png"/>-->
                </div>
            </div>
             <div class="texts">
                <div id="textone" class="slidetext" >
                       <span class="green">TechConnectWV</span> is a statewide economic development organization that works with innovative people and ideas across West Virginia to foster and promote innovation-based businesses and entrepreneurial activities throughout the state.

            			<a href="<?php bloginfo('url'); ?>/organization/"><img src="<?php bloginfo('template_url'); ?>/images/read-more.jpg" /></a>

                </div>
                <div id="texttwo" class="slidetext" style="display: none">
                      <span class="orange">TechConnectWV</span> works with innovative people and ideas across West Virginia to diversify the state's economy,
promote long-term economic prosperity, and create jobs.

            			<a href="<?php bloginfo('url'); ?>/entrepreneurial-support-programs-provide-investment-to-enable-growth-of-mighty-tikes//"><img src="<?php bloginfo('template_url'); ?>/images/read-more.jpg" /></a>
                </div>

                <div id="textthree" class="slidetext" style="display: none">
                <span class="yellow">ChemCeption</span> -  the new incubator designed to serve as an innovation hub for any technology involving chemistry.
                <a href="http://techconnectwv.org/officials-commemorate-business-incubator-launch/"><img src="<?php bloginfo('template_url'); ?>/images/read-more.jpg" style="margin-top:-20px;" /></a>

                   <!-- The <span class="yellow">2013 West Virginia Bioscience Summit</span> conference is scheduled for February 28-29 at the Charleston Marriott Hotel in Charleston, WV  Register today for this exciting event!
            			<a href="http://techconnectwv.org/events/bioscience-summit-2013/"><img src="<?php //bloginfo('template_url'); ?>/images/read-more.jpg" style="margin-top:-20px;" /></a>
                  -->
                </div>
                <div id="textfour" class="slidetext" style="display: none">
                     Register Now for the <span class="blue">2014 Women & Technology ConferenceSpirit of Innovation Awards</span>

                           <a href="<?php bloginfo('url'); ?>/events/register-now-for-the-2014-women-technology-conference/"><img src="<?php bloginfo('template_url'); ?>/images/read-more.jpg" /></a>
                </div>
                <!--<div id="textfour" class="slidetext" style="display: none">
                     <span class="blue">Check out our blog</span>, sign up for our emails, join our Facebook page, follow us on LinkedIn and Twitter.  We want you to be involved with the Innovation Economy in West Virginia!

            			<a href="<?php// bloginfo('url'); ?>/get-involved"><img src="<?php //bloginfo('template_url'); ?>/images/read-more.jpg" /></a>
                </div>-->
        	</div>
        </div>

        <div class="row">
        	<div class="slide_nav">
                <div id="nav1" class="active">01</div>
                <div id="nav2" >02</div>
                <div id="nav3">03</div>
                <div id="nav4">04</div>
           </div>
       </div>
    </div>

</div>
<div class="container content">
    <div id="homesectors" >
               <div class="row">
                	 <div class="sector">
                		<a href="<?php echo get_permalink(21); ?>"><img src="<?php bloginfo('template_url'); ?>/images/thumb_chem.jpg" /></a>
                        <p>
                        <?php $page_id = 21; $page_data = get_page($page_id);
  						 echo $page_data->post_excerpt; ?> </p>
                     </div>

                	<div class="sector">
                		<a href="<?php echo get_permalink(23); ?>"><img src="<?php bloginfo('template_url'); ?>/images/thumb_biometrics.jpg" /></a>
                        <p>
                        <?php $page_id = 23; $page_data = get_page($page_id);
  						 echo $page_data->post_excerpt; ?> </p>
                    </div>

                	<div class="sector">
                    	<a href="<?php echo get_permalink(25); ?>"><img src="<?php bloginfo('template_url'); ?>/images/thumb_biotech.jpg" /></a>
                        <p>
                        <?php $page_id = 25; $page_data = get_page($page_id);
  						 echo $page_data->post_excerpt; ?> </p>
                    </div>

                	<div class="sector">
                    	<a href="<?php echo get_permalink(28); ?>"><img src="<?php bloginfo('template_url'); ?>/images/thumb_energy.jpg" /></a>
                        <p>
                        <?php $page_id = 28; $page_data = get_page($page_id);
  						 echo $page_data->post_excerpt; ?> </p>
                    </div>
         	</div>

    </div>
    <div class="clear"></div>

    <!--HOMEMAIN-->
    <div id="homemain" class="row">

      <!--LEFT-->
    	 <div class="span6 left">
        	<div class="box">
                 <div class="box_content mission">
                 <span class="big_icon"></span>
                 	<div class="missioncon">
                        <h3>The TechConnectWV Mission</h3>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                             <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
            <div class="box">
            	<h2><a href="<?php bloginfo('url'); ?>/category/news/">TechConnectWV in the News</a></h2>
                 <div class="box_content modbox">

          <?php
					$args = array(
						'cat'      => 11,
						'posts_per_page' => 1

					);
					query_posts( $args );
					while ( have_posts() ) : the_post(); ?>

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


					<?php endwhile; wp_reset_query();?>
                 </div>
            </div>
            <?php dynamic_sidebar('home-left'); ?>



        <!--END LEFT
        </div>-->

        <!--RIGHT-->
        <div class="span6 right">

            <div class="box">
            	<h2><a href="<?php bloginfo('url'); ?>/events/">Event Calendar</a></h2>
                 <div class="box_content modbox">

                 	<?php
					$args = array(
						'post_type'      => 'events',

					);
					query_posts( $args );
                    $cnt = 0;
					while ( have_posts() ) : the_post();

                     $event_date = get_field('end_date');
                    $todays_date = date('Y-m-d');

                    $event_date = strtotime($event_date);
                    $todays_date = strtotime($todays_date);


                    if(($event_date > $todays_date)&&($cnt<3) ){ ?>

                    <div class="home_event">
                        <h3><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        <div class="event_meta">
                            <?php echo get_field('start_date'); $date2 = get_field('end_date'); if ($date2!="")echo " - " . $date2; ?>
                            <?php $loc = get_field('location'); if ($loc!="")echo " // " . $loc; ?>
                        </div>
                    </div>

					<?php $cnt++;}


                    endwhile; wp_reset_query();
                    if($cnt==0){ ?>
                        <div class="home_event">
                            <p>There are currently no scheduled events.  Please check back soon!</p>
                        </div>
                    <?php } ?>
                    <p align="right"><a href="<?php bloginfo('url'); ?>/events/" class="more">View All Events &#8250;&#8250;</a></p>
                 </div>
            </div>

            <div class="box">
            	<div class="joinhead_home"></div>
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


            <div class="box">
            	<h2><a href="<?php bloginfo('url'); ?>/category/blog/">TechConnectWV Blog</a></h2>
                 <div class="box_content modbox">

                 	<?php
					$args = array(
						'cat'      => 10,
						'posts_per_page' =>1

					);
					query_posts( $args );
					while ( have_posts() ) : the_post();

					if(has_post_thumbnail()){
              the_post_thumbnail('mod-thumb');
            }
					?>

					<h3>
						<a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h3>

					<div class="mod_excerpt">
						<?php the_excerpt(); ?>
					</div>

                    <div class="mod_social">
						<a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"></a>
                        <a class="twitter" href="http://twitter.com/intent/tweet?url=<?php the_permalink();?>&text=<?php the_title(); ?>" target="_blank"></a>
                        <span class="st_sharethis_custom sharebtn_post" st_url="<?php the_permalink();?>" st_title="<?php the_title(); ?>"></span>
                        <span class="st_email_custom sharebtn_post" st_url="<?php the_permalink();?>" st_title="<?php the_title(); ?>"></span>
                    </div>


					<?php endwhile; wp_reset_query();?>
                 </div>
            </div>

             <div class="box">
            	<h2><a href="<?php bloginfo('url'); ?>/category/newsletters/">Recent Newsletters</a></h2>
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




            <?php dynamic_sidebar('home-right'); ?>
       </div>


    <!--END HOMEMAIN-->
    </div>
    <div class="clear"></div>
</div>
</div>

<div class="clear"></div>
<?php  get_footer(); ?>
