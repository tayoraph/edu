<?php
		$dbconnect = mysqli_connect ("localhost" , "root", "", "cccoousp");
		if ( mysqli_connect_errno()) {
			echo "wrong connection, try again using the correct details <br />"
			. mysqli_connect_error ();
			exit;
		}
			

			
			
			//$db_select = mysqli_select_db ("cccoousp", $dbconnect); 

?>