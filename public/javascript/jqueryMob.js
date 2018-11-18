$(document).ready(function() {
	new WOW().init();

	$(".singupPage-home").hide();

	$(".form-check-input").click(function() {
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

	$(".content-hide > *").hide();
		
		$(".nextForm").click(function() {

			$(".stepOne").hide(300);
			$(".content-hide > .stepTwo").show(500);

		});
})