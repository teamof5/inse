	                <?php
	                include 'db.php';
	                
	 
	                
	                
            $statement = "SELECT * FROM wbt WHERE wbt_id='".$cid."'";
	if ($result = $mysqli->query($statement)) {
    		//printf("Select returned %d rows.\n", $result->num_rows);
		$rows = $result->num_rows;
		if ($rows>0){
			$value = $result->fetch_row();
			$inHTML =  $value[1];
			$the_output = "";
			$the_rebirth = "";
			//$D_Email = $value[1];
			//$D_ID = $value[0];
			// echo $D_Name."aa".$D_Email;
			//$_SESSION["login_status"] = "true";
			//$_SESSION["name"] = $D_Name;
			//$_SESSION["email"] = $D_Email;
			//$_SESSION["UID"] = $D_ID;
			//header ('Location: ../home.php');
			// echo $inHTML;
			
			$yao = explode ('<div style="position: absolute;', $inHTML);
			$no_of_boxes =  count($yao);
			
			$the_output=$the_output.$yao[0];
			for ($i=1; $i<=($no_of_boxes-1); $i++){
			$the_output = $the_output.'<div id="'.$i.'" style="position: absolute;'.$yao[$i];
			
			// $the_rebirth = $the_rebirth.'$( "#'.$i.'" ).mouseleave(function() {$( "#'.$i.'" ).hide();});';
			
			
			//$the_rebirth = $the_rebirth.'$( "#'.$i.'" ).mousedown(function() {++mice;lol2("'.$i.'");});$( "#'.$i.'" ).mouseup(function() {--mice;});';

			}
			
			
			$yao2 = explode ('<div id="', $the_output);
			$no_of_boxes2 =  count($yao2);
			$the_output2 = $the_output2.$yao2[0];
			for ($i=1; $i<=($no_of_boxes2-1); $i++){
				$the_output2 = $the_output2.'<div id="'.$i.'" data="'.$yao2[$i];
				//$the_rebirth2 = $the_rebirth2.'$( "#'.$i.'" ).mouseleave(function() {$( "#1" ).hide();})';
				//$end_div_counter = $i;
				
				$the_rebirth = $the_rebirth.'$( "#'.$i.'" ).mousedown(function() {++mice;lol2("'.$i.'");});$( "#'.$i.'" ).mouseup(function() {--mice;});';

			}
			
			
			
		
			echo $the_rebirth;
		
			
			
			
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
	
	