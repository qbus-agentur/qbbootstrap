jQuery(function($) {
	/* Classes for easy styling */
	var $ae = $(".accordion-element");
	var $header = $ae.children(":first-child").addClass("accordion-header");
	$ae.each(function() {
		$(this).children(":not(:first-child)")
			.wrapAll($("<div class='accordion-content'/>"));
	});
	$ae.first().children().addClass("accordion-current");

	/* Hide all but first accordion content */
	$ae.not(":first-child").children(":not(:first-child)").hide();

	$header.click(function() {
		/* Toggle own accordion-content, and accordion-current
		 * class on both, header and content. */
		$(this).siblings().slideToggle()
			.andSelf().toggleClass("accordion-current");

		/* Remove current class on all other header/content elements,
		 * and slide up the visible contents. */
		$(this).parent().siblings().children()
			.removeClass("accordion-current")
			.not(":first-child").slideUp();
	});
});
