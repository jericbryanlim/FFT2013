//Global Variables
slide=1;

//jQuery Start function
$(document).ready(function() {
	
	$('#Slides').slidesjs({			
		width: 370,			
		height: 508,
		start: 1,
		callback: {
			loaded: function(number) {
			// Do something awesome!
			// Passes start slide number
			},
			start: function(number) {
				
			},
			complete: function(number) {
				slide=number;
				//if(number==1 || number==11)
				//{
					
				//	if(number==1){
				//			$('.slidesjs-previous').css('display','none');
				//	}
				//	if(number==11){
				//		$('.slidesjs-next').css('display','none');
				//	}
				//}
				//else
				//{
					$('.slidesjs-next').css('display','block');
					$('.slidesjs-previous').css('display','block');
				//}
			}
		}
	});
	$('.slidesjs-previous').hover(
		function() {
			$(this).css("background", "url('../images/buttonset.png') no-repeat");
			$(this).css("background-position","0 0");
		}
	);
	$('.slidesjs-next').hover(
		function() {
			$(this).css("background", "url('../images/buttonset.png') no-repeat");
			$(this).css("background-position","-30 0");
		}
	); 
});