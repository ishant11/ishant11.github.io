<?php

	
	include("connection.php");
	
$ename = $_POST['e_name'];
$edate = $_POST['e_date'];
$edesc = $_POST['e_desc'];
$ecord = $_POST['e_cord'];

	
	
			
			$q = "INSERT INTO tbl_event(event_name, event_date, event_desc, event_cordinator)
			VALUES('$ename', '$edate', '$edesc', '$ecord')";
			
			if(mysql_query($q)){
				header("location: admine.php?msg=inserted");
			} else {
				
				echo mysql_error();
				
			}
				
			
			
		


?>