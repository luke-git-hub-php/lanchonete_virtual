/**
 * jqFancyTransitions - jQuery plugin
 * @version: 1.0 (2009/12/04)
 * @requires jQuery v1.2.2 or later 
 * @author Ivan Lazarevic
 * Examples and documentation at: http://www.workshop.rs/projects/jqfancytransitions
 
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
**/

(function($) {
	var opts = new Array;
	var level = new Array;
	var img = new Array;
	var titles = new Array;
	var order = new Array;
	var imgInc = new Array;
	var inc = new Array;
	var stripInt = new Array;
	var imgInt = new Array;	
	
	$.fn.jqFancyTransitions = $.fn.jqFancyTransitions = function(options){
	
	init = function(el){

		opts[el.id] = $.extend({}, $.fn.jqFancyTransitions.defaults, options);
		img[el.id] = new Array(); // images array
		titles[el.id] = new Array(); // titles array
		order[el.id] = new Array(); // strips order array
		imgInc[el.id] = 0;
		inc[el.id] = 0;

		params = opts[el.id];

		if(params.effect == 'zipper'){ params.direction = 'alternate'; params.position = 'alternate'; }
		if(params.effect == 'wave'){ params.direction = 'alternate'; params.position = 'top'; }
		if(params.effect == 'curtain'){ params.direction = 'alternate'; params.position = 'curtain'; }	

		// width of strips
		stripWidth = parseInt(params.width / params.strips); 
		gap = params.width - stripWidth*params.strips; // number of pixels
		stripLeft = 0;

		// create images and titles arrays
		$.each($('#'+el.id+' img'), function(i,item){
			img[el.id][i] = $(item).attr('src');
			titles[el.id][i] = $(item).attr('alt') ? $(item).attr('alt') : '';
			$(item).hide();
		});

		// set panel
		$('#'+el.id).css({
			'background-image':'url('+img[el.id][0]+')',
			'width': params.width,
			'height': params.height,
			'position': 'relative',
			'background-position': 'top left'
			});
		$('#'+el.id).append("<div class='ft-title' id='ft-title-"+el.id+"' style='position: absolute; bottom:0; left: 0; z-index: 1000; color: #fff; background-color: #000; '>"+titles[el.id][0]+"</div>");
	
		if(titles[el.id][imgInc[el.id]])
			$('#ft-title-'+el.id).css('opacity',opts[el.id].titleOpacity);
		else
			$('#ft-title-'+el.id).css('opacity',0);

		odd = 1;
		// creating bars
		// and set their position
		for(j=1; j < params.strips+1; j++){
			
			if( gap > 0){
				tstripWidth = stripWidth + 1;
				gap--;
			} else {
				tstripWidth = stripWidth;
			}
				
			$('#'+el.id).append("<div class='ft-"+el.id+"' id='ft-"+el.id+j+"' style='width:"+tstripWidth+"px; height:"+params.height+"px; float: left; position: absolute;'></div>");

			// positioning bars
			$("#ft-"+el.id+j).css({ 
				'background-position': -stripLeft +'px top',
				'left' : stripLeft 
			});
			
			stripLeft += tstripWidth;

			if(params.position == 'bottom')
				$("#ft-"+el.id+j).css( 'bottom', 0 );
				
			if (j%2 == 0 && params.position == 'alternate')
				$("#ft-"+el.id+j).css( 'bottom', 0 );
	
			// bars order
				// fountain
				if(params.direction == 'fountain' || params.direction == 'fountainAlternate'){ 
					order[el.id][j-1] = parseInt(params.strips/2) - (parseInt(j/2)*odd);
					order[el.id][params.strips-1] = params.strips; // fix for odd number of bars
					odd *= -1;
				} else {
				// linear
					order[el.id][j-1] = j;
				}
	
		}

			$('.ft-'+el.id).mouseover(function(){
				opts[el.id].pause = true;
			});
		
			$('.ft-'+el.id).mouseout(function(){
				opts[el.id].pause = false;
			});	
			
			$('#ft-title-'+el.id).mouseover(function(){
				opts[el.id].pause = true;
			});
		
			$('#ft-title-'+el.id).mouseout(function(){
				opts[el.id].pause = false;
			});				
		
		clearInterval(imgInt[el.id]);	
		imgInt[el.id] = setInterval(function() { $.transition(el)  }, params.delay+params.stripDelay*params.strips);

	};

	// transition
	$.transition = function(el){

		if(opts[el.id].pause == true) return;

		stripInt[el.id] = setInterval(function() { $.strips(order[el.id][inc[el.id]], el)  },opts[el.id].stripDelay);
		
		$('#'+el.id).css({ 'background-image': 'url('+img[el.id][imgInc[el.id]]+')' });
		
		imgInc[el.id]++;

		if  (imgInc[el.id] == img[el.id].length) {
			imgInc[el.id] = 0;
		}
		
		if(titles[el.id][imgInc[el.id]]!=''){
			$('#ft-title-'+el.id).animate({ opacity: 0 }, opts[el.id].titleSpeed, function(){
				$(this).html(titles[el.id][imgInc[el.id]]).animate({ opacity: opts[el.id].titleOpacity }, opts[el.id].titleSpeed);
			});
		} else {
			$('#ft-title-'+el.id).animate({ opacity: 0}, opts[el.id].titleSpeed);
		}
		
		inc[el.id] = 0;

		if(opts[el.id].direction == 'random')
			$.fisherYates (order[el.id]);
			
		if((opts[el.id].direction == 'right' && order[el.id][0] == 1) 
			|| opts[el.id].direction == 'alternate'
			|| opts[el.id].direction == 'fountainAlternate')			
				order[el.id].reverse();		
	};


	// strips animations
	$.strips = function(itemId, el){

		temp = opts[el.id].strips;
		if (inc[el.id] == temp) {
			clearInterval(stripInt[el.id]);
			return;
		}
		
		if(opts[el.id].position == 'curtain'){
			currWidth = $('#ft-'+el.id+itemId).width();
			$('#ft-'+el.id+itemId).css({ width: 0, opacity: 0, 'background-image': 'url('+img[el.id][imgInc[el.id]]+')' });
			$('#ft-'+el.id+itemId).animate({ width: currWidth, opacity: 1 }, 1000);
		} else {
			$('#ft-'+el.id+itemId).css({ height: 0, opacity: 0, 'background-image': 'url('+img[el.id][imgInc[el.id]]+')' });
			$('#ft-'+el.id+itemId).animate({ height: opts[el.id].height, opacity: 1 }, 1000);
		}
		
		inc[el.id]++;
		
	};

	// shuffle array function
	$.fisherYates = function(arr) {
	  var i = arr.length;
	  if ( i == 0 ) return false;
	  while ( --i ) {
	     var j = Math.floor( Math.random() * ( i + 1 ) );
	     var tempi = arr[i];
	     var tempj = arr[j];
	     arr[i] = tempj;
	     arr[j] = tempi;
	   }
	}	
		
	this.each (
		function(){ init(this); }
	);
		
};

	// default values
	$.fn.jqFancyTransitions.defaults = {	
		width: 500, // width of panel
		height: 332, // height of panel
		strips: 20, // number of strips
		delay: 5000, // delay between images in ms
		stripDelay: 50, // delay beetwen strips in ms
		titleOpacity: 0.7, // opacity of title
		titleSpeed: 1000, // speed of title appereance in ms
		position: 'alternate', // top, bottom, alternate, curtain
		direction: 'fountainAlternate', // left, right, alternate, random, fountain, fountainAlternate
		effect: '' // curtain, zipper, wave		
	};
	
})(jQuery);