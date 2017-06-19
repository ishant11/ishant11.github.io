<?php

	
	include("connection.php");
	
$gtitle = $_POST['g_title'];
$gbyname = $_POST['g_by_name'];
$gdesc = $_POST['g_desc'];
$gdate = $_POST['g_date'];
$gcord = $_POST['g_cord'];
$gtiming = $_POST['g_timing'];

	
	
			
			$q = "INSERT INTO tbl_guestlectures(lect_title, lect_by_name, lect_by_desc, lect_date, lect_timing, lect_cordinator)
			VALUES('$gtitle', '$gbyname', '$gdesc', '$gdate', '$gtiming', '$gcord')";
			
			if(mysql_query($q)){
				header("location: adming.php?msg=inserted");
			} else {
				
				echo mysql_error();
				
			}
				
			
			
		


?>