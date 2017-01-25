<html>
<head>
<style>
td{
	background-color:#90caf9 ;
}
</style>
</head>
<?php

   require('../../includes/database/connect.db.php');
   require('../../includes/function/chat.func.php');
   
   
    $messages =get_msg();
	 
	  
  foreach($messages as $message){
	    echo '<table cellspacing="5">';
	if($message['image']==NULL){
      echo '<tr><td>';
	  echo '<img src="14203.png" width="50" height="50" alt="no image">';
	   echo '<strong>'.$message['sender'].':</strong><br/>';
	   echo $message['message'].'<br/><br/>';
	   echo '</td></tr>';
	   }
	  else{
 
       echo '<tr><td>';
	   echo '<img src="data:image;base64,'.$message['image'].'" width="50" height="50">';
	   echo '<strong>'.$message['sender'].':</strong>';
	   echo $message['message'].'<br/>';
	   echo '</td></tr>';
	   echo '</table>';
	   
	   }
	   }
 
?>