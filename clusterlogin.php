<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>ChatApp</title>

  <!-- CSS  -->
  <link href="icon.css" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
  
  li{
     width:150px;
     text-align:center;
	 font-size:20px;
  }
  #c{
  margin-top:250px;
  margin-left:190px;
  }
  
  #lod{
  padding:80px;
  height:580px;
  width:700px;
  margin-left:300px;
  margin-top:80px;
 }
 #lo{
  padding:80px;
  height:650px;
  width:700px;
  margin-left:330px;
 }
 #lab{
 font-size:15px;
 }
 #but{
  text-align:center;
 }
 #slide{
 height:600px;
 }
  #up{
   position:fixed;
  }
  
  #feed{
  
  position:absolute;
  margin-left:620px;
  margin-top:112px;
  font-size:15px;
  color:red;
  }
 #fed{
 position:absolute;
  margin-left:620px;
  margin-top:112px;
  font-size:15px;
  color:red;
 
 }
  </style>

<script type="text/javascript">
var scrollY=0;
var distance=40;
var speed=24;
function autoScrollTo(el){

/*var currentY=window.pageYOffset;
var targetY=document.getElementById(el).offsetTop;
var bodyHeight = document.body.offsetHeight;
var yPos= currentY + window.innerHeight;
var animator=setTimeout('autoScrollTo(\''+el+'\')',speed);
if(yPos > bodyHeight){
     clearTimeout(animator);
}else{
    if(currentY < targetY-distance){
	   scrollY = currentY+distance;
	   window.scroll(0,scrollY);
	}else{
	clearTimeout(animator);
	 }
    }*/
}
function resetScroller(el){

var currentY=window.pageYOffset;
var targetY=document.getElementById(el).offsetTop;
var animator=setTimeout('resetScroller(\''+el+'\')',5);

if(currentY > targetY){
    scrollY = currentY-distance;
	   window.scroll(0,scrollY);
}else{
    clearTimeout(animator);
   
 }
 } 
 function slide(){
    $(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });
  $(document).ready(function(){
      $('.slider').slider({height:600,interval:2000,transition:400});
    });
 }
</script>
</head>
<body onload="slide();">
<div class="navbar-fixed" id="nav">
  <nav class="#90caf9 blue lighten-3" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Chat App</a>
      <ul class="right hide-on-med-and-down">
	    
        <li><a href="#Login" >Login</a></li>
		  <li><a href="#signup" >Sign Up</a></li>
		    <li><a href="#abou" >About</a></li>
      </ul>

     </div>
  </nav></div>
<div class="slider" id="slide">
    <ul class="slides" id="slide">
      <li>
        <img src="background3.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Chat with any people</h3>
          <h5 class="light grey-text text-lighten-3">Spread your thought</h5>
        </div>
      </li>
      <li>
        <img src="background1.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Chat with the world</h3>
          <h5 class="light grey-text text-lighten-3">world is in your hand</h5>
        </div>
      </li>
      <li>
        <img src="background2.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Here you go</h3>
          <h5 class="light grey-text text-lighten-3">Chat with world</h5>
        </div>
      </li>
    </ul>
  </div>
 <!--<div id="index-banner" class="parallax-container">
   <br><br><br>
  <div class="container" id="c">
        <br><br>
        <h3 class="header center teal-text text-lighten-2">Create your Account</h3>
        <div class="row center">
          <h5 class="header col s12 light">Make you feel better about the people</h5>
        </div></div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>-->
  
  <div class="container" >
  
  <div id="fed"></div>
      
      <div id="lod">
	 
	    <h3 class="header blue-text text-lighten-2">Login</h3><br>   <div id="Login" class="section scrollspy">
		<form method="post" id="form_login" action="#">
	    <div class="input-field col s6"> 
          <i class="material-icons prefix">email</i>
          <input id="emailid" type="email" class="validate" placeholder="Enter your Email Address">
          <label for="email" data-error="wrong"  id="lab">Email ID</label>
        </div><br>
	     <div class="input-field col s6">
		  <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="validate" placeholder="Enter your password">
          <label id="lab">Password</label>
        </div><br>
		 <button class="btn waves-effect waves-light" type="submit" name="action" id="but" value="submit">Submit</button>
		</form>
	  </div>
  </div></div>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a href="#" class="btn-floating btn-large waves-effect waves-light red" onclick="return false;" onmousedown="resetScroller('nav');"><i class="material-icons prefix">navigation</i></a>
        
 </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Sign for free</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>
   
  <div class="container" >
  <div id="feed">
</div>
    
    <div id="lo">
	    <h3 class="header blue-text text-lighten-2">Sign Up</h3><br>
		<form method="post" action="#" id="form_signup">
	    <div class="row">
        <div class="input-field col s6">
		   <i class="material-icons prefix">account_circle</i>
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
		  <div class="input-field col s12">
		   <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate">
          <label for="email" data-error="wrong">Email</label></div>
		  <div class="input-field col s6">
		  <i class="material-icons prefix">vpn_key</i>
          <input id="pass" type="password" class="validate">
          <label id="lab">Password</label>
        </div><div id="signup" class="section scrollspy">
		<div class="input-field col s6">
          <input id="cpass" type="password" class="validate">
          <label id="lab">confirm password</label>
        </div>
	
		<div class="input-field col s12">
		   <i class="material-icons prefix">redeem</i>
	  <input type="date" class="datepicker" id="dob">
		</div>
       <div class="input-field col s12">
	   <i class="material-icons prefix">perm_identity</i>
      <input name="group1" type="radio" id="test1" value="male" />
      <label for="test1">Male</label>
      <input name="group1" type="radio" id="test2" value="female"/>
      <label for="test2">Female</label>   
      </div>
         <div class="input-field col s12"><br>
	   <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>  </div>
      </div>
		
		</form>
	  </div></div>
  </div>


  <div class="parallax-container valign-wrapper" > 
  
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
	
  </div>

  <footer class="page-footer teal" >
    <div class="container" >
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Applicattion Bio</h5>
          <p class="grey-text text-lighten-4">ChatApp is a public chat application.First you have to create the account in the chatApp.You can chat with any people you want.You can show off yours self by updating your profile picture..</p>


        </div>
       
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      <a class="brown-text text-lighten-3 centered" href=""><center> &copy;Cluster&nbsp;&nbsp;&nbsp;All Rights Reserved </center></a>
      </div>
    </div>
  </footer>
<div id="abou" class="scrollspy"></div>

  <!--  Scripts-->
  <script src="jquery-2.1.4.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript" src="update/js/update.js"></script>
   <script type="text/javascript" src="update/js/login.js"></script>
  </body>
</html>
