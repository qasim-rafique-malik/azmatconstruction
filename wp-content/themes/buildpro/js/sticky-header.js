(function($) { "use strict";

	/* --------------------------------------------------
	 * header | sticky
	 * --------------------------------------------------*/
	function header_sticky() {
		jQuery("header").addClass("clone", 1000, "easeOutBounce");
		var $document = $(document);
		var vscroll = 0;
		if ($document.scrollTop() >= 50 && vscroll == 0) {
			jQuery("header.autoshow").removeClass("scrollOff");
			jQuery("header.autoshow").addClass("scrollOn");
			jQuery("header.autoshow").css("height", "auto");
			vscroll = 1;
		} else {
			jQuery("header.autoshow").removeClass("scrollOn");
			jQuery("header.autoshow").addClass("scrollOff");
			vscroll = 0;
		}
		$('header').addClass('sticky');
	}

	jQuery(window).on("scroll", function() {
		header_sticky();
	});

})(jQuery);