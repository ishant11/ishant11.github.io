<?php

	
	include("connection.php");
	
$aname = $_POST['a_name'];
$adate = $_POST['a_date'];
$adesc = $_POST['a_desc'];
$acord = $_POST['a_cord'];

	
	
			
			$q = "INSERT INTO tbl_activity(activity_name, activity_date, activity_desc, activity_cordinator)
			VALUES('$aname', '$adate', '$adesc', '$acord')";
			
			if(mysql_query($q)){
				header("location: admina.php?msg=inserted");
			} else {
				
				echo mysql_error();
				
			}
				
			
			
		


?>