<?php

	include("connection.php");
	
	 $event_id =$_GET['id'];
	
	 $q="DELETE FROM tbl_event where event_id=".$event_id ;
	
	if(mysql_query($q)){
		
		header("location: admine.php?msg=deleted");
	} else {
		echo mysql_error();
	}

?>