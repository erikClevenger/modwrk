$(document).ready(function() {
	$('#menu li a').on('click',function() {
		let page = $(this).data('.page');
		$("#pages .page:not('a.hide')").stop().fadeOut('fast', function() {
			$(this).toggle('hide');
			$('#pages .page[data-page="'+page+'"]').fadeIn('slow').toggle('hide');
		});
	});
});

