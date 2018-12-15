<?php
require("database.php");
require("header.php");
require("footer.php");
require("headerWithoutScroll.php");
?>

<style>

.footer {
    position: absolute;
    margin: 0;
    top: 385%;
    left: 0;
    width: 100%;
}

</style>

<script>
function myfunc() {
    if($(window).scrollTop() > 350) {
        document.getElementById('headerWithoutScroll').style.display = "none";
        document.getElementById('header').style.display = "block";
    }
    else {
        document.getElementById('headerWithoutScroll').style.display = "block";
        document.getElementById('header').style.display = "none";
    }
}

window.addEventListener("scroll", myfunc);
</script>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome to Mohanlal Sukhadia University, Udaipur</title>
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="javascript/autoSlide.js"></script>
        <script src="javascript/search.js"></script>

        <?php 
            /*topPanel();
            navbar(0); */
            topPanelWithoutScroll(0);
            topPanel(0);
        ?>
    </head>

    <!-- Important Links start (The top 4 links newly included) -->

    <table class="headerImportantLinks" width="100%">
		<tr>
		    <td> <a href="#"> NRC-Biotechnology </a> | <a href="#"> Geeta Swadhyaya </a> | <a href="#"> NIRF </a> | <a href="#"> Final Year Students Seeking Placement Assistance (Student Portal) </a> </td>
        </tr>
    </table>            

    <!-- Imporatant links end -->

    <!-- About university start (the images of governor and information about university) -->

    <table class="aboutUniversity" width="100%" >
        <tr>
            <td id="governorBlock">
                <br><br>
                <img src="images/kalyan.png" alt="kalyan" width="40%" style="border-color: rgb(211, 208, 208);border-style: solid;border-width: thick">
                <br> Sh. Kalyan Singh
                <br> Hon'ble Governor
                <br> <a href="#">Raj Bhawan Website</a>
                <br><br>
            </td>

            <td id="universityDescription" rowspan="2">
                <h1 style="text-align:left;"> <i> About Us </i> </h1>
                
				<div id="aboutcontent" style="text-align:justify;" >
                Mohanlal Sukhadia University (erstwhile Udaipur University) at Udaipur is a State University established by an Act in the year 1962 to cater the needs of higher education in Southern Rajasthan with more then 2.25 Lakh Students. Mohanlal Sukhaida University is NAAC Accredited 'A' Grade State University and is located in Aravalli Hill Area largely dominated by tribal populations. Endowed with rich cultural heritage, natural resources and beautiful landscape, Udaipur is a world renowned tourist attraction.
                <br><br>
                Ever since its inception university has been striving to maintain excellence in teaching, research and community service. Great emphasis has been laid in creating scientific temper, maintaining high ethical values and in keeping pace with emerging areas of higher learning. University has ensured overall socio-economic growth of all the sections of society by encouraging greater access and inclusive approach making it most preferred institution for higher education, learning and research.
                <br><br>
                Conscious about its social responsibilities, the university has played significant role in socio-economic development of backward, under-privileged and socially challenged people through its various extension activities.
                </div>
                <br><br><br>
                <div style="width: 100%; text-align: center;">
                    <a href="aboutorg.php" id="readMoreButton"> Read More </a>
                </div>
		   </td>
        </tr>

       
        <tr>
            <td id="governorBlock">
                <br><br>
                <img src="images/j.jpg" alt="jp" width="40%" style="border-color: rgb(211, 208, 208);border-style: solid;border-width: thick">
                <br> Prof. J. P. Sharma
                <br> Hon'ble Vice Chancellor
                <br> <a href="#">Know More</a>
                <br><br>
            </td>    
        </tr>
    </table>

    <!-- About university end -->

    <!-- MLSU by numbers start -->

    <div class="mlsuByNumbers">
        <h1> <i> MLSU By Numbers </i> </h1>

        <table cellpadding="10px" width="100%">
            <tr> 
                <td> </td>
                <td> Situated </td>
                <td> </td>
                <td> NAAC Accredited </td>
            </tr>

            <tr>
                <td> 
                    <div id="numberCircle" style="font-size:75px;"> 4:1 </div>    
                </td>
                <td> 
                    <div id="numberCircle" style="font-size:75px;"> 4.8 </div>    
                </td>
                <td> 
                    <div id="numberCircle" style="font-size:45px; line-height:275%;"> 2500+ </div>    
                </td>
                <td> 
                    <div id="numberCircle" style="font-size:75px;"> 'A' </div>    
                </td>
            </tr>

            <tr>
                <td> Student Teacher <br> Ratio </td>
                <td> Kilometres from <br> Central Area </td>
                <td> Post-Graduates <br> Each Year </td>
                <td> Grade State <br> University </td>
            </tr>
            <tr>
                <td> </td>
            </tr>
        </table>
    </div>
    <!-- MLSU by numbers end -->

    <!-- Notifications start -->

    <div class="notifications">
        <h1> <i> Notifications </i> </h1>

        <table width="100%">
            <tr>
                <td id="notificationHead"> General </td>
                <td id="notificationHead"> Examinations </td>
                <td id="notificationHead"> Upcoming Events </td>
                <td id="notificationHead"> Tenders </td>
            </tr>

            <tr>
                <td id="notificationContent">
                    <div id="notificationBlock">
                        <legend> <span style="font-size: 40px"> 04 </span> <br> <span style="font-size: 20px"> Sep </span> </legend>
                        Lorem Ipsum Dolor Sit Amet Consecteur Adipscing Elit
                    </div>
                </td>

                <td id="notificationContent">
                    <div id="notificationBlock">
                        <legend> <span style="font-size: 40px"> 04 </span> <br> <span style="font-size: 20px"> Sep </span> </legend>
                        Lorem Ipsum Dolor Sit Amet Consecteur Adipscing Elit
                    </div>
                </td>

                <td id="notificationContent">
                    <div id="notificationBlock">
                        <legend> <span style="font-size: 40px"> 04 </span> <br> <span style="font-size: 20px"> Sep </span> </legend>
                        Lorem Ipsum Dolor Sit Amet Consecteur Adipscing Elit
                    </div>
                </td>

                <td id="notificationContent">
                    <div id="notificationBlock">
                        <legend> <span style="font-size: 40px"> 04 </span> <br> <span style="font-size: 20px"> Sep </span> </legend>
                        Lorem Ipsum Dolor Sit Amet Consecteur Adipscing Elit
                    </div>
                </td>
            </tr>

            <tr>
                <td style="padding: 25px">
                    <a id="navNotification" onclick="previousNotification()" href="javascript:void(0)"><</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a id="navNotification" onclick="nextNotification()" href="javascript:void(0)">></a>
                </td>

                <td style="padding: 25px">
                    <a id="navNotification" onclick="previousNotification()" href="javascript:void(0)"><</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a id="navNotification" onclick="nextNotification()" href="javascript:void(0)">></a>
                </td>

                <td style="padding: 25px">
                    <a id="navNotification" onclick="previousNotification()" href="javascript:void(0)"><</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a id="navNotification" onclick="nextNotification()" href="javascript:void(0)">></a>
                </td>

                <td style="padding: 25px">
                    <a id="navNotification" onclick="previousNotification()" href="javascript:void(0)"><</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a id="navNotification" onclick="nextNotification()" href="javascript:void(0)">></a>
                </td>
            </tr>
        </table>
    </div>

    <!-- Notifications end -->

    <!-- Departments start -->

    <div class="departments">
	<br/><br/>
        <h1> <i>Departments</i> </h1>
   <br/>
        <table width="100%">
            <tr>
                <td>
                    <a href='science.php'> 
                        <img src="images/human.jpg" alt="Science" height="200px" width="200px"> 
                        <div id="scienceDepartmentOverlay">
                            <br><br>
                            <img src="images/Science.png" height="50px" width="50px">
                            <br>
                            <span>Science</span>
                        </div>
                    </a>
                </td>

                <td>
                    <a href='#'>
                        <img src="images/commerce.jpg" alt="Commerce" height="200px" width="200px">
                        <div id="commerceDepartmentOverlay">
                            <br><br>
                            <img src="images/Commerce.png" height="50px" width="50px">
                            <br>
                            <span>Commerce</span>
                        </div>
                    </a>
                </td>

                <td>
                    <a href='#'>
                        <img src="images/human.jpg" alt="Humanities" height="200px" width="200px">
                        <div id="humanitiesDepartmentOverlay">
                            <br><br>
                            <img src="images/Arts.png" height="50px" width="50px">
                            <br>
                            <span>Humanities</span>
                        </div>
                    </a>
                </td>
				<td>
                    <a href='#'>
                        <img src="images/human.jpg" alt="Other" height="200px" width="200px">
                        <div id="lawDepartmentOverlay">
                            <br><br>
                            <img src="images/Law.png" height="50px" width="50px">
                            <br>
                            <span>Law</span>
                        </div>
                    </a>
                </td>
			</tr>
        </table>
    </div>

    <!-- Departments end -->

    <!-- Gallery start -->

    <div class="gallery">
        <table cellspacing="0px" width="100%">
            <tr>
                <td width="35%">
                <h1> <i> Gallery </i> </h1>
                </td>

                <td id="galleryBackground" width="15%">
                    <a href="#"> 
                        <img id="galleryImage" src="images/img.jfif" alt="Images" height="400px" width="100%"> 
                        <div id="galleryImageOverlay">
                            <br><br><br><br><br>
                            <img src="images/Images.png" height="80px" width="80px">
                            <br>
                            <span>Images</span>
                        </div>
                    </a>
                </td>

                <td id="galleryBackground" width="15%">
                    <a href="#"> 
                        <img id="galleryVideo" src="images/sports.jpg" alt="Videos" height="400px" width="100%"> 
                        <div id="galleryVideoOverlay">
                            <br><br><br><br><br>
                            <img src="images/Videos.png" height="80px" width="80px">
                            <br>
                            <span>Videos</span>
                        </div>
                    </a>
                </td>

                <td id="galleryBackground" width="15%">
                    <a href="#"> 
                        <img id="galleryVirtualTour" src="images/virtual.png" alt="Virtual Tour" height="400px" width="100%"> 
                        <div id="galleryVirtualTourOverlay">
                            <br><br><br><br><br>
                            <img src="images/Virtual Tour.png" height="80px" width="80px">
                            <br>
                            <span>Virtual Tour</span>
                        </div>
                    </a>
                </td>

                <td width="5%"> </td>
            </tr>
        </table>
    </div>

    <!-- Gallery end -->

    <!-- Footer start -->
    <?php
        footer();
    ?>
    <!-- Footer end -->
</html>