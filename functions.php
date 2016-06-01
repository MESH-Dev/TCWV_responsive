<?php
// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
        
	}
    
function loadup_scripts() {
    
    wp_enqueue_script('masonry', '//cdnjs.cloudflare.com/ajax/libs/masonry/4.1.0/masonry.pkgd.min.js', true);
    
}
add_action( 'wp_enqueue_scripts', 'loadup_scripts' );

    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Home Left Column',
    		'id'   => 'home-left',
    		'description'   => 'Left Side on Homepage',
    		'before_widget' => '<div class="box">',
    		'after_widget'  => '</div></div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>
                 <div class="box_content modbox">'
    	));
		
		register_sidebar(array(
    		'name' => 'Home Right Column',
    		'id'   => 'home-right',
    		'description'   => 'Right Side on Homepage',
    		'before_widget' => '<div class="box">',
    		'after_widget'  => '</div></div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>
                 <div class="box_content modbox">'
    	));
		
		register_sidebar(array(
    		'name' => 'Get Involved Page Left Column',
    		'id'   => 'get-involved-left',
    		'description'   => 'Get Involved Boxes',
    		'before_widget' => '<div class="box">',
    		'after_widget'  => '</div></div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>
                 <div class="box_content modbox">'
    	));
		
		
		register_sidebar(array(
    		'name' => 'Get Involved Page Right Column',
    		'id'   => 'get-involved-right',
    		'description'   => 'Get Involved Boxes',
    		'before_widget' => '<div class="box">',
    		'after_widget'  => '</div></div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>
                 <div class="box_content modbox">'
    	));
		
		register_sidebar(array(
    		'name' => 'Innovation Page Left Column',
    		'id'   => 'innovation-left',
    		'description'   => 'Innovation Page Boxes',
    		'before_widget' => '<div class="box">',
    		'after_widget'  => '</div></div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>
                 <div class="box_content modbox">'
    	));
		
		register_sidebar(array(
    		'name' => 'Innovation Page Right Column',
    		'id'   => 'innovation-right',
    		'description'   => 'Innovation Page Boxes',
    		'before_widget' => '<div class="box">',
    		'after_widget'  => '</div></div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>
                 <div class="box_content modbox">'
    	));
		
		
    }
	
 
	add_action( 'init', 'my_custom_menus' );
	function my_custom_menus() {
		register_nav_menus(
			array(
				'primary-menu' => __( 'Primary Menu' ),
				'footer-left-menu' => __( 'Footer Left Menu' ),
				'footer-right-menu' => __( 'Footer Right Menu' ),
			)
		);
	}
	
	if ( function_exists( 'add_theme_support' ) ) { 
  		add_theme_support( 'post-thumbnails' ); 
  		set_post_thumbnail_size( 580, 9999 );
	}
	
	if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'mod-thumb', 375, 9999); 
		add_image_size( 'sector-head', 1000, 410); 
 
	}
	
	add_filter('the_excerpt', 'new_excerpt_hellip');
	function new_excerpt_hellip($text)
	{
	    
	   return str_replace('[...]', '...<a href="'. get_permalink($post->ID) . '" class="more">read more &#8250;&#8250;</a>', $text);
	}

    
    /*
* Callback function to filter the MCE settings
*/

//function my_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

    //$style_formats = array(  
        // Each array child is a format with it's own settings
        // array(  
        //     'title' => 'Span',  
        //     'block' => 'span',  
        //     'classes' => '',
        //     'wrapper' => true,
            
        // ),  
        // array(  
        //     'title' => 'Blue Button',  
        //     'block' => 'span',  
        //     'classes' => 'blue-button',
        //     'wrapper' => true,
        // ),
        // array(  
        //     'title' => 'Red Button',  
        //     'block' => 'span',  
        //     'classes' => 'red-button',
        //     'wrapper' => true,
        // ),
    // );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    // $init_array['style_formats'] = json_encode( $style_formats );  
    
    // return $init_array;  
  
//} 
// Attach callback to 'tiny_mce_before_init' 
//add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 

 add_shortcode('callout', 'my_shortcode_function' );
   function my_shortcode_function($atts, $content = null) {
        //$content_array = preg_split('~\s* \s*~', $content);
        //$return_array = array();
        //foreach($content_array as $arr){
              //$return_array[] = '<span class="s_callout">'.$arr.'</span>';
        //}
        //return implode($return_array);

        return '<span class="s_callout">' . $content . '</span>';
   }

?>