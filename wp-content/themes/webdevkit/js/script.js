	$(document).ready(function(){

		//background image hovers on home page
		$('#imageHovers li').hover(function(){
			var imageSelector = "." + $(this).attr('class').split(' ')[1];
			$('.background').removeClass('current');
			$(imageSelector).addClass('current');
			console.log($(this).attr('class'));
		});//end of imageHovers

		//dropdown nav menu
		$('a.dropDown').on('click', function(e){
			e.preventDefault();
			var href = $('nav ul');
			href.toggleClass('visible');
		});//end open nav drop down

		//submenu dropdown
		

		//twitter widget
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

		//facebook widget
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');

	});//end document ready
