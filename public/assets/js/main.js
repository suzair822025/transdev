/* ===================================================================
    
    Author          : Valid Theme
    Template Name   : Gixus - Business Consulting Template
    Version         : 1.0
    
* ================================================================= */
(function($) {
	"use strict";

	$(document).ready(function() {

		/* ==================================================
		    # Tooltip Init
		===============================================*/
		$('[data-toggle="tooltip"]').tooltip();

		/* ==================================================
		    # Fun Factor Init
		===============================================*/
		$('.timer').countTo();
		$('.fun-fact').appear(function() {
			$('.timer').countTo();
		}, {
			accY: -100
		});



		/* ==================================================
		    _Progressbar Init
		 ===============================================*/
		function animateElements() {
			$('.progressbar').each(function() {
				var elementPos = $(this).offset().top;
				var topOfWindow = $(window).scrollTop();
				var percent = $(this).find('.circle').attr('data-percent');
				var animate = $(this).data('animate');
				if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
					$(this).data('animate', true);
					$(this).find('.circle').circleProgress({
						// startAngle: -Math.PI / 2,
						value: percent / 100,
						size: 130,
						thickness: 3,
						lineCap: 'round',
						emptyFill: '#e7e7e7',
						fill: {
							gradient: ['#2667FF', '#6c19ef']
						}
					}).on('circle-animation-progress', function(event, progress, stepValue) {
						$(this).find('strong').text((stepValue * 100).toFixed(0) + "%");
					}).stop();
				}
			});

		}

		animateElements();
		$(window).scroll(animateElements);




		/* ===================================================================
			Accordion Hover
		* ================================================================= */
		let accordion_animation = document.querySelector(".services-style-one-items");
		if (accordion_animation) {
			var expand;
			var $accordion, $wideScreen;
			$accordion = $('.services-style-one-items').children('.services-style-one-item');
			$wideScreen = $(window).width() > 767;
			if ($wideScreen) {
				$accordion.on('mouseenter click', function(e) {
					var $this;
					e.stopPropagation();
					$this = $(this);
					if ($this.hasClass('out')) {
						$this.addClass('out');
					} else {
						$this.addClass('out');
						$this.siblings().removeClass('out');
					}
				});
			} else {
				$accordion.on('touchstart touchend', function(e) {
					var $this;
					e.stopPropagation();
					$this = $(this);
					if ($this.hasClass('out')) {
						$this.addClass('out');
					} else {
						$this.addClass('out');
						$this.siblings().removeClass('out');
					}
				});
			}
		}


		/* ==================================================
		    Contact Form Validations
		================================================== */
		$('.contact-form').each(function() {
			var formInstance = $(this);
			formInstance.submit(function() {

				var action = $(this).attr('action');

				$("#message").slideUp(750, function() {
					$('#message').hide();

					$('#submit')
						.after('<img src="assets/img/ajax-loader.gif" class="loader" />')
						.attr('disabled', 'disabled');

					$.post(action, {
							name: $('#name').val(),
							email: $('#email').val(),
							phone: $('#phone').val(),
							comments: $('#comments').val()
						},
						function(data) {
							document.getElementById('message').innerHTML = data;
							$('#message').slideDown('slow');
							$('.contact-form img.loader').fadeOut('slow', function() {
								$(this).remove()
							});
							$('#submit').removeAttr('disabled');
						}
					);
				});
				return false;
			});
		});

	}); // end document ready function


/* ==================================================
        Signup Form Popup
     ===============================================*/

	 
})(jQuery); // End jQuery

document.addEventListener("DOMContentLoaded", function() {
	var myModal = new bootstrap.Modal(document.getElementById('langModal'));
	myModal.show();
});
function setLanguage(lang) {
	alert("Language selected: " + lang);
	//localStorage.setItem("selectedLanguage", lang); // Store language preference
	var languageModal = bootstrap.Modal.getInstance(document.getElementById('langModal'));
	languageModal.hide();
}

window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-893KJ2R715');