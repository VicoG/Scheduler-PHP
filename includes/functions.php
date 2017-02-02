<?php

//ldap connect to Lab server to get user information through their oun
function GetOUNData($oun){
	$server="ldaps.llnl.gov";
	$port="389";
	$base_dn = "ou=People,dc=llnl,dc=gov";							
	$attribsToLoad= array("uid", "telephoneNumber", "roomNumber", "sn", "firstname", "employeeNumber", "mail", "businessCategory", "postOfficeBox");
			
	$output;
	$arrayInt = 0; 	
	
	$firstname = "";
	$sn = "";
	$phone = "";
	$employeeNumber = "";
	$mail = "";
	
	
	$conn = ldap_connect($server, $port);
	ldap_set_option($conn, LDAP_OPT_PROTOCOL_VERSION, 3);
	
	if($conn){ 
		echo "in connect";
		if(ldap_bind($conn)){ //anonymous bind    
			echo "in bind";   											   			
			$searchResult = @ldap_search($conn, $base_dn, "uid=$oun", $attribsToLoad);					
			if($searchResult){		
				echo "in results";
				echo $searchResult;											
				$entry = @ldap_first_entry($conn, $searchResult);																
				$attribs = @ldap_get_attributes($conn, $entry);
						echo "Attributes";		
						echo $attribs;
						echo $entry;															
				for ($i=0; $i < $attribs["count"]; $i++){										
					$values = ldap_get_values($conn, $entry, "$attribs[$i]");			
					for ($j=0; $j < $values["count"]; $j++){						
						if ($attribs[$i] == "uid"){
							$uid = $values[$j];
						}
						if ($attribs[$i] == "telephoneNumber"){
							$phone = substr($values[$j], -6);
							$phone = str_replace(" ", "-", $phone);
						}						
						if ($attribs[$i] == "roomNumber"){																									
							$locArray[$arrayInt] = $values[$j];												
							$arrayInt++;																		 
						}
						if ($attribs[$i] == "sn"){
							$sn = $values[$j];
						}														
						if ($attribs[$i] == "firstname"){
							$firstname = $values[$j];
						}							
						if ($attribs[$i] == "employeeNumber"){
							$employeeNumber = $values[$j];
						}
						if ($attribs[$i] == "businessCategory"){
							$businessCategory = $values[$j];
						}	
						if ($attribs[$i] == "mail"){
							$mail = $values[$j];
						}	
						if ($attribs[$i] == "postOfficeBox"){
							$postOfficeBox = $values[$j];
						}																						
					}																												
				}
								
				echo $output['name'] = $firstname . " " . $sn;
				
				if(isset($locArray[0]) && isset($locArray[1])){
					$output['building'] = $locArray[0];
					$output['room'] = $locArray[1];
				}
				else{
					$output['building'] = "N\A";
					$output['room'] = "N\A";
				}
				
				$output['phone'] = $phone;
				$output['employeeNumber'] = $employeeNumber;						
				$output['mail'] = $mail;						
				$output['businessCategory'] = $businessCategory;						
				$output['postOfficeBox'] = $postOfficeBox;																		
				
			}
		}
	}
			
	ldap_close($conn); 		
	return $output;
	
}
?>



