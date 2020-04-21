<?php

require_once("database.php");

$sql0 = "SELECT * FROM WebsiteInformation";
$result0 = mysqli_query($connection, $sql0);
$row0 = mysqli_fetch_array($result0);

$lastUpdate = strtotime($row0["lastUpdate"]);
$lastUpdate = date("d/m/Y", $lastUpdate);
$totalVisitors = $row0["totalVisitors"];

function footer() {
	global $lastUpdate;
	global $totalVisitors;
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>	
        <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
   <div class="container-fluid">
   	  <div class="row" style="background-color:white">
   	  	<div class="col-md-4">
   	  		<h4 id="FooterHeads">Important Links</h4><br>
   	  		<table id="TableHeads" cellpadding="5">
   	  		   <tr>
   	  		   	<td id="FooterSubHeads"> <a href="http://www.digitalindia.gov.in/">Digital India</a></td>
   	  		   	<td id="FooterSubHeads">&nbsp;&nbsp;&nbsp;<a href="http://rajbhawan.rajasthan.gov.in/content/rajbhawan/en.html">Raj Bhawan</a></td>
   	  		   </tr>
   	  		   <tr>             
				      <td id="FooterSubHeads"><a href="http://www.ugc.ac.in/">UGC</a></td> 
				      <td id="FooterSubHeads">&nbsp;&nbsp;&nbsp;<a href="http://mhrd.gov.in/technology-enabled-learning-0">NMEICT</a></td>
			       </tr>
			        <tr>               
				      <td id="FooterSubHeads"><a href="http://www.aicte-india.org/">AICTE</a></td>
				      <td id="FooterSubHeads">&nbsp;&nbsp;&nbsp;<a href="https://rajasthan.gov.in/Pages/default.aspx">Govt of Rajsthan</a></td>
			       </tr>
			       <tr>                 
				      <td id="FooterSubHeads"><a href="http://www.sakshat.ac.in/">Sakshat</a></td>
				      <td id="FooterSubHeads">&nbsp;&nbsp;&nbsp;<a href="http://mhrd.gov.in/">MHRD</a></td> 
			       </tr>
			       <tr>        
				      <td id="FooterSubHeads"><a href="http://dce.rajasthan.gov.in/">DCE,Rajasthan</td>
				      <td id="FooterSubHeads" >&nbsp;&nbsp;&nbsp;<a href="http://www.dst.gov.in/">DST, New Delhi</a></td>   
			       </tr>
			       <tr>            
				      <td id="FooterSubHeads"><a href="http://www.mhrdnats.gov.in/">NATS</a></td>
				      <td id="FooterSubHeads">&nbsp;&nbsp;&nbsp;<a href="http://dst.rajasthan.gov.in/">DST, Jaipur</a></td>
			       </tr>
			       <tr>                 
				      <td id="FooterSubHeads"><a href="https://iums.mlsuportal.in/">IUMS Portal</a></td>
				      <td id="FooterSubHeads">&nbsp;&nbsp;&nbsp;<a href="http://vidhyalakshmi.co.in/">Vidya Lakshmi Portal</a></td> 
			       </tr>
			       <tr>                
				      <td id="FooterSubHeads"><a href="https://www.mlsu.ac.in/SFAB-Empanelment">SFAB Empanelment</a></td>
				      <td id="FooterSubHeads">&nbsp;&nbsp;<a href="https://www.mlsu.ac.in/Recruitment">University Recruitment</a>  </td>
			       </tr> 	
   	  		</table>  			
   	  	</div>
   	  	<div class="col-md-4">
   	  		<h4 id="FooterHeads">Address</h4>
   	  		<p id="FooterSubHeads" >
   	  					Mohanlal Sukhadia University<br>
						Udaipur 313001, Rajasthan, India<br>
						EPABX: 0294-2470918/ 2471035/ 2471969<br>
						Fax:+91-294-2471150<br>
						E-mail: registrar@mlsu.ac.in<br>
						GSTIN: 08AAAJM1548D1ZE<br><br>
   	  	    <a href="https://www.mlsu.ac.in/category.php?catid=14&pageid=433">Privacy Policy</a> 
				| 
			<a href="https://www.mlsu.ac.in/category.php?catid=14&pageid=434">Disclaimer</a> 
				| 
			<a href="https://www.mlsu.ac.in/category.php?catid=14&pageid=435">Terms of Use</a> 	<br>
    		Nodal Officer : Dr. Avinash Panwar<br>Last Updated on : <?php echo $lastUpdate; ?> 
			| Visitors:  <?php echo $totalVisitors; ?>
			
 	  		</p> 
   	  		
   	  	</div>
   	  	<div class="col-md-4">
   	  		<h4 id="FooterHeads">Locate Us</h4>
   	  		<iframe style="margin-left: 5%"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3627.855974448338!2d73.72924605009723!3d24.59416626185899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e5e94707e587%3A0xf61db2122d651bfe!2sMohanlal+Sukhadia+University+Udaipur!5e0!3m2!1sen!2sin!4v1541481356191" width="88%" height="120" frameborder="0" style="border:0;" allowfullscreen></iframe>
   	  		<br><br>
   	  		<p id="IconHeads">
				<a href="sitemap.xml" target="blank">Sitemap</a> &nbsp;&nbsp; | &nbsp;&nbsp;
   	  			<a href="#"> 
                    <img id="contactLinkedIn" onmouseover="document.getElementById('contactLinkedIn').src='images/contactLinkedInHover.png'" onmouseleave="document.getElementById('contactLinkedIn').src='images/contactLinkedIn.png'" src="images/contactLinkedIn.png" alt="L" height="30px" width="30px">
				</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#"> 
                    <img id="contactYoutube" onmouseover="document.getElementById('contactYoutube').src='images/contactYoutubeHover.png'" onmouseleave="document.getElementById('contactYoutube').src='images/contactYoutube.png'" src="images/contactYoutube.png" alt="Y" height="30px" width="30px">
				</a>
                &nbsp;&nbsp;&nbsp;
                <a href="https://twitter.com/mlsuniversity"> 
                    <img id="contactTwitter" onmouseover="document.getElementById('contactTwitter').src='images/contactTwitterHover.png'" onmouseleave="document.getElementById('contactTwitter').src='images/contactTwitter.png'" src="images/contactTwitter.png" alt="T" height="30px" width="30px">
				</a>
                &nbsp;&nbsp;&nbsp;
                <a href="https://www.facebook.com/mohanlalsukhadiauniversityudaipur/"> 
                    <img id="contatcFacebook" onmouseover="document.getElementById('contatcFacebook').src='images/contatcFacebookHover.png'" onmouseleave="document.getElementById('contatcFacebook').src='images/contatcFacebook.png'" src="images/contatcFacebook.png" alt="F" height="30px" width="30px">
				</a>
			</p>
   	  	</div>
   	  </div>
      <div class="row">
        <div class="col-md">

			<!-- Our students -->
			<div id="us" style="display: none; position: fixed; top: 0; left: 0; z-index: 50; height: 100%; width: 100%; background-color: rgba(0,0,0,0.6);">
				<i onclick="document.getElementById('us').style.display='none'" class="fa fa-close" style="color: white; font-size: 25px; position: fixed; top: 2%; right: 2%;"></i>
				<img src="images/PHOTO_20180927_123823.jpg" height="80%" width="80%" style="position: fixed; top: 10%; left: 10%;">
			</div>

          <!--h5 id="BottomHeads">This website is made by <a href="javascript:void(0)" style="text-decoration:none;"onclick="alert(' Siddharth Surelia \n Ashrut Sharma \n Vandana Kumawat \n Tirthika Bandi')"> <i>Our Students</i> </a></h5-->
		  <h5 id="BottomHeads">This website is made by <a href="javascript:void(0)" style="text-decoration:none;"onclick="document.getElementById('us').style.display='block'"> <i>Our Students</i> </a></h5>
        </div>
      </div>
   </div>
</body>
</html>

<?php
}
?>