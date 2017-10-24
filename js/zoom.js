// this works with or without this javascript	
$(document).ready(function() {
	  $('.zoom-image').hover(function() {	    
      $(this).siblings('.zoom-image').css('z-index', 10);
      $(this).css('z-index', 99);
	  })
	})