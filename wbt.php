<?php
session_start();
include 'php/db.php';
$cid= $_GET["pid"];
$isNew = $_GET["type"];
$newName = $_GET["name"];
$UID = $_SESSION["UID"];
if ($_SESSION['login_status']==""){
	header ('Location: /inse/');
	}
	
if ($isNew=="new" && $newName!="" && $newName!=null){

$statement = "INSERT INTO wbt (wbt_code, user_ID, Title) VALUES (' ', '$UID', '".$newName."')";
			if ($mysqli->query($statement)) {
   				$cid=$mysqli->insert_id;
   				//echo "yay";
			} else {
			//echo "nay";
			}
			

} else {
//header ("home.php");
}
?>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>WBT</title>
			<meta name="description" content="INSE CourseWork">
			<link rel="stylesheet" type="text/css" href="css_page/charts.css"/>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/cupertino/jquery-ui.css"/>
		  </head>
		
		<body>
		
			
			
			
			
			<div id="banner">
            
            <div class="signholderLeft">Welcome, <b><?php echo $_SESSION["name"];?></b>
            <?php //echo $_SESSION["email"];?><a style="color: #cecece" href="php/logout.php">(Logout?)</a></div>
            
            
            
            
            <div class="signholder"><a  href="#create_GANTT.html" onClick="alert('Work in Progress');">GANTT</a></div>
            <div class="signholder"><a  href="#create_PERT.html" onClick="alert('Work in Progress');">PERT</a></div>
            
            <div class="signholder" style="color: #fff"><b>WBT</b></div>
            <div class="signholder"><a  href="home.php">HOME</a></div>
            
            </div>
            
            
              <div style="width: 100%; background: #fff; float: left" align="center">
        		<div style="width: 980px" align="left">
        		
        		
        		
        		
        		
        		     
    	
				
			
            
        
        <div style="float: left; width: 230px">
            <div id="pannel" align="center">
            <b>Tools</b><br/><br/>
      			 <div class="pull" id="pull" >
                
                	<input name="getInput" id="pull_textarea" onFocus="hiya();" />
                 
            	</div>
            	<br/>
             	 <div class="vertical" id="vertical">
             	 &#8595; 
             	 </div><br/>
              	<div class="horizontal" id="horizontal">
              	&#8594; 
              	</div>      <br/>
              	<div class="slant" id="lslant">
              	&#8629;  
              	</div>      <br/>
              	<div class="slant" id="rslant">
              	&#8627; 
              	</div>      <br/>
              	

            </div>      
            
        	<div id="trash" align="center">
            <img  src="http://iconizer.net/files/Ecqlipse_2/orig/TRASH%20-%20EMPTY.png" width="72px" height="70px" style="padding-top: 5px" alt="Trash">
            </div>
            
            
    	</div>
    	
    	
    	
             
       
            
            
       <!--      REFER C1 and C2
            
            <div id="top-title" align="center">
            	<div style="width: 700px; padding-bottom: 10px; border-bottom: 1px solid #f0f0f0; text-align: center">
            	<?php echo $title_the; ?>
            	</div>
            </div>
            
	    <div id="droppable">
	    
	    <?php
	    
	    include 'php/load-chart.php';
	    ?>
	    





	
	    
	    
	    </div>
        
-->

            
           
        <!-- START C1-->

	    
	    <?php
	    
	    include 'php/load-chart.php';
	    ?>
	    





	
	    
	    
	    </div>
	    
	          
          <!-- END C2 -->    
              
              

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</div></div>





<div id="footer" style="padding-top: 6px" align="right">






       <div style="width: 670px; float: right; padding-right: 20px">       
              
               <input id="button" type="submit" value="Save" name="trim" onClick="saveme();"> 
               
               <input id="button" type="submit" onClick="copy();" value="Export as PNG">
               
               </div>  
                 
            <!--- HERE -->
                     
         
            
            

<!--      
<div id="the_canvas_element_id" style="border: 1px solid red">
HI
<button class="btn example1" onClick="copy();">Test on this page</button>
<button class="btn example1" onClick="copyhtml();">CASD on this page</button>
</div>

-->















</div>





<div id="thePNG" style="margin: 0px; position: absolute; width: 100%; height: 110%; background: #333; display: none; padding-top: 26px; color: #fff; background: url('http://static.tumblr.com/b4830dc7cbeb638183bba50462dd5fdb/nsjqmr0/cFCmouryk/tumblr_static_status_bar_background-29.png')" align="center">
<span onClick="hid();" style="cursor: pointer">Close &#935;</span><br/><br/>
<span id="herePNG"></span>

</div>

<div id="saving" style="display:none; margin: 0px; position: absolute; width: 100%; height: 110%; background: #333; padding-top: 26px; color: #fff; background: url('http://static.tumblr.com/b4830dc7cbeb638183bba50462dd5fdb/nsjqmr0/cFCmouryk/tumblr_static_status_bar_background-29.png')" align="center">
<span id="saving-saving" style="display:none">
<br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/>
<img src="http://epaper.monitor.co.ug/wp-content/plugins/nice-login-register-widget/images/loading_transparent.gif" />
<br/><br/><b>saving....</b></span>


<span id="saving-saved" style="display:none">
<br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<b>SAVED!</b> <span id="saved-ok" style="color: green; cursor: pointer; padding: 6px; background: #f9f9f9" onclick="saveDone();"> DONE &#10003;</span>
</span>


</div>






	</body>
	
	
	
	
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

 <script src="drdro.js"></script>
 <script src="js/html2canvas.js"></script>
   
 
<script>

/*added by K gurung to make saved files editable */

var mice = 0; // Used for checking mouse status.


function copy(){



}



// PNG renderer
function copy(){
    html2canvas(document.getElementById("droppable"), {
    onrendered: function(canvas) {

    document.getElementById("thePNG").appendChild(canvas);
    
    document.getElementById("thePNG").style.display = "block";
    
    
    }
    });
}
    
function hid(){
	document.getElementById("thePNG").style.display = "none";

}



// Checking contents under droppable div - this is saved as file in server    
function copyhtml(){
    var a= document.getElementById("droppable").innerHTML;
    alert (a);
 }
    
    

function lol(x){
	var y = "#"+x;
	$(y).mouseleave(function() {
		$(y).hide();
		//$( "#trash" ).unbind( "mouseleave", trashme );
	});
}


function lol2(x){
	var y = "#"+x;
	$(y).mousemove(function(){
		if (mice>0){
		//$( "#trash" ).bind( "mouseover", trashme );
			lol(x);
			
			
		}
	});
}



/*Propreitory
$( "#2" ).mousedown(function() {++mice;lol2("2");});
$( "#2" ).mouseup(function() {--mice;});
*/

$( "#droppable" ).mousedown(function() {trashme("active");});
$( "#droppable" ).mouseup(function() {trashme("no");});
 
 function trashme(a){
	//$("#trash").mouseover(function() {
	if (a=="active"){
		document.getElementById("trash").style.background="yellow";
		}
	if (a=="no") {
	//});
	
	//$("#trash").mouseleave(function() {
		document.getElementById("trash").style.background="#fff799";
		}
	//});
	}
	

<?php
echo $the_rebirth;
?>
	    
	    
function saveme(){
	document.getElementById("saving").style.display = "block";
	document.getElementById("saving-saving").style.display = "block";
	var a= document.getElementById("droppable").innerHTML;
	$.ajax({
		type: "POST",
		cache: false,
		url: "php/save-chart.php",
		data: { chartHtml: a, pid: <?php echo $cid; ?>}
	})
	.done(function( msg ) {
		//alert( "Data Saved: " + msg );
		document.getElementById("saving-saving").style.display = "none";
		document.getElementById("saving-saved").style.display = "block";
	});
}

	
	
function hiya(){
	$( "input" ).keyup(function() {
		$(this).attr('value', $(this).val());
	});
}

	
	function saveDone(){
	document.getElementById("saving").style.display = "none";
	document.getElementById("saving-saving").style.display = "none";
	document.getElementById("saving-saved").style.display = "none";
	
	}
	
	
	
	//function newTask(){
	
	
	//var dv = document.createElement("<div>");
//dv.innerHTML = "<a href="">jjnj </a> ";
//document.getElementById('test').appendChild(dv)


	//var inside = "<div class='pull' id='pulla'><input name='getInput' id='pull_textareaa' onFocus='hiya();' /><div>";
            	
            	//document.getElementById("pannel").appendChild(dv);
	//	$("#pannel").append(inside);
	
	//}
	
	
</script>


</html>

