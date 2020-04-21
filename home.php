<?php
require_once("primaryHeader.php");
require_once("fetchHeaderLinks.php");
require_once("footer.php");

?>

<script>
function myfunc() {
    if($(window).scrollTop() > 350) {
        document.getElementById('primaryHeader').style.display = "none";
        document.getElementById('scrollPrimaryHeader').style.display = "block";
    }
    else
    if($(window).scrollTop() == 0) {
        document.getElementById('primaryHeader').style.display = "block";
        document.getElementById('scrollPrimaryHeader').style.display = "none";
    }
}

window.addEventListener("scroll", myfunc);
</script>

<html>
    <head>
        <title>Welcome to Mohanlal Sukhadia Website</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--link rel="stylesheet" type = "text/css" href="header.css"-->
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" type = "text/css" href="css/primaryHeader.css">
        <link rel="stylesheet" type = "text/css" href="css/searchBox.css">
        <link type="text/css" rel="stylesheet" href="css/linksCard.css">
        <link href="https://fonts.googleapis.com/css?family=Lato|Playfair+Display:400i|Raleway:400,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="javascript/search.js"></script>
        <script src="javascript/autoSlide.js"></script>
        <script src="javascript/linksCardView.js"></script>
        <script src="javascript/changeFont.js"></script>
        <script src="javascript/changeColor.js"></script>
    </head>

<body id="pageBody">
    <?php primaryHeader(); ?>

    <div class="container-fluid">
        <!-- Important links start -->
            <?php 
                setHeaderLinks(); 
                setResHeaderLinks();
            ?>
        <!-- Important links end -->

        <!-- About university start (the images of governor and information about university) -->
        <div class="row" id="aboutUniversity">
            <div class="col-md-3" id="governorBlock">
                <br><br>
                <div class="col-md">
                    <img id="governorImage" src="images/he.jpg" alt="kalyan" height="150px" width="240px">
                    <br> Sh. Kalyan Singh
                    <br> Hon'ble Governor
                    <br> <a href="http://rajbhawan.rajasthan.gov.in/content/rajbhawan/en.html">Raj Bhawan Website</a>
                </div>
                <br>
                <div class="col-md">
                    <img id="viceChancellorImage" src="images/vc.jpg" alt="jp"  height="150px" width="240px">
                    <br> Prof. J. P. Sharma
                    <br> Hon'ble Vice Chancellor
                    <br> <a href="Administration.php?pageName=Vice-Chancellor.php">Know More</a>
                </div>
                <br>
            </div>

            <div class="col-md" id="universityDescription">
                <h1>About Us</h1>      
                Mohanlal Sukhadia University (erstwhile Udaipur University) at Udaipur is a State University established by an Act in the year 1962 to cater the needs of higher education in Southern Rajasthan with more then 2.25 Lakh Students. Mohanlal Sukhaida University is NAAC Accredited 'A' Grade State University and is located in Aravalli Hill Area largely dominated by tribal populations. Endowed with rich cultural heritage, natural resources and beautiful landscape, Udaipur is a world renowned tourist attraction.
                <br><br>
                <div id="desktopOnly">
                    Ever since its inception university has been striving to maintain excellence in teaching, research and community service. Great emphasis has been laid in creating scientific temper, maintaining high ethical values and in keeping pace with emerging areas of higher learning. University has ensured overall socio-economic growth of all the sections of society by encouraging greater access and inclusive approach making it most preferred institution for higher education, learning and research.
                    <br><br>
                    Conscious about its social responsibilities, the university has played significant role in socio-economic development of backward, under-privileged and socially challenged people through its various extension activities.
                </div>
            </div> 
            <div  id="readMore">
                <a href="aboutUniversity.php?pageName=aboutOrganisation.php" class="colorBlind" id="readMoreButton"> Read More </a>
            </div>
        </div>
    <!-- About university end-->
        
    <!-- MLSU by Numbers desktop begins -->
    <br>
    <div id="mlsuByNumbersContainer" class="mlsuByNumbersDesktop">
        <div id="mlsuByNumbers" style="text-align: center;">
            <h1>MLSU By Numbers</h1>
                <div class="row colorBlind" id="numbersDataContainer">
                    <div class="col-3" id="ratio">
                        
                    </div>
                    <div class="col-3" id="ratio">
                        Situated
                    </div>
                    <div class="col-3" id="ratio">
                        
                    </div>
                    <div class="col-3" id="ratio">
                        NAAC Accredited
                    </div>
                </div>   
                <div class="row colorBlind" id="numbersDataContainer" style="font-weight: normal;">
                    <div class="col-3" id="ratio">
                        <div style="border-radius: 50%; background-color: rgba(0,0,0,0.4); color: white; font-size: 90px; border: 6px solid white; margin: auto; height: 150px; width:150px;"> 4:1 </div>
                    </div>
                    <div class="col-3" id="ratio">
                        <div style="border-radius: 50%; background-color: rgba(0,0,0,0.4); color: white; font-size: 90px; border: 6px solid white; margin: auto; height: 150px; width:150px;"> 4.8 </div>
                    </div>
                    <div class="col-3" id="ratio">
                        <div style="border-radius: 50%; background-color: rgba(0,0,0,0.4); color: white; font-size: 47px; line-height: 300%; border: 6px solid white; margin: auto; height: 150px; width:150px;"> 2500+ </div>
                    </div>
                    <div class="col-3" id="ratio">
                        <div style="border-radius: 50%; background-color: rgba(0,0,0,0.4); color: white; font-size: 90px; border: 6px solid white; margin: auto; height: 150px; width:150px;"> 'A' </div>
                    </div>
                </div>
                <div class="row colorBlind" id="numbersDataContainer" style="padding-bottom: 20px;">
                    <div class="col-3"> Student Teacher <br> Ratio </div>
                    <div class="col-3"> Kilometers from <br> Central Area </div>
                    <div class="col-3"> Post-Graduates <br> Each Year </div>
                    <div class="col-3"> Grade State <br> University </div>
                </div>
        </div>
    </div>

        <!-- MLSU by Numbers mobile begins -->
        <div id="mlsuByNumbersContainer" class="mlsuByNumbersTablet">
            <div id="mlsuByNumbers" style="text-align: center;">
                <h1>MLSU By Numbers</h1>
                    <div class="row colorBlind" id="numbersDataContainer" >
                        <div class="col-6" id="ratio">
                            
                        </div>
                        <div class="col-6" id="ratio">
                            Situated
                        </div>
                    </div>

                    <div class="row colorBlind" id="numbersDataContainer" style="font-weight: normal;">
                        <div class="col-6" id="ratio">
                            <div style="border-radius: 50%; background-color: rgba(0,0,0,0.4); color: white; font-size: 90px; border: 6px solid white; margin: auto; height: 150px; width:150px;"> 4:1 </div>
                        </div>
                        <div class="col-6" id="ratio">
                            <div style="border-radius: 50%; background-color: rgba(0,0,0,0.4); color: white; font-size: 90px; border: 6px solid white; margin: auto; height: 150px; width:150px;"> 4.8 </div>
                        </div>
                    </div>

                    <div class="row colorBlind" id="numbersDataContainer">
                        <div class="col-6"> Student Teacher <br> Ratio </div>
                        <div class="col-6"> Kilometers from <br> Central Area </div>
                    </div>

                    <div class="row colorBlind" id="numbersDataContainer">
                        <div class="col-6" id="ratio">
                            
                        </div>
                        <div class="col-6" id="ratio">
                            NAAC Accredited
                        </div>
                    </div>   

                    <div class="row colorBlind" id="numbersDataContainer" style="font-weight: normal;">
                        
                        <div class="col-6" id="ratio">
                            <div style="border-radius: 50%; background-color: rgba(0,0,0,0.4); color: white; font-size: 47px; line-height: 300%; border: 6px solid white; margin: auto; height: 150px; width:150px;"> 2500+ </div>
                        </div>
                        <div class="col-6" id="ratio">
                            <div style="border-radius: 50%; background-color: rgba(0,0,0,0.4); color: white; font-size: 90px; border: 6px solid white; margin: auto; height: 150px; width:150px;"> 'A' </div>
                        </div>
                    </div>
                    <div class="row colorBlind" id="numbersDataContainer" style="padding-bottom: 20px;">
                        
                        <div class="col-6"> Post-Graduates <br> Each Year </div>
                        <div class="col-6"> Grade State <br> University </div>
                    </div>
            </div>
        </div>
        <!-- MLSU by Numbers end -->

        <!--Notifications start-->
        <div class="container-fluid" style="width:103.6%; margin-left: -2.5%;" id="notificationsContainer">
        <h1>Notifications</h1>
            <div class="row">
                <!-- General notifications block -->
                <div class="col-md" id="notificationContent">
                    <div id="notificationHead"> <a href="Media.php?pageName=General.php"> General </a> </div>
                        <div id="notificationBlock" style="margin-left: auto; margin-right: auto;">
                            <legend id="dateLegend" class="colorBlind"> 
                                <span style="font-size: 40px" id="notif1Date"> 
                                    
                                </span> 
                                <br> 
                                <span style="font-size: 20px" id="notif1Month"> 
                                    
                                </span> 
                            </legend>
                                <span id="notif1Title"> 
                                    
                                </span>
                        </div>
                        <div class="navButtons" style="margin: 25px 29%;">
                            <a id="navNotification" onclick="previousNotification(1)" href="javascript:void(0)"><</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a id="navNotification" onclick="nextNotification(1)" href="javascript:void(0)">></a>
                        </div>
                </div>

                <!-- Examinations notifications block -->
                <div class="col-md" id="notificationContent">
                    <div id="notificationHead"> <a href="ExaminationNotification.php">Examinations</a> </div>
                    <div id="notificationBlock" style="margin-left: auto; margin-right: auto;">
                            <legend id="dateLegend" class="colorBlind"> 
                                <span style="font-size: 40px" id="notif2Date"> 
                                    
                                </span> 
                                <br> 
                                <span style="font-size: 20px" id="notif2Month"> 
                                    
                                </span> 
                            </legend>
                                <span id="notif2Title"> 
                                    
                                </span>
                    </div>
                    <div class="navButtons" style="margin: 25px 29%;">
                        <a id="navNotification" onclick="previousNotification(2)" href="javascript:void(0)"><</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a id="navNotification" onclick="nextNotification(2)" href="javascript:void(0)">></a>
                    </div>
                </div>

                <!-- Upcoming Events notifications block -->
                <div class="col-md" id="notificationContent">
                    <div id="notificationHead"> <a href="Media.php?pageName=UpcomingEvents.php"> Upcoming Events </a> </div>
                    <div id="notificationBlock" style="margin-left: auto; margin-right: auto;">
                            <legend id="dateLegend" class="colorBlind"> 
                                <span style="font-size: 40px" id="notif3Date"> 
                                    
                                </span> 
                                <br> 
                                <span style="font-size: 20px" id="notif3Month"> 
                                    
                                </span> 
                            </legend>
                                <span id="notif3Title"> 
                                    
                                </span>
                    </div>
                       <div class="navButtons" style="margin: 25px 29%;">
                    <a id="navNotification" onclick="previousNotification(3)" href="javascript:void(0)"><</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a id="navNotification" onclick="nextNotification(3)" href="javascript:void(0)">></a>
                </div>

                </div>

                <!-- Tenders notifications block -->
                <div class="col-md" id="notificationContent">
                    <div id="notificationHead"> <a href="Tenders.php"> Tenders </a> </div>
                    <div id="notificationBlock" style="margin-left: auto; margin-right: auto;">
                    <legend id="dateLegend" class="colorBlind"> 
                                <span style="font-size: 40px" id="notif4Date"> 
                                    
                                </span> 
                                <br> 
                                <span style="font-size: 20px" id="notif4Month"> 
                                    
                                </span> 
                            </legend>
                                <span id="notif4Title"> 
                                    
                                </span>
                    </div>
                     
                    <div class="navButtons" style="margin: 25px 29%;">
                    <a id="navNotification" onclick="previousNotification(4)" href="javascript:void(0)"><</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a id="navNotification" onclick="nextNotification(4)"   href="javascript:void(0)">></a>
                    </div>
                </div>
                </div>
            </div>
            
            <!--Departments start-->
            <br>
            <div id="departmentsContainer">
                 <h1>Academics</h1>
                <div class="row" id="departments">
                    <div class="col-md" id="scienceDepartment">
                        <a href='Academics.php?pageName=departmentofscience.php'> 
                            <div class="departmentImgWrapper">
                                <img src="images/ScienceFinal.jpg" alt="Science" height="250px" width="250px">
                            </div>
                        </a>
                     </div>
                    
                    <div class="col-md" id="commerceDepartment">
                        <a href='Academics.php?pageName=departmentofcommerce.php'>
                            <div class="departmentImgWrapper">
                                <img src="images/CommerceFinal.jpg" alt="Commerce" height="250px" width="250px">
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md" id="humanitiesDepartment">
                        <a href='Academics.php?pageName=departmentofhumanities.php'>
                            <div class="departmentImgWrapper">
                                <img src="images/OthersFinal.jpg" alt="Humanities" height="250px" width="250px">
                            </div>
                        </a>
                    </div>
                
                    <div class="col-md" id="lawDepartment">
                        <a href='Academics.php?pageName=departmentoflaw.php'>
                            <div class="departmentImgWrapper">
                                <img src="images/LawFinal.jpg" alt="Other" height="250px" width="250px">
                            </div>
                        </a>
                    </div>
			     </div>
            </div>

            <!-- Gallery desktop start -->
            <div class="row" id="gallery">
                <div class="col-md-6">
                    <h1> <i> Gallery </i> </h1>
                </div>
                <div class="col-md">
                    <div id="imageGallery" class="galleryBackground">
                        <a href="Media.php?pageName=photoGallery.php"> 
                            <img id="galleryImage" src="images/Images.jpg" alt="Images"> 
                        </a>
                    </div>
    
                    <div id="videoGallery" class="galleryBackground">
                        <a href="Media.php?pageName=videoGallery.php"> 
                            <img id="galleryVideo" src="images/Videos.jpg" alt="Videos">
                        </a>
                    </div>
    
                    <div id="virtualTour" class="galleryBackground">
                        <a href="#"> 
                            <img id="galleryVirtualTour" src="images/Virtual%20Tour.jpg" alt="Virtual Tour">
                        </a>
                    </div>
                </div>
            </div>

            <!--Gallery mobile start-->
            <div id="galleryContainer">
                <h1>Gallery</h1>
                <div class="row" id="mobileGallery">
                    
                    <div class="col-md gallerySections">
                        <a href='#'> 
                            <div class="galleryImgWrapper">
                            <img src="images/ImagesResponsive.jpg" alt="Image Gallery" height="250px" width="250px">
                            </div>
                        </a>
                    </div>
                
                    <div class="col-md gallerySections">
                        <a href='#'>
                            <div class="galleryImgWrapper">
                            <img src="images/VideosResponsive.png" alt="Videos" height="250px" width="250px">
                            </div>
                        </a>
                    </div>
                    <div class="col-md gallerySections">
                        <a href='#'>
                            <div class="galleryImgWrapper">
                            <img src="images/VirtualTourResponsive.jpg" alt="Virtual Tour" height="250px" width="250px">
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <?php footer(); ?>
     </div>
</body>
</html>

<?php
require_once("fetchNotifications.php");
?>