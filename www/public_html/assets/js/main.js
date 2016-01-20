$(document).ready(function() {

	$('a').on('touchstart', function() {
		$(this).addClass('touch');
	}).on('touchend', function() {
		$(this).removeClass('touch');
	});

});