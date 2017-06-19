<?php

	include("connection.php");
	
	 $p_id =$_GET['id'];
	
	 $q="DELETE FROM tbl_placements where p_id=".$p_id ;
	
	if(mysql_query($q)){
		
		header("location: adminp.php?msg=deleted");
	} else {
		echo mysql_error();
	}

?>