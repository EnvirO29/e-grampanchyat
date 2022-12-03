<?php
session_start();
include 'commonincludefiles.php';
global $conn;
$sa_data = array();
$sa_data = getAllsarpanchData();
$d_sa_data = array();
$d_sa_data = getAlld_sarpanchData();
$talati_data = array();
$talati_data = getAlltalatiData();
$gram_sevak_data = array();
$gram_sevak_data = getAllgram_sevakData();
$history_data = array();
$history_data = getAllhistoryData();
$minister_data = array();
$minister_data = getAllministerData();
$news_data = array();
$news_data = getAllnewsData();
$banner_data = array();
$banner_data = getAllcategoryData();
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
<body class="cnt-home">
    <form method="post" action="#" id="form1">
        <!-- Header : START -->
        

<header class="header-style-1">
    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account" style="color: darkblue;">
                    
                    <script>
                        var blink_speed = 50;
                        var t = setInterval(function () {
                            var ele = document.getElementById('blinker');
                            ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
                        }, blink_speed);
                    </script>
					 <script>
                        var blink_speed = 50;
                        var t = setInterval(function () {
                            var ele = document.getElementById('blinker1');
                            ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
                        }, blink_speed);
                    </script>
                   
					
                </div>
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
             
                 <h3> <a class="nav-link" href="login.php">Login/SignIn</a></h3> 
                <div class="col-xs-12 col-sm-12 col-md-3 social">
                    <ul class="link" style="margin-top: 20px;">
                        <li class="instagram pull-right"><a target="_blank" rel="nofollow" href="https://www.instagram.com/" title="Instagram"></a></li>
                        <li class="tw pull-right"><a target="_blank" rel="nofollow" href="https://twitter.com/" title="Twitter"></a></li>
                        <li class="fb pull-right"><a target="_blank" rel="nofollow" href="https://www.facebook.com/" title="Facebook"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="notification-col-12">
			
        
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
                                
                                <li id="Header_A1" class="active"><a href="index.php">Home</a></li>
                                <li id="Header_A2" class="dropdown"><a href="history.php">History</a></li>
                                <li id="Header_A3" class="dropdown"><a href="dharohar.php">Heritage</a></li>
                                <li id="Header_A4" class="dropdown"><a href="activities.php">Achievements</a></li>
                                <li id="Header_A13" class="dropdown"><a href="achievements.php">Incubment</a> </li>
                                <li id="Header_A5" class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Plans</a>
                                    <ul class="dropdown-menu pages">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-xs-12 col-menu">
                                                        <ul class="links">
                                                            <li><a href="sabhya.php">Panchayat</a></li>
                                                            <li><a href="javascript:void(0);">Public body</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li id="Header_A6" class="dropdown"><a href="govproject.php">Plans</a> </li>
                                <li id="Header_A7" class="dropdown"><a href="development.php"> Development Work</a> </li>
                                <li id="Header_A8" class="dropdown"><a href="bloodgroup.php">Blood Group Information</a> </li>
                                <li id="Header_A9" class="dropdown"><a href="https://rdd.maharashtra.gov.in/en/tax-home">Property Assessment</a> </li>
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
        <div class="header_notification_bar">
  <div class="container_notification">
     <div>&nbsp;NOTIFICATION:<marquee behavior="scroll" direction="left" scrollamount="4" onMouseOver="this.stop();" onMouseOut="this.start();" bgcolor ="#ffc591" width = "85%" height = "50%">
        <a href="Online Birth Certificate System\obcs\index.php" target="_blank">Click here to apply for Birth Certificate</a> |
         <a href="Online Marriage Registratiom System Project\omrs\index.php" target="_blank">Apply for Marriage Certificate </a> 
         <a href="https://www.lokmat.com/latestnews/" target="_blank"> | Click here to get Latest News</a>  </marquee> </div>
        </div>
                    </div>
                    <div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                
            </ul>
        </div>
    </div>
</div>

        <!-- Content : START -->
        <div class="body-content outer-top-xs" id="top-banner-and-menu">
            <div class="container">
                <div class="row">
                <img src="https://gumlet.assettype.com/deshdoot/2020-07/029f3ab7-aba6-4e9b-af84-50bf4f7b4760/gram_panchayat.jpg?w=1200&auto=format%2Ccompress&ogImage=true" class="center" style="width:1150px; height:440px;padding-left:15px;padding-right:0px"></img>
               <img src="https://publicpolicyindia.com/wp-content/uploads/2021/01/Blog-Banners-1024x657.png" class="center" style="width:1150px; height:440px;padding-left:15px;padding-right:0px"></img>
                
                    <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                        <div id="hero">
                            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
							<?php
                                if (!empty($banner_data)) {
										foreach ($banner_data as $val) {
														?>
                                <div class="item" style="background-image: url(images/banner/<?php echo $val['tImage']; ?>);">
                                    <div class="container-fluid">
                                        <div class="caption bg-color vertical-center text-left">
                                            
                                        </div>
                                    </div>
                                </div>
                               
                              
                               
                                
								<?php
										}
								}
														?>
                                
                            </div>
                        </div><br><br>
                        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                            <div class="more-info-tab clearfix ">
                                <a href="https://en.wikipedia.org/wiki/Radhakrishna_Vikhe_Patil" ><h3 class="new-product-title pull-left">Chief Incumbment</h3></a>
                            </div>
                            <img src="https://images.indianexpress.com/2019/04/radhakrishna-vikhe-patil.jpg"></img>
                            
                            <div class="tab-content outer-top-xs">
                                <div class="tab-pane in active" id="all">
                                    <div class="product-slider">
                                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                            <div class="item item-carousel">
                                                <div class="products">
												<?php
                                if (!empty($sa_data)) {
										foreach ($sa_data as $val) {
														?>
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <a href="javascript:void(0);">
                                                                    <img src="images/banner/<?php echo $val['tImage']; ?>" alt="	" height="185" width="42"/></a>
                                                            </div>
                                                        </div>
														
                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a href="javascript:void(0);">Sarpanch Shri</a></h3>
                                                            <div class="product-price"><span class="price"><?php echo $val['sarpanch_name']; ?></span></div>
															<div class="description">+91-<?php echo $val['sarpanch_no']; ?></div>
                                                        </div>

                                                            
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="lnk">
                                                                    <h4>Login</h4>
                                                                        <a class="add-to-cart" href="<?php echo $val['sarpanch_fb']; ?>" target="_blank" title="Facebook">
                                                                            <i class="fa fa-facebook"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lnk">
                                                                        <a class="add-to-cart" href="<?php echo $val['sarpanch_twitter']; ?>" target="_blank" title="Twitter">
                                                                            <i class="fa fa-twitter"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lnk">
                                                                        <a class="add-to-cart" href="<?php echo $val['sarpanch_insta']; ?>" target="_blank" title="Instagram">
                                                                            <i class="fa fa-instagram"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
													<?php
										}
								}
														?>
								
                                                </div>
                                            </div>
                                            <div class="item item-carousel">
                                                <div class="products">
												<?php
                                if (!empty($d_sa_data)) {
										foreach ($d_sa_data as $val) {
														?>
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <a href="javascript:void(0);">
                                                                    <img src="images/banner/<?php echo $val['tImage']; ?>" alt="" height="185" width="42" /></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a href="javascript:void(0);">Deputy Sarpanch Shri</a></h3>
                                                            <div class="product-price"><span class="price"><?php echo $val['sarpanch_name']; ?></span></div>
                                                            <div class="description">+૯૧-<?php echo $val['sarpanch_no']; ?></div>
                                                        </div>
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="lnk">
                                                                        <a class="add-to-cart" href="<?php echo $val['sarpanch_fb']; ?>http://www.facebook.com/" target="_blank" title="Facebook">
                                                                            <i class="fa fa-facebook"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lnk">
                                                                        <a class="add-to-cart" href="<?php echo $val['sarpanch_twitter']; ?>" title="Twitter">
                                                                            <i class="fa fa-twitter"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lnk">
                                                                        <a class="add-to-cart" href="<?php echo $val['sarpanch_insta']; ?>" title="Instagram">
                                                                            <i class="fa fa-instagram"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
													<?php
										}
								}
														?>
                                                </div>
                                            </div>
                                            <div class="item item-carousel">
                                                <div class="products">
												<?php
												if (!empty($talati_data)) {
										foreach ($talati_data as $val) {
														?>
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <a href="javascript:void(0);">
                                                                    <img src="images/banner/<?php echo $val['tImage']; ?>" alt="" height="185" width="42"/></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a href="#">Talathi </a></h3>
                                                            <div class="product-price"><span class="price"><?php echo $val['sarpanch_name']; ?></span></div>
                                                            <div class="description">+21-<?php echo $val['sarpanch_no']; ?></div>
                                                        </div>
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="lnk">
                                                                        <a class="add-to-cart" href="<?php echo $val['sarpanch_fb']; ?>" target="_blank" title="Facebook">
                                                                            <i class="fa fa-facebook"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lnk">
                                                                        <a class="add-to-cart" href="<?php echo $val['sarpanch_twitter']; ?>" title="Twitter">
                                                                            <i class="fa fa-twitter"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lnk">
                                                                        <a class="add-to-cart" href="<?php echo $val['sarpanch_insta']; ?>" title="Instagram">
                                                                            <i class="fa fa-instagram"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
													<?php
										}
								}
														?>
                                                </div>
                                            </div>
                                            <div class="item item-carousel">
                                                <div class="products">
												<?php
												if (!empty($gram_sevak_data)) {
										foreach ($gram_sevak_data as $val) {
														?>
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <a href="javascript:void(0);">
                                                                    <img src="images/banner/<?php echo $val['tImage']; ?>" alt="" height="185" width="42"/></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a href="javascript:void(0);">Gramevak</a></h3>
                                                            <div class="product-price"><span class="price"><?php echo $val['sarpanch_name']; ?></span></div>
                                                            <div class="description">+21-<?php echo $val['sarpanch_no']; ?></div>
                                                        </div>
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="lnk">
                                                                        <a class="add-to-cart" href="<?php echo $val['sarpanch_fb']; ?>" target="_blank" title="Facebook">
                                                                            <i class="fa fa-facebook"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lnk">
                                                                        <a class="add-to-cart" href="<?php echo $val['sarpanch_twitter']; ?>" title="Twitter">
                                                                            <i class="fa fa-twitter"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lnk">
                                                                        <a class="add-to-cart" href="<?php echo $val['sarpanch_insta']; ?>" title="Instagram">
                                                                            <i class="fa fa-instagram"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
													<?php
										}
								}
														?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
												if (!empty($history_data)) {
										foreach ($history_data as $val) {
														?>
                        <div class="blog-page">
                            <div class="blog-post wow fadeInUp">
                                <h1>Lok Wayaka of Loni village</h1>
                                <p style="text-align: justify;"> <?php echo $val['history_story']; ?><a class="contact-form" href="javascript:void(0);">LONI</a> .     </p>
                            </div>
                        </div>
						<?php
										}
								}
														?>
                        <div class="clearfix blog-pagination filters-container  wow fadeInUp" style="padding: 0px; background: none; box-shadow: none; margin-top: 15px; border: none">
                            <div class="text-right">
                                <div class="pagination-container">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar : START -->
                    

<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
    <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs" style="    background-color: antiquewhite;">
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
                            <img src="images/banner/<?php echo $val['tImage']; ?>" alt="મુખ્ય મંત્રી" />
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
	
    <div class="sidebar-widget product-tag wow fadeInUp outer-bottom-xs" style="    background-color: antiquewhite;">
    <a href="https://www.lokmat.com/latestnews/"><h3 class="section-title">Latest News</h3></a>
        <div class="sidebar-widget-body outer-top-xs">
            <div class="tag-list">
                <marquee id="scroll_news" behavior="scroll" direction="up" scrollamount="2">
                    <?php
												if (!empty($news_data)) {
										foreach ($news_data as $val) {
														?>
                            <div onMouseOver="document.getElementById('scroll_news').stop();" onMouseOut="document.getElementById('scroll_news').start();">
                                <a class="item" title="<?php echo $val['news_name']; ?>" href="govproject.php" target="_blank"><?php echo $val['news_name']; ?></a>
                            </div>
							<?php
										}
								}
														?>
                        
                </marquee>
            </div>
        </div>
    </div>
	 <a id="blinker" href="https://bhulekh.mahabhumi.gov.in/" target="_blank" style="font-size:21px">To get the 7/12 Uttara </a><br>
					&nbsp &nbsp<a id="blinker1" href="http://epaper.lokmat.com/" target="_blank" style="font-size:21px">Please click here and see the newspaper</a>
    <!----------- Testimonials------------->
    <div class="sidebar-widget wow fadeInUp outer-top-vs outer-bottom-vs" style="    background-color: antiquewhite;">
        <div id="testimonial" class="advertisement">
            
                    <div class="item">
                        <div class="testimonials"><em>"</em>"The developmentof the village and the technology in the village is quite up-to-date"<em>"</em></div>
                        <div class="clients_author">Ahmadnagar<span>Loni</span> </div>
                    </div>
                
        </div>
    </div>
    
</div>

                    <!--Sidebar : END-->
                </div>
                <div id="brands-carousel" class="logo-slider wow fadeInUp">
                    <div class="logo-slider-inner">
                        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                            <div class="item">
                                <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="" />
                            </div>
                            <div class="item m-t-15">
                                <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="" />
                            </div>
                            <div class="item m-t-10">
                                <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="" />
                            </div>
                            <div class="item">
                                <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="" />
                            </div>
                            <div class="item">
                                <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="" />
                            </div>
                            <div class="item">
                                <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content : END -->
        <!-- Footer : START -->
        
<footer id="footer" class="footer color-bg">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title" style="color:#898989 ;">DONATION FOR DEVELOPMENT WORK</h4>
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
                            <li class="first"><a title="Department of Rural Housing and Rural Develepment" href="https://rdd.maharashtra.gov.in/en" target="_blank">Department of Rural Housing and Rural Develepment</a></li>
                            <li class="first"><a title="Indian Post" href="https://www.indiapost.gov.in/"></a></li>
                            <li class="first"><a title="Pravara, Water Resources, Water Supply and Pravara Division" href="https://guj-nwrws.gujarat.gov.in/" target="_blank">Pravara, Water Resources, Water Supply and Loni Division</a></li>
                            <li class="first"><a title="Maharashtra Engery Development Corportaion Limited" href="https://www.mahaurja.com/meda/">Maharashtra Engery Development Corportaion Limited</a></li>
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
                            <li class="first"><a title="Online Aadhaar card" href="https://uidai.gov.in/my-aadhaar/get-aadhaar.html" target="_blank">Online Aadhaar card</a></li>
                            <li class="first"><a title="Any ROR" href="https://www.india.gov.in/check-ror-agriculture-land-maharashtra-online" target="_blank">Any ROR</a></li>
                            <li class="first"><a title="i-farmer" href="https://farmer.gov.in/" target="_blank">i-farmer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="module-heading">
                        <h4 class="module-title" style="color:#898989;">NUMBER OF IMMEDIATE FACILITIES</h4>
                    </div>
                    <div class="module-body">
                        <ul class="list-unstyled">
                            <li class="first"><a href="https://www.mahapolice.gov.in/" title="Police Station: (100)" target="_blank">Police Station: (100)</a></li>
                            <li class="first"><a href="javascript:void(0);" title="Municipality Fire: (102)" target="_blank">Municipality Fire: (102)</a></li>
                            <li class="first"><a href="javascript:void(0);" title="APMC Fire : 02763 (272751)" target="_blank">APMC Fire : 02763 (272751)</a></li>
                            
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

</html>
