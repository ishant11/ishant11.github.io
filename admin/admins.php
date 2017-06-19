<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>ADMIN PANEL</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- php5 shim and Respond.js IE8 support of php5 -->
    <!--[if lt IE 9]>
      <script src="js/php5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">ADMIN<span class="lite">PANEL</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                          
            </div>

            <div class="top-nav notification-row">         <a href="../logout.php"> <h3><b> LOGOUT</h3>  </a>             
               
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
   
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>USERS</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="validate.php">VALIDATE</a></li>                          
                       
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>ACTIVITIES</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="admina.php">VIEW DATA</a></li>
                          <li><a class="" href="forma.php">ADD NEW </a></li>
                         
                      </ul>
                  </li>  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>EVENTS</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="admine.php">VIEW DATA</a></li>
                          <li><a class="" href="forme.php">ADD NEW</a></li>
                         
                      </ul>
                  </li>
                 
                   <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>GUEST LECTURES</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="adming.php">VIEW DATA</a></li>
                          <li><a class="" href="formg.php">ADD NEW</a></li>
                         
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>PLACEMENTS</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="adminp.php">VIEW DATA</a></li>
                          <li><a class="" href="formp.php">ADD NEW</a></li>
                         
                      </ul>
                  </li>
                    <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>SEMINAR</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="admins.php">VIEW DATA</a></li>
                          <li><a class="" href="forms.php">ADD NEW</a></li>
                         
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					

					<h3 class="page-header"><i class="fa fa fa-bars"></i>COLLEGE MAGAZINE</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-bars"></i>SEMINARS</li>
						<li><i class="fa fa-square-o"></i>VIEW</li>
					</ol>
				</div>
			</div>
              <!-- page start--><?php 
			  if(!empty($_GET['msg']))

			  { 

			  if($_GET['msg']=='deleted')
			  {
		        echo '<script type="text/javascript">alert("Successful Deleted");</script>';

				}

				if($_GET['msg']=='inserted')
			  {
		        echo '<script type="text/javascript">alert("Successful inserted");</script>';
}

}?>
            <table width="1170" height="70" border="8" cellspacing="6" cellpadding="7"  style="border:solid 10px orange;background-color:orange; border-radius:20px;C"  >
			<tr>
<td><h5><b>seminar_id</td>
<td><b>seminar_name</td>
<td><b>seminar_date</td>
<td><b>seminar_desc</td>
<td><b>seminar_cordinator</td>
<td><B>erase data</td>
</tr>
			<?php
	  include("connection.php");
$q="SELECT * FROM tbl_seminar";
$r=mysql_query($q);
while($row=mysql_fetch_assoc($r))
{
	?>
						

<tr>
<td  style="border:solid 10px green;background-color:white; border-radius:5px;"><h3><?php echo $row['seminar_id'];?></td>
<td  style="border:solid 8px green;background-color:white; border-radius:5px;"><?php echo $row['seminar_name'];?></td>
<td  style="border:solid 8px green; border-radius:5px;background-color:white;"><?php echo $row['seminar_date'];?></td>
<td  style="border:solid 8px green; border-radius:5px;background-color:white;"><?php echo $row['seminar_desc'];?></td>
<td  style="border:solid 8px green; border-radius:5px;background-color:white;"><?php echo $row['seminar_cordinator'];?></td>
<td style="border:solid 8px green;background-color:white; border-radius:5px;"> <a class="btn btn-danger btn-lg" href="erases.php?id=<?php echo $row['seminar_id'] ?>">ERASE</a></td>
</tr><?php }?>
</table>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
