<?php
$any_error = $_GET["res"];

switch ($any_error){

case "0":
	$message = "<span style='color: blue'><b><br/>Account has been created.\nPlease login with your credentials.<br/></b></span>";
	break;

case "6":
	$message = "<span style='color: red'><b><br/>Invalid Email and Password combination.<br/></b></span>";
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
			<title>INSE Group 4a Chart Maker - Home</title>
			<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
			<meta name="description" content="INSE CourseWork undertaken by Group 4 A. The product is a Chartmaker that helps users build WBT, PERT and GANTT Charts.">
			<link rel="image_src" href="http://www.kejayweb.com/inse/img/inseG4a.jpg" />
			<link rel="stylesheet" type="text/css" href="css_page/index_home.css"/>

        </head>
        <body>
            
        
                      <div id="banner">

            <div class="signholder"><a id="home" href="home.php">Home</a></div>
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
                <?php echo $message."<br/>"; ?>
                
            </div>
            
            
            
            <div style="width: 500px;">   
            
            <!--
              <form  action="signUp.php" method="post">
                   <input id="signUp_button" type="submit" value="Sign Up" name="signUp"> 
                </form>
         -->
            
              <form id="formLogin" action="php/login.php" method="post">
                  <input id="username" type="text" name="username" placeholder="Email" >
                  <input id="password" type="password" name="password" placeholder="Password" >
                  
                   <input id="login_button" type="submit" value="Login" name="login"> 
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