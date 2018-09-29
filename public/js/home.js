jQuery(document).ready(function(){

	if (window.matchMedia("(min-width: 992px)").matches){
		$(".main-title").css("margin-left", "0");
	}

	$('.center-logos').slick({
		centerMode: true,
		centerPadding: '60px',
		slidesToShow: 5,
		responsive: [
		{
			breakpoint: 768,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 3
			}
		},
		{
			breakpoint: 480,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			}
		}
		]
	});

	

});