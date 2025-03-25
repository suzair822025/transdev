$('#OpenfileUpload').click(function(){ $('#fileUpload').trigger('click'); });  // Upload Files Button 
$('#disable-upload').click(function(){
	if($(this).is(':checked')) {
		$('#OpenfileUpload').attr('disabled', true);
	}
	else {
		$('#OpenfileUpload').removeAttr('disabled');	
	}
});