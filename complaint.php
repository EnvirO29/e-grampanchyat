
<?php
session_start();
include 'commonincludefiles.php';
global $conn;
$minister_data = array();
$minister_data = getAllministerData();
$news_data = array();
$news_data = getAllnewsData();
$vikas_data = array();
$vikas_data = getAllvikasData();
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!-- Meta -->
    <meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" /><meta name="description" /><meta name="author" /><meta name="keywords" content="Jepur Gram Panchayat Vijapur, Gram Panchayat Jepur, Online Jepur Panchayat, Jepur Vijapur, Gram Panchayat Vijapur, Gram Panchayat Software, Jepur Vijapur Mehsana, Gujarat" /><meta name="robots" content="all" /><title>
	Loni Gram Panchyat
</title>

    <!-- Style Sheet : START -->
    

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<!-- Customizable CSS -->
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="assets/css/blue.css" />
<link rel="stylesheet" href="assets/css/owl.carousel.css" />
<link rel="stylesheet" href="assets/css/owl.transitions.css" />
<link rel="stylesheet" href="assets/css/animate.min.css" />
<link rel="stylesheet" href="assets/css/rateit.css" />
<link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
<link href="assets/css/lightbox.css" rel="stylesheet">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="assets/css/font-awesome.css" />

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css' />



    <!-- Style Sheet : START -->
</head>
<body>
    <form method="post" action="#" id="form1" class="register-form">



        <!-- Header : START -->
        

<header class="header-style-1">
    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account" style="color: darkblue;">
                    
                    <script>
                        var blink_speed = 500;
                        var t = setInterval(function () {
                            var ele = document.getElementById('blinker');
                            ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
                        }, blink_speed);
                    </script>
                    <a id="blinker" href="https://bhulekh.mahabhumi.gov.in/" target="_blank">Click here to get the excerpt from 7/12. </a>&nbsp&nbsp&nbsp&nbsp
                    <a id="blinker" href="http://epaper.lokmat.com/" target="_blank">Please click here and see the newspaper </a>
					
                </div>
                <!-- /.cnt-account -->

                
                <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div>
            <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 logo-holder">
                    <div class="logo">
                        <a href="index.php">
                             <p><font size="6">Loni Gram Panchayat</font></p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 social">
                    <ul class="link" style="margin-top: 20px;">
                        <li class="instagram pull-right"><a target="_blank" rel="nofollow" href="https://www.instagram.com/" title="Instagram"></a></li>
                        <li class="tw pull-right"><a target="_blank" rel="nofollow" href="https://twitter.com/" title="Twitter"></a></li>
                        <li class="fb pull-right"><a target="_blank" rel="nofollow" href="https://www.facebook.com/" title="Facebook"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li id="Header_A1" class="dropdown "><a href="index.php"> Home</a></li>
                                <li id="Header_A2" class="dropdown"><a href="history.php">History</a></li>
                                <li id="Header_A3" class="dropdown"><a href="dharohar.php">Heritage4</a></li>
                                <li id="Header_A4" class="dropdown"><a href="activities.php">Activities</a></li>
                                <li id="Header_A13" class="dropdown"><a href="achievements.php">Achievements</a> </li>
                                <li id="Header_A5" class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Incumbent</a>
                                    <ul class="dropdown-menu pages">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-xs-12 col-menu">
                                                        <ul class="links">
                                                            <li><a href="sabhya.php">Panchyat</a></li>
                                                            <li><a href="javascript:void(0);">Public body</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li id="Header_A6" class="dropdown"><a href="govproject.php">Plans</a> </li>
                                <li id="Header_A7" class="dropdown"><a href="development.php">Development work</a> </li>
                                <li id="Header_A8" class="dropdown"><a href="bloodgroup.php">Blood group information</a> </li>
                                <li id="Header_A9" class="dropdown"><a href="https://rdd.maharashtra.gov.in/en/tax-home">Property assessment</a> </li>
                                <li id="Header_A10" class="dropdown"><a href="feedback.php">Opinion</a> </li>
                                <li id="Header_A11" class="active"><a href="complaint.php">Complaint</a> </li>
                                
                                <li id="Header_A12" class="dropdown"><a href="birth.php">Birth Certificate</a> </li>
                                  <li id="Header_A12" class="dropdown"><a href="marriage.php">Marriage Certificate</a> </li>
                                 
                                  <li id="Header_A12" class="dropdown"><a href="contact.php">Contact</a> </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

        <!-- Header : END -->
        
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                
            </ul>
        </div>
    </div>
</div>

        <!-- Content : START -->
        <div class="body-content">
            <div class="container">
                <div class="row">
                    <div id="UpdatePanel1">
	
                            <div class="col-md-9">
                                <div class="wow fadeInUp">
                                    <div class="col-md-4 m-t-20" style="padding-left: 0px;">
                                        <div class="form-group">
                                            <label class="info-title">Mobile number<span>*</span></label>
                                            <input name="txtMobile" type="text" maxlength="10" id="txtMobile" class="form-control unicase-form-control text-input" required="" placeholder="MOBILE NUMBER" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 m-t-20" style="padding-left: 0px;">
                                        <div class="form-group">
                                            <label class="info-title">ENTER OTP</label>
                                            <input name="txtOTP" type="text" maxlength="4" id="txtOTP" disabled="disabled" class="aspNetDisabled form-control unicase-form-control text-input" placeholder="OTP" />
                                        </div>
                                    </div>
                                    <div class="col-md-9 m-t-20" style="padding-left: 0px;">
                                        <input type="submit" name="btnSubmit" value="SEND OTP" id="btnSubmit" class="btn-upper btn btn-primary checkout-page-button" />
                                        <input type="submit" name="btnVerify" value="VERIFY" id="btnVerify" disabled="disabled" class="aspNetDisabled btn-upper btn btn-success checkout-page-button" />
                                        <div class="col-md-12 m-t-20" style="padding-left: 0px;">
                                            <span id="lblMessage" style="font-size:Medium;font-weight:bold;"></span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        
</div>
                    <!-- Sidebar : START -->
                    
<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
    <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs" style="background-color: antiquewhite;">
    <a href="https://maharashtrasadan.maharashtra.gov.in/CM-New.html#:~:text=The%2029th%20Chief%20Minister,current%20Chief%20of%20Shiv%20Sena."><h3 class="section-title">Honorable</h3></a>
        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
		<?php
												if (!empty($minister_data)) {
										foreach ($minister_data as $val) {
														?>
            <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                        <div class="image">
                            <img src="images/banner/<?php echo $val['tImage']; ?>" alt="Cheif Minister" />
                        </div>
                    </div>
                    <div class="product-info text-left m-t-20">
                        <p><?php echo $val['minister_category']; ?>,</p>
                        <div class="product-price">
                            <span class="price"><?php echo $val['minister_name']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
			<?php
										}
								}
														?>
            
            
        </div>
    </div>
	
    <div class="sidebar-widget product-tag wow fadeInUp outer-bottom-xs" style="background-color: antiquewhite;">
        <a href="https://www.lokmat.com/latestnews/"><h3 class="section-title">Latest News</h3></a>
        <div class="sidebar-widget-body outer-top-xs">
            <div class="tag-list">
                <marquee id="scroll_news" behavior="scroll" direction="up" scrollamount="2">
                    <?php
												if (!empty($news_data)) {
										foreach ($news_data as $val) {
														?>
                            <div onMouseOver="document.getElementById('scroll_news').stop();" onMouseOut="document.getElementById('scroll_news').start();">
                                <a class="item" title="<?php echo $val['news_name']; ?>" href="govproject.html" target="_blank"><?php echo $val['news_name']; ?></a>
                            </div>
							<?php
										}
								}
														?>
                        
                </marquee>
            </div>
        </div>
    </div>
	
    <!----------- Testimonials------------->
    <div class="sidebar-widget wow fadeInUp outer-top-vs outer-bottom-vs" style="background-color: antiquewhite;">
        <div id="testimonial" class="advertisement">
            
                    <div class="item">
                        <div class="testimonials"><em>"</em>The development of the village and the technology in the village is quite up to date.<em>"</em></div>
                        <div class="clients_author">Pravaranagar<span>Loni</span> </div>
                    </div>
                
        </div>
    </div>
    
</div>

                    <!--Sidebar : END-->
                </div>
            </div>
        </div>
        <br />
        <!-- Footer : START -->
            
<footer id="footer" class="footer color-bg">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title" style="color:#898989 ;">Donation for development work</h4>
                    </div>
                    <div class="module-body">
                        <ul class="toggle-footer" style="">
                            <li class="media">
                                <div class="media-body">
                                    <p style="color:#ffffff;"><b>BANK NAME : </b>BANK OF BARODA</p>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-body">
                                    <p style="color:#ffffff;"><b>A/C NO : </b>**************</p>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-body">
                                    <p style="color:#ffffff;"><b>IFSC CODE : </b>BARBORANCHH</p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="module-heading">
                        <h4 class="module-title" style="color:#898989;">GOVERNMENT WEB SITE</h4>
                    </div>
                    <div class="module-body">
                        <ul class="list-unstyled">
                            <li class="first"><a title="Department of Rural Housing and Rural Development" href="https://rdd.maharashtra.gov.in/en" target="_blank">Department of Rural Housing and Rural Development</a></li>
                            <li class="first"><a title="Indian Post " href="https://www.indiapost.gov.in/">Indiian Post</a></li>
                            <li class="first"><a title="Pravara, Water Resources, Water Supply and Loni Division" href="https://guj-nwrws.gujarat.gov.in/" target="_blank">Pravara, Water Resources, Water Supply and Loni Division</a></li>
                            <li class="first"><a title="Maharashtra Energy Development Corporation Limited" href="https://www.mahaurja.com/meda/">Maharashtra Energy Development Corporation Limited</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="module-heading">
                        <h4 class="module-title" style="color:#898989;">GOVERNMENT WEB SITE</h4>
                    </div>
                    <div class="module-body">
                        <ul class="list-unstyled">
                            <li class="first"><a title="Online Voter Card " href="https://voterportal.eci.gov.in/" target="_blank">Online Voter Card</a></li>
                            <li class="first"><a title="Aadhar Card " href="https://uidai.gov.in/my-aadhaar/get-aadhaar.html" target="_blank">Online Adhar Card</a></li>
                            <li class="first"><a title="Any ROR" href="https://www.india.gov.in/check-ror-agriculture-land-maharashtra-online" target="_blank">Any ROR</a></li>
                            <li class="first"><a title="i-Farmer" href="https://farmer.gov.in/" target="_blank">i-Farmer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="module-heading">
                        <h4 class="module-title" style="color:#898989;">Number of immediate facilities</h4>
                    </div>
                    <div class="module-body">
                        <ul class="list-unstyled">
                            <li class="first"><a href="https://www.mahapolice.gov.in/" title="Rahata Taluka Police Station" target="_blank">Police Station :  (100)</a></li>
                            <li class="first"><a href="javascript:void(0);" title="Municipal fire station" target="_blank">Municipal fire station : (102)</a></li>
                            <li class="first"><a href="javascript:void(0);" title="APMC Fire " target="_blank">APMC Fire : (02763) 272751</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-12 no-padding">
                <div class="clearfix">
                    <p style="color:white; text-align:center;">ALL RIGHTS RESERVED BY LONI GRAM PANCHAYAT <sup style="color:white;">®</sup></a> <br/>  
					<script type="text/javascript" ></script></p>
                </div>
            </div>
        </div>
    </div>
</footer>
    
        <!-- Footer : END -->
    </form>
    

<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/echo.min.js"></script>
<script src="assets/js/jquery.easing-1.3.min.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/jquery.rateit.min.js"></script>
<script type="text/javascript" src="assets/js/lightbox.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>

<!-- Mirrored from www.jepurpanchayat.com/complaint.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 10:45:47 GMT -->
</html>
