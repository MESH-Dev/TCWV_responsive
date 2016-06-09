<footer id="footers"  >
	<div class="container foot" >
    	<div class="foottop"></div>
    	<div class="foot_top"></div>
         
          <div class="span4 four columns">
               <div class="foot_map">
                  <h2>Site Map</h2>
                  <div class="foot_nav"><?php wp_nav_menu( array('theme_location' => 'footer-left-menu' ) ); ?></div> 
                  <div class="foot_nav"><?php wp_nav_menu( array('theme_location' => 'footer-right-menu' ) ); ?></div>
               </div>       
          </div>
          
          <div class="span4 four columns">
              <div class="foot_contact">
                  <h2>Contact Us Today</h2>
                 <p> <strong>TechConnectWV</strong><br />
                      West Virginia Regional Technology Park<br />
                      1740 Union Carbide Drive Room 4203<br />South Charleston, WV 25303-2732</p>
                      <p>
                      <strong>Phone:</strong> 304-444-2918<br />
    
                      </p>
                      <p>
                      <strong>Email:</strong> <a href="mailto:info@techconnectwv.com">info@techconnectwv.com</a>
                      </p>
               </div>   
          </div>
          
          <div class="span4 four columns">
               <div class="foot_connect">
                  <h2>Connect With Us</h2>
    
                  
                  <span class='st_sharethis_custom sharebtn ' displayText='ShareThis'></span>
                  <a href="http://www.facebook.com/pages/TechConnectWV/115661065144741" target="_blank"><span class='facebook_custom sharebtn ' displayText='Facebook'></span></a>
                  <a href="https://twitter.com/#!/techconnectwv" target="_blank"><span class='twitter_custom sharebtn ' displayText='Twitter'></span></a>
                  <a href="http://www.linkedin.com/groups/TechConnectWV-3797184?mostPopular=&gid=3797184" target="_blank"><span class='linkedin_custom sharebtn' displayText='LinkedIn'></span></a>
                  <span class='st_email_custom sharebtn ' displayText='Email'></span>
                  <a href="<?php bloginfo('url'); ?>/feed"><span class='rss_custom sharebtn' displayText='RSS' ></span></a> <br />
                   
                   <div class="counters">
                	  <span class='st_facebook_hcount' displayText='Facebook'></span>
                 	 <span class='st_twitter_hcount' displayText='Tweet'></span>
                	 <span class='st_sharethis_hcount' displayText='ShareThis'></span>
                  </div>	
                  <img src="<?php bloginfo('template_url'); ?>/images/get_connected.png" class="getconnect" />
                  
               
                  
                  
                  <p class="mesh">&copy; <?php echo date('Y'); ?> This site designed by <A href="http://meshfresh.com" target="_blank">MESH</A> <A href="http://meshfresh.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/mesh.png" /></A></p>
                   
               </div>
               
          </div>
            
         <div class="clear"></div>
    </div>	   
</footer>

 

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38026163-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


	
     <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/isotope.js"></script>
		<script>
			
			// var $container = $('#blogmain');
			// var active = '#all';
           
   //        //$container.isotope({
   //            //itemSelector : '.span6' 
   //          //});
            
   //          //$("#past_events").isotop({
   //           // itemSelector:'.past'
   //          //});
           
            
			// $('#filters a').click(function(){
			// 				var selector = $(this).attr('data-filter');
			// 				$container.isotope({ filter: selector,
			// 								animationEngine : "css" });
 		// 					var resource = $(this).attr('class');
			// 				resource = '#' + resource;
			// 				 $(active).hide();
			// 				$(resource).show();
			// 				active = resource;
			// 				return false;
			// 			  });

			// //pop outs
			// //$('.home-involved-btn, .resources-home-btn').mouseenter(function() {
			// $('.home-involved-btn').mouseenter(function() {
			// 	$(this).animate({
			// 		width: '+=190',marginLeft: '-=190'  
			// 	}, 200, 'easeOutQuad');
			//  $('.home-involved-btn p').fadeIn('fast');
				
			// });
			
			// //$('.home-involved-btn, .resources-home-btn').mouseleave(function(){
			// $('.home-involved-btn').mouseleave(function(){
			// 	$(this).animate({
			// 		width: '-=190',marginLeft: '+=190' 
			// 	}, 200, 'easeOutQuad');
			// 	$('.home-involved-btn p').fadeOut('fast');
 
				
			// });
				
			// //$('.home-resource-btn,.involved-home-btn ').mouseenter(function() {
			// $('.home-resource-btn').mouseenter(function() {
			// 	$(this).animate({
			// 		width: '+=190'  
			// 	}, 200, 'easeOutQuad');
			// 	$('.home-resource-btn img').animate({
			// 		paddingLeft: '+=190' 
			// 	}, 200, 'easeOutQuad');
			// 	$('.home-resource-btn p').fadeIn('fast');
				
			// });
			
			// //$('.home-resource-btn, .involved-home-btn ').mouseleave(function(){
			// $('.home-resource-btn').mouseleave(function(){
			// 	$(this).animate({
			// 		width: '-=190' 
			// 	}, 200, 'easeOutQuad');
			// 	$('.home-resource-btn img').animate({
			// 		paddingLeft: '-=190' 
			// 	}, 200, 'easeOutQuad');
			// 	$('.home-resource-btn p').fadeOut('fast');
				
				
			// });

			 
			 <?php 
			 //homepage
			 if(is_page(30)){ ?>
			 //load other pages
			 /*
			$('#getinvolvedholder').hide().load('<?php bloginfo('url'); ?>/get-involved/ .page_wrap');
			$('#resourcesholder').hide().load('<?php bloginfo('url'); ?>/resources/ .page_wrap');
			
			$('.home-involved-btn').click(function()
			{	 
					$("#homeholder").fadeOut(100, function() {$('#getinvolvedholder').show("slide", { direction: "left" }, 500);});
					var hei = 1000;
					//$('.involved-resources-btn').css('height',hei);
					$('.involved-home-btn').css('height',hei);
					
			});
			
			$('.home-resource-btn').click(function(){	 
					$("#homeholder").fadeOut(100, function() {$('#resourcesholder').show("slide", { direction: "right" }, 500);});
					
					var hei = $(document).height() +300;
					$('.resources-home-btn').css('height',hei);
					
						$('#filters a').click(function(){
							var selector = $(this).attr('data-filter');
							$('#blogmain').isotope({ filter: selector,
											animationEngine : "css" });
							 
							return false;
						  });
					
			});
			*/
			 
			<?php } ?>
			
			/*
			<?php if(is_page(42)){ ?>
			$('#homeholder').hide().load('<?php bloginfo('url'); ?>/ .page_wrap');

			$('.involved-home-btn').click(function(){	 
					$("#getinvolvedholder").fadeOut(100, function() {$('#homeholder').show("slide", { direction: "right" }, 500);});
			});
			<?php } ?>
			
			 
			 $('#homeholder2').hide().load('<?php bloginfo('url'); ?>/ .page_wrap')
			$('.resources-home-btn').click(function(){	 
					$("#resourcesholder").fadeOut(100, function() {$('#homeholder2').show("slide", { direction: "left" }, 500);});
			}); 
			 */
			
			var hei = $('.page_wrap').height() +110;
			var w_width = $(window).width();
			<?php if(is_page(30)){ ?>

				//if (w_width>1400){
					console.log(w_width)
					$('.home-involved-btn').css('height',hei);
					$('.home-resource-btn').css('height',hei);
				//}
			<?php } ?>
			<?php if(is_page(42)){ ?>
		 		//if (w_width>1400){
					$('.involved-home-btn').css('height',hei);
				//}
			<?php } ?>	
			 //if (w_width>1400){
				$('.resources-home-btn').css('height',hei);
				//}
			
		  

        </script>
        <?php if(is_page(30)){ ?>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.deck-shuffle.1.0.js"></script>
         <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/hover.js"></script><?php } ?>	
</body>

</html>
