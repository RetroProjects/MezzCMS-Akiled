$('body').append('<div class="page-load"><img src="/assets/images/loader/box.gif"></div>');

$(window).on('load', function() {
	setTimeout(removeLoader, 500);
	console.log(
	"Mezz CMS - by Hugoyin\n" +
	"You can access front-end files for free on GitHub. https://github.com/yilmazev/Mezz-Layout\n" +
	"Join our Discord server to follow updates! https://discord.gg/rse43jwzSB\n\n" +
	"All rights reserved. Design and coding by Hugoyin.");
});

function removeLoader(){
	$( ".page-load" ).fadeOut(500, function() {
		$( ".page-load" ).remove();
	}); 
}