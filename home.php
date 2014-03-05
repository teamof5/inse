<?php
session_start();
include 'php/db.php';
if ($_SESSION['login_status']==""){
	header ('Location: /inse/');
	}
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Home</title>
			<meta name="description" content="INSE CourseWork">
			<link rel="stylesheet" type="text/css" href="css_page/index_home.css"/>

        </head>
        <body>
            
            <div id="banner">
            
            <div class="signholderLeft">Welcome, <b><?php echo $_SESSION["name"];?></b>
            <?php //echo $_SESSION["email"];?><a style="color: #cecece" href="php/logout.php">(Logout?)</a></div>
            <div class="signholder"><a id="createNew" href="#"  onClick="copy();"> + Create a New Chart</a></div>
            <div class="signholder"><a id="home" href="home.php">Home</a></div>
            </div>
        
        <div style="width: 100%; background: #fff; float: left" align="center">
        		<div style="width: 980px">
            <div id="title_ch"><h1>Your Charts</h1><br/><br/>
            
            
            
            
            <?php
             $statement = "SELECT * FROM wbt WHERE user_ID='".$_SESSION["UID"]."'";
            //$statement = "SELECT * FROM wbt";
			if ($result = $mysqli->query($statement)) {
    		//printf("Select returned %d rows.\n", $result->num_rows);
			$rows = $result->num_rows;
				if ($rows>0){
					for ($i=0; $i<=($rows-1); $i++){
						$value = $result->fetch_row();
						//echo "<b>".$i."</b>";
						echo "<a href='wbt.php?pid=".$value[0]."'><div style='color: #333; padding: 8px; background: #fff799; cursor: pointer; float: left; border: 1px solid #f0f0f0'>Title: <b>".$value[3]."</b><br/>";
						echo "Type: <b>WBT</b></div></a><br/><br/><br/><br/>";
						//echo "3 ".$value[2]."<br/>";
					
					}
					
					}}
					$result->close();
			
			
			?>
			
            
            
            
            
            
            
            </div>
           <!-- <div id="vert_line"></div> -->
           
           
           
           
            <div id="help">
                <h1>Help</h1>

                <p> - drag a box from the pannel into the indicated area</p>
                <p> -  fill each dragged box with the needed text</p>
                <p> - drag a connector from the pannel into the indicated area </p>
                <p> - resize the connector as you like</p>
                <p> - the white rectangle from each connector indicates the direction in which the item can be resized</p>
                <p> - when your chart is finished, press the -Save- button</p>
            </div>
         </div></div>
            
            
            <div id="footer"></div>
           <!-- <div id="footer2"></div>-->
            <!--<div id="footer3"></div>-->
            <!--<div id="line1"></div>-->
            
        
        
        
        
        
<div id="newCh" style="display: none; margin: 0px; position: absolute; width: 100%; height: 110%; background: #333; padding-top: 26px; color: #fff; background: url('http://static.tumblr.com/b4830dc7cbeb638183bba50462dd5fdb/nsjqmr0/cFCmouryk/tumblr_static_status_bar_background-29.png')" align="center">
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<span id="hereCh" style="padding: 20px; background: #333">Name your chart: <input type="text" id="newName" name="newName" placeholder="New chart Name"/>
<button onClick="create();" id="newGo" style="padding: 2px; border: 1px solid #cecece; background: #f9f9f9; font-weight: bold; cursor: pointer">Create</button>
<span onClick="hid();" style="cursor: pointer; color: red; font-size: 10px; padding-left: 30px"><b>Cancel &#935;</b></span>

</span><br/>


</div>



        </body>
        
        
        
        <script>
        
        function copy(){
   
    
    document.getElementById("newCh").style.display = "block";
    document.getElementById("newName").focus();

}
    
function hid(){
	document.getElementById("newCh").style.display = "none";
	

}

function create(){

var chartname = document.getElementById("newName").value;
if (chartname!="" && chartname!=null){
window.location = "wbt.php?type=new&name="+chartname;
} else {
alert ("Enter a name!");
}
}

</script>
        
        </html>