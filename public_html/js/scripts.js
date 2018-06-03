

$(document).ready(function() {
	$("#dragend").dragend({
		jumpToPage: 2
		});

	$(window).on("scroll", function() {
		// logic here...
		let wScroll = $(this).scrollLeft();

		$('#paraImg').css({
			'transform' : 'translate(0px, '+ wScroll /2 +'%)'
		});
	});
});

//$(window).scroll(function() {

//	let wScroll = $(this).scrollLeft();

//	$('#paraImg').css({
//		'transform' : 'translate(0px, '+ wScroll /2 +'%)'
//	});

//});




