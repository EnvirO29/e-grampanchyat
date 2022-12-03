<?php
session_start();
include 'commonincludefiles.php';
global $conn;
$history_data = array();
$history_data = getAllhistoryData();
$minister_data = array();
$minister_data = getAllministerData();
$news_data = array();
$news_data = getAllnewsData();
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Meta -->
    <meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" /><meta name="description" /><meta name="author" /><meta name="keywords" content="Loni Gram Panchayat Rahata, Gram Panchayat Loni, Online Loni Panchayat, Loni Rahata, Gram Panchayat Vijapur, Gram Panchayat Software, Loni Rahata , Maharashtra" /><meta name="robots" content="all" /><title>
	 Loni Gram Panchayat
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
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJMjcxNTA2MjczD2QWAgIDD2QWBAIBD2QWAgIDDxYCHgVjbGFzcwUGYWN0aXZlZAIFD2QWBAIBDxYCHgtfIUl0ZW1Db3VudAIBFgJmD2QWAmYPFQO3AeCqteCqsOCrjeCqtyA6IOCrqOCrpuCrp+Crri3gq6fgq68g4Kqu4Kq+4Kqf4KuHIOCqluCrh+CqpOCrgOCqteCqvuCqoeCrgOCqqOCrgCDgqrXgqr/gqrXgqr/gqqcg4Kqv4KuL4Kqc4Kqo4Kq+4KqT4Kqo4KuAIOCqk+CqqOCqsuCqvuCqh+CqqCDgqoXgqrDgqpzgq4DgqpMg4Kqu4Kq+4Kqf4KuHIENsaWNrIOCqleCqsOCriy1odHRwOi8vd3d3LmplcHVycGFuY2hheWF0LmNvbS9nb3Zwcm9qZWN0LmFzcHi3AeCqteCqsOCrjeCqtyA6IOCrqOCrpuCrp+Crri3gq6fgq68g4Kqu4Kq+4Kqf4KuHIOCqluCrh+CqpOCrgOCqteCqvuCqoeCrgOCqqOCrgCDgqrXgqr/gqrXgqr/gqqcg4Kqv4KuL4Kqc4Kqo4Kq+4KqT4Kqo4KuAIOCqk+CqqOCqsuCqvuCqh+CqqCDgqoXgqrDgqpzgq4DgqpMg4Kqu4Kq+4Kqf4KuHIENsaWNrIOCqleCqsOCri2QCAw8WAh8BAgEWAmYPZBYCZg8VA3vgqpfgqr7gqq7gqqjgq4sg4Kq14Kq/4KqV4Kq+4Kq4IOCqheCqqOCrhyDgqpfgqr7gqq4g4Kqu4Kq+4KqCIOCqn+Crh+CqleCqqOCri+CqsuCri+CqnOCrgCDgqo/gqpXgqqbgqq4g4KqF4Kqn4Kqk4KqoIOCqm+Crhy4GVEFSRVNIB01FSFNBTkFkZCMXkJFtI/qhtUIqx3ldb1WjcMhHZhPngnCtLGRlYl6D" />
</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="2068001F" />
</div>
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
                             <p><font size="6"> Loni Gram Panchayat</font></p>
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
                                <li id="Header_A2" class="active"><a href="history.php">History</a></li>
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
                                                            <li><a href="sabhya.php">Panchayat</a></li>
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

        <div class="body-content outer-top-xs" id="top-banner-and-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                        <div class="blog-page">
                            <div class="blog-post wow fadeInUp">
                                <h1>History of Loni village</h1>
								<?php
												if (!empty($history_data)) {
										foreach ($history_data as $val) {
														?>
                                <p style="text-align: justify;"><?php echo $val['history_story']; ?> </p>
                                <?php
										}
								}
														?>
								&nbsp;
                                <a href="blog-details.html">
                                    <!-- <img class="img-responsive" src="assets/images/blog-post/blog_big_01.html" alt="" /></a> -->
                                <p> <a class="contact-form" href="https://en.wikipedia.org/wiki/Loni,_Ahmednagar">Loni</a>  </p>
                            </div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Loni_Kalbhor_Street_Bazar_001.jpg"  style="width:1150px; height:440px;padding-left:15px;padding-right:0px"class="center"></img>
                           <img src="https://placesnearpune.com/images/ramdara_temple_pune_09.jpg" class="center" style="width:1150px; height:440px;padding-left:15px;padding-right:0px"></img>
                          <img src ="https://www.konkan.me/wp-content/uploads/2021/04/ramdara-temple-pune-loni-kalbhor.jpg" style="width:1150px; height:440px;padding-left:15px;padding-right:0px"></img>
                            <div class="clearfix blog-pagination filters-container  wow fadeInUp" style="padding: 0px; background: none; box-shadow: none; margin-top: 15px; border: none">
                                <div class="text-right">
                                    <div class="pagination-container">
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
	
    <div class="sidebar-widget product-tag wow fadeInUp outer-bottom-xs"style="background-color: antiquewhite;">
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
	 <a id="blinker" href="https://bhulekh.mahabhumi.gov.in/" target="_blank" style="font-size:21px">Click here to get the excerpt from 7/12.</a><br>
					&nbsp &nbsp<a id="blinker1" href="http://epaper.lokmat.com/" target="_blank" style="font-size:21px">Please click here and see the newspaper </a>
    <!----------- Testimonials------------->
    <div class="sidebar-widget wow fadeInUp outer-top-vs outer-bottom-vs" style="background-color: antiquewhite;">
        <div id="testimonial" class="advertisement">
            
                    <div class="item">
                        <div class="testimonials"><em>"</em>The development of the village and the technology in the village is quite up-to-date.<em>"</em></div>
                        <div class="clients_author">Pravranagar<span>Loni</span> </div>
                    </div>
                
        </div>
    </div>
    
</div>

                    <!--Sidebar : END-->
                </div>
            </div>
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
                        <h4 class="module-title" style="color:#898989;">Government web site</h4>
                    </div>
                    <div class="module-body">
                        <ul class="list-unstyled">
                            <li class="first"><a title="Department of Rural Housing and Rural Development" href="https://rdd.maharashtra.gov.in/en" target="_blank">Department of Rural Housing and Rural Development</a></li>
                            <li class="first"><a title="Indian Post" href="https://www.indiapost.gov.in/">Indian Post</a></li>
                            <li class="first"><a title="Pravara, Water Resources, Water Supply and Pravara Division" href="https://guj-nwrws.gujarat.gov.in/" target="_blank">Pravara, Water Resources, Water Supply and Pravara Division</a></li>
                            <li class="first"><a title="Maharashtra Energy Development Corporation Limited" href="https://www.mahaurja.com/meda/">Maharashtra Energy Development Corporation Limited</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="module-heading">
                        <h4 class="module-title" style="color:#898989;">GOVERNMENT WEB SITE/h4>
                    </div>
                    <div class="module-body">
                        <ul class="list-unstyled">
                            <li class="first"><a title="Online voter card" href="https://voterportal.eci.gov.in/" target="_blank">Online voter card</a></li>
                            <li class="first"><a title="aadhar card" href="https://uidai.gov.in/my-aadhaar/get-aadhaar.html" target="_blank">aadhar card</a></li>
                            <li class="first"><a title="Any ROR" href="https://www.india.gov.in/check-ror-agriculture-land-maharashtra-online" target="_blank">Any ROR</a></li>
                            <li class="first"><a title="i-farmer" href="https://farmer.gov.in/" target="_blank">i-farmer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="module-heading">
                        <h4 class="module-title" style="color:#898989;">Number of immediate facilities</h4>
                    </div>
                    <div class="module-body">
                        <ul class="list-unstyled">
                            <li class="first"><a href="https://www.mahapolice.gov.in/" title="Rahata Taluka Police Station" target="_blank">Police Station :(100)</a></li>
                            <li class="first"><a href="javascript:void(0);" title="Municipal fire station" target="_blank">Municipal fire station :(102)</a></li>
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
