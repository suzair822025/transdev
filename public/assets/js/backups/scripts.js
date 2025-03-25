$(document).ready(function(){
    var transcriptionArray = {Flexible:'0.75', Standard: '1', Express:'1.5'};
    var translationArray = {Flexible:'2', Standard:'2.5', Express:'4'};
    var docsArray = {Flexible:'0.08', Standard:'0.10', Express:'0.2'};
    var selectedPackage;
    var serviceName;
    var packageName;
    
    
    $('.Seloptn-btn').click(function(){
        $(this).parent().addClass('opt-selected');
        $(this).parents().eq(1).siblings().find('div.pricing').removeClass('opt-selected');
        $(this).prev().prop('checkbed', true);
        // $('.theClass:checkbox:checked') //   To get which checkbox is checked 
        // console.log($(this).prev().val());
        var gerAttr = $(this).attr('data-related');
        $('body').find('#' + gerAttr).show();
        // $('body').find('div.section-steps').not( '#' + gerAttr).hide();
        var gerAttr2 = $(this).attr('data-target');
        setPricesforstep2();
        function setPricesforstep2() {
            if (gerAttr2 == 'transcription') {
                $('#show-step2').find('i#flexible-price').text(transcriptionArray.Flexible);
                $('#show-step2').find('i#standard-price').text(transcriptionArray.Standard);
                $('#show-step2').find('i#express-price').text(transcriptionArray.Express);
                $('#show-step2').find('#servicetype-txt').text('transcription');
            }
            else if (gerAttr2 == 'translation') {
                $('#show-step2').find('i#flexible-price').text(translationArray.Flexible);
                $('#show-step2').find('i#standard-price').text(translationArray.Standard);
                $('#show-step2').find('i#express-price').text(translationArray.Express);
                $('#show-step2').find('#servicetype-txt').text('translation');
            }
            else if (gerAttr2 == 'docs') {
                $('#show-step2').find('i#flexible-price').text(docsArray.Flexible);
                $('#show-step2').find('i#standard-price').text(docsArray.Standard);
                $('#show-step2').find('i#express-price').text(docsArray.Express);
                $('#show-step2').find('#servicetype-txt').text('documents');
            }
        }
        var calcUnit = $('span#calcUnit');
        var unitTitle = $('strong.unit');
        var unitTitle2 = $('span.unit');
        var chgText = (gerAttr2 != 'docs') ? 'minutes' : 'words';
        var chgText2 = (gerAttr2 != 'docs') ? 'Minute' : 'Word';
        $(calcUnit).text(chgText);
        $(unitTitle).text(chgText2);
        $(unitTitle2).text(chgText2);

        if(serviceName && packageName != null) {
             priceCalculation();
         }
         
        serviceName = $(this).attr('data-target');
        sessionStorage.setItem("serviceName", serviceName );
    });

    $('.Seloptn-btn2').click(function(){
        $(this).parent().addClass('opt-selected');
        $(this).parent().siblings().removeClass('opt-selected');
        if(serviceName || packageName != null) {
             priceCalculation();
         }
        // console.log($(this).attr('data-related'));
        packageName = $(this).attr('data-related');
        sessionStorage.setItem("packageName", packageName );
        // console.log(sessionStorage.getItem("serviceName"));
        // console.log(sessionStorage.getItem("packageName"));

    });

    var inputPricefield = document.getElementById("s3-input");
    if(inputPricefield) {
        document.getElementById("s3-input").addEventListener("input", function(e) {
            if(serviceName || packageName != null) {
                priceCalculation();
            }
        })
    }
    function priceCalculation () {
        var priceField = $('#s3-input').val();
        var secVal = $('#show-step2 .opt-selected').find('a i').html();
        if(((priceField != undefined) && (priceField != "")) && ((secVal != undefined) && (secVal != ""))) {
            var total = parseFloat(secVal) * parseFloat(priceField);
            $('#s3-price').text(total.toFixed(2));
        }

        else {
            $('#s3-price').text("");  
        }
    }
    
    // Pricing page number field script
    var minNumber = 0; 
      $('.spinner .btn:first-of-type').on('click', function() {
        $('.spinner input').val( parseInt($('.spinner input').val(), 0) + 1);
            if(serviceName || packageName != null) {
                priceCalculation();
            }
      });
      $('.spinner .btn:last-of-type').on('click', function() {
        if($('.spinner input').val() <= minNumber){
            return false;
            }else{
                $('.spinner input').val( parseInt($('.spinner input').val(), 0) - 1);
            }
            if(serviceName || packageName != null) {
                priceCalculation();
            }
      });

    // Pricing page scripts ends


    $(document).on('click', '#OpenfileUpload', function(e) {
        e.preventDefault();
        $('#fileUpload').trigger('click');
    });

    $(document).on('click', '#OpendocUpload', function(e) {
        e.preventDefault();
        $('#docUpload').trigger('click');
    });
    //$('#OpenfileUpload').click(function(){ $('#fileUpload').trigger('click'); });  // Upload Files Button

    $('#disable-upload').click(function(){
        if($(this).is(':checked')) {
            $('#OpenfileUpload').attr('disabled', true);
        }
        else {
            $('#OpenfileUpload').removeAttr('disabled');
        }
    });  // Get Quote page scripts ends

    //$('#OpendocUpload').click(function(){ $('#docUpload').trigger('click'); });  // Upload Files Button for Careers Page

    $('#orderNow').click(function(){


    });  // Upload Files Button

    var selectIds = $('[id^=collapse]');
    selectIds.on('show.bs.collapse hidden.bs.collapse', function () {
        $(this).parent().find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
    })

    // Order Page Script
    selectedPackage = $('.custom-tabs li.active').find('a').attr('data-target');
    var calcUnit = $('span.calcUnit');
    var chgText = (selectedPackage != 'docs') ? 'min' : 'word';
    $(calcUnit).text(chgText);
    setValpriceOptions();

    $('.selectService').click(function(){
        var calcUnit = $('span.calcUnit');
        selectedPackage = $(this).attr('data-target');
        var chgText = (selectedPackage != 'docs') ? 'min' : 'word';
        $(calcUnit).text(chgText);
        setValpriceOptions();
        var getTxtLabel = $(this).text();
        $('span.pkg-title').text(getTxtLabel);
    });

    function setValpriceOptions() {
        if (selectedPackage == 'transcription') {
            $('#pricingOptions').find('i#flexible-price').text(transcriptionArray.Flexible);
            $('#pricingOptions').find('i#standard-price').text(transcriptionArray.Standard);
            $('#pricingOptions').find('i#express-price').text(transcriptionArray.Express);
            $('.pkg-flexible').find('input[type="radio"]').val(transcriptionArray.Flexible);
            $('.pkg-standard').find('input[type="radio"]').val(transcriptionArray.Standard);
            $('.pkg-express').find('input[type="radio"]').val(transcriptionArray.Express);
        }
        else if (selectedPackage == 'translation') {
            $('#pricingOptions').find('i#flexible-price').text(translationArray.Flexible);
            $('#pricingOptions').find('i#standard-price').text(translationArray.Standard);
            $('#pricingOptions').find('i#express-price').text(translationArray.Express);
        }
        else if (selectedPackage == 'docs') {
            $('#pricingOptions').find('i#flexible-price').text(docsArray.Flexible);
            $('#pricingOptions').find('i#standard-price').text(docsArray.Standard);
            $('#pricingOptions').find('i#express-price').text(docsArray.Express);
        }
    }

    $('.alphaonly').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });

     $(".numbersonly").keypress(function (e) {
         //if the letter is not digit then display error and don't type anything
         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            //display error message
            // $("#errmsg").html("Digits Only").show().fadeOut("slow");
                   return false;
        }
    });

// Order Page Script ends

    $('.custom-tabs li a').click(function(e){
         var txt = $(e.target).text();
        $('.pkg-name').text(txt);
    });
    




}); // document.ready ends 