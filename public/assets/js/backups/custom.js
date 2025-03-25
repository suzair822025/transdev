$(document).ready(function() {
    // "myAwesomeDropzone" is the camelized version of the HTML element's ID
    // Dropzone.options.myAwesomeDropzone = {
    //     paramName: "file", // The name that will be used to transfer the file
    //     maxFilesize: 2, // MB
    //     addedfile: function(file) {
    //         console.log(file.name);
    //     },
    //     success: function(file, response) {
    //         console.log(response.file);
    //         $('.order-items').append(createorderRow(response.file));
    //         console.log(document.getElementById(response.file).duration);
    //         $('.remove-rec').on('click', function(){
    //             $(this).closest('div.orderitem').remove();
    //         })
    //     }
    // };

    Dropzone.autoDiscover = false;
      if($('#my-awesome-dropzone').length){
            var myAwssomedropzone = new Dropzone(
            '#my-awesome-dropzone', //id of drop zone element 1
            {
                paramName: "file",
                maxFilesize: 64, // MB
                addedfile: function(file) {
                  console.log(file.name);
              },
                success: function(file, response) {
                    
                     console.log(response.file);
                    $('.order-items').append(createorderRow(response.file,response.duration,response.type));
                    calcamnt();
                    // console.log(document.getElementById(response.file).duration);
                    $('.remove-rec').on('click', function(){
                        $(this).closest('div.orderitem').remove();
                    })
                }
            }
        ); 
    }    
          

    if($('#docs-dropzone').length){
        // documents upload script
    var docsDropzone = new Dropzone(
        '#docs-dropzone', //id of drop zone element 2
        {
            paramName: "file",
            maxFilesize: 64, // MB
            acceptedFiles: ".doc,.docx,.pdf",
            addedfile: function(file) {
            // console.log(file.name);
            getdocName = file.name;
          },
            success: function(file, response) {
                // console.log(response.file);
                $('.order-items').append(createorderRow(response.file));
                // console.log(document.getElementById(response.file).duration);
                   // console.log(getdocName); 
                    

                    var f = file;
                    if (f) {
                        var r = new FileReader();
                        r.onload = function(e) { 
                            var contents = e.target.result;
                            var res = contents.split(" "); 
                            $("#display_File_count").text(res.length);
                        }
                        r.readAsText(f);
                    }
                    


                $('.remove-rec').on('click', function(){
                    $(this).closest('div.orderitem').remove();
                    calcamnt();
                })
            }
        }
    ); 
    }  

});

function calcamnt() {
    var total = parseFloat(0);
    $('.orderitem').each(function(index, element) {
        var amt = parseFloat(0);
        var count = element.children[1].innerHTML;
        var type =element.children[2].innerHTML;
        if(type=='video')
        {
            var minute = parseFloat(element.children[3].innerHTML) / 60;
            if($("#verbatim").prop('checked') == true)
            {
                amt += 0.25;    
            }
            if($("#timestamp").prop('checked') == true)
            {
                amt += 0.25;    
            }
            amt += (parseFloat($('input[name="price"]:checked').val()) * parseFloat(minute));
            element.children[4].innerHTML = '$'+amt.toFixed(2);
            total+=amt;
            $('.total').html('$'+total.toFixed(2));
        }
        else
        {
            if($("#verbatim").prop('checked') == true)
            {
                amt += 0.25;    
            }
            if($("#timestamp").prop('checked') == true)
            {
                amt += 0.25;    
            }
            amt += (parseFloat($('input[name="price"]:checked').val()) * parseFloat(count));
            element.children[4].innerHTML = '$'+amt.toFixed(2);
            total+=amt;
            $('.total').html('$'+total.toFixed(2));
        }
       
    });
     $('.gr-total').html('Total $'+ total.toFixed(2));
     $('#orderAmount').val(total.toFixed(2));
}

function createorderRow(filename,duration,type) {
    var html = '';
    var dura = '';
    
    if(type=='video'){
        // var minute = Math.floor(duration / 60);
        // var seconds = parseInt(duration % 60);
        //dura = minute+':'+seconds;
        dura = duration;
    }else{ dura = duration; }
    html += '<div class="row my-4 orderitem">';
    html += '<div class="col-sm-5 col-xs-7">'+filename+'</div>';
    html += '<div class="col-sm-3 col-xs-2">'+dura+'</div>';
    html += '<div style="display:none">'+type+'</div>';
    html += '<div style="display:none">'+duration+'</div>';
    html += '<div class="col-sm-3 col-xs-2">$0.00</div>';
    html += '<div class="col-sm-1" style="display:none"><a href="javascript:;" class="remove-rec"><i class="glyphicon glyphicon-trash"></i></a></div>';
    html += '</div>';

    return html;
}