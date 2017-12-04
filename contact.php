<?php 
    if ($_POST["email"]<>'') { 
        $ToEmail = 'info@optbb.in';
        $EmailSubject = 'contact from optbb.in'; 
        $mailheader = "From: ".$_POST["email"]."\r\n"; 
        $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $MESSAGE_BODY = "Name: ".$_POST["name"]."<br>"; 
        $MESSAGE_BODY .= "\nEmail: ".$_POST["email"]."<br>";
        $MESSAGE_BODY .= "\nNumber: ".$_POST["number"]."<br>";
        $MESSAGE_BODY .= "\nCompany Name: ".$_POST["company_name"]."<br>";
        $MESSAGE_BODY .= "\nSubject: ".$_POST["subject"]."<br>";
        $MESSAGE_BODY .= "\nMessage: ".nl2br($_POST["message"]).""; 
        
        mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
    
        success;
    } 
    
    else{
         failed;
    } 
            
?> 
<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
  <link rel="stylesheet" type="text/css" href="css/ash.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/global/global.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  
  
   
  
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<section class="sec1">
<div class="row">
  <nav class="navbar navbar-inverse navbar example6">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar6">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" id="headingnav"><img src="images/l3.png" alt="logo">
        </a>
      </div>
      <div id="navbar6" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right" id ="mainnavmenu">
          <li class="wow bounceInUp" data-wow-delay="0.1s"><a href="index.html" >Home</a></li>
          
          <li class="wow bounceInUp" data-wow-delay="0.3s"><a href="corporate.html">Corporate</a></li>
          <li class="wow bounceInUp" data-wow-delay="0.4s"><a href="security.html">Security</a></li>
          <li class="wow bounceInUp" data-wow-delay="0.5s"><a href="smart.html">Smart Home</a></li>
          <li class="wow bounceInUp" data-wow-delay="0.6s"><a href="township.html">Township</a></li>
          <li class="wow bounceInUp" data-wow-delay="0.7s"><a href="coming soon.html">Coming Soon</a></li>
          <li class="wow bounceInUp" data-wow-delay="0.8s"><a href="contact.php">Contact Us</a></li>
         
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
    </div> 
   </section>
   <section  class="seccont">
          <div class="row">
              <div class="col-md-12 cont" style="padding: 0%">
                <img src="images/Contact.jpg" style="width: 100%">
              </div>
          </div>
   </section>
    <section class="sec3"  id="top">
  		<div class="row">
	  		<div class="col-md-12">
	  			<div class="wow bounceInUp"><h1>Contact Us</h1></div>
	  			
	  		</div>
  		</div>
  </section>
  
   <section class="sec11">
        <div class="row">
          <div col-md-12>
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <p class="lead">Optical Broadband</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <div class="gmap">
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59538.664573388975!2d79.03757822028652!3d21.145765431583133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4bf798f04ae8d%3A0xd7c74c0402bdee4a!2sOptical+Broadband!5e0!3m2!1sen!2sin!4v1509016484786" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            
                        </div>
                    </div>

                     <div class="col-md-6">
                                <address>
                                    <h3>Optical Broadband PVT. LTD.</h3>
                                    <p>57, Ingole Bhavan <br>
                                     Chhatrapati Square  ,<br>
                                     Wardha Road Nagpur</p>
                                     Email Address:opticalbroadband@gmail.com</p>
                                    <h3>Contact Number:-</h3>
                                    <h4>Ravindra:- 9850965527</h4>
                                    <h4>Shekhar:-9766501114</h4>
                                    <h4>Sandip:-7057060420</h4>
                                    
                                </address>

                             
                </div>
            </div>
        </div>
        </div>
        </div>
        
    </section>  <!--/gmap_area -->
    
    <section class="sec12">
        <div class="row">
           <div class="col-md-12">
            <div class="center">        
                <h2>Drop Your Message</h2>
                
            </div> 
                 <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" action="contact.php" method="post" >
                    <div class="col-md-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company_name" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group" >
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form>  
               </div>
                 </div>
                    </section>

   
  <!--/section4  Start-->
 
       <section class="sec5-1">
  		<div class="row">
	  		<div class="col-md-12">
	  
	  				<div class="wow bounceInUp"><h2>Connect with our High Speed</h2></div>

	  		</div>
  		</div>
  </section>
   
  
     
 
  <section class="sec8">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="col-md-4 col-sm-4">
						<h4><span class="fa fa-link"></span>Links</h4>
						<div class="col-md-6 col-sm-6">
							<header>
								<nav>
									<ul>
										<li><a href="home.html" style="color:white">Home</a></li>
										<hr>
										<li><a href="corporate.html" style="color:white">Corporate</a></li>
										<hr>
										<li><a href="smart.html" style="color:white">Smart home</a></li>
										<hr>
										<li><a href="security.html" style="color:white">Security</a></li>
										<hr>
									</ul>
								</nav>
							</header>
						</div>
						<div class="col-md-6 col-sm-6">
							<header>
								<nav>
									<ul>
									    <li><a href="township.html" style="color:white">Township</a></li>
										<hr>
										<li><a href="coming soon.html" style="color:white">Coming Soon</a></li>
										<hr>
										<li><a href="contact.php" style="color:white">Contact Us</a></li>
										<hr>
									</ul>
								</nav>
							</header>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<h4><span class="fa fa-thumbs-o-up"></span>Connect With Us</h4>
						<p>We know you have at least one social profile.. We would love to hear from you!</p>
						<div class="col-md-12">
							<header>
								<nav>
									<ul>
										<li><span class="fa fa-pinterest-square"></span></li>
										<li><span class="fa fa-twitter-square"></span></li>
										<li><span class="fa fa-facebook-square"></span></li>
										<li><span class="fa fa-google-plus-square"></span></li>
										<li><span class="fa fa-linkedin-square"></span></li>
									</ul>
								</nav>
							</header>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<h4><span class="fa fa-envelope"></span>Address</h4>
						<p>57, Ingole Bhavan
                                     Chhatrapati Square  ,
                                     Wardha Road Nagpur</p>
					</div>	
				</div>
			</div>
		</section>

  
  
  
       
</body>
   <!--vendor start-->
 <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
 <!--vendor End-->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="css/function.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/parallax.min.js"></script>
<script type="text/javascript" src="js/jquery.parallax.min.js"></script>
<script src="js/wow.min.js"></script>
              
			  
			  
			  <script>
			  new WOW().init();
        </script>

<script type="text/javascript">
	$(document).ready(function()
	{
		$('#slider').cycle('growX');
	});
</script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$('#slider1').cycle('scrollRight');
	});
</script>
</html>