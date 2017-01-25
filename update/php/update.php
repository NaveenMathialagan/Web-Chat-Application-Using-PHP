<?php
    require('../../connect.db.php');	 
	$fname=$_GET['fname'];
	  $lname=$_GET['lname'];
	    $email=$_GET['email'];
	   $pass=$_GET['pass'];
	    $cpass=$_GET['cpass'];
		 $dob=$_GET['dob'];
		 $sex=$_GET['sex'];
		
	     $chk=0;
if(unameval()){
if(emailval()){
if(passval()){
if(dobval()){
if(sexval()){
     
	        
		  $qry = "SELECT email FROM `userinfo`";
	   
	       $run =mysql_query($qry);
	    while($emailid = mysql_fetch_assoc($run))
	   {
	         if($emailid['email']==$email){
			    $chk=1;
				break;
			 }else{
			      $chk=2;
			  //   echo"your email is correct<br/>";
			 }
	   }
	   if($chk==1){
	         echo "Your email is already excist<br/>";
			 echo "Try with different email";
	   }
	   if($chk==2){
	        
		$query ="INSERT INTO `userinfo`(`userid`, `fname`, `lname`,`email`,`password`,`dob`,`sex`,`image`) VALUES (null,'{$fname}','{$lname}','{$email}','{$pass}','{$dob}','{$sex}','')";
		  if($run = mysql_query($query)){
		          echo 'Your account has been created<br/>';
               echo 'You can login into your account';	
		 }
		  else{
		       echo "Unable to create your account";
		   }
	   }
	   
		   

}}}}}
function unameval()
{
if(empty($_GET['fname'])){
echo 'Enter the First name';
}else{
if(empty($_GET['lname'])){
echo 'Enter the last name';
}else{
if(strlen($_GET['fname'])<15 || strlen($_GET['lname'])<15){
return true;}
else{
echo 'Your firstname and lastname should not exceed 15 character';
}
}
}
}
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
   if(strlen($_GET["pass"])<8){
     echo'Your password is less than 8 character';
  }else{
      if($_GET["pass"]==$_GET["cpass"]){
		 return true;
	  }else{
	     echo ' Your password is does not match';
	  }
  }
   
}
}
function dobval(){
if(empty($_GET["dob"])){
echo 'Select your Data of Birth';
}else{
 return true;
}
}
function sexval(){
if(empty($_GET["sex"])){
echo"Select your gender";
}
else{
 return true;
}
}

?>