	$(document).ready(function(){

		//background image hovers on home page
		$('#imageHovers li').hover(function(){
			var imageSelector = "." + $(this).attr('class').split(' ')[1];
			$('.background').removeClass('current');
			$(imageSelector).addClass('current');
		});//end of imageHovers

		//dropdown nav menu
		$('a.dropDown').on('click', function(e){
			e.preventDefault();
			var href = $('nav ul');
			href.slideToggle('fast', 'swing');
		});//end open nav drop down

		//isotope		
		$('.list').isotope({
			itemSelector : '.sitePost',
			layoutMode : 'fitRows'
		});

		$('.imageHovers').isotope({
			itemSelector : 'a',
			layoutMode : 'fitRows'
		});





		
	});//end document ready
