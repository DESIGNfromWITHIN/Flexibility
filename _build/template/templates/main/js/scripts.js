// load all inline scripts here

$(function(){
	$("#slides").slides({
		play: 5000,
		pause: 2500,
		effect: 'slide, fade',
		slideSpeed: 600,
		fadeSpeed: 400,
		slideEasing: "easeOutQuad"
	});
});

$(document).ready(function () {
	$("a[rel='colorbox']").colorbox();
});

// Code for Google Analytics | Change UA-XXXXX-X to be your site's ID
var _gaq=[['_setAccount','UA-10989210-13'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));