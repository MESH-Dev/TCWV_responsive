jQuery(document).ready(function($){

	// $('.grid').masonry({
	//     // options
	//     itemSelector: '.card',
	//     columnWidth: 48%
	//   });

	var w_width = $(window).width();
	//console.log(w_width);
	if (w_width < 500){
		$('.single_menu').hide().addClass('working');
		$('.menu_trigger').click(function(){
			$('.single_menu').slideToggle();
			$('i.fa-fw').toggleClass('rotate');
		});
	}

	$('.nav-trigger').sidr({
		renaming:false,
		source:'.top-nav',
		side:'right',
		displace:false
		});

	$('.sidr-close').click(
    function(){
      $.sidr('close', 'sidr');
       //console.log("Sidr should be closed");
    });

	var $container = $('#blogmain');
			var active = '#all';
           
          //$container.isotope({
              //itemSelector : '.span6' 
            //});
            
            //$("#past_events").isotop({
             // itemSelector:'.past'
            //});
           
            
			$('#filters a').click(function(){
							var selector = $(this).attr('data-filter');
							$container.isotope({ filter: selector,
											animationEngine : "css" });
 							var resource = $(this).attr('class');
							resource = '#' + resource;
							 $(active).hide();
							$(resource).show();
							active = resource;
							return false;
						  });

			//pop outs
			//$('.home-involved-btn, .resources-home-btn').mouseenter(function() {

		if(w_width > 1400){
		$('.home-involved-btn').mouseenter(function() {
			$(this).animate({
				width: '+=190',marginLeft: '-=190'  
			}, 200, 'easeOutQuad');
		 $('.home-involved-btn p').fadeIn('fast');
			
		});
		
		//$('.home-involved-btn, .resources-home-btn').mouseleave(function(){
		$('.home-involved-btn').mouseleave(function(){
			$(this).animate({
				width: '-=190',marginLeft: '+=190' 
			}, 200, 'easeOutQuad');
			$('.home-involved-btn p').fadeOut('fast');

			
		});
			
		//$('.home-resource-btn,.involved-home-btn ').mouseenter(function() {
		$('.home-resource-btn').mouseenter(function() {
			$(this).animate({
				width: '+=190'  
			}, 200, 'easeOutQuad');
			$('.home-resource-btn img').animate({
				paddingLeft: '+=190' 
			}, 200, 'easeOutQuad');
			$('.home-resource-btn p').fadeIn('fast');
			
		});
		
		//$('.home-resource-btn, .involved-home-btn ').mouseleave(function(){
		$('.home-resource-btn').mouseleave(function(){
			$(this).animate({
				width: '-=190' 
			}, 200, 'easeOutQuad');
			$('.home-resource-btn img').animate({
				paddingLeft: '-=190' 
			}, 200, 'easeOutQuad');
			$('.home-resource-btn p').fadeOut('fast');
			
			
		});
		}
			// var hei = $('.page_wrap').height() +110;
			// <?php if(is_page(30)){ ?>
			// $('.home-involved-btn').css('height',hei);
			// $('.home-resource-btn').css('height',hei);
			// <?php } ?>
			// <?php if(is_page(42)){ ?>
		 
			// $('.involved-home-btn').css('height',hei);
			
			// <?php } ?>	
			 
			// $('.resources-home-btn').css('height',hei);
});