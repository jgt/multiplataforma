$(window).load(function(){
	$('.slider').fractionSlider({
		  'fullWidth': 			true,
		  'controls': 			true,
		  'pager': 				true,
		  'responsive': 			true,
		  'dimensions': 			"1000,400",
	      'increase': 			false,
          'slideTransitionSpeed' : 500, 
          'delay' : 0, // default delay for elements
          'timeout' : 1200, // default timeout before switching slides
          'speedIn' : 1200, // default in - transition speed
          'speedOut' : 1000, 
		  'pauseOnHover': 		false
	});

})
