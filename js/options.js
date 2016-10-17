jQuery(document).ready(function ($) {
    $('#instant-contact input[type="color"]').wpColorPicker();

    $('#instant-contact-form').submit(function (e) {
    	$('.spinner').addClass('is-active');
	    $.ajax({
	        type: 'POST',
	        url: ajaxurl,
	        data: new FormData($(this)[0]),
	        processData: false,
            contentType: false,
	        success: function(data) {
	        	$('.spinner').removeClass('is-active');
	        	$('#toast-container').fadeIn();
	        	setTimeout(function () {
	        		$('#toast-container').fadeOut();
	        	}, 2000);
	        }
	    });
	    e.preventDefault();
    });
})