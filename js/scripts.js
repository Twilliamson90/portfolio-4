(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$('.blog-item').on('click', function(e) {
		  window.location = $(this).find('.blog-item-link').first().attr('href');
    });
		
	});
	
})(jQuery, this);
