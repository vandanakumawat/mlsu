<?php
require("header.php");
?>

<script src="javascript/autoSlide.js"></script>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.8"/>
        <title>Welcome to Mohanlal Sukhadia University, Udaipur</title>
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <?php 
            topPanel();
            navbar(0); 
        ?>
    </head>

    <!-- Image slider start (The image slider at the top) -->
    <div class="mainImageSlider">
        <div id="slideLeft">
            <a href="javascript:void(0)" onclick="slideLeft()"> &nbsp;<&nbsp; </a>
        </div>

        <img id="imageSlide" src="images/sliderBackground0.jpg" alt="slider image" width="100%" height="100%">

        <div id="slideRight">
            <a href="javascript:void(0)" onclick="slideRight()"> &nbsp;>&nbsp; </a>
        </div>
    </div>

    <!-- Image slider end -->

    <!-- Important Links start (The top 4 links newly included) -->

    <table cellpadding="5px" class="headerImportantLinks" width="180%">
        <tr>
            <td> <a href="#"> NRC-Biotechnology </a> </td>
        </tr>
        <tr>
            <td> <a href="#"> Geeta Swadhyaya </a> </td>
        </tr>
        <tr>
            <td> <a href="#"> NIRF </a> </td>
        </tr>
        <tr>
            <td> <a href="#"> Final Year Students Seeking Placement Assistance (Student Portal) </a> </td>
        </tr>
    </table>

    <!-- Imporatant links end -->

    <!-- About university start (the images of governor and information about university) -->

    <table class="aboutUniversity" width="100%">
        <tr>
            <td id="governorBlock">
                <img src="images/temp-user-icon.jpg" alt="temp-user-icon" width="80%">
                <br> Sh. Kalyan Singh
                <br> Hon'ble Governor
                <br> <a href="#">Raj Bhawan Website</a>
            </td>
        </tr>
        <tr>
            <td id="governorBlock">
                <img src="images/temp-user-icon.jpg" alt="temp-user-icon" width="80%">
                <br> Prof. J. P. Sharma
                <br> Hon'ble Vice Chancellor
                <br> <a href="#">Know More</a>
            </td>
        </tr>
        <tr>
            <td id="universityDescription">
                <h1> <i> About Mohanlal Sukhadia University </i> </h1>
                Mohanlal Sukhadia University (erstwhile Udaipur University) at Udaipur is a State University established by an Act in the year 1962 to cater the needs of higher education in Southern Rajasthan with more then 2.25 Lakh Students. Mohanlal Sukhaida University is NAAC Accredited 'A' Grade State University and is located in Aravalli Hill Area largely dominated by tribal populations. Endowed with rich cultural heritage, natural resources and beautiful landscape, Udaipur is a world renowned tourist attraction.
                <br><br>
                Ever since its inception university has been striving to maintain excellence in teaching, research and community service. Great emphasis has been laid in creating scientific temper, maintaining high ethical values and in keeping pace with emerging areas of higher learning. University has ensured overall socio-economic growth of all the sections of society by encouraging greater access and inclusive approach making it most preferred institution for higher education, learning and research.
            </td>
        </tr>
        <tr>    
            <td style="padding: 5%">
                <a href="#" id="readMoreButton"> Read More </a>
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
        </table>
    </div>
    <!-- MLSU by numbers end -->

    <!-- Notifications start -->

    <div class="notifications">
        <h1> <i> Notifications </i> </h1>

        <table width="100%" >
            <tr>
                <td id="notificationHead"> General </td>
                <td id="notificationHead"> Examinations </td>
            </tr>

            <tr>
                <td id="notificationContent">
                    <div id="notificationBlock">
                        <legend> <span> 04 </span> <br> <span style="font-size: 40px"> Sep </span> </legend>
                        Lorem Ipsum Dolor Sit Amet Consecteur Adipscing Elit
                    </div>
                </td>

                <td id="notificationContent">
                    <div id="notificationBlock">
                        <legend> <span> 04 </span> <br> <span style="font-size: 40px"> Sep </span> </legend>
                        Lorem Ipsum Dolor Sit Amet Consecteur Adipscing Elit
                    </div>
                </td>
            </tr>

            <tr>
                <td style="padding: 40px">
                    <a id="navNotification" onclick="previousNotification()" href="javascript:void(0)"><</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a id="navNotification" onclick="nextNotification()" href="javascript:void(0)">></a>
                </td>

                <td style="padding: 40px">
                    <a id="navNotification" onclick="previousNotification()" href="javascript:void(0)"><</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a id="navNotification" onclick="nextNotification()" href="javascript:void(0)">></a>
                </td>
            </tr>

            <tr>
                <td id="notificationHead"> <br><br> Upcoming Events </td>
                <td id="notificationHead"> <br><br> Tenders </td>
            </tr>

            <tr>
                <td id="notificationContent">
                    <div id="notificationBlock">
                        <legend> <span> 04 </span> <br> <span style="font-size: 40px"> Sep </span> </legend>
                        Lorem Ipsum Dolor Sit Amet Consecteur Adipscing Elit
                    </div>
                </td>

                <td id="notificationContent">
                    <div id="notificationBlock">
                        <legend> <span> 04 </span> <br> <span style="font-size: 40px"> Sep </span> </legend>
                        Lorem Ipsum Dolor Sit Amet Consecteur Adipscing Elit
                    </div>
                </td>
            </tr>

            <tr>
                <td style="padding: 40px">
                    <a id="navNotification" onclick="previousNotification()" href="javascript:void(0)"><</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a id="navNotification" onclick="nextNotification()" href="javascript:void(0)">></a>
                </td>

                <td style="padding: 40px">
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
        <h1> <i> Departments </i> </h1>

        <table width="100%">
            <tr>
                <td>
                    <img src="images/scienceDepartment.jpg" alt="Science" height="250px" width="250px">
                </td>

                <td>
                    <img src="images/commerceDepartment.jpg" alt="Commerce" height="250px" width="250px">
                </td>

                <td>
                    <img src="images/humanitiesDepartment.jpg" alt="Humanities" height="250px" width="250px">
                </td>
            </tr>
        </table>
    </div>

    <!-- Departments end -->

    <!-- Gallery start -->

    <div class="gallery">
        <table cellspacing="0px" width="100%">
            <tr>
                <td width="33.5%">
                <h1> <i> Gallery </i> </h1>
                </td>

                <td id="galleryBackground" width="15%">
                    <a href="#"> <img id="galleryImage" src="images/sliderBackground0.jpg" alt="Images" height="400px" width="100%"> </a>
                </td>

                <td id="galleryBackground" width="15%">
                    <a href="#"> <img id="galleryVideo" src="images/sliderBackground1.jpg" alt="Videos" height="400px" width="100%"> </a>
                </td>

                <td id="galleryBackground" width="15%">
                    <a href="#"> <img id="galleryVirtualTour" src="images/sliderBackground2.jpg" alt="Virtual Tour" height="400px" width="100%"> </a>
                </td>

                <td width="6.5%"> </td>
            </tr>
        </table>
    </div>

    <!-- Gallery end -->

    <!-- Footer start -->

    <div class="footer">
        <table  cellpadding="10px" width="100%">
            <tr>
                <td id="footerHead" colspan="5"> Important Links </td>
            </tr>

            <tr>
                <td id="footerImportantLinks" colspan="2" width="50%">
                    Digital India <br>
                    UGC <br>
                    AICTE <br>
                    Sakshat <br>
                    DCE, Rajasthan <br>
                    NATS <br>
                    IUMS Portal <br>
                    SFAB Empanelment
                </td>

                <td id="footerImportantLinks" colspan="2" width="50%">
                    Raj Bhawan <br>
                    NMEICT <br>
                    Govt of Rajasthan <br>
                    MHRD <br>
                    DST, New Delhi <br>
                    DST, Jaipur <br>
                    Vidya Lakshmi Portal <br>
                    University Recruitment <br>
                </td>

            <tr>
                <td id="footerHead" colspan="4"> Address </td>
            </tr>
            <tr>
                <td id="footerAddress" colspan="4">
                    Mohanlal Sukhadia University <br>
                    Udaipur 313001, Rajasthan, India <br>
                    EPABX: 0294-2470198 / 2471035 / 2471969 <br>
                    Fax: +91-294-2471150 <br>
                    Email: registrar@mlsu.ac.in <br>
                    GSTIN: 08AAAJM1548D1ZE <br> 
                </td>
            </tr>
            <tr>
                <td id="footerHead" colspan="4"> Locate Us </td>
            </tr>
            <tr>
                <td colspan="4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3627.855974448338!2d73.72924605009723!3d24.59416626185899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e5e94707e587%3A0xf61db2122d651bfe!2sMohanlal+Sukhadia+University+Udaipur!5e0!3m2!1sen!2sin!4v1541481356191" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </td>
            </tr>
            
            <tr>
                <td id="footerLinks" colspan="4" > 
                    Privacy Policy &nbsp;&nbsp; | &nbsp;&nbsp; Disclaimer &nbsp;&nbsp; | &nbsp;&nbsp; Terms of Use 
                </td>
            </tr>

            <tr> 
                <td  id="footerLinks" colspan="4"> Nodal Officer: Dr. Avinash Panwar </td>                
            </tr>

            <tr>
                <td id="footerLinks" colspan="2" >
                    Last Updated On: 06/11/2018 
                </td>
                <td id="footerLinks" colspan="3"> Visitors: 00000001 </td>
            </tr>

            <tr>
                <td id="socialMediaLinks" width="20%"> <a href="#"> <img src="images/contatcFacebook.png" alt="F" height="50px" width="50px"> </a> </td>
                <td id="socialMediaLinks" width="20%"> <a href="#"> <img src="images/contactTwitter.png" alt="F" height="50px" width="50px"> </a> </td>
                <td id="socialMediaLinks" width="20%"> <a href="#"> <img src="images/contactLinkedIn.png" alt="F" height="50px" width="50px"> </a> </td>
                <!--td width="20%"> <a href="#"> <img src="images/contactGoogle.png" alt="F" height="50px" width="50px"> </a> </td-->
                <td id="socialMediaLinks" width="20%"> <a href="#"> <img src="images/contactYoutube.png" alt="F" height="50px" width="50px"> </a> </td>
            </tr>

            <tr>
                <td id="aboutUs" colspan="4">
                    This Website was made by <a href="javascript:void(0)" onclick="alert(' Ashrut \n Siddharth \n Tirthika \n Vandana')"> our students </a>.
                </td>
            </tr>
        </table>
    </div>

    <!-- Footer end -->
</html>