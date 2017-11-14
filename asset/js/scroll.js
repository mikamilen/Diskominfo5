$(function(){
	$(window).scroll(function(){
		var wscroll = $(window).scrollTop();
		if (wscroll > 100) {
			$('#navbar-scroll').removeClass('navbar').addClass('navbar-2');
		}
		else {
			$('#navbar-scroll').removeClass('navbar-2').addClass('navbar');
		}
	});
});