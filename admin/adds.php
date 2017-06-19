<?php

	
	include("connection.php");
	
$sname = $_POST['s_name'];
$sdate = $_POST['s_date'];
$sdesc = $_POST['s_desc'];
$scord = $_POST['s_cord'];

	
	
			
			$q = "INSERT INTO tbl_seminar(seminar_name, seminar_date, seminar_desc, seminar_cordinator)
			VALUES('$sname', '$sdate', '$sdesc', '$scord')";
			
			if(mysql_query($q)){
				header("location: admins.php?msg=inserted");
			} else {
				
				echo mysql_error();
				
			}
				
			
			
		


?>