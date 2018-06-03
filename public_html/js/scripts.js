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

$('#ksAJAX').click(function(event) {
	event.preventDefault();
	this.blur(); // Manually remove focus from clicked link.
	$.get(this.href, function(html) {
		$(html).appendTo('body').modal();
	});
});

//$(window).scroll(function() {

//	let wScroll = $(this).scrollLeft();

//	$('#paraImg').css({
//		'transform' : 'translate(0px, '+ wScroll /2 +'%)'
//	});

//});




