"use strict"
/* Main menu */
var openMenu 	= $('.open-menu'),
	menu 		= $('.menu'),
	backdrop 	= $('.backdrop');

openMenu.on('click', function() {
	menu.addClass('show');
	backdrop.addClass('show');
});

backdrop.on('click', function() {
	$('.menu, .search-tool, .sign-window').removeClass('show');
	$(this).removeClass('show');
});
/* Main menu */

/* Sign-window */
var signButton = $('.sign-button'),
	signWindow = $('.sign-window'),
	signWindowClose = $('.sign-window header .close');

signButton.on('click', function() {
	backdrop.addClass('show');
	signWindow.addClass('show');
});

signWindowClose.on('click', function() {
	backdrop.removeClass('show');
	signWindow.removeClass('show');
});
/* Sign-window */

/* Search-tool */
var openSearchTool 	= $('.open-search-tool'),
	searchTool 		= $('.search-tool');

openSearchTool.on('click', function() {
	searchTool.addClass('show');
	backdrop.addClass('show');
});
/* Search-tool */



/* Search close button */
var inputText = $('.search input[type="text"]'),
	closeButton = $('.search input[type="button"]');

inputText.on('input', function() {
	if ($(this).val() !== "")
		closeButton.addClass('show');
	else
		closeButton.removeClass('show');
});

closeButton.on('click', function() {
	inputText.val("").focus();
	$(this).removeClass('show');
});
/* Search close button */



/* View Button */
var viewButton 	= $('.view button')
	content 	= $('.content');

viewButton.on('click', function() {
	viewButton.removeClass('active');
	$(this).addClass('active');
});

var oneStyle = $('.view button:nth-of-type(1)'),
	twoStyle = $('.view button:nth-of-type(2)'),
	threeStyle = $('.view button:nth-of-type(3)');

oneStyle.on('click', function() {
	content.addClass('one-style').removeClass('two-style three-style');
});

twoStyle.on('click', function() {
	content.addClass('two-style').removeClass('one-style three-style');
});

threeStyle.on('click', function() {
	content.addClass('three-style').removeClass('two-style one-style');
});
/* View Button */


/* Profile in Header */
var profile = $('section.profile'),
	profileMenu = $('section.profile + .profile-menu');

profile.on('click', function() {
	profileMenu.toggleClass('show');
});


/* Profile in Header */