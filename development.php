
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
                             <p><font size="6">Loni Gram Panchyat</font></p>
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
                                <li id="Header_A1" class="dropdown "><a href="index.php">Home</a></li>
                                <li id="Header_A2" class="dropdown"><a href="history.php">History</a></li>
                                <li id="Header_A3" class="dropdown"><a href="dharohar.php">Heritage</a></li>
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
                                                               </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li id="Header_A6" class="dropdown"><a href="govproject.php">Plans</a> </li>
                                <li id="Header_A7" class="active"><a href="development.php">Development work</a> </li>
                                <li id="Header_A8" class="dropdown"><a href="bloodgroup.php">Blood group information</a> </li>
                                <li id="Header_A9" class="dropdown"><a href="https://rdd.maharashtra.gov.in/en/tax-home">Property assessment</a> </li>
                                <li id="Header_A10" class="dropdown"><a href="feedback.php">Opinion</a> </li>
                                  
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
<form>

                <!-- Content : START -->
                <div class="body-content" style="background-color: beige; margin-top: -28px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="heading-title">Details of development work</h2>
                                <span class="title-tag inner-top-ss" style="color: red;">Note: - The assessment details shown here are for your information only and will not be considered as official copy. If you want to get any additional information about this, contact the Gram Panchayat office. </span>
                                <div class="shopping-cart m-t-20">
                                    <div class="shopping-cart-table ">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="cart-description item">S.No.</th>
                                                        <th class="cart-qty item">Name of work</th>
                                                        <th class="cart-product-name item"> The amount of the grant</th>
                                                        <th class="cart-edit item">Year of work</th>
                                                        <th class="cart-qty item">Details of the scheme</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
														<?php
												if (!empty($vikas_data)) {
										foreach ($vikas_data as $val) {
														?>
                                                            <tr>
                                                                <td class="cart-product-name-info" style="width:5%"><span class="cart-sub-total-price"><?php echo $val['iCategoryID']; ?> </span></td>
                                                                <td class="cart-product-name-info" style="width:35%"><span class="cart-sub-total-price"><?php echo $val['vikas_name']; ?> </span></td>
                                                                <td class="cart-product-name-info"><span class="cart-sub-total-price"><?php echo $val['vikas_grant_amount']; ?> </span></td>
                                                                <td class="cart-product-name-info"><span class="cart-sub-total-price"><?php echo $val['vikas_com_year']; ?> </span></td>
                                                                <td class="cart-product-name-info" style="width:15%"><span class="cart-sub-total-price"><?php echo $val['vikas_detail']; ?> </span></td>
                                                            </tr>
                                                        <?php
												}
								}
								?>
                                                            
                                                        
                                                            
                                                        
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
            
</div>
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
                            <li class="first"><a title="Indian Post" href="https://www.indiapost.gov.in/">Indian Post</a></li>
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
                            <li class="first"><a title="Online Voter Card" href="https://voterportal.eci.gov.in/" target="_blank">Online Voter Card</a></li>
                            <li class="first"><a title=" Aadhar Card" href="https://uidai.gov.in/my-aadhaar/get-aadhaar.html" target="_blank">Aadhar Card</a></li>
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
                            <li class="first"><a href="https://www.mahapolice.gov.in/" title="Rahata Taluka Police Statin" target="_blank">Police Station :(100)</a></li>
                            <li class="first"><a href="javascript:void(0);" title="Municipal fire station" target="_blank">Municipal fire station : (102)</a></li>
                            <li class="first"><a href="javascript:void(0);" title="APMC Fire Station" target="_blank">APMC Fire : 02763 (272751)</a></li>
                            
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

<!-- Mirrored from www.jepurpanchayat.com/development.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 10:45:47 GMT -->
</html>
