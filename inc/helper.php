<?php

function instantContact_default($option = '') {
	$defaults = array(
		'heading'         => 'Chat With Us',
		'form'            => '',
		'chat_width'      => '250px',
		'from_right'      => '30px',
		'from_bottom'     => '0px',
		'color'           => '#1e73be',
		'heading_color'   => '#ffffff',
		'form_bg'         => '#ffffff',
		'animation'       => 'slide',
		'animation_speed' => '300'
	);
	if (isset($defaults[$option])) return $defaults[$option];
	return '';
}

function instantContact_updateOption($option = '', $value = '') {
	if (empty($option)) return false;
	$option = 'instantContact_'.$option;
	
	if (!add_option($option, $value)) {
		return update_option($option, $value);
	}
}

function instantContact_getOption($option) {
	$value = get_option('instantContact_'.$option);
	if (empty($value)) :
		return instantContact_default($option);
	else:
		return $value;
	endif;
}

function instantContact_checked($option = '', $value = '') {
	if (instantContact_getOption($option) == $value) echo 'checked';
}

function instantContact_selected($option = '', $value = '') {
	if (instantContact_getOption($option) == $value) echo 'selected';
}

function instantContact_post($key = '') {
	if (isset($_POST[$key])) return sanitize_text_field($_POST[$key]);
	return '';
}

function instantContact_handleOptions() {
	foreach ($_POST as $key => $value) {
		if ($key !== 'instantContact_submit') {
			instantContact_updateOption($key, instantContact_post($key));	
		}
	}
	instantContact_updateOption('enable', instantContact_post('enable'));
}