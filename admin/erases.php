<?php

	include("connection.php");
	
	 $seminar_id =$_GET['id'];
	
	 $q="DELETE FROM tbl_seminar where seminar_id=".$seminar_id ;
	
	if(mysql_query($q)){
		
		header("location: admins.php?msg=deleted");
	} else {
		echo mysql_error();
	}

?>