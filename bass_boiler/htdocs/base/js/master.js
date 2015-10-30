/**
 * Master Scripts
 */

(function($) {

	var $window = $(window),
		$doc = $(document.documentElement),
		$body = $('body');
		
		
 	function scrollerInit() {
		$('#skrollr-body').ready(function() {
			skrollr.init({
			smoothScrolling: true,
			//mobileDeceleration: 0.004
			});
		});
	}	
	
	$body.imagesLoaded( function() {
		setTimeout(function() {
		      
			scrollerInit();
   
		    // Fade in sections
			$body.removeClass('loading').addClass('loaded');
			  
		}, 800);
	});


   $(document).on("scroll", onScroll);

   //smoothscroll
   $('a[href^="#"]').on('click', function(e) {
     e.preventDefault();
     $(document).off("scroll");

     $('a').each(function() {
       $(this).removeClass('active');
     })
     $(this).addClass('active');

     var target = this.hash,
       menu = target;
     $target = $(target);
     $('html, body').stop().animate({
       'scrollTop': $target.offset().top + 2
     }, 500, 'swing', function() {
       window.location.hash = target;
       $(document).on("scroll", onScroll);
     });
   });

   function onScroll(event) {
     var scrollPos = $(document).scrollTop();
     $('#menu-center a').each(function() {
       var currLink = $(this);
       var refElement = $(currLink.attr("href"));
       if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
         $('#menu-center ul li a').removeClass("active");
         currLink.addClass("active");
       } else {
         currLink.removeClass("active");
       }
     });
   }
	
				
})(this.jQuery);

