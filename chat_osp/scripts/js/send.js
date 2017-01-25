$('#form_input').submit(function(){
     var message = $('#message').val();
    // var sender = $('#sender').val();

   // alert(sender+' send '+message);	 
$.ajax({
	    url:'scripts/php/Send.php',
		data:{message:message},
		success:function(data){
		    $('#feedback').html(data);
	             $('#feedback').fadeIn('slow',function(){
				 
				      $('#feedback').fadeOut(500);  
					  
				 });
				 
		    $('#message').val(' ');
		}
	 
	 });
	 
	 return false;
});
