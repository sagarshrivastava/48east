    $(document).ready(function() {
		$('a.self-toggle').click(function(event) {
            event.preventDefault();
			$('#menu').children('.menu').slideToggle(200);
        });
		$("#top").hide();
			$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('#top').fadeIn().css('right','20px');
				} 
				else {
					$('#top').fadeOut().css('right','-100px');;
				}
			});
			$('#top').click(function () {
			$('body,html').animate({scrollTop: 0}, 400);
				return false;
			}); 
		}); 	
    });	
	
function blank(a)
		{
			if(a.value==a.defaultValue)
			a.value="";
		}

		function unblank(a)
		{
			if(a.value=="")
			a.value=a.defaultValue;
		}		
	