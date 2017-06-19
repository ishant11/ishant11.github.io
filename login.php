<!DOCTYPE html>
<?php
session_start();
if(!empty($_GET['msg']))
{
	if($_GET['msg']=='logout'){
		
		echo "Successful Logout";
	}
	
}
if(isset($_POST['login']))
{include("connection.php");

$uname=$_POST['uname'];
$pname=$_POST['pname'];

$sel="SELECT * FROM tbl_authenticates where u_name='$uname'";
$select_q=mysql_query($sel);
if($sel_uname=mysql_fetch_assoc($select_q)){
	if($sel_uname['u_password']==$pname){
		session_start();
		$_SESSION['is_logged_in']=true;
		header("location:tindex.php");
		
		
		
	}else{
		
		echo "<center>incorrect password</center>";
	}
	
}else{
	echo "<center>Please Enter Your Password</center>";
}

}


?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login page</title>

    <!-- Bootstrap CSS -->    
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css1/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css1/elegant-icons-style.css" rel="stylesheet" />
    <link href="css1/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css1/style.css" rel="stylesheet">
    <link href="css1/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="tindex.php">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
        </div>
      </form>

    </div>


  </body>
</html>
