<?php

	include("connection.php");
	
	 $activity_id =$_GET['id'];
	
	 $q="DELETE FROM tbl_activity where activity_id=".$activity_id ;
	
	if(mysql_query($q)){
		
		header("location: admina.php?msg=deleted");
	} else {
		echo mysql_error();
	}

?>