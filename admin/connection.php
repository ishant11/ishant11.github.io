<?php
$hostname="127.0.0.1";
$uname = "root";
$pwd ="";
$db="db_magazine";
error_reporting(0);
$conn = mysql_connect($hostname, $uname, $pwd);
if($conn){
	
	if(mysql_select_db($db)){
		
	} else {
		echo "database Not Found";
	}
	
} else {
	echo "Host Not Found";
}






?>