<?php
 require('includes/core.inc.php');
 
 
 ?>
<!DOCTYPE html>
<html lang='en'> 
<head>
   
</head>
<body>
<div id="feedback"></div>
<div id="messages" style="width:800px;
margin-left:50px;
height:500px;
padding:10px;
border:2px solid red;
overflow:scroll;">

<?php


?>

</div><br>
<div id="f">
 
<form action="#" method="post" id="form_input">
  
  Enter the message:<input type="text" id="message" style="width:900px;height:30px;">
 </form>
</div>
  

<script type="text/javascript" src="scripts/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="scripts/js/auto_chat.js"></script>
<script type="text/javascript" src="scripts/js/send.js"></script>

</body>
</html>