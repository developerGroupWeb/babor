$(document).ready(function() {
	new WOW().init();

	$(".singupPage-home").hide();

	$(".secondFace-home р").click(function() {
		$(".singupPage-home").show();
		$(".secondFace-home").hide();
	});

	$(".go-backHome").click(function(){
		$(".singupPage-home").hide();
		$(".secondFace-home").show();
	});

	$('#fa-sliders, #reset').click(function() {
		$('#searchBox').slideToggle();
	});

	echo('ok');

})