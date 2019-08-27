(function () {
	window.onload = function() {
		
		'use strict';

		var mobileNavButton = document.querySelector('.mobile-nav-button');
		var mainNavigation = document.querySelector('.nav');

		mobileNavButton.onclick = function() {
			mainNavigation.classList.toggle('is-open');
		}

	};
})();
