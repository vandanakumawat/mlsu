<?php
require("secondaryHeader.php");
require("footer.php");

if(isset($_GET["pageName"])) { 
    echo "<script> var pageName = '".$_GET["pageName"]."'; </script>"; 
} 
else {
    echo "<script> var pageName = 'null'; </script>"; 
} 
?>

<html>
    <head>
    <title>Contact Us</title>
    <meta name="keywords" content="contact, details, contact, us, centre, center, general, guest, house, booking, number">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <link rel="stylesheet" type="text/css" href="css/department.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script>

if(pageName == "null") {
    $(document).ready(function() {
        $("#loadingContainer").load("General.php");
    });
}
else {
    $(document).ready(function() {
        $("#loadingContainer").load(pageName);
    });
}

function loadPage(departmentName) {
    $("#loadingContainer").load(departmentName, function() {
        //alert(departmentName);
    });
}

</script>
 </head>
<body style='background: #E9E9E9'>
	<?php secondaryHeader(); ?>
	 	<div class="row">
	 		<div class='col-md'>
	 		  <table  height='40%' style="width: 45%" cellpadding="10" id="sideNavigationColumn" align='left' cellspacing="0">
				 	<tr>
                    <td id="listname"><b>Contact Us</b></td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="https://iums.mlsuportal.in/GuestHouse/GHM_guestrequest.aspx" style="text-decoration: none;color: black">Guest House Booking</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="#" onclick="loadPage('ImportantContacts.php')" style="text-decoration: none;color: black">Important Contact No </a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('contactUs1.php')" style="text-decoration: none;color: black">Contact Us</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('LocateUs.php')" style="text-decoration: none;color: black">      
                       Locate Us</a> </td>
                </tr>
            </table>
	 		</div>
	 		<div class='col-md' style="margin-left: 2.5%">
	 			<div id="loadingContainer" >
	 			      
				</div>	
	 	    </div>
	 	</div>
	 	<div class='row' style="margin-top: 0px">
	 		<div class="col-md">
	 		  	
	 		</div>
	 	</div>
  </div>
  <br><br>
    <?php footer(); ?>
</body>
</html>