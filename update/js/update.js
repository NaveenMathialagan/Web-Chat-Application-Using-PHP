

$('#form_signup').submit(function(){
    

  var fname = $('#first_name').val();
    var lname = $('#last_name').val();
   var email= $('#email').val();
   var pass=$('#pass').val();
	var cpass=$('#cpass').val();
	var dob=$('#dob').val();
	
	   var sex="";
		if(document.getElementById("test1").checked)
		{
		   sex="male";
		}
		else if(document.getElementById("test2").checked){
		    sex="female";
		}
  $.ajax({
	    url:'update/php/update.php',
		data:{fname:fname,lname:lname,email:email,pass:pass,cpass:cpass,dob:dob,sex:sex},
		success:function(data){
		    $('#feed').html(data);
			
			d=data;
			if(d.match("Your account has been created")){
			    document.getElementById("form_signup").reset();
			}
			 
	       $('#feed').fadeIn('slow',function(){
				 
				      $('#feed').fadeOut(3000);  
					  
				 });
				 
		   
		}
	 
	 });
     return false;
});


