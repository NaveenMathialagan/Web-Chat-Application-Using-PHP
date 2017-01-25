<?php
 
 function get_msg(){
 
       $query = "SELECT Sender, Message,image FROM chat ORDER BY Msg_ID ";
	   
	   $run =mysql_query($query);
	   
	   $messages= array();
	   
	   while($message = mysql_fetch_assoc($run))
	   {
	       $messages[] = array('sender'=>$message['Sender'],
		                        'message'=>$message['Message'],
								'image'=>$message['image']);
	   }
	   
	   return $messages;
 
 }
 
 function send_msg($sender, $message,$image){
 
      if(!empty($sender) && !empty($message)){
	  
	       $sender = mysql_real_escape_string($sender);
	       $message = mysql_real_escape_string($message);
		   
		   $query ="INSERT INTO `chat`(`Msg_ID`, `Sender`, `Message`,`image`) VALUES (null,'{$sender}','{$message}','{$image}')";
		   
		   if($run = mysql_query($query)){
		       return true;
		   }
		  
		   else{
		  return false;
		   }
	  }else{
	   return false;
	  }
 
 }

?>