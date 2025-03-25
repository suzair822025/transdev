var transcriptionArray = {Flexible:'0.75', Standard: '1', Express:'1.5'};
var translationArray = {Flexible:'2', Standard:'2.5', Express:'4'};
var docsArray = {Flexible:'0.08', Standard:'0.10', Express:'0.2'};
var selectedPacakge;

 $(document).ready(function(){
    $('.Seloptn-btn').click(function(){
        $(this).parent().addClass('opt-selected');
        $(this).parents().eq(1).siblings().find('div.pricing').removeClass('opt-selected');
        $(this).prev().prop('checkbed', true);
        // $('.theClass:checkbox:checked') //   To get which checkbox is checked 
        // console.log($(this).prev().val());
        var gerAttr = $(this).attr('data-related');
        $('body').find('#' + gerAttr).show();
        $('body').find('div.section-steps').not( '#' + gerAttr).hide();
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
        var chgText = (gerAttr2 != 'docs') ? 'minutes' : 'words';
        var chgText2 = (gerAttr2 != 'docs') ? 'Minute' : 'Word';
        $(calcUnit).text(chgText);
        $(unitTitle).text(chgText2);

        priceCalculation();
    })

        

        $('.Seloptn-btn2').click(function(){
            $(this).parent().addClass('opt-selected');
            $(this).parent().siblings().removeClass('opt-selected');
            // $(this).prev().prop('checkbed', true);
            var gerAttr = $(this).attr('data-related');
            $('body').find('#' + gerAttr).show();
            // selectedPacakge = $(this).siblings('.margin-b-30').find('h3 i').html();
            priceCalculation();
        });        
        document.getElementById("s3-input").addEventListener("input", function(e) {
            priceCalculation();
        })
        function priceCalculation () {
            var priceField = $('#s3-input').val();
            var secVal = $('#show-step2 .opt-selected').find('a i').html();
            if(priceField != undefined && priceField != "" && secVal != "") {
                var total = parseFloat(secVal) * parseFloat(priceField);
                $('#s3-price').text(total.toFixed(2));
            }
        }
        
})