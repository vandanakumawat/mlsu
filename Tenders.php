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
    <title>Tenders</title>
    <meta name="keywords" content="Tenders, Tender">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="css/department.css">
   <link rel="stylesheet" type="text/css" href="css/departmentofscience.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script>

if(pageName == "null") {
    $(document).ready(function() {
        $("#loadingContainer").load("OpenTenders.php");
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
        <table   cellpadding="10" height="70%" width="50 %" id="sideNavigationColumn" align='left' cellspacing="0">
          <tr>
                    <td id="listname"><b>Tenders</b></td>
                </tr>
                <tr>
                    <td > <a href="javascript:void(0)" onclick="loadDepartment('OpenTenders.php')" style="text-decoration: none;color: black;" id="listname1"> Open Tenders</a> </td>
                </tr>
                <tr>            
                    <td> <a href="javascript:void(0)" onclick="loadDepartment('Limited.php')" style="text-decoration: none;color:black" id="listname1">Limited Tenders</a> </td>
                </tr>
                <tr>
                    <td> <a href="javascript:void(0)" onclick="loadDepartment('ApprovedRates.php')" style="text-decoration: none;color:black" id="listname1">Approved Rates</a></td>
                </tr>
                <tr>
                    <td> <a href="javascript:void(0)" onclick="loadDepartment('PurchaseOrders.php')" style="text-decoration: none;color:black" id="listname1">Purchase Orders </a></td>
                </tr>
                <tr>
                    <td> <a href="javascript:void(0)" onclick="loadDepartment('EMDRefund.php')" style="text-decoration: none;color:black" id="listname1">EMD Refund Form </a> </td>
                </tr>
                <tr>
                    <td > <a href="javascript:void(0)" onclick="loadDepartment('AgreementFormat.php')" style="text-decoration: none;color:black" id="listname1" >Agreement Format</a></td>
                </tr>
           </table>
      </div>
      <div class='col-md' >
	 			<div id="loadingContainer" > 			   
				</div>	
	 	    </div>
  </div>

</body>
</html>