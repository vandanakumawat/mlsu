<html>
  <head>
    <title>Facilities & Other Activities</title>
    <meta name="keywords" content="facilities, other, activities, facilities, library, hostels, scholarship, Games, sports, central, services">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="css/department.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script>

/*$(document).ready(function() {
    $("#loadingContainer").load("OnlineAdmission.php");
});
*/

function loadDepartment(departmentName) {
    $("#loadingContainer").load(departmentName, function() {
        //alert(departmentName);
    });
}

</script>
 </head>
<body style='background: #E9E9E9'>
   <div class="container-fluid">
    <div class="row">
      <div class='col-md'>
        <table  height='100%' width="70%"  cellpadding="10" style="margin-top: 4%"  align='left' cellspacing="0">
          <tr>
                    <td id="listname"><b>Facilities & Other Activities</b></td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('CentralLibrary.php')" style="text-decoration: none;color: black">Central Library</a> </td>
                </tr>
                <tr>            
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('hostel.php')" style="text-decoration: none;color:black">Hostels</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('FinancialAssistance.php')" style="text-decoration: none;color:black">Scholarships & Financial Assistance</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('NationalServices.php')" style="text-decoration: none;color:black">National Services</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('Games.php')" style="text-decoration: none;color:black">Games & Sports</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadDepartment('CurricularActivity.php')" style="text-decoration: none;color:black">Co-curricular Activities</a> </td>
                </tr>
           </table>
      </div>
  </div>
</body>
</html>