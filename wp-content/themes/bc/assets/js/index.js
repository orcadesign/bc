$(document).ready(function(){
	$(".menu-toggle .hamburger, .menu-toggle").click(function(){
		$("open").hide();
		$("closed").delay(300).fadeIn();
	});
	$(".menu-toggle .cross").click(function(){
		$("closed").hide();
		$("open").delay(300).fadeIn();
	});
});