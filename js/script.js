// For fixed Navigation
$(window).scroll(function(){
  if ($(this).scrollTop() > 40) {
    $('.navbar').addClass('fixed-top');
  }
 else {
  $('.navbar').removeClass('fixed-top');
	}
});

$('#testimonial-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    smartSpeed: 1000,
    autoplay: 5000,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1200:{
            items:1
        }
    }
});
$('#section-gallery').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    smartSpeed: 1000,
    autoplay: 5000,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:3
        },
        1200:{
            items:4
        }
    }
});

