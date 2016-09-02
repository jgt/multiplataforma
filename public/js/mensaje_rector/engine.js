
$(document).ready(function() {
	
	 
            
     jQuery('#flexslider-fotos').flexslider({
                animation: "slide",
                slideshow: true,
				itemWidth: 220,
			    itemMargin: 20,
			    minItems: 2,
			    maxItems: 4
            });
	
	jQuery('#flexslider-principal').flexslider({
                animation: "slide",
                slideshow: true,
				slideshowSpeed:5000,
				itemHeight: 660
				
            });
	
	$('#carousel-galeria').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		itemWidth: 210,
		itemMargin: 5,
		asNavFor: '#flexslider-galeria'
	  });
					
	 $('#flexslider-galeria').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: true,
		slideshow: true,
		slideshowSpeed:4000,
		sync: "#carousel-galeria"
	  });
	
	$('nav a:not(.outside)').smoothScroll();
            
			$('nav a:not(.outside)').click(function(event) {
                event.preventDefault();
                var link = this;
                $.smoothScroll({
                scrollTarget: link.hash
                });
            });
			
	 $('.image-link').magnificPopup({type:'image'});
            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
			
	
	$('#navigation li ul li').hover(function() {
        $(this).parent().parent().addClass('opt-selected');
    }, function() {
        $(this).parent().parent().removeClass('opt-selected');
    });
		
		
    jQuery('#webticker').webTicker();	
	
	jQuery(".header-sitio.interno").sticky({topSpacing:0});
			
});

$(window).load(function() {
    $("a.youtube").YouTubePopup({ autoplay: 0, draggable: false, width:860, height:524, hideTitleBar:true, overlayOpacity:0.7, color:922959, showBorder:false });	
	
	
	/* Contact form */
    $('#send2').click(function () {
        $('.error').fadeOut('slow');
        $('.success').fadeOut('slow');		
		
        var error = false;

		var name = $('input#name').val();
        if (name == "" || name == " ") {
            $('#err-name').fadeIn('slow');
            $('input#name').addClass('errorinput');
			error = true;
        }else{
			$('input#name').removeClass('errorinput');
		}

        var email_compare = /^([A-Za-z0-9_.-]+)@([dA-Za-z.-]+).([A-Za-z.]{2,6})$/;
        var email = $('input#email').val();
        if (email == "" || email == " ") {
            $('#err-email').fadeIn('slow');
			$('input#email').addClass('errorinput');
            error = true;
        } else if (!email_compare.test(email)) {
            $('#err-emailvld').fadeIn('slow');
			$('input#email').addClass('errorinput');
            error = true;
        }else{
			$('input#email').removeClass('errorinput');
		}
		
		var optionSelected = $('select#motivo').find("option:selected");
		var valueSelected  = optionSelected.val();
		if (valueSelected == 0){
			$('#err-motivo').fadeIn('slow');
			$('select#motivo').addClass('errorinput');
            error = true;
		}else{
			$('select#motivo').removeClass('errorinput');
		}
		
		var message = $('textarea#message').val();
        if (valueSelected==2 && (message == "" || message == " ") ){
            $('#err-message').fadeIn('slow');
			$('textarea#message').addClass('errorinput');
            error = true;
        }else{
			$('textarea#message').removeClass('errorinput');
		}

        if (error == true) {
            return false;
        }

        var data_string = $('#ajax-form').serialize();

        $.ajax({
            type: "POST",
            url: $('#ajax-form').attr('action'),
            data: data_string,
            timeout: 6000,
            error: function (request, error) {
                if (error == "timeout") {
                    $('#err-timedout').fadeIn('slow');
                }
                else {
                    $('#error').slideDown('slow');
                    $("#error").html('¡Error! Por favor, trata de nuevo más tarde');
                }
            },
            success: function () {
				$('input#name').val("");
				$('input#email').val("");
				$('input#phone').val("");
				$('select#motivo').val('0');
				$('textarea#message').removeClass('visible');
                $('#email-success').fadeIn('slow');
				$(document).scrollTop( $("#seccionForma").offset().top ); 
            }
        });

        return false;
    });
	
	
	$('#cancelar').click(function () {
         $('.error').fadeOut('slow');
	     $('.success').fadeOut('slow');	
        
		$('input#name').val("");
		$('input#email').val("");
		$('input#phone').val("");
		$('select#motivo').val('0');
		$('select#opcionEducativa').removeClass('visible');
		$('textarea#message').removeClass('visible');
		
		$('input#name').removeClass('errorinput');
		$('select#motivo').removeClass('errorinput');
		$('input#email').removeClass('errorinput');	
		$('textarea#message').removeClass('errorinput');	
		$(document).scrollTop( $("#seccionForma").offset().top ); 

        return false;
    });

	
	$('#motivo').change(function () {
		 var optionSelected = $(this).find("option:selected");
		 var valueSelected  = optionSelected.val();
		
		 $('#err-motivo').fadeOut('slow');
		 $('select#motivo').removeClass('errorinput');
		 
		 $('select#opcionEducativa').removeClass('visible');
		 $('textarea#message').removeClass('visible');
		 
		 if (valueSelected==1){
			$('textarea#message').addClass('visible');
            error = true;
		 }else if (valueSelected==2){
			$('textarea#message').addClass('visible');
		 }
		 
 	});
	
	
	var $container = $('.portfolioContainer');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
         
            $('.portfolioFilter a').click(function(){
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');
         
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                 });
                 return false;
            });
			
			$('ul.tabs [href*="tab2"]').click(function(){                
                $(this).parent().parent().parent().parent().parent().parent().addClass('smallSize');                         
            });
			
			$('ul.tabs [href*="tab1"]').click(function(){                
                $(this).parent().parent().parent().parent().parent().parent().removeClass('smallSize');                         
            });


	$(".ventana-emergente").fancybox({
			maxWidth: 500,
			minWidth:250,
			maxHeight: 650,
			fitToView: false,
			width: '50%',
			height: '80%',
			autoSize: false,
			closeClick: false,
			openEffect: 'elastic',
			closeEffect: 'elastic'
		});
		
		
		
		
			
});

$(window).resize(function() {
	


});


