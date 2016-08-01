// =================================================================
// 		Miln Ltd
// 			Digital Experiences
// 		Global Javascript Functions
// =================================================================

(function($) {

	// Mobile Trigger
	$(document).on('click', '.js-hamburger', function(){
		$('nav').addClass('active');
		$('body').addClass('static')
		return false;
	});

	// Mobile Exit
	$(document).on('click', '.js-hamburger-close', function(){
		$('nav').removeClass('active');
		$('body').removeClass('static');
		return false;
	});

		// Open Search
	$(document).on('click', '.js-search', function(){
		$('.search-section').addClass('active');
		$('body').addClass('static');
		return false;
	});


	// Exit Search
	$(document).on('click', '.js-exit', function(){
		$('.search-section').removeClass('active');
		$('body').removeClass('static');
		return false;
	});

	// Product Benefit Mobile 

	$(document).on('click', '.js-mobile-benefit-switch', function(){
		var benefit = $(this).attr('data-benefit');
		
		$('.mobile-topline').removeClass('active');
		$('.mobile-below').removeClass('active');
		$('.mobile-below[data-benefit='+benefit+']').addClass('active');

		// Add border/activeclass
		$('.js-benefit-switch').removeClass('active');
		$(this).addClass('active');

		return false;
	});


	// Product Benefit switcher
	$(document).on('click', '.js-benefit-switch', function(){
		var benefit = $(this).attr('data-benefit');
		
		$('.switch-content').removeClass('active');
		$('.switch-content[data-benefit='+benefit+']').addClass('active');

		// Add border/activeclass
		$('.js-benefit-switch').removeClass('active');
		$(this).addClass('active');

		return false;
	});
	
	// Product accessories switcher
	$(document).on('click', '.js-accessories-switch', function(){
		// Get the category id
		var category = $(this).attr('data-category');
		
		// Hide all other divs
		$('.accesories-cat').hide();

		// Show clicked div
		$('.accesories-cat[data-category='+category+']').show();

		// Add border/activeclass
		$('.js-accessories-switch').removeClass('active');

		$(this).addClass('active');

		return false;
	});

	// Product archive switcher
	$(document).on('click', '.js-product-switch', function(){
		// Get the category id
		var category = $(this).attr('data-category');
		
		// Hide all other divs
		$('.product-cat').hide().removeClass('active');

		// Show clicked div
		$('.product-cat[data-category='+category+']').addClass('active').fadeIn();

		// Add border/activeclass
		$('.js-product-switch').removeClass('active');

		$(this).addClass('active');

		return false;
	});

	// Sixtus Search
		var typingTimer;                //timer identifier
		var doneTypingInterval = 500;  //time in ms

		$('.search_bar').attr('onsubmit', 'return false');

		//on keyup, start the countdown
		$('.search_bar input').keyup(function(){
			$('.search-results').html('<h3>Searching...</h3>');
		    var value = $(this).val();
		    	//$( ".search_results_title .search_results_name" ).text(value);
		    clearTimeout(typingTimer);
		    typingTimer = setTimeout(doneTyping, doneTypingInterval);
		});

		//on keydown, clear the countdown 
		$('.search_bar input').keydown(function(){
		    clearTimeout(typingTimer);
		});

		//user is "finished typing," do something
		function doneTyping () {
		    var value = $('.search_bar input').val();
		    	//$( ".search_results_title .search_results_name" ).text(value);
	        $.ajax({
	            type: "GET",
	            url: "http://sixtus.aye-creative.co.uk/wp-content/themes/sixtus/search.php",
	            data: {
	                'search' : value
	            },
	            success: function(data) {
	            	if (data != '') {
	            		$('.search-results').html(data);
	            	} else {
	            		$('.search-results').html('<h3>Sorry, no posts matched your criteria.</h3>');
	            	}
	                
	            }
	        });
		}
	
})( jQuery );

