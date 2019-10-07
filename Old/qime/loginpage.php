<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<head>
    <title>Log in | Quality Improvement in Mathematics Education</title>
<!-- Meta -->
	<meta property="og:image" content="assets/images/logo.jpg">
	<meta property="og:description" content="Department of Mathematics,IIT Bombay">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="vivek">    
    <link rel="shortcut icon" href="assets/images/favicon-iitb.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/plugins/pretty-photo/css/prettyPhoto.css"> 
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles2.css">
</head>
 

<body class="home-page">

<nav1>
  <ul>
    <li><a href="news.php">News & Events</a></li>
    <li><a href="aboutus.php">About Us</a></li>
    <li><a href="index.php">Home</a></li>
    <li class="active"><a href="loginpage.php">Log in</a></li>
    <li><a href="contactus.php">Contact Us</a></li>
  </ul>
</nav1>



    <div class="wrapper">
        
<!-- ******HEADER****** --> 
        <header class="header">
            <div class="header-main container">
                <h1 class="logo col-xs-12 col-sm-2 col-md-3">
		<div align="right">
                   <a class="header-label1 header1" href="http://www.rmsaindia.gov.in"><img src="assets/images/rmsa_logo.png" class="img-pad" width="145" height="130"></a>
		</div>
		</h1>
		<h1 class="logo col-xs-12 col-sm-8 col-md-6">
		<div align="center">
		   <a class="header-label1 header89"><img src="assets/images/HEADER.png" class="img-pad" width="400" height="130"></a>
		</div>
                </h1>
                <h1 class="logo col-xs-12 col-sm-2 col-md-3">
		<div align="right">
		   <a class="header-label1 header12" href="index.php"><img src="assets/images/qime_logo.jpg" class="img-pad" width="145" height="130"></a>
		</div>
                </h1>
            </div>
        </header>

<!--******Main Content*************-->

<div class="container">

<div class="row">
    <div id="error" class="col-md-4 col-md-offset-4">
        
        
    </div>
    <div id="content" class="col-md-4 col-md-offset-4">
        <ul id="tabs" class="nav nav-tabs nav-justified" data-tabs="tabs">
            <li class="active"><a href="#login" data-toggle="tab">Log In</a></li>
            <li class=""><a href="#signup" data-toggle="tab">Sign Up</a></li>
        </ul>
    </div>
    <div id="my-tab-content" class="tab-content col-md-4 col-md-offset-4">
        <div class="tab-pane active" id="login">
            <form class="form-signin" action="http://teachertraining.math.iitb.ac.in/accounts/login/" method="post"> <input type='hidden' name='csrfmiddlewaretoken' value='0ThImGHrN3q5unlMt81P4wcpaTi93niZ' />
                <input class="form-control" id="id_username" name="username" placeholder="Username" type="text" />
                <input class="form-control" id="id_password" name="password" placeholder="Password" type="password" />
                <button class="btn btn-lg btn-success btn-block" type="submit">Log In</button>
                <div id="forgot-password">
                    <a  href="http://teachertraining.math.iitb.ac.in/accounts/forgotpassword/">Forgot Password?</a>
                </div>
            </form>
        </div>
        <div class="tab-pane " id="signup">
            <form class="form-signin" action="http://teachertraining.math.iitb.ac.in/accounts/signup/" method="post"> <input type='hidden' name='csrfmiddlewaretoken' value='0ThImGHrN3q5unlMt81P4wcpaTi93niZ' />
                <input class="form-control" id="id_username" name="username" placeholder="Select a Username" type="text" />
                <input class="form-control" id="id_first_name" name="first_name" placeholder="First name" type="text" />
                <input class="form-control" id="id_last_name" name="last_name" placeholder="Last name" type="text" />
                <input class="form-control" id="id_email" name="email" placeholder="Email address" type="text" />
                <input class="form-control" id="id_password" name="password" placeholder="Choose a Password" type="password" />
                <button class="btn btn-lg btn-success btn-block" type="submit">Sign Up</button>
            </form>

        </div>
    </div>
</div>


</div>

</div>


<!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
		<!--<div class="row">
		<div class="footer-col col-md-4 col-sm-4 about">
                    <div class="footer-col-inner">
           <li class="nav-header"><img src="assets/images/iitbLogo.png" height="100" width="100"></li>
                    </div><!--//footer-col-inner
                </div><!--//foooter-col
                <div class="footer-col col-md-4 col-sm-8 newsletter">
                    <div class="footer-col-inner">
                                  <li class="nav-header"><img src="assets/images/iitbLogo.png" height="100" width="100"></li>
                    </div><!--//footer-col-inner
                </div><!--//foooter-col
                <div class="footer-col col-md-4 col-sm-4 about">
                    <div class="footer-col-inner">
                                   <li class="nav-header"><img src="assets/images/iitbLogo.png" height="100" width="100"></li>
                    </div><!--//footer-col-inner
                </div><!--//foooter-col
		</div>-->
                <div class="row">
                <div class="footer-col col-md-4 col-sm-12 about">
                    <div class="footer-col-inner">
                        <h3>QIME</h3>
                        <ul>
                            <li><a href="index.php"><i class="fa fa-caret-right"></i>Home</a></li>
                            <li><a href="loginpage.php"><i class="fa fa-caret-right"></i>Log in</a></li>
                            <li><a href="aboutus.php"><i class="fa fa-caret-right"></i>About us</a></li>
                            <li><a href="news.php"><i class="fa fa-caret-right"></i>News and Events</a></li>
                            <li><a href="contactus.php"><i class="fa fa-caret-right"></i>Contact us</a></li>
                            <!--<li><a href="http://www.math.iitb.ac.in/~neela"><i class="fa fa-caret-right"></i>Head of the Department</a></li>-->
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
                <div class="footer-col col-md-4 col-sm-12 contact">
                    <div class="footer-col-inner">
                        <h3>Contact us</h3>
                        <div class="row">
                            <p class="adr clearfix col-md-12 col-sm-4">
                                <i class="fa fa-map-marker pull-left"></i>        
                                <span class="adr-group pull-left">   
                                    <span class="street-address">QIME</span><br>    
                                    <span class="street-address">Department of Mathematics</span><br>
                                    <span class="region">IIT Bombay, Powai</span><br>
                                    <span class="postal-code">Mumbai</span><br>
                                    <span class="country-name">India 400076</span>
                                </span>
                            </p>
                            <p class="tel col-md-12 col-sm-4"><i class="fa fa-phone"></i>022-2576-7451, 022-2576-7452</p>
                            <p class="email col-md-12 col-sm-4"><i class="fa fa-envelope"></i><a href="mailto:ikr@math.iitb.ac.in">ikr [at] math. iitb.ac.in</a></p>  
                        </div> 
                    </div><!--//footer-col-inner-->            
                </div><!--//foooter-col-->   
		<div class="footer-col col-md-4 col-sm-12 contact">
                    <div class="footer-col-inner">
		<div align="center">
                <h5>Supported by</h5>
 		<img src="assets/images/rmsa_logo.png" alt=""  height="100" width="112"/> 
 		<img src="assets/images/iitblogo.png" alt=""  height="100" width="100"/>
		<hr style="border: none; height: 1px; color: #110905; background: #110905;"/>
                <h5>Connect with us</h5>
		<div class="social-icons`">
		<a href="http://www.facebook.com"> Facebook <i class="fa fa-facebook fa-3"></i></a> 
                <a href="http://www.youtube.com/" style="padding: 15px"> Youtube <i class="fa fa-youtube-square fa-3"></i></a>
                </div>
		</div>
		</div><!--//footer-col-inner-->        
                </div>
                </div>   
            </div>        
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <small class="copyright col-md-6 col-sm-12 col-xs-12">Copyright @ 2016 QIME | <a href="http://www.rmsaindia.gov.in">Rashtriya Madhyamik Shiksha Abhiyan</a></small>
                   <!-- <ul class="social pull-right col-md-6 col-sm-12 col-xs-12">
                        <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" ><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" ><i class="fa fa-skype"></i></a></li> 
                        <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li>
                    </ul> --> <!--//social-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->

    <!-- *****CONFIGURE STYLE****** -->  
    <div class="config-wrapper">
    <!--div class="config-wrapper hidden-xs"-->
        <div class="config-wrapper-inner">
            <div id="config-panel" class="config-panel">
                <p>Choose Colour</p>
                <ul id="color-options" class="list-unstyled list-inline">
                    <li class="default active" ><a data-style="assets/css/styles2.css" href="#"></a></li>
                    <li class="green"><a data-style="assets/css/styles-cyangreen.css" href="#"></a></li>
                </ul>
                <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
            </div>
        </div>
    </div>
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/plugins/jflickrfeed/jflickrfeed.min.js"></script> 
    <script type="text/javascript" src="assets/js/main.js"></script>  
    
          
</body>
</html> 
