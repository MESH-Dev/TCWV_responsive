<?php

 get_header('itc');
?>




<div class="page_wrap">
    <div class="container">
        <!--<div class="leftsidebtn"><img src="<?php bloginfo('template_url'); ?>/images/get_involved.png" /></div>
        <div class="rightsidebtn"><img src="<?php bloginfo('template_url'); ?>/images/explore.png" /></div>-->
    </div>
 
    <div class="container content row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="page_title row">
        	<h1><?php the_title(); ?></h1>
        </div>
        
        <div class="row">
        	<div class="single_side page_side">
            	 
            </div>
        	<div class="single_content post">
                 <div class="content">
					<div class="myForm">    
                       
                        <div id="contact_response_div" class="reponse_div no_display"></div>asd
                         <?PHP
                            include "http://techconnectwv.org/views/form.php"; 
                            
                         ?>           
                       

                </div>
                </div>
            </div>
            
        </div>
        <?php endwhile; endif; ?>
        
    </div>
</div>   
 
<?php  get_footer(); ?>

<?PHP 
function compress_page($buffer) {
    // remove comments
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    // remove tabs, spaces, newlines, etc.
    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
    return $buffer;
  }
  
$output = ob_get_contents();
ob_end_clean();

echo compress_page($output);
?>

 

