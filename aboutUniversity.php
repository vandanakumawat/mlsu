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
    <title>About University</title>
    <meta name="keywords" content="About, about, MLSU, university, college, us, mlsu, vision, mission, kulgeet, act, statutes, iqac, aicte, bci, pci, ugc, naac, certificate, pear">
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
        $("#loadingContainer").load("aboutOrganisation.php");
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
	 <div class='container-fluid'>
	 	<div class="row">
	 		<div class='col-md'>
	 		  <table  height='75%' style="width:43%" cellpadding="10" id="sideNavigationColumn" align='left' cellspacing="0">
				 	<tr>
                    <td id="listname"><b>About University</b></td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('aboutOrganisation.php')" style="text-decoration: none;color: black">About Orgainisation</a> </td>
                </tr>
                <tr>            
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('visionMission.php')" style="text-decoration: none;color:black" >Vision & Mission</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('kulgeet.php')" style="text-decoration: none;color:black">Kulgeet</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('actStatutes.php')" style="text-decoration: none;color:black">Act & Statutes</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('graduationAttribute.php')" style="text-decoration: none;color:black">Graduation Attribute</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('IQAC.php')" style="text-decoration: none;color:black">IQAC</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('AICTE.php')" style="text-decoration: none;color:black">AICTE</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('BCI.php')" style="text-decoration: none;color:black">BCI</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('PCI.php')" style="text-decoration: none;color:black">PCI</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('UGC.php')" style="text-decoration: none;color:black">UGC</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('NAACPear.php')" style="text-decoration: none;color:black">NAAC Pear Team Report</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('NAACCertificate.php')" style="text-decoration: none;color:black">NAAC Certificate</a> </td>
                </tr>
	         </table>
	 		</div>
	 		<div class='col-md'>
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