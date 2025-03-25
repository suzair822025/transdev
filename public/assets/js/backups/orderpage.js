var transcriptionArray = {Flexible:'0.75', Standard: '1', Express:'1.5'};
var translationArray = {Flexible:'2', Standard:'2.5', Express:'4'};
var docsArray = {Flexible:'0.08', Standard:'0.10', Express:'0.2'};
var selectedPacakge;

 $(document).ready(function(){
    $('#OpenfileUpload').click(function(){ $('#fileUpload').trigger('click'); });  // Upload Files Button 
    selectedPacakge = $('.custom-tabs li.active').find('a').attr('data-target');
    var calcUnit = $('span.calcUnit');
    var chgText = (selectedPacakge != 'docs') ? 'min' : 'word';
    $(calcUnit).text(chgText);
    setValpriceOptions();

    $('.selectService').click(function(){
        var calcUnit = $('span.calcUnit');
        selectedPacakge = $(this).attr('data-target');
        var chgText = (selectedPacakge != 'docs') ? 'min' : 'word';
        $(calcUnit).text(chgText);
        setValpriceOptions();
        var getTxtLabel = $(this).text;
        console.log(getTxtLabel);
    });

        function setValpriceOptions() {
            if (selectedPacakge == 'transcription') {
                $('#pricingOptions').find('i#flexible-price').text(transcriptionArray.Flexible);
                $('#pricingOptions').find('i#standard-price').text(transcriptionArray.Standard);
                $('#pricingOptions').find('i#express-price').text(transcriptionArray.Express);
                $('.pkg-flexible').find('input[type="radio"]').val(transcriptionArray.Flexible);
                $('.pkg-standard').find('input[type="radio"]').val(transcriptionArray.Standard);
                $('.pkg-express').find('input[type="radio"]').val(transcriptionArray.Express);
            }
            else if (selectedPacakge == 'translation') {
                $('#pricingOptions').find('i#flexible-price').text(translationArray.Flexible);
                $('#pricingOptions').find('i#standard-price').text(translationArray.Standard);
                $('#pricingOptions').find('i#express-price').text(translationArray.Express);
            }
            else if (selectedPacakge == 'docs') {
                $('#pricingOptions').find('i#flexible-price').text(docsArray.Flexible);
                $('#pricingOptions').find('i#standard-price').text(docsArray.Standard);
                $('#pricingOptions').find('i#express-price').text(docsArray.Express);
            }
        }
        

    
})