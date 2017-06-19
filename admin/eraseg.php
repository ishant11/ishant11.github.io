<?php

	include("connection.php");
	
	 $lect_id =$_GET['id'];
	
	 $q="DELETE FROM tbl_guestlectures where lect_id=".$lect_id ;
	
	if(mysql_query($q)){
		
		header("location: adming.php?msg=deleted");
	} else {
		echo mysql_error();
	}

?>