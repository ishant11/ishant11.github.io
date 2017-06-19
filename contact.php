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
     <!-- contact box -->
					<div class="contact-box">
						<!-- Map box -->
						<div >
						 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d220536.819010426!2d77.03016699999999!3d30.268778000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fad41c9864da5%3A0xc3b76fc07c4a5bd7!2sGNI+Mullana!5e0!3m2!1sen!2sin!4v1417158034064" width="100%" height="450" frameborder="0" style="border:0"></iframe>
						</div>
						
						<br><br>
						
						<div class="row">
								<div class="col-md-7">

								<h3>Send us a message</h3>


																
																	


									<p align="justify">
											
												<form action="http://www.gni.edu.in/sendEmail" method="post"  id="contact-form" class="contact-work-form2">

													<div class="text-input">
														<div class="float-input" style="width: 100%; margin-bottom:30px;">
															<input name="name" id="name2" type="text" placeholder="Name" required>
															
														</div>

														
													</div>



<div class="text-input">
<div class="float-input" style="width: 100%; margin-bottom:30px;">
<input name="email" id="mail2" type="text" placeholder="Email"required >
</div></div>

													<div class="textarea-input">
														<textarea name="msg" id="comment2" placeholder="Message" required></textarea>
														
													</div>
													
													
													<div class="text-input">
<div class="float-input" style="width: 100%; margin-bottom:30px;">
<div class="g-recaptcha" data-sitekey="6LedvyITAAAAAAENNRayCdUlCXr9g3CMabvOvgeC"></div>
</div></div>

													<div class="msg2 message"></div>
													<input type="submit"  value="Send Message">

												</form>
									</p>
									<br>
								</div>

								<div class="col-md-5">
								<div class="">
									<h3 style='color:#000'>Contact Us</h3>
									<p style="font-size:20px;"><b>Guru Nanak Institutions </b></p>
                                                                       <p> Hema Majra Road, Mullana (Ambala)</p>
									<p><b>Mobile </b> : 099961-00140, 099962-00140, 098967-00040, 099964-00140,099965-00140 </p>
									<p><b>Phone  </b>: 	 01731-274540, 01731-275640 </p>									
									<p><b>Fax No. </b> : 01731-275640 </p>
									<p>	<b>Email </b>: info@gni.edu.in</p>
									<p>	<b>Web </b> : gni.edu.in</p>
									
								</div>



<div class="">
									<br>


	<h3>Bihar Office</h3>

<p> Mr. Manoj jaiswal </p>
<p><b> Mobile : </b> 9835635946, 9934207600<br><br> </p>

 <p>Mr. Uday  Prakash </p>
<p><b> Mobile : </b> 9308453556 <br><br> </p>

									
								</div>


  
							</div>
<br>
						</div>
						<hr>
						<div class="row" style="padding-bottom:30px;">
							<div class="col-md-4">
									<h3>Nepal Offices</h3>
										<!-- <div class="col-md-6">
											<p style="text-align:left"><b>Birat Nagar </b><br>
                                                Mr. Sunil Jaiswal <br> Achievers Consulting Services, Birat Nagar, Nepal<br>
												<b>Mobile </b> : 9804606448, 9802776448 </p>
                                      </div>  -->


									<div class="col-md-12">
									<p style="text-align:left">
										<b>Birgunj </b><br>
										Mr. Ranjit Kumar Pandit <br>
										 Adharshnagar Sarraf Market, 1st floor Birgunj, Nepal<br>
									<b>Mobile </b> : 9855032850 </p>

									</div>
									</div>
									
									<div class="col-md-8">
									<h3> Jharkhand  Offices</h3>
										<div class="col-md-4">									
					                        <p style="text-align:left">
											<b> Ramgarh Cantt</b><br>
                                            Mr. M.Alam <br>
											Gandhi Group, Ramgarh Cantt,  Jharkhand <br>
											<b> Mobile : </b>9801733767, 9709724149  </p>

</div>
									<div class="col-md-4">
										  <p style="text-align:left">
										  <b>Bokaro </b><br>
												Mr. Raj Kumar <br>
												Bokaro Steel City, Jharkhand <br>
										<b> Mobile : </b>8877339422 <br><br> </p>


									</div>

	                                                            <div class="col-md-4">
										  <p style="text-align:left">
										  <b>Mr Deepak </b><br>(for Entire Jharkhand)<br>
											

<b> Mobile : </b> 9608897899 </p>

									</div>
									

									
									
									
								</div>
						</div>
						
					
					</div>
				</div>
	  
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