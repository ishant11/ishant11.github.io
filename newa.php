<!DOCTYPE html>
<?php
session_start(); 
if ( $_SESSION['is_logged_in']==true )
{?>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COLLEGE MAGAZINE</title> 

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- for fontawesome icon css file -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- for content animate css file -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- google fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
     <!-- slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">     
    <!-- <link href="css/theme-red.css" rel="stylesheet"> -->  
      <link href="css/theme.css" rel="stylesheet">	 
    <!-- main site css file -->    
    <link href="style.css" rel="stylesheet">
 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
  <!-- =========================
    //////////////This Theme Design and Developed //////////////////////
    //////////// by www.wpfreeware.com======================-->
   
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  
  <div class="container">
    <!-- start header area -->
    <header id="header">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <!-- start header top -->
          <div class="header_top">
            <div class="header_top_left">
              <ul class="top_nav">
                <li><a href="tindex.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
               
              </ul>
            </div>
            <div class="header_top_right">
             
            </div>
          </div><!-- End header top -->
          <!-- start header bottom -->
          <div class="header_bottom">
            <div class="header_bottom_left">
            <!-- for img logo -->
			
            <!-- <a class="logo" href="tindex.php">
              <img src="img/logo.jpg" alt="logo">
             </a>-->
             <!-- for text logo -->
              <a class="logo" href="tindex.php">
               <strong>GURU NANAK INSTITUTIONS</strong> <span>College Magazine</span>
             </a> 
			 
            </div>
                      </div><!-- End header bottom -->
        </div>
      </div>
    </header><!-- End header area -->
     <!-- Static navbar -->
      <div id="navarea">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>             
            </div>
			
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav custom_nav">
                <li class=""><a href="tindex.php">Home</a></li>          
              <li class=""><a href="newe.php">EVENTS</a></li>				
                <li class=""><a href="newa.php">ACTIVITIES</a></li>				
                <li class=""><a href="news.php">SEMINARS</a></li>				
                <li class=""><a href="newg.php">GUEST LECTURES</a></li>				
                <li class=""><a href="newp.php">PLACEMENT EVENTS</a></li>				
                <li class=""><a href="gallery.php">GALLERY</a></li>			
              
                <li class=""><a href=""></a></li>	
                <li class=""><a href=""></a></li>	
                <li class=""><a href=""></a></li>	
                <li class=""><a href=""></a></li>	
                <li class=""><a href=""></a></li>	
                <li class=""><a href=""></a></li>	
                <li class=""><a href=""></a></li>	
                <li class=""><a href="logout.php"><b><font color="red">LOGOUT</font><b></a></li>				
                 
                         
            </div><!--/.nav-collapse -->
			
          </div><!--/.container-fluid -->
        </nav>
      </div>
      <!-- start site main content -->
  <table width="1170" height="70" border="8" cellspacing="6" cellpadding="7"  style="border:solid 10px orange;background-color:orange; border-radius:20px;C"  >
			  <tr>
<td><h5><b>activity_id</td>
<td><b>activity_name</td>
<td><B>activity_date</td>
<td><B>activity_desc</td>
<td><B>activity_cordinator</td>
</tr>
			  <?php
             include("connection.php");
$q="SELECT * FROM tbl_activity";
$r=mysql_query($q);    
	
while($row=mysql_fetch_assoc($r))
{
	?>	
<tr>
<td style="border:solid 10px green;background-color:white; border-radius:5px;"><h3><?php echo $row['activity_id'];?></td>
<td style="border:solid 8px green;background-color:white; border-radius:5px;"><?php echo $row['activity_name'];?></td>
<td style="border:solid 8px green;background-color:white; border-radius:5px;"><?php echo $row['activity_date'];?></td>
<td style="border:solid 8px green;background-color:white; border-radius:5px;"><?php echo $row['activity_desc'];?></td>
<td style="border:solid 8px green;background-color:white; border-radius:5px;"><?php echo $row['activity_cordinator'];?></td>
</tr><?php }
?>
</table>
	  
        <!-- start main content top -->
        <div class="content_top">
         
             
          <!-- start main content bottom -->
          <div class="content_bottom">
            <div class="col-lg-8 col-md-8">
            <!-- start content bottom left -->
              <div class="content_bottom_left">
             </div><!--End content_bottom_left-->                 
            </div>
           </section><!-- End site main content -->
         </div> <!-- /.container -->
       <footer id="footer">
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="single_footer_top wow fadeInLeft">
                <h2>Flicker Images</h2>
                <ul class="flicker_nav">
                 <li>
                      <a href="sgallery.php"><img src="img/devhill/11.jpg" alt="img"></a>
                  </li>                 
                  <li>
                      <a href="sgallery.php"><img src="img/devhill/12.jpg" alt="img"></a>
                  </li>
                   <li>
                      <a href="sgallery.php"><img src="img/devhill/13.jpg" alt="img"></a>
                  </li>                 
                  <li>
                      <a href="sgallery.php"><img src="img/devhill/14.jpg" alt="img"></a>
                  </li>
                   <li>
                      <a href="sgallery.php"><img src="img/devhill/15.jpg" alt="img"></a>
                  </li>                 
                  <li>
                     <a href="sgallery.php"><img src="img/devhill/16.jpg" alt="img"></a>
                  </li>
                   <li>
                      <a href="sgallery.php"><img src="img/devhill/17.jpg" alt="img"></a>
                  </li>                 
                  <li>
                     <a href="sgallery.php"><img src="img/devhill/18.jpg" alt="img"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="single_footer_top wow fadeInDown">
                
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="single_footer_top wow fadeInRight">
                <a href="about.php"><h2>About Us</h2></a>
                <p>GURU NANK INSTITUTION OF TECHNOLOGY MULLANA (AMBALA)</p>
				<a href="contact.php"><h2>Contact Us</h2></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="container">
         
        </div>
      </div>
    </footer>

  <!-- jQuery google CDN Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
  <!-- For content animatin  -->
  <script src="js/wow.min.js"></script>
  <!-- bootstrap js file -->
  <script src="js/bootstrap.min.js"></script> 
  <!-- slick slider js file -->
  <script src="js/slick.min.js"></script> 
  
    <!-- custom js file include -->
  <script src="js/custom.js"></script> 

  <!-- =========================
        //////////////This Theme Design and Developed //////////////////////
        //////////// by www.wpfreeware.com======================-->
    
      
  </body>
</html>
<?php
}
else echo"please login first";
?>