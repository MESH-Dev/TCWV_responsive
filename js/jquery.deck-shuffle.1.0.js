/*
Demo: jQuery Deck Shuffle
Author: Ian Lunn
Author URL: http://www.ianlunn.co.uk/
Demo URL: http://www.ianlunn.co.uk/demos/jquery-deck-shuffle/
Tutorial URL: http://www.ianlunn.co.uk/blog/code-tutorials/jquery-deck-shuffle/

License: http://creativecommons.org/licenses/by-sa/3.0/ (Attribution Share Alike). Please attribute work to Ian Lunn simply by leaving these comments in the source code or if you'd prefer and be so kind, place a link on your website to http://www.ianlunn.co.uk/.

Dual licensed under the MIT and GPL licenses:
http://www.opensource.org/licenses/mit-license.php
http://www.gnu.org/licenses/gpl.html
*/


//global variables to be setup for later use
var previous;
var active;
var nextimage ='#two';
var nexttext = '#texttwo';
var acti = '#textone';
var navacti = "#nav1";
var nextnav = "#nav2";

//moves the top layer to the middle and ammends the size of all child elements
function moveMiddle(el){
	$(el).animate({'left': '30px',   'top': '0px'}, {duration: 200,queue: false}); //moves the layer to the middle
	$(el).css({'z-index': '3'}); //moves the layer back one (to sit behind the top layer)
}

//moves the middle layer to the bottom and ammends the size of all child elements
function moveBottom(el){
	$(el).animate({'left': '60px',   'top': '0px'}, {duration: 200,queue: false}); //moves the layer to the bottom
	$(el).css({'z-index': '2'}); //moves the layer back one (to sit at the third)
}

function moveBottomBottom(el){
	$(el).animate({'left': '90px',   'top': '0px'}, {duration: 200,queue: false}); //moves the layer to the bottombottom

	$(el).css({'z-index': '1'}); //moves the layer back one (to sit at the bottombottom, behind all layers)
}

//moves the selected layer to the top of the deck
function moveTop(el,text){
	
	//the animation is active (we store this to make sure the animation doesn't try to run again whilst it's in progress)
	active = true; 
 
	$(acti).fadeOut('fast',function(){ $(text).fadeIn('fast'); });
 
	//move element out of the deck
	$(el).animate({'left': '310px',   'top': '0px'}, 200, function(){
				
		$(el).css({'z-index': '4'}); //move element to the top of the deck
		
		if(zindex == 3){ //if the user has selected the middle layer
			moveMiddle('.top'); //move the top layer to the middle
			$('.top').attr("class", "middle"); //top becomes middle
			$(el).attr("class", "top"); //hovered element becomes top	
			
		}else if(zindex == 2){ //if the user has selected the bottom layer
			moveMiddle('.top'); //move the top layer to the middle
			moveBottom('.middle'); //move the middle layer to the bottom
			
			$('.middle').attr("class", "bottom"); //middle becomes bottom
			$('.top').attr("class", "middle"); //top becomes middle
			$(el).attr("class", "top"); //hovered element becomes top
		}
		else if(zindex == 1){ //if the user has selected the last layer
			moveMiddle('.top'); //move the top layer to the middle
			moveBottom('.middle'); //move the middle layer to the bottom
			moveBottomBottom('.bottom'); //move the bottom layer to the last
			
			$('.bottom').attr("class", "bottombottom"); //bottom becomes last
			$('.middle').attr("class", "bottom"); //middle becomes bottom
			$('.top').attr("class", "middle"); //top becomes middle
			$(el).attr("class", "top"); //hovered element becomes top
		}
		
		$(el).animate({'left': '0px'}, 200, function(){ //move element back into the deck
			active = false; //the animation has finished
		}); 
		

	});
 	acti = text;
	
	 
	if(acti == '#textone') {nexttext = '#texttwo'; nextimage = '#two'; nextnav = '#nav1';  }
	if(acti == '#texttwo'){ nexttext = '#textthree'; nextimage = '#three';nextnav = '#nav2';   }
	if(acti == '#textthree'){ nexttext = '#textfour'; nextimage = '#four'; nextnav = '#nav3'; }
	if(acti == '#textfour') {nexttext = '#textone'; nextimage = '#one';  nextnav = '#nav4';  }
	
	
 	
 		
}

function swap(image,text){ //the function called when we want to swap the cards
	zindex = $(image).css('z-index');  //get the z-index of the current layer the cursor is over
	//console.log("prev = " + previous);
	//console.log("z = " + zindex);
	
	if(zindex != 5 && active != true){ //if this isn't the previously moved layer, isn't the top layer and the animation is not currently running... 
		moveTop(image,text);//move the layer to the top
		
	}
	previous = zindex; //store the last layer that was moved
	
	
}
	
function out(){
	//required for .hoverIntent() to work
}

$(document).ready(function(){ //when the page has loaded and is ready to go...
		
	$('#container').mouseleave(function(){ //when the cursor leaves the deck...
		previous = null;
	});
	
	
	
	
	$('#nav1').click(function() {swap('#one','#textone'); $(navacti).removeClass("active"); $(this).addClass("active"); navacti = this; clearInterval(autoflip); });
	$('#nav2').click(function() {swap('#two','#texttwo'); $(navacti).removeClass("active"); $(this).addClass("active"); navacti = this; clearInterval(autoflip);});
	$('#nav3').click(function() {swap('#three','#textthree'); $(navacti).removeClass("active"); $(this).addClass("active");navacti = this; clearInterval(autoflip); });
	$('#nav4').click(function() {swap('#four','#textfour');$(navacti).removeClass("active"); $(this).addClass("active"); navacti = this; clearInterval(autoflip);});
 
	
	var autoflip = setInterval(function(){
 	
		swap(nextimage,nexttext); $(navacti).removeClass("active"); $(nextnav).addClass("active"); navacti = nextnav;						
   
	}, 6000);
	
	
	
	
	
	 
});