<?php
	
function instantContact_register() {
    add_menu_page('Instant Contact', 'Instant Contact', 'manage_options', 'instant-contact', 'instantContact_page', 'dashicons-testimonial');
}

function instantContact_page() {
	include INSTANT_CONTACT_DIR.'views/options.php';
}

function instantContact_output() {
	if (instantContact_getOption('enable') == 'yes') {
		include INSTANT_CONTACT_DIR.'views/output.php';
	}
}

function instantContact_scripts() {
	wp_enqueue_style('instantContact-options', plugins_url('css/options.css', dirname(__FILE__)));
 	wp_enqueue_style('wp-color-picker');
 	wp_enqueue_script('chat-script-handle', plugins_url('js/options.js', dirname(__FILE__)), array('wp-color-picker'), false, true);
}

function instantContact_styles() {
    wp_enqueue_style( 'instantContact-output', plugins_url('css/output.css', dirname(__FILE__)));
}

function instantContact_dynamicCss() {
	global $instantContact_css;
    echo "<style>$instantContact_css</style>";
}

function instantContact_jquery() {
    wp_enqueue_script('jquery');
}

function instantContact_dynamicJs() {
	global $instantContact_js;
    echo "<script>$instantContact_js</script>";
}