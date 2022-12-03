
<?php
session_start();
include 'commonincludefiles.php';
global $conn;
$minister_data = array();
$minister_data = getAllministerData();
$news_data = array();
$news_data = getAllnewsData();
$valid_data = array();
$valid_data = getAllvalidData();
$document_data = array();
$document_data = getAlldocumentData();
$yojna_data = array();
$yojna_data = getAllyojnaData();


?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from www.jepurpanchayat.com/govproject.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 10:45:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Meta -->
    <meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" /><meta name="description" /><meta name="author" /><meta name="keywords" content="Jepur Gram Panchayat Loni, Gram Panchayat Jepur, Online Jepur Panchayat, Jepur Vijapur, Gram Panchayat Vijapur, Gram Panchayat Software, Jepur Vijapur Mehsana, Gujarat" /><meta name="robots" content="all" /><title>
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
<div class="aspNetHidden">

<div class="aspNetHidden">

	
</div>
        <!-- Header : START -->
        

<header class="header-style-1">
    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account" style="color: darkblue;">
                    
                    <script>
                        var blink_speed = 0;
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
                             <p><font size="6"> Loni Gram Panchyat</font></p>
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
                                <li id="Header_A6" class="active"><a href="govproject.php">Plans</a> </li>
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

        <!-- Content : START -->
        <div class="body-content" style="background-color: beige; margin-top: -28px;">
            <div class="container">
                <div class="row">
                    <div class="blog-page">
                        <div class="col-md-9">
                            
                                    <div class="blog-post wow fadeInUp">
                                        <h1><a href="javascript:void(0);">Various schemes of agriculture</a></h1>
										<?php
												if (!empty($valid_data)) {
										foreach ($valid_data as $val) {
														?>
                                        <span class="date-time"><?php echo $val['valid_start']; ?> થી <?php echo $val['valid_end']; ?></span>
										<?php
												}
								}
								?>
								<?php
												if (!empty($valid_data)) {
										foreach ($valid_data as $val) {
														?>
                                        <p>Year: Date of online applications for various agricultural schemes for 2021-22<b><?php echo $val['valid_start']; ?> થી <?php echo $val['valid_end']; ?></b> સુધી <a href='https://ikhedut.gujarat.gov.in/' target='_blank'>iKhedut</a>
                                            (I Farmer Portal) has been opened. So the farmer brothers of Loni village should contact the Panchayat VCE (Computer Operator) to apply.<br/><br/><?php
												}
								}
								?>

<b>Documents required to apply</b> <br/><br/>
<?php
												if (!empty($document_data)) {
										foreach ($document_data as $val) {
														?>
<?php echo $val['iCategoryID']; ?>)  <?php echo $val['document_name']; ?> <br/>
 
<?php
												}
								}
								?>
<b>Special note : </b>Apply and give Gramsevak<br/><br/>
Agricultural schemes:-<br/><br/>
<?php
												if (!empty($yojna_data)) {
										foreach ($yojna_data as $val) {
														?>
<?php echo $val['iCategoryID']; ?>.&nbsp<a id="blinker1" href="<?php echo $val['yojna_link']; ?> " target="_blank"><?php echo $val['yojna_name']; ?>. </a>
<br/>
<?php
												}
								}
								?>

</p>
<p>Swachh Bharat Mission (Rural)
Ahamadnagar Zilla Parishad - Information on District Water and Sanitation Mission
[Format F28 A] No. of Uploaded Photograph so far using Mobile Application 28/08/2017
[Format A03] Swachh Bharat Mission Target Vs Achievement of BLS - 2012 (Deatil Entry Status)
Background</p>

<p>There is a correlation between water, hygiene and health as personal health and hygiene depend to a large extent on adequate availability of drinking water and proper hygiene. Unsafe drinking water, improper disposal of excreta, unhygienic environment, lack of personal and food hygiene are the main causes of many diseases in developing countries. India is no exception. The Central Rural Sanitation Program (CRSP) was launched by the government in 1986 with the aim of improving the living standards of rural people and giving women self-respect.

The concept of hygiene was expanded to include personal hygiene, household hygiene, potable drinking water, waste disposal, excreta disposal and sewage disposal. With this expanded concept of sanitation, the Central Rural Sanitation Program (CRSP) was transformed into a Total Sanitation Campaign (TSC) in 1999 with a demand based approach. Information, education and communication (IEC), manpower development, capacity building activities were emphasized in the revised approach to create awareness and demand for sanitation among the rural people. This has increased the capacity of the people to choose the right options and the allocation system according to their financial status. The program was implemented with a focus on people-sponsored and people-centered initiatives.

In addition to solid waste and wastewater management activities, assistance was also provided for construction of school toilets, anganwadi toilets and public sanitation complexes.

The Government of India launched the Nirmalgram Award (NGP) to give a new impetus to the entire sanitation campaign. Through this award, efforts and results for overall cleanliness were recognized. The Nirmal Gram Puraskar gained immense popularity and was credited with initiating a great movement in the society for Nirmal status. The Nirmalgram Award has been instrumental in expanding sanitation in rural areas.

Encouraged by the success of Nirmal Gram Puraskar, the entire Swachhta Abhiyan was renamed as Nirmal Bharat Abhiyan. Along with the poverty line, toilet incentive grants were also given to the families on the poverty line. At the same time it was decided to provide Rs. 5420 / - for personal toilet from Mahatma Gandhi Employment Guarantee Scheme.

Hon'ble Prime Minister started implementing Swachh Bharat Mission from 2nd October 2014 to fully accommodate the rural community through revised policy and adequacy. In this, on the occasion of the 150th birth anniversary of Mahatma Gandhi, the objective was to clean the whole of India on October 2, 2019. For this, it was decided to implement the program of solid waste and wastewater management along with effective elimination of old deficiencies.</p>

<p>Swachh Bharat Mission Objectives:

Improving the standard of living in rural areas through hygiene, hygienic habits and litter eradication.
To realize the dream of a clean India by 2 October 2019 by accelerating the scope of sanitation in rural areas.
To motivate Panchayat Raj organizations and social groups through awareness and health education to spread the tools of sustainable sanitation.
Promoting affordable and appropriate technology for environmentally safe sustainable sanitation.
To develop environmentally friendly hygienic practices in rural areas which are managed by the people and give priority to solid waste and wastewater disposal.
Elements of Swachh Bharat Mission:</p>

<p>1) Information education, communication and capacity building activities:

Under Swachh Bharat Mission, Information Education Dialogue and Capacity Building is a key component and aims to change the mindset of the people and promote personal toilet and solid waste management. To change the minds of the people through home visits and behavioral change initiatives for construction of toilets and regular use of toilets. At the same time, at the Gram Panchayat, Panchayat Samiti and Zilla Parishad level, people should be sensitized through various initiatives of information education dialogue. Also, for the effective implementation of Swachh Bharat Mission, training for Gram Panchayat level to district level people's representatives and officers and staff is being conducted to change their knowledge and skills related to sanitation and water.

2) Construction of personal toilet:

The toilet for the family will be fully constructed with 4 walls, door and roof. There will also be water and hand washing facilities for use with the toilet. The objective of these programs is to include all rural families. The incentive grant given under this scheme will be payable to the following families at the Gram Panchayat level.

1) All families below the poverty line

2) Families belonging to Scheduled Castes, Scheduled Tribes, Small and Marginal Farmers, Landless Laborers, Physically Handicapped and Women Head of Poverty Line.

Incentive grant for personal toilet is Rs. 12000 / - in total.
Families who are not included in the baseline list of Swachh Bharat Mission can avail a benefit of Rs. 12000 / - from Mahatma Gandhi National Rural Employment Guarantee Scheme.
Households built under the Indira Awas Yojana or any rural housing scheme in the state who do not have a toilet will be eligible for incentive grants under the Swachh Bharat Mission if they build a sanitation facility.
Families below the poverty line who are not eligible for the above incentive grant should voluntarily undertake the task of constructing toilets in their homes.
Bucket toilets are not allowed in rural areas. Also, since human trafficking is a crime by law, such toilets should be converted into sanitary toilets immediately.
3) Public toilets:

Public toilets are a component of Swachh Bharat Mission. Adequate number of toilets, bathrooms, laundry facilities, packages with washbasins, can be erected in places acceptable to all in the village and easily accessible. Generally, public toilets should be constructed only if there is no space available for families to construct toilets and the families accept responsibility for operation and maintenance of public toilets. Public toilets Public toilets should be set up in large gram panchayats, market villages, public places, floating population, pilgrimage places. A maximum expenditure of up to Rs.2 lakh is proposed for a public sanitation complex. The central share will be 60 per cent and the state share will be 40 per cent. According to the new policy, emphasis has been laid on personal toilets, so public toilets have been postponed.

4) Solid Waste and Sewage Management:
</p>
<p>Compost pits under solid waste and wastewater management, vermicompost production, biogas projects, household waste collection, segregation, reuse and sale and its management and low cost drainage under wastewater management, public drainage pits, public septic tanks, drainage / pits, Activities like reuse of wastewater from ponds and villages can be implemented. For this, Mahatma Gandhi National Rural Employment Guarantee Scheme can be linked.

Human excreta management

Manav Manalmatra management is an important issue facing the country in terms of health and hygiene. About 60% of the diseases are caused by soil and water pollution caused by human excreta alone. Of course, it is important to avoid pollution from human excreta. Traditional drainage systems in rural areas, huge capital investment for them, unaffordable maintenance, management costs, inadequate water supply, scattered settlements and villages etc. The roots are not possible. Open defecation is widely practiced due to traditional behavioral practices, inadequate knowledge of technology and, to a lesser extent, economic conditions. This leads to continuous pollution of land and water. From this the pathogens mixed in the soil, water etc. reach the human food through water, dust, animals, insects like flies, unclean hands etc. and they get infected. Hagvan, Jant, Diseases like jaundice, typhoid, polio, cholera, etc. are spread only through the contamination caused by feces. Diseases spread by feces cause about one million deaths in the country. Besides, the financial loss is different. In such a situation it is important to construct and use toilets for proper management of feces. This will have important health benefits, healthier environment and clean environment. At the same time, there are social and family benefits like increase in farm income due to fertilizer which increases income due to physical health. When building a toilet, it is often unclear what type of toilet to build. Below is a list of technical criteria and various toilet options that should be taken into consideration while constructing a toilet. Diseases spread by feces cause about one million deaths in the country. Besides, the financial loss is different. In such a situation it is important to construct and use toilets for proper management of feces. This will have important health benefits, healthier environment and clean environment. At the same time, there are social and family benefits like increase in farm income due to fertilizer which increases income due to physical health. When building a toilet, it is often unclear what type of toilet to build. Below is a list of technical criteria and various toilet options that should be taken into consideration while constructing a toilet. Diseases spread by feces cause about one million deaths in the country. Besides, the financial loss is different. In such a situation it is important to construct and use toilets for proper management of feces. This will have important health benefits, healthier environment and clean environment. At the same time, there are social and family benefits like increase in farm income due to fertilizer which increases income due to physical health. When building a toilet, it is often unclear what type of toilet to build. Below is a list of technical criteria and various toilet options that should be taken into consideration while constructing a toilet. In such a situation it is important to construct and use toilets for proper management of feces. This will have important health benefits, healthier environment and clean environment. At the same time, there are social and family benefits like increase in farm income due to fertilizer which increases income due to physical health. When building a toilet, it is often unclear what type of toilet to build. Below is a list of technical criteria and various toilet options that should be taken into consideration while constructing a toilet. In such a situation it is important to construct and use toilets for proper management of feces. This will have important health benefits, healthier environment and clean environment. At the same time, there are social and family benefits like increase in farm income due to fertilizer which increases income due to physical health. When building a toilet, it is often unclear what type of toilet to build. Below is a list of technical criteria and various toilet options that should be taken into consideration while constructing a toilet. It is often not clear what kind of construction it should be. Below is a list of technical criteria and various toilet options that should be taken into consideration while constructing a toilet. It is often not clear what kind of construction it should be. Below is a list of technical criteria and various toilet options that should be taken into consideration while constructing a toilet.


Human excreta management
The technical criteria for construction of toilets at village level are as under.

Easy in terms of construction
Easy to use
Low cost and affordable
Easy in terms of maintenance repairs
Balancing with the environment
The final product should be recyclable
Should be prophylactic
There are various toilet options available today for construction of toilets at village level which meet the above criteria. The details are given below.

Two perforated pit toilets
Septic tank type toilet
Compost or ecosan method toilets
Biogas method toilets
Considering the situation in the state, people tend to build two of the above types of toilets. These include 1) two suction pit toilets and 2) septic tank type toilets. Detailed information about this is given in the following section. The construction of the above two types of toilets consists of two major parts.
Toilet meeting, fecal transport arrangements and final fecal management
The toilet, toilet seat
, fecal disposal system and final management of feces are very important and if care is not taken for final disposal of feces, it will not be a hygienic toilet. The latrine is to be constructed only for Adosha and this construction can be constructed raw / paved according to financial strength.
</p>

<p>1. Two suction pit toilets

Key components and processes in technology

There are three major components to this technology

1. Two absorption pits - This involves the process of decomposition or decomposition of feces.

2. Toilet seating and excreta disposal - Seating arrangements include toilet stools and water containers. It also includes observation bins and pipes fitted in the shape of 'Jn' in English to carry the excrement to the pits.

3. Toilet house - Toilet house is constructed to provide adequate support to the person sitting on the toilet. It mainly consists of walls, roof and door. The decomposition of feces occurs mainly in percolation pits. The excrement is carried to the pit with the help of water. The water and air produced by the process is absorbed into the soil around the pit. This dries the feces and decomposes the feces with the help of bacteria that grow in the presence of oxygen.

Use of technology (individual community level)</p>

<p>Absorption technology is primarily useful for home use on an individual level. When using this toilet at public level, it is important to change the size of the pits as required. Generally this type of toilet is enough for 8-10 people. If one pit is used at a time, it normally lasts for at least 7 years for the above men as about 1 cubic foot of manure is produced per year from the excrement of one man.

1.3 Actual construction of technology

Construction of Absorption Pits -

The pits are constructed by circular construction of bricks. When making a circular arrangement of bricks, 6 to 7 holes, usually 2 inches wide, are placed in a single layer. These holes facilitate the process of absorbing water and air into the soil. Holes should not be placed in the one-foot layers above the construction of the pits as it may allow outside water or soil to enter during the rainy season. In the same way, the inside air can also come out. Cement concrete is not poured at the bottom of the pit and cement concrete is not plastered on either side. After the completion of the construction of the pits, R.C.C. The pit is closed with a lid or shahabad floor. Pits have to be used alternately for decomposition of feces.


Construction of suction pits
Toilet seat and excreta disposal system -
</p>
<p>The toilet seat is placed 7-8 inches away from the center and rear walls of the toilet. Sloping bins and water seals are used to use the toilet in low water (1.5 to 2 liters). Attached to the seat is an observation tank 1 foot long and 1 foot wide at the point where the water seal pipe comes out. In the inspection bin, the pipe carrying the feces from the sewer comes on one side and on the other side two pipes of 4 inches diameter are fitted in the required length of "Jn" size. Through this pipe the excrement is carried to the pits. In order to use only one pit at a time, the mouth of the pipe leading to the pit which is not to be used should be kept closed.

Toilet house

The construction of a toilet house can be done according to one's financial strength and convenience. It can include brick construction, cement concrete toilet house.

1.4 Tool content required

Materials such as bricks, cement, sand, sewers, aqueducts, pits and observatory lids and pipes are required to construct two pit toilets. In addition, the type of equipment required for the toilet will have to be provided according to the type of equipment required for the excavation. With at least one trained bricklayer and two other unskilled workers, the construction can be completed in about three days.
</p>
<p>1.5 Estimated cost capital investment

Approximately Rs. Costs 12,000 to 15,000. No special costs are required for maintenance and repair. Closing one pit and putting another into use, pumping out the pit from time to time are important aspects in terms of maintenance and repair. All of these things can be done at home. Only two people in the house are expected to take 1 day for this work only.

Features of construction of two drainage toilets:

1) It is cheaper. It costs less than half as much as septic toilet.

2) It requires less water.

3) It also takes up relatively less space.

4) It does not spread the disease.

5) It does not stink.

6) It gives good fertilizer.
</p>
<p>Points to keep in mind while constructing toilet toilets:

1) Bottom floor concrete should be poured only under the wall. Leave the middle part open.

2) Leave the skull in one layer side by side. Do not increase or decrease the number and size of skulls.

3) Keep the diameter of the pipe 4 inches.

4) The pipe should fit 6 inches inside the wall.

5) Lower the pipe by one foot and a half to two inches.

6) Slow down the bottom of the chamber. Don't get me wrong.

7) Make a nice Y-shaped groove in the chamber and knead it well.

8) Use a 20 mm water sealed trap, (cock) and 20 inch manure with a slope of 25 to 30 degrees.

9) Sit in water seal trap and sewer level.

10) Keep a distance of at least 8 inches between the stool and the back wall.

11) Do not install vent pipe (gas pipe) in this toilet.

12) Before covering the tanks, clean the bottom, shells, pipes, chambers etc., do not leave any goods lying anywhere.

13) Fill the cracks in the lids properly.

14) Pour 9 to 10 inches of soil over the lids.

15) Before closing the lid on the chamber, close the pipe with a brick.

Septic tank toilet:
</p><p>
This technology involves the construction of a tank in cement concrete to decompose the feces. This tank is called septic tank. This technology involves the decomposition of feces with the help of bacteria that grow without air.

Toilet seating and excreta disposal - Similar to seepage pit toilets, this toilet has a seating area and a toilet. Water seals are installed to prevent insects from reaching the faeces and to prevent foul odor in the toilet during decomposition of faeces.

Toilet house - In septic tank system toilet seating and construction of toilet house is generally done in the same way as two pit toilets. However, proper construction of septic tank is a very important aspect.

The size of the tankTotal Volume of the Tank The water in the tank per day is kept in liquid tank (45 days) in two or three cups. When three cups are made, all the cups should be the same size. So if you want to make only two compartments, the first compartment should be 2/3 of the total length and the second compartment should be small ie 1/3 of the total length. The water from the first compartment is placed in the second compartment and in the wall to move on. The feces in the tank are generally divided into three parts. Light matter floats in the upper 1/3, heavy matter floats in the lower 1/3, and water with the least solids floats in the middle 1/3. According to this design, the joint placed in both the compartments should be placed in the middle 1/3. In the first and second compartments the coupling is placed at 40% of the total height of the water, while in the second and third compartments the coupling is placed at 40% above the total water height. This allows water with the least solids to move forward and the process of decomposition of solids stored at the bottom to continue. In septic tanks (as shown in the figure) the excretion of feces takes place through bacteria which can live without the presence of air. It also produces methane and other gases. However, the gas produced in this type is released into the air with the help of a vent pipe mounted on the septic tank. This type of gas is not environmentally safe as it is harmful to the air.


Septic tank toilet
2.5 Estimated cost

The approximate cost of constructing a 1 cubic meter sized septic tank is approximately 25,000 degrees. The maintenance and repair of a septic tank does not incur any special expense other than pumping out the sludge after a certain period of time. A pump is used to clean the septic tank. Pumps have to be procured from the Gram Panchayat or the nearest Municipal Council. Thus the estimated cost for cleaning the septic tank by the pump is Rs. 2,000 to 3,000.

</p><p>

Solid Waste and Sewage Management:

Solid waste:

In any human community, solids are excluded from domestic, public and commercial activities as useless. Although they are actually useful, they become useless after a certain amount of time. Such a substance is solid waste.

Classification of solid waste: -

Solid waste can be divided into four types according to its management system.

A) Organic waste (biodegradable).

B) Inorganic waste (biodegradable).

E) Dust, soil, rocks, etc.

E) Hazardous waste.
</p><p>
Organic Waste Management: -

Organic waste is usually in large amounts in wet form. It mainly consists of home cooked food, waste vegetables, fish, meat, market waste vegetables, mulch, tree branches, paper etc.

In nature, decomposition and digestion of organic matter is carried out naturally by bacteria and fungi. However, due to the coexistence of human beings, we have to make conscious arrangements for the management of organic waste in such settlements. It is convenient and beneficial to process organic waste naturally in the climatic conditions of India. Cold air countries use combustion processes, chemical decomposition methods, but this method pollutes the environment so it is advantageous to use natural bacteriological processes in our country.

1. Khatkhadda: -

Organic matter is constantly decomposed and digested in nature. Various composting methods have been developed using this principle. Generally, the trench for home use can be 3 feet wide and 3 feet or more feet as per convenience. Garbage can be filled in these pits in various ways.

2. Biogas Technology:

It involves aerobic digestion. Organic matter is digested without oxygen. This function is caused by aerobic bacteria. When organic matter decomposes without oxygen, it produces flammable methane, carbon dioxide, hydrogen, etc., and fertilizer. If some organic matter can be obtained in large quantities, it is beneficial to set up a biogas plant there. By separating the substances which are suitable for vacuum digestion, the biological plant of that substance can be vacuum digested. The biogas produced from it can be used as fuel and the resulting manure can be sold or used for agriculture. Organic plants such as those running on vegetable waste in the market, running on factory waste, etc. have been successful.

3. Vermicompost: -

Many experiments have shown that earthworms convert organic waste into excellent compost. Earthworms use organic matter as food. The more efficient species have been differentiated by cultivating different species of earthworms and cultivating only certain species. Such deliberately raised earthworms are released into the rubbish heap. Earthworms eat all the waste and convert it into compost. This fertilizer has become a very useful organic fertilizer for agriculture. The methods used for earthworm use vary according to the species of earthworm. The right caste has to be chosen according to the specific situation.

Production of vermicompost:

Organic manure is made from the waste with the help of earthworms. This helps in increasing the agricultural production as well as getting the fertilizer along with the elimination of waste.

Add a piece of flat stone to the bottom of the pit. Dispose of non-perishable waste bins, kadaba, pacharat, partially decomposed waste.

The pit should be covered with a layer of daily dung, cattle excrement, dry grass, leaf litter, crop residues, crop straw, or litter, household as well as litter.

When it reaches a height of 25 cm, add water so that it becomes soft. And they can be pressed tight. After filling a layer in this way, add cow dung and some ash or soil. Therefore, the action of Kujna will be faster.

The last layer should be dried waste. The waste in this full filled pit must be wet all the time. The waste layer should not be too thick. Otherwise the temperature in the pit reaches 60 degrees Celsius and this heat will cause damage to the earthworms.

About one and a half kg or one and a half thousand earthworms should be put in each pit. It takes 30 to 40 days for this number to double. Then separate the earthworm and earthworm manure from the pit.

To separate earthworms from manure, put rotten waste in the shade and stop sprinkling water on it. Therefore, all the earthworms will accumulate in the lower part of the mound where the moisture content is higher than the top layer.

Prepared vermicompost should be applied in the soil. This will maintain the level of organic matter in the soil

For this, Rs. 11520 / - will be given as grant.

Nadep:

In this method the landfill is built on the ground with the help of bricks. In Vitkama, holes are kept from time to time for the process of decomposition and waste, dung and soil are filled in different layers in this tank as above. This method gives better quality of fertilizer. However, this method requires initial capital investment for pit construction. (Digestion takes place in the vicinity of oxygen by bacteria. This process is called organic digestion. This process involves the digestion of organic matter in the presence of oxygen. Gandhi National Rural Employment Guarantee Scheme Rs. 10746 / - will be given as grant.

Inorganic Waste Management:

This includes glass, plastic, wood, rubber, various metals etc.</p>
                                    </div>
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
	 <a id="blinker" href="https://bhulekh.mahabhumi.gov.in/" target="_blank" style="font-size:21px">Click here to get the excerpt from 7/12.</a><br>
					&nbsp &nbsp<a id="blinker1" href="http://epaper.lokmat.com/" target="_blank" style="font-size:21px">Please click here and see the newspaper</a>
    <!----------- Testimonials------------->
    <div class="sidebar-widget wow fadeInUp outer-top-vs outer-bottom-vs" style="background-color: antiquewhite;">
        <div id="testimonial" class="advertisement">
            
                    <div class="item">
                        <div class="testimonials"><em>"</em>The development of the village and the technology in the village is quite up to date.<em>"</em></div>
                        <div class="clients_author">Ahamadnagar<span>Loni</span> </div>
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
                        <h4 class="module-title" style="color:#898989;">Government web site</h4>
                    </div>
                    <div class="module-body">
                        <ul class="list-unstyled">
                            <li class="first"><a title="Department of Rural Housing and Rural Developement" href="https://rdd.maharashtra.gov.in/en" target="_blank">Department of Rural Housing and Rural Development</a></li>
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
                            <li class="first"><a title="Online voter card" href="https://voterportal.eci.gov.in/" target="_blank">Online voter card</a></li>
                            <li class="first"><a title="Aadhar Card" href="https://uidai.gov.in/my-aadhaar/get-aadhaar.html" target="_blank">Online Aadhar Card</a></li>
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
                            <li class="first"><a href="javascript:void(0);" title="APMC Fire" target="_blank">APMC Fire : (02763) 272751</a></li>
                            
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
