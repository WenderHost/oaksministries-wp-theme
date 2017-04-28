jQuery(document).ready(function(){

  /* Smooth Scroll */
	jQuery('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash,
	    jQuerytarget = jQuery(target);
	    jQuery('html, body').stop().animate({
	        'scrollTop': jQuerytarget.offset().top
	    }, 1200, 'swing', function () {
	        window.location.hash = target;
	    });
	});

  /* Back to Top Button */
  jQuery(window).scroll(function(){
      if (jQuery(this).scrollTop() > 300) {
          jQuery('.scrollsome').fadeIn();
      } else {
          jQuery('.scrollsome').fadeOut();
      }
  });

  jQuery('.scrollsome').click(function(){
      jQuery("html, body").animate({ scrollTop: 0 }, 1200);
      return false;
  });

  /* Toggle Content */
  jQuery(".toggle-box").hide();

  jQuery(".toggle").click(function(){
  	jQuery(this).next(".toggle-box").slideToggle();
  	jQuery(this).toggleClass("active");

  });


  /* Autoclear Gravity Forms */
  jQuery.fn.cleardefault = function() {
    return this.focus(function() {
    	if( this.value == this.defaultValue ) {
    		this.value = "";
    	}
    }).blur(function() {
    	if( !this.value.length ) {
    		this.value = this.defaultValue;
    	}
    });
  };
  jQuery(".clearit input, .clearit textarea, .gf_left_half textarea, .gf_right_half textarea, .gf_left_half input, .gf_right_half input").cleardefault();



  /* BXSlider */
  jQuery('.bxslider').bxSlider({
      slideMargin: 30,
  	mode: 'fade',
    speed: 1000,
  	pause: 2500,
  	auto: true,
    controls: true,
    adaptiveHeight: false,
  	randomStart: true,
    pagerCustom: '#bx-pager',
  	onSliderLoad: function(){
  	jQuery(".bxslider li").css("visibility", "visible");
  	}
  });

  /* Mobile Nav */
  jQuery("#menu-icon").on("click", function(){
  	jQuery("#nav").slideToggle();
  	jQuery(this).toggleClass("active");
  });

  (function($){

      $(document).on('gform_confirmation_loaded', function(event,form_id){
          var theLabel = window.gf_event_form_labels[form_id];
          ga("send","event","Forms", "Submission", theLabel);
      });

  })(jQuery);
}); //close (document).ready(function(){

(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');


// usage:
jQuery(window).smartresize(function(){
  // code that takes it easy...

  jQuery(function() {

    // Find all YouTube videos
    var $allVideos = jQuery("iframe[src^='http://www.youtube.com']"),

        // The element that is fluid width
        $fluidEl = jQuery(".container .page-wrap");

    // Figure out and save aspect ratio for each video
    $allVideos.each(function() {

      jQuery(this)
        .data('aspectRatio', this.height / this.width)

        // and remove the hard coded width/height
        .removeAttr('height')
        .removeAttr('width');

    });

    // When the window is resized
    // (You'll probably want to debounce this)
    jQuery(window).resize(function() {

      var newWidth = $fluidEl.width();

      // Resize all videos according to their own aspect ratio
      $allVideos.each(function() {

        var $el = jQuery(this);
        $el
          .width(newWidth)
          .height(newWidth * $el.data('aspectRatio'));

      });

    // Kick off one resize to fix all videos on page load
    }).resize();

  });
});