$(document).ready(function(){
			$(window).scroll(function(){
				var scroll=$(window).scrollTop();
				if(scroll>2)
				{
					$(".navbar").css("background","rgb(77,0,77)");
				}
				else
				{
					$(".navbar").css("background","transparent");
				}
			})
		})