<?php

$instantContact_css = 
'#instant-contact {
		position: fixed;
		bottom: '.instantContact_getOption('from_bottom').';
		right: '.instantContact_getOption('from_right').';
		z-index: 9999999;
		width: '.instantContact_getOption('chat_width').';
		max-width: calc(100% - '.instantContact_getOption('from_right').' - 10px);
		background: '.instantContact_getOption('color').';
		border: 1px solid '.instantContact_getOption('color').';
		border-bottom: 0;
		border-radius: 2px 2px 0 0;
		box-shadow: 0 0 3px rgba(0,0,0,0.1);
	}
	#instant-contact h4 {
	    color: '.instantContact_getOption('heading_color').';
	}
	#instant-contact .inner {
	    background: '.instantContact_getOption('form_bg').';
	}
	#instant-contact input[type=submit] {
	    background: '.instantContact_getOption('color').';
	}
	#instant-contact input:not([type=checkbox]):not([type=radio]):not([type=submit]):focus,
	#instant-contact select:focus,
	#instant-contact textarea:focus {
	    border-color: '.instantContact_getOption('color').';
}';


$instantContact_js =
'jQuery(document).ready(function ($) {
	$("#instant-contact h4").click(function () {
		$("#instant-contact .instant-contact-content").'.instantContact_getOption('animation').'Toggle('.instantContact_getOption('animation_speed').');
	})
})';