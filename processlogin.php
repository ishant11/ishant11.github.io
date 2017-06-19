<?php
if(isset($_POST['login']))
{include("connection.php");

$uname=$_POST['uname'];
$pname=$_POST['pname'];

$sel="SELECT * FROM tbl_authenticates where username='$uname'";
$select_q=mysql_query($sel);
if($sel_uname=mysql_fetch_assoc($select_q)){
	if($sel_uname['password']==$pname){
		echo "yes";
		header("location: home.php");
		
	}else{
		
		echo "no";
	}
	
}else{
	
}

}


?>