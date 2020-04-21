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
    <title>Faculty</title>
    <meta name="keywords" content="faculty, science, commerce, management, law, humanities, social, studies">
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
        $("#loadingContainer").load("facultyofscience.php");
    });
}
else {
    $(document).ready(function() {
        $("#loadingContainer").load(pageName);
    });
}

function loadDepartment(departmentName) {
    $("#loadingContainer").load(departmentName, function() {
        //alert(departmentName);
    });
}

</script>

 </head>
<body style='background: #E9E9E9'>
    <?php secondaryHeader(); ?>
	 <div class="container-fluid">
	 	<div class="row">
	 		<div class='col-md'>
	 		  <table  height='60%' style="width:43%" cellpadding="10" id="sideNavigationColumn" align='left' cellspacing="0">
				 	<tr>
                    <td id="listname"><b>Faculty</b></td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('facultyofscience.php')" style="text-decoration: none;color: black">Faculty of Science</a> </td>
                </tr>
                <tr>            
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('facultyofcommerce.php')" style="text-decoration: none;color:black">Faculty of Commerce</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('facultyofmanagement.php')" style="text-decoration: none;color:black">Faculty of Management</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('facultyoflaw.php')" style="text-decoration: none;color:black">Faculty of Law</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('facultyofhumanities.php')" style="text-decoration: none;color:black">Faculty of Humanities</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('facultyofsocialstudies.php')" style="text-decoration: none;color:black">Faculty of Social Sciences</a> </td>
                </tr>
              
	         </table>
	 		</div>
	 		<div class='col-md'>
	 			<div id="loadingContainer" >
	 			   
				</div>	
	 	    </div>
	 	</div>
  </div>
  <br><br>
  <?php require("footer.php"); 
  ?>
</body>
</html>