<?php
 require('../../connect.db.php');
 $email=$_GET['email'];
 $password=$_GET['pass'];
      $chk=0;
if(emailval()){
if(passval()){
        $qry = "SELECT email FROM `userinfo`";
	   
	       $run =mysql_query($qry);
	    while($emailid = mysql_fetch_assoc($run))
	   {
	         if($emailid['email']==$email){
			   $chk=1;
			   
				break;
			 }else{
			      $chk=2;
			 }
	   }
	if($chk==1){
	
	        global $password,$email;
	         $qry2 = "SELECT password FROM `userinfo` where email='{$email}' limit 1";
			 $result=mysql_query($qry2);
	        $row=mysql_fetch_object($result);
          
		  if($row->password==$_GET['pass']){
		   session_start(); 
  		 $_SESSION['email']= $email;
		 
		 //
		 //redirect the page to frnds.php
		 //
		 
		   echo "correct";
		  }
		  else{
		  
		   echo "Your password is wrong";
		  }
		  
		 
	   }
	   if($chk==2){
             echo "Invalid email Id";	   
	   }
}}
 function emailval(){
 if (empty($_GET["email"])) {
    echo"Email is required";
  } else {
	  return true;
	
  }

}
function passval()
{
if (empty($_GET["pass"])) {
   echo 'Enter the password';
}else{
  
		 return true;
  }
}

?>




 http://www.webservicex.com/currencyconvertor.asmx?WSDL