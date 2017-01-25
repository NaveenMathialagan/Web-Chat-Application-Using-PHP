<?php
require('connect.db.php');
session_start();
$s=$_SESSION['email'];
 if($s==null){
       echo 'Login to ur account';
 }else{
echo'
<html>
<head>';
echo '<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
     
	  <script type="text/javascript" src="js/materialize.min.js"></script>
	  <script type="text/javascript" src="cookie.min.js"></script>
	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<style>
h2{
color:red;
margin-top:100px;
}
#p{

}
#h6{
margin-left:65px;
}
h5{
display:inline;
}
#fil{
width:200px;
}
img{
width:200px;
height:200px;
}
#tab{
font-color:white;
}
#cardins{
margin-top:-50px;
}
#card_pan{
height:50px;
}
body{
padding-top:05px;
}
#t{
color:white;
}
#uimg{
width:55px;
height:55px;
}#fimg{
width:45px;
height:45px;
}
#ancins{
margin-top:-39px;
}
#ai{
margin-top:10px;
margin-left:10px;
}
#anc{
height:80px;
background-color:#F3F7FA;
}
</style>
</head>
<body>
<script type="text/javascript">
function show(a){
cookie.set(\'key\',a);
}
function tab(){
$(document).ready(function(){
    $(\'ul.tabs\').tabs();
  });
        
}
</script>';
echo '<body onLoad="tab();">';
$qry="SELECT fname,lname,image,sex FROM userinfo WHERE email='$s' limit 1";
  $result=mysql_query($qry);
 $row=mysql_fetch_object($result);
$f_name=$row->fname;
$l_name=$row->lname;
if($row->image==NULL){
    if($row->sex=="male"){
    echo  '<div class="card-panel #90caf9 blue lighten-3" id="p1">
<img id="uimg" src="Blank_Male.jpg"><div id="cardins"><h5 style="margin-left:50px;">&nbsp;&nbsp;&nbsp;'.$f_name.'&nbsp;&nbsp;&nbsp;'.$l_name.'</h5>
<h6 id="h6">'.$s.'</h6></div>
</div>';
}else{
 echo  '<div class="card-panel #90caf9 blue lighten-3" id="p1">
<img id="uimg" src="blank_profile_female.jpg"><div id="cardins"><h5 style="margin-left:50px;">&nbsp;&nbsp;&nbsp;'.$f_name.'&nbsp;&nbsp;'.$l_name.'</h5>
<h6 id="h6">'.$s.'</h6></div>
</div>';

}
}else{
echo  '<div class="card-panel #90caf9 blue lighten-3" id="p1">
<img id="uimg" src="data:image;base64,'.$row->image.'"><div id="cardins"><h5 style="margin-left:50px;">&nbsp;&nbsp;&nbsp;'.$f_name.'&nbsp;&nbsp;'.$l_name.'</h5>
<h6 id="h6">'.$s.'</h6></div>
</div>';}
echo '
      <div class="row">
       <div class="col s12" id="tab">
      <ul class="tabs">
       
        <li class="tab col s3"><a href="#test2">Profile</a></li>
      </ul>
     </div></div>';

/*echo '<div id="test1">';
global $s;
$query = "SELECT userid,fname,lname,image,sex from `userinfo` where email != '$s'";
	 $run =mysql_query($query);
	 
echo '<div class="collection" id="p">';  
while($user = mysql_fetch_assoc($run))
	   { $a=$user['userid'];
	  if($user['image']==NULL){
	       if($user['sex']=="male"){
		   
		      echo '<a href="chating.php" target="main" class="collection-item" onmousedown=show(a="'.$a.'") id="anc"><div id="ai"><img id="fimg" src="Blank_Male.jpg"><div id="ancins"><h6 style="margin-left:55px;">'
	   .$user['fname'].'&nbsp;&nbsp;&nbsp;'.$user['lname'].'</h6></div></div></a>';
	   
		   }else{
		       echo '<a href="chating.php" target="main" class="collection-item" onmousedown=show(a="'.$a.'") id="anc"><div id="ai"><img id="fimg" src="blank_profile_female.jpg"><div id="ancins"><h6 style="margin-left:55px;">'
	   .$user['fname'].'&nbsp;&nbsp;&nbsp;'.$user['lname'].'</h6></div></div></a>';
	   }
	   }else{
	   echo '<a href="chating.php" target="main" class="collection-item" onmousedown=show(a="'.$a.'") id="anc"><div id="ai"><img id="fimg" src="data:image;base64,'.$user['image'].'"><div id="ancins"><h6 style="margin-left:55px;">'
	   .$user['fname'].'&nbsp;&nbsp;&nbsp;'.$user['lname'].'</h6></div></div></a>';
	   }}
     
echo '</div>
</div>';*/  
  echo '<div id="test2">';
  $qry="SELECT `image` FROM userinfo WHERE email='$s' limit 1";
    $result=mysql_query($qry);
	$row=mysql_fetch_object($result);
	  if($row->image==NULL){
	        echo '<img id="dbimg" style="width:300px;height:300px;margin-left:50px;"  src="14203.png">';
	  }else{
		 echo '<img  id="dbimg" style="width:300px;height:300px;margin-left:50px;" src="data:image;base64,'.$row->image.'">';
		
		 } 
		 echo '<form method="post" enctype="multipart/form-data">
		   <div class="file-field input-field">
          <input class="file-path validate" type="text" id="fil"/>
        <div class="btn">
		<span>File</span>
	    <input type="file" name="myfile"></div>
		<button class="btn waves-effect waves-light" type="submit" name="submit" style="margin-left:300px;margin-top:-56px;">Upload</button>
		 
           </div>
	      </form>';
	  if(isset($_POST['submit'])){
    $name = $_FILES["myfile"]["name"];
   if($name==NULL){echo "Pick the image";}else{
   $type= $_FILES["myfile"]["type"];
   if($type=="image/jpeg" || $type=="image/png" || $type=="image/jpg"){
   $size =$_FILES["myfile"]["size"];
    echo $size; 
 if($size<=800000){
  $temp= $_FILES["myfile"]["tmp_name"];
  $error= $_FILES["myfile"]["error"];
   $image=addslashes($temp);
  $nam=addslashes($name);
  $image=file_get_contents($image);
  $image=base64_encode($image);
       
	    $qry="UPDATE userinfo SET image = '$image' WHERE email ='$s'";
	  $result=mysql_query($qry);
	  if($result){
	   $qry="SELECT `image` FROM userinfo WHERE email='$s' limit 1";
      $result=mysql_query($qry);
	   $row=mysql_fetch_object($result);
	  // echo "Image upload";
	     echo '<script>document.getElementById("dbimg").src="data:image;base64,'.$row->image.'"</script>';
		   echo '<script>document.getElementById("uimg").src="data:image;base64,'.$row->image.'"</script>';
	}else{
	   
	echo "Image not uploaded";
	}
   
   }
   else
   { 
      echo 'Pic size is too large';}
   }
   else{
    echo "Pic only images";
   }
  
  }}
  /*function saveimage($name,$image)
  {
   global $s;
    $qry="UPDATE userinfo SET image = '$image' WHERE email ='$s'";
	$result=mysql_query($qry);
	if($result){
	   $qry="SELECT `image` FROM userinfo WHERE email='$s' limit 1";
      $result=mysql_query($qry);
	   $row=mysql_fetch_object($result);
	  // echo "Image upload";
	     echo '<script>document.getElementById("dbimg").src="data:image;base64,'.$row->image.'"</script>';
		   echo '<script>document.getElementById("uimg").src="data:image;base64,'.$row->image.'"</script>';
	}else{
	   
	echo "Image not uploaded";
	}
	}*/
	echo '</div>';
	

echo' <script type="text/javascript" src="imgupload/imgupload.js"></script>
</body>
       
</html>';
}

?>