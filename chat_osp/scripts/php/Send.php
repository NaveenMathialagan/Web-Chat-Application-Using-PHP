<?php

   require('../../includes/database/connect.db.php');
   require('../../includes/function/chat.func.php'); 
    session_start();
     $e=$_SESSION['email'];
   
    $qry="select fname from `userinfo` where email='$e' limit 1";
	if($r=mysql_query($qry)){
		
		if($re=mysql_fetch_assoc($r)){
			  
			  $sender=$re['fname'];
			
		}else{
			echo mysql_error();
		
		}
		}else{
		echo mysql_error();
	}
	$qry="SELECT fname,lname,image,sex FROM userinfo WHERE email='$e' limit 1";
  $result=mysql_query($qry);
 $row=mysql_fetch_object($result);
 $image=$row->image;
	  if(isset($_GET['message'])&&!empty($_GET['message'])){
	      $message =$_GET['message'];
		  if(send_msg($sender,$message,$image))
		  {
		       echo 'Message Sent';
		  }else{
		      echo'Message was not sent';
		  }
	  }
	  else{
	     echo'No message was entered';
	  } 
   

?>