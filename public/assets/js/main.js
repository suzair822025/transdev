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

// document.addEventListener("DOMContentLoaded", function() {
// 	var myModal = new bootstrap.Modal(document.getElementById('langModal'));
// 	//myModal.show();
// });
// function setLanguage(lang, url) {
// 	//alert("Language selected: " + lang);
// 	localStorage.setItem("selectedLanguage", lang); // Store language preference
// 	localStorage.setItem("visitedUrl", url); // Store clicked url
// 	var languageModal = bootstrap.Modal.getInstance(document.getElementById('langModal'));
// 	languageModal.hide();
// 	window.location.href = url;
// }
function smoothScroll(event, targetId) {
    event.preventDefault();
    document.getElementById(targetId).scrollIntoView({ behavior: 'smooth' });
  }

/// script for contact form in a popup
  const contactBtn = document.getElementById('popup_contactBtn');
  const contactForm = document.getElementById('popupcontactForm');
  const contactText = document.getElementById('contactText');
  const contactIcon = document.getElementById('contactIcon');

  /* contactBtn.addEventListener('click', () => {
    const isVisible = contactForm.classList.toggle('show');

    // Toggle text and icon
    if (isVisible) {
      contactText.textContent = '';
      contactIcon.className = 'fa fa-times';
    } else {
      contactText.textContent = 'Contact Us';
      contactIcon.className = 'fa fa-envelope';
    }
  }); */  /// script for contact form in a popup ends here


 ////	langauge selector TopBar Starts	////
 const dropdownSelected = document.getElementById('langdropdown-selected');
 const dropdownOptions = document.getElementById('langdropdown-options');
 const selectedText = document.getElementById('selected-text');
 const selectedFlag = document.getElementById('selected-flag');

 // Toggle dropdown visibility
 dropdownSelected.addEventListener('click', () => {
    dropdownOptions.classList.toggle('active');
  	dropdownSelected.classList.toggle('active');
 });

 // Handle selection
 document.querySelectorAll('.langdropdown-option').forEach(option => {
   option.addEventListener('click', () => {
	 const lang = option.getAttribute('data-lang');
	 const flag = option.getAttribute('data-flag');
	 const label = option.textContent.trim();

	 selectedText.textContent = label;
	 selectedFlag.src = flag;

	 sessionStorage.setItem('chosenLanguage', lang);
	 sessionStorage.setItem('selectedFlag', flag);

	 dropdownOptions.classList.remove('active');
   });
 });

 // Load saved language
 const savedLang = sessionStorage.getItem('chosenLanguage');
 const savedFlag = sessionStorage.getItem('selectedFlag');
 if (savedLang && savedFlag) {
   selectedText.textContent = savedLang === 'en' ? 'English' : 'Spanish';
   selectedFlag.src = savedFlag;
 }

 // Close on outside click
 document.addEventListener('click', (e) => {
   if (!e.target.closest('.langdropdown-container')) {
	 dropdownOptions.classList.remove('active');
   }
 });
////	langauge selector TopBar Ends	////

////	Enable Translation Language Fields For Signup Form Starts	////



document.addEventListener('DOMContentLoaded', function () {
    const serviceSelect = document.querySelector('select[name="service_type"]');
    const extraInputs = document.querySelectorAll('.extra-inputs');

    const triggerOptions = [
        "Audio/Video Transcription",
        "Audio/Video Translation",
        "Document Translation"
    ];

    if (serviceSelect) {
        serviceSelect.addEventListener('change', function () {
            const selected = this.value;
            if (triggerOptions.includes(selected)) {
                extraInputs.forEach(el => el.classList.remove('d-none'));
            } else {
                extraInputs.forEach(el => el.classList.add('d-none'));
            }
        });
    }
});




	// document.addEventListener('DOMContentLoaded', function () {
    //     const serviceSelect = document.querySelector('select[name="service_type"]');
    //     const extraInputs = document.querySelectorAll('.extra-inputs');

    //     const triggerOptions = [
    //         "Audio/Video Transcription",
    //         "Audio/Video Translation",
    //         "Document Translation"
    //     ];

    //     serviceSelect.addEventListener('change', function () {
    //         const selected = this.value;
    //         if (triggerOptions.includes(selected)) {
    //             extraInputs.forEach(el => el.classList.remove('d-none'));
    //         } else {
    //             extraInputs.forEach(el => el.classList.add('d-none'));
    //         }
    //     });
    // });

	
////	Enable Translation Language Fields For Signup Form Ends	////

window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-893KJ2R715');