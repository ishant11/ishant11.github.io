
<?php
session_start();
if(!empty($_GET['msg']))
{
	if($_GET['msg']=='logout'){
		
		echo '<script type="text/javascript">alert("Successful Logout");</script>';
	}
	
}
if(isset($_POST['login']))
{include("connection.php");

$uname=$_POST['uname'];
$pname=$_POST['pname'];

$sel="SELECT * FROM tbl_authenticates where u_name='$uname'";
$select_q=mysql_query($sel);
if($sel_uname=mysql_fetch_assoc($select_q))
{
	if($sel_uname['a_password']==$pname)
	{
		session_start();
		$_SESSION['is_logged_in']=true;
		header("location:admin/index.php");
	}
	elseif($sel_uname['u_password']==$pname)
		{	 
		session_start();
		$_SESSION['is_logged_in']=true;
		header("location:tindex.php");
		}
else
	    {
		echo "<center>incorrect password</center>";
	    }
       
}
else{
	echo "<center>Please Enter Your Password</center>";
}

}




?>


<!DOCTYPE html>

<html>
<head><link href="login_content/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="login_content/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="login_content/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="login_content/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="login_content/css/style.css" rel="stylesheet">
    <link href="login_content/css/style-responsive.css" rel="stylesheet" /></head>
  <body class="login-img3-body">

    <div class="container">

<form  class="login-form" method="post">

    <div class="login-wrap">
 <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
			    <input type="text"  name="uname"class="form-control" placeholder="Username" autofocus>
            </div>
  <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
               <input type="password"name="pname" class="form-control" placeholder="Password">
            </div>
 
<font ><input class="btn btn-primary btn-lg btn-block" type="submit" name="login" value="&nbsp;LOGIN"></font><br><br>

 </div>
</form>

    </div>
</body>
</html>

