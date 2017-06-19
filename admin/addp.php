<?php

	
	include("connection.php");
	
$ptitle = $_POST['p_title'];
$pbyname = $_POST['p_by_name'];
$pbycompany = $_POST['p_by_company'];
$pdate = $_POST['p_date'];
$pcord = $_POST['p_cord'];
$pdesc = $_POST['p_desc'];

	
	
			
			$q = "INSERT INTO tbl_placements(p_title, p_by_name, p_by_company, p_date, p_desc, p_cordinator)
			VALUES('$ptitle', '$pbyname', '$pbycompany', '$pdate', '$pdesc', '$pcord')";
			
			if(mysql_query($q)){
				header("location: adminp.php?msg=inserted");
			} else {
				
				echo mysql_error();
				
			}
				
			
			
		


?>