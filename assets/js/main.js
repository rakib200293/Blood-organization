$(document).ready(function(){
	//counter Active
	$('.single-counter h1').counterUp({
		delay:10,
		time: 1000
	});
	
	// Client Carousel
	$('.team-member-carousel').owlCarousel({
		loop:true,
		items:4,
		autoplayTimeout:1500,
		autoplay:true,
		autoplayHoverPause:true,
		margin:25,
		responsive :{
			0:{
				items:1
			},

			450:{
				items:2
			},
			576:{
				items:2
			},
			990:{
				items:3
			},
			1200:{
				items:4
			}
		}
	});

	

	
});