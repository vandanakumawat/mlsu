<?php
require("secondaryHeader.php");

if(isset($_GET["pageName"])) { 
    echo "<script> var pageName = '".$_GET["pageName"]."'; </script>"; 
} 
else {
    echo "<script> var pageName = 'null'; </script>"; 
} 
?>

<html>
  <head>
    <title>Affiliated Colleges</title>
     <meta charset="utf-8">
    <meta name="keywords" content="list, affiliated, college, colleges, affiliation, registration, teaching">
     <meta name="viewport" content="width=device-width,initial-scale=1">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <link rel="stylesheet" type="text/css" href="css/department.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script>

if(pageName == "null") {
    $(document).ready(function() {
        $("#loadingContainer").load("ListAffiliatedCollege.php");
    });
}
else {
    if(pageName != "") {
        $(document).ready(function() {
            $("#loadingContainer").load(pageName);
        });
    }
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
	 		  <table  height='40%' style="width: 40%" cellpadding="10" id="sideNavigationColumn" align='left' cellspacing="0">
				 	<tr>
                    <td id="listname"><b>Affiliated Colleges</b></td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('ListAffiliatedCollege.php')" style="text-decoration: none;color: black">List of Affiliated College</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('AffiliationNotification.php')" style="text-decoration: none;color: black">      
                       Affiliation Notifications</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="https://college.mlsuportal.in/loginpage.aspx" onclick="loadPage('#')" style="text-decoration: none;color: black">College Panel</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="https://affiliation.mlsuportal.in/Loginpage_Aff.aspx" onclick="loadPage('#')" style="text-decoration: none;color: black">Online Affiliation Form</a> </td>
                </tr>
				<tr>
                    <td id='listname1'> <a href="https://mlsuportal.in//PRINCIPLE_LECTURER/Aff_Principal_Lecturer_Performa_Application.aspx" onclick="loadPage('#')" style="text-decoration: none;color: black">Registration for Teaching Faculty</a> </td>
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