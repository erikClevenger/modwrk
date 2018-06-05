$(document).ready(function() {

	/*
	* Animsition Plugin
	*
	* http://git.blivesta.com/animsition/
	* */
	$(".animsition").animsition({

		// default animation effects outlined here
		// custom overrides (home page) specificed
		// using the Animsition data attributes on
		// the HTML elements. See Home page.
		inClass: 'zoom-in-sm',
		outClass: 'zoom-out-sm',

		// default animation duration unless otherwise
		// specified using Animsition data attributes
		inDuration: 1250,
		outDuration: 800,

		// class on the navbar links to internal pages
		linkElement: '.animsition-link',

		// "browser" option allows you to disable the
		// "animsition" in case the css property in the
		// array is not supported by your browser. The
		// default setting is to disable the "animsition"
		// in a browser that does not support "animation-duration".
		browser: ['animation-duration', '-webkit-animation-duration'],

		transition: function(url){ window.location.href = url; }
	});
});