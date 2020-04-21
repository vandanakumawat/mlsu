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
    <title>Administration</title>
     <meta charset="utf-8">
     <meta name="keywords" content="administration, governing, body, bodies, minutes, minute, meeting, meetings, administrative, unit">
     <meta name="viewport" content="width=device-width,initial-scale=1">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <link rel="stylesheet" type="text/css" href="css/department.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script>

if(pageName == "null") {
    $(document).ready(function() {
        $("#loadingContainer").load("GoverningBodies1.php");
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
	 		  <table  height='40%' style="width: 40%" cellpadding="10" id="sideNavigationColumn" align='left' cellspacing="0">
				 	<tr>
                    <td id="listname" ><b>Administration</b></td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('GoverningBodies1.php')" style="text-decoration: none;color: black">Governing Bodies</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('MinutesOfMeetings1.php')" style="text-decoration: none;color: black">      
                       Minutes Of Meetings</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('AdministrativeUnit.php')" style="text-decoration: none;color: black">Administrative Unit</a> </td>
                </tr>
            </table>
	 		</div>
	 		<div class='col-md' style="margin-left: 2%">
	 			<div id="loadingContainer">
	 			      
				</div>	
	 	    </div>
	 	</div>
	 	</div>
         <br><br>
    <?php footer(); ?>
</body>
</html>