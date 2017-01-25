$('#form_login').submit(function(){

 var email = $('#emailid').val();
    var pass = $('#password').val();
	
	$.ajax({
	    url:'update/php/login.php',
		data:{email:email,pass:pass},
		success:function(data){
		    $('#fed').html(data);
             
			 	d=data;
			if(d.match("correct")){
			  
			    window.location.replace("login.php");
				
				
				
			}
			
	     $('#fed').fadeIn('slow',function(){
    	 $('#fed').fadeOut(3000);  
					  
				 });
				 
		   
		}
	 
	 });
     return false;
});