

<html>
  <head>
    <title>Current Student</title>
    <meta name="keywords" content="current, student, admission, student, portal, calendar, notification, prospectus">
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

function loadPage(departmentName) {
    $("#loadingContainer").load(departmentName, function() {
        //alert(departmentName);
    });
}*/

</script>
 </head>
<body style='background: #E9E9E9'>
   <div class="container-fluid">
    <div class="row">
      <div class='col-md'>
        <table  height='100%' width="70%"  cellpadding="10" style="margin-top: 4%"  align='left' cellspacing="0">
          <tr>
                    <td id="listname"><b>Current Student</b></td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('Admission.php')" style="text-decoration: none;color: black">Online Admission 2018-19</a> </td>
                </tr>
                <tr>            
                    <td id='listname1'> <a href="https://student.mlsuportal.in/" onclick="loadPage('#')" style="text-decoration: none;color:black">Student Portal</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('AcademicCalendar.php')" style="text-decoration: none;color:black">Academic Calendar</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('GeneralNotification.php')" style="text-decoration: none;color:black">General Notification</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('StudentAttendance.php')" style="text-decoration: none;color:black">Student Attendance</a> </td>
                </tr>
                <tr>
                    <td id='listname1'> <a href="javascript:void(0)" onclick="loadPage('UniversityProspectus.php')" style="text-decoration: none;color:black"> University Propectus</a> </td>
                </tr>
           </table>
      </div>
  </div>
</body>
</html>