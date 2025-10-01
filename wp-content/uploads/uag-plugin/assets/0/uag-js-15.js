document.addEventListener("DOMContentLoaded", function(){ jQuery( document ).ready( function() {
	if( jQuery( '.uagb-block-10014c2f' ).length > 0 ){
	jQuery( '.uagb-block-10014c2f' ).find( ".is-carousel" ).slick( {"slidesToShow":2,"slidesToScroll":1,"autoplaySpeed":"2000","autoplay":true,"infinite":true,"pauseOnHover":true,"speed":"500","arrows":true,"dots":true,"rtl":false,"prevArrow":"<button type='button' data-role='none' class='slick-prev' aria-label='Previous' tabindex='0' role='button' style='border-color: #93ce84;border-radius:0px;border-width:0px'><svg xmlns='https:\/\/www.w3.org\/2000\/svg' viewBox='0 0 256 512' height ='20' width = '20' fill ='#93ce84'  ><path d='M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z'><\/path><\/svg><\/button>","nextArrow":"<button type='button' data-role='none' class='slick-next' aria-label='Next' tabindex='0' role='button' style='border-color: #93ce84;border-radius:0px;border-width:0px'><svg xmlns='https:\/\/www.w3.org\/2000\/svg' viewBox='0 0 256 512' height ='20' width = '20' fill ='#93ce84' ><path d='M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z'><\/path><\/svg><\/button>","responsive":[{"breakpoint":1024,"settings":{"slidesToShow":1,"slidesToScroll":1}},{"breakpoint":767,"settings":{"slidesToShow":1,"slidesToScroll":1}}]} );
	}
	var $scope = jQuery('.uagb-block-10014c2f');
	var enableEqualHeight = ( '' );
			if( enableEqualHeight ){
				$scope.imagesLoaded( function() {
					UAGBTestimonialCarousel._setHeight( $scope );
				});

				$scope.on( "afterChange", function() {
					UAGBTestimonialCarousel._setHeight( $scope );
				} );
			}
} );
window.addEventListener("DOMContentLoaded", function(){
	var swiper = new Swiper( ".uagb-block-7f8d3663 .uagb-swiper",
		{"autoplay":{"delay":3000,"disableOnInteraction":false,"pauseOnMouseEnter":true,"stopOnLastSlide":false},"loop":true,"speed":800,"effect":"slide","direction":"horizontal","flipEffect":{"slideShadows":false},"fadeEffect":{"crossFade":true},"pagination":{"el":".uagb-block-7f8d3663 .swiper-pagination","clickable":true,"hideOnClick":false},"navigation":{"nextEl":".uagb-block-7f8d3663 .swiper-button-next","prevEl":".uagb-block-7f8d3663 .swiper-button-prev"}}	);
});

window.addEventListener( 'load', function() {
	UAGBButtonChild.init( '.uagb-block-ff6db152' );
});
	window.addEventListener( 'DOMContentLoaded', function() {
		UAGBModal.init( '.uagb-block-2f723e92' );
	});
window.addEventListener("DOMContentLoaded", function(){
	UAGBForms.init( {"block_id":"61f8a3c2","reCaptchaEnable":false,"reCaptchaType":"v2","reCaptchaSiteKeyV2":"","reCaptchaSecretKeyV2":"","reCaptchaSiteKeyV3":"","reCaptchaSecretKeyV3":"","afterSubmitToEmail":"contato@vitaclinic.com.br","afterSubmitCcEmail":"","afterSubmitBccEmail":"","afterSubmitEmailSubject":"Envio de formul\u00e1rio","sendAfterSubmitEmail":true,"confirmationType":"message","hidereCaptchaBatch":false,"captchaMessage":"Preencha o captcha acima.","confirmationUrl":""}, '.uagb-block-61f8a3c2', 15 );
});
window.addEventListener( 'load', function() {
	UAGBButtonChild.init( '.uagb-block-42d7e6e8' );
});
 });