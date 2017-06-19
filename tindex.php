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
      <section id="mainContent">
        <!-- start main content top -->
        <div class="content_top">
          <div class="row">
             <!-- start content top latest slider -->
            <div class="col-lg-6 col-md-6 col-sm6">             
              <div class="latest_slider">
                 <!-- Set up your HTML -->
                <div class="slick_slider">
                  <div class="events_iteam">
                    <a href="newe.php"><img src="img/devhill/hiyv.jpg"width="500px" height="400px" alt="img"></a>
                    <h2><a class="slider_tittle" href="newe.php"><center>events from collage</center></a></h2>
                    </div>
                </div>
              </div>
            </div> <!-- End content top latest slider -->

            <div class="col-lg-6 col-md-6 col-sm6">
              <div class="content_top_right">
                <ul class="featured_nav wow fadeInDown">
                  <li>
                    <img src="img/devhill/kjj.jpg"width="200px"height="200px" alt="img">
                    <div class="title_caption">
                      <a href="newp.php">
                        Placement Events
                      </a>
                    </div>
                  </li>
                  <li>
                    <img src="img/devhill/2.jpg"width="200px"height="200px" alt="img">
                    <div class="title_caption">
                      <a href="newp.php">
					  placement events
     
                      </a>
                    </div>
                  </li>
                   <li>
                    <img src="img/devhill/3.jpg"width="200px"height="200px" alt="img">
                    <div class="title_caption">
                      <a href="newp.php">
					  placement events

                      </a>
                    </div>
                  </li>
                   <li>
                    <img src="img/devhill/4.jpg"width="200px"height="200px" alt="img">
                    <div class="title_caption">
                      <a href="newp.php">
                       placement events
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div><!-- End main content top -->
        <!-- start main content Middle -->
        <div class="content_middle">
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="content_middle_leftbar">
              <div class="single_category wow fadeInDown">
                <h2>                  
                  <span class="bold_line"><span></span></span>
                  <span class="solid_line"></span>
                  <a href="newg.php" class="title_text">GUEST LECTURES</a>
                </h2>
                <ul class="catg1_nav">
                  <li>
                    <div class="catgimg_container">
                      <a href="newg.php" class="catg1_img">
                        <img alt="img" src="img/devhill/18.jpg">
                      </a>
                    </div>
                    <h3 class="post_titile"><a href="newg.php">Guest lectures</a></h3>
                  </li>
                  <li>
                    <div class="catgimg_container">
                      <a href="newg.php" class="catg1_img">
                        <img alt="img" src="img/devhill/7.jpg"width="200px"height="300px" alt="img">
                      </a>
                    </div>
                    <h3 class="post_titile"><a href="newg.php">Guest lectures</a></h3>
                  </li>
                </ul>      
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="content_middle_middle">
              <div class="slick_slider2">
                <div class="single_featured_slide">
				 <h2>                  
                
                  <span class="solid_line"></span>
                  <a href="news.php" class="title_text">SEMINARS</h2></a>
                </h2> &nbsp;
								  &nbsp; &nbsp;
								  &nbsp;
                  <img src="img/devhill/zsz.jpg"width="50px"height="200px" alt="img"></a>
                  <h2><a href="">Seminars hall 1</a></h2>
                  
                </div>
                <div class="single_featured_slide"> &nbsp;
								  &nbsp;
				                  <h2><a href="">Seminars hall 2</a></h2>
								  &nbsp;
								  &nbsp;

                  <a href="news.php"><img src="img/devhill/lw.jpg"width="50px"height="200px" alt="img"></a>
                  
                </div>
                <div class="single_featured_slide"> &nbsp;
								  &nbsp;
				 <h2><a href="">Seminars hall 3</a></h2>
				 &nbsp;&nbsp;
                  <a href="news.php"><img src="img/devhill/w.jpg"width="50px"height="200px" alt="img"></a>
                 
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="content_middle_rightbar">
               <div class="single_category wow fadeInDown">
                  <h2>                  
                    <span class="bold_line"><span></span></span>
                    <span class="solid_line"></span>
                    <a href="newa.php" class="title_text">ACTIVITIES</a>
                  </h2>
                  <ul class="catg1_nav">
                    <li>
                      <div class="catgimg_container">
                        <a href="newa.php" class="catg1_img">
                          <img alt="img" src="img/devhill/13.jpg"width="300px"height="500px">
                        </a>
                      </div>
                      <h3 class="post_titile"><a href="newa.php">making collage paper</a></h3>
                    </li>
                     <li>
                      <div class="catgimg_container">
                        <a href="newa.php" class="catg1_img">
                          <img alt="img" src="img/devhill/ff.jpg"width="300px"height="500px">
                        </a>
                      </div>
                      <h3 class="post_titile"><a href="newa.php">earth day activity</a></h3>
                    </li>
                  </ul>      
                </div>
              </div>
            </div>
          </div><!-- End main content middle -->
          <!-- start main content bottom -->
         
            <!-- start content bottom left -->
             
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