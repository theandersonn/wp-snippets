/*--------------------------------------------------------------
	EMBEDDED YOUTUBE RESPONSIVE
--------------------------------------------------------------*/
jQuery(function(){
		var all_oembed_videos = jQuery("iframe[src*='youtube'], iframe[src*='vimeo']");
		all_oembed_videos.each(function(){
			jQuery(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );
		});	
});