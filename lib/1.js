$(document).ready(function() {
	$('.pen-color').click(function(event) {
		$('.pen-color').each(function(index, el) {
			$(el).removeClass('active');
		});
		$(this).addClass('active');
	});	
});