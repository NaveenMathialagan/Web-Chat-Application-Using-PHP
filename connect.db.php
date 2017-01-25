<?php
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='chat';
if($connection= mysql_connect($db_host,$db_user,$db_pass))
{
// echo 'Connected to Database Server...<br/>';
if($database= mysql_select_db($db_name,$connection))
{
 //echo 'Database has beeen selected...</br>';
}else{
 //echo 'Database was not found..</br>';
}
}
else{
 //echo 'Unable to connect MYSQL server..</br>';
}
?> 