<?php
$any_error = $_GET["res"];

switch ($any_error){

case "1":
	$message="Please fill all details!<br/>";
	break;
case "2":
	$message = "The passwords do not match. Please try again.<br/>";
	break;
default:
	$message = "";
	break;
}


?>



<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>SignUp</title>
			<meta name="description" content="INSE CourseWork">
			<link rel="stylesheet" type="text/css" href="css_page/index_home.css"/>

        </head>
        <body>
        
              
                      <div id="banner">

            <div class="signholder"><a id="home" href="/inse/">Home</a></div>
            </div>
            
            
            <!--
            <div id="footer"></div>
            <div id="footer2"></div>
            -->
            
        <div style="width: 100%; background: #fff; float: left" align="center">
        		<div style="width: 980px">
        		       <div style="width: 500px">
                <h1 style="color: #555">Welcome to Chart-Maker.</h1>
                
                <h4>Your one stop to WBT, PERT, GANTT Chart</h4>
                Sign Up for FREE!<br/><br/><br/>
                <span style="color: red"><?php echo $message."<br/>"; ?></span>
                
            </div>
            
            
            
            <div style="width: 500px;">   
            
            <!--
              <form  action="signUp.php" method="post">
                   <input id="signUp_button" type="submit" value="Sign Up" name="signUp"> 
                </form>
         -->
            
             <form id="formSign" action="php/register.php" method="post">
             	  <input class="signup" type="text" name="name" placeholder="Your Name" ><br/>
                  <input class="signup"  type="text" name="email" placeholder="Email" ><br/>
                  <input class="signup"  type="password" name="password" placeholder="Password" ><br/>
                  <input class="signup"  type="password" name="re_password" placeholder="Retype password" ><br/>
                  
                   <input id="sign_button" type="submit" value="SignUp" name="sign"> <br/><br/>
                </form>
            
            </div>
            
            
     
            
            </div></div>
            
            <div id="text_intro2">
                <h2>Why wait?</h2>
                <h5>The easiest way to create - WBT - PERT - GANTT </h5>
                <h3>All on one platform!</h3><br/>
                <span style="color: #cecece">Project by INSE Team <b>4a</b></span>
                
            </div>
            
            <div style="width: 300px; float: right; padding: 20px; padding-top: 100px; padding-right: 0px">
            
            
                 <form  action="signUp.php" method="post">
                   <input id="signUp_button" type="submit" value="Sign Up" name="signUp"> 
                </form>
         
            
            </div>
            
            
            <!--
            <div id="footer3"></div>
            <div id="line1"></div>
            -->
        
        </body>
        <script>
        document.getElementById("username").focus();
        </script>
        </html>
        
        
        
        
     