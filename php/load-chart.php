	          
	          
	                      <div id="top-title" align="center">
            	<div style="width: 700px; padding-bottom: 10px; border-bottom: 1px solid #f0f0f0; text-align: center">

	          <?php
	                include 'db.php';
	                
	                
	              
	                
	                
            $statement = "SELECT * FROM wbt WHERE wbt_id='".$cid."' AND user_id='".$UID."'";
	if ($result = $mysqli->query($statement)) {
    		//printf("Select returned %d rows.\n", $result->num_rows);
		$rows = $result->num_rows;
		if ($rows>0){
			$value = $result->fetch_row();
			$inHTML =  $value[1];
			$the_output = "";
			$the_rebirth = "";
			$title_the = $value[3];
			//$D_Email = $value[1];
			//$D_ID = $value[0];
			// echo $D_Name."aa".$D_Email;
			//$_SESSION["login_status"] = "true";
			//$_SESSION["name"] = $D_Name;
			//$_SESSION["email"] = $D_Email;
			//$_SESSION["UID"] = $D_ID;
			//header ('Location: ../home.php');
			// echo $inHTML;
			
			
			    echo $title_the.'
            	</div>
            </div>
            
	    <div id="droppable">';
	    
	    
	    
	    
			$yao = explode ('<div style="position: absolute;', $inHTML);
			$no_of_boxes =  count($yao);
			//$end_div_counter = 0;
			
			// $the_output = $the_output.$yao[0];
			
			// Giving div ids to non id'd divs
			for ($i=1; $i<=($no_of_boxes-1); $i++){
			$the_output = $the_output.'<div id="'.$i.'" style="position: absolute;'.$yao[$i];
			
			$final_count = $i;
			
			
			$the_rebirth = $the_rebirth.'$( "#'.$i.'" ).mousedown(function() {++mice;lol2("'.$i.'");});$( "#'.$i.'" ).mouseup(function() {--mice;});';

			//$the_rebirth = $the_rebirth.'$( "#'.$i.'" ).mouseleave(function() {$( "#1" ).hide();})';
			//$end_div_counter = $i;
			}
			
			
			
			$yao99 = explode ('<div id="', $yao[0]);
			$no_of_boxes99 =  count($yao99);
			//$end_div_counter = 0;
			$extra_div_handler = $final_count+1;
			for ($i=1; $i<=($no_of_boxes99-1); $i++){
			$the_output = $the_output.'<div id="'.$extra_div_handler.'-'.$yao99[$i];
			
			
			$pos = explode('"', $yao99[$i]);
			
			//echo $pos[0];
			//$negpos = 0 - $pos[0];
			//echo $negpos;
			//$joinme = "-".substr($yao99[$i],$pos[0],$negpos);
			//echo $joinme;
			
			
			$the_rebirth = $the_rebirth.'$( "#'.$extra_div_handler.'-'.$pos[0].'" ).mousedown(function() {++mice;lol2("'.$extra_div_handler.'-'.$pos[0].'" );});$( "#'.$extra_div_handler.'-'.$pos[0].'" ).mouseup(function() {--mice;});';
		    $extra_div_handler = $extra_div_handler+1;
			
			//$final_count = $i;
			//$the_rebirth = $the_rebirth.'$( "#'.$i.'" ).mouseleave(function() {$( "#1" ).hide();})';
			//$end_div_counter = $i;
			}
			
			
			
			
	
			
			
			
			
			
			
			
			
			
			if ($jquery_request=="true"){
			echo $the_rebirth;
			}
			else {
			echo $the_output;
			}
			
			
			
		} else {
			//echo "Invalid Username or Password";
			echo "Error Retreiving Chart";
		}
	
    	/* free result set */
    	$result->close();
	}else {
		//echo "Invalid Username or Password";
		echo "Error Retreiving Chart";
	}
	?>
	
	