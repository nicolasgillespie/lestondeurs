$(document).ready(function(){
	resize();

	if($('html').data('ng-filter') != null) {
		var img_list = $('.img_list');
		NG_Filter(img_list);
	}

});

$(window).bind('resize', function() { resize(); });

function resize() {
	$('body, #container').css({
		"min-height": ($(window).height()),
	});
	// $('').css({
	// 	"min-height": ($(window).height()),
	// });
	//

	var headerHeight = $('header').outerHeight(true);
	var footerHeight = $('footer').outerHeight(true);
	var contentPadding = parseFloat($('.content').css('padding-top')) + parseFloat($('.content').css('padding-bottom')) + 10;
	var contentHeight = $(window).height() - (headerHeight + footerHeight + contentPadding);

	$('.content').css({
		"min-height": (contentHeight),
	});

	$(".fancybox").fancybox({
		// width: '80%',
		// height: auto,
		openEffect	: 'elastic',
		closeEffect	: 'elastic',
		scrolling: 'auto',
		cyclic: true
	});

	// $('#index .contenu').css({
	// 	"min-height": ($(window).height() - (110+58)),
	// });
}
