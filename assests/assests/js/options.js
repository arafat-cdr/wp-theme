jQuery(function ($) {

	var frame			=	wp.media({
		title:  			'select or upoad logo',
		button: 			{
			text:           'use this media'
		},
		multiple:           false

	});

	$("#arafat_uploadLogoImgBtn").click(function (e) {
		e.preventDefault();

		frame.open();
	});

	//getting the image url

	frame.on( 'select', function () {

		var attachment			=	frame.state().get('selection').first().toJSON();
		$("input[name=arafat_inputLogoImg]").val(attachment.url);

	} );

});