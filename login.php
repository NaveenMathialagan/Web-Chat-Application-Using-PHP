<?php
session_start();
if(isset($_SESSION['email'])){
echo'
<html>
<head>
<frameset cols="30%,*" noresize border="1">
<frame src="frnds.php">
<frame src="chat_osp/index.php">
</frameset>
</head>
</html>';
}
else{
echo "login to your accout";
}
?>