<html>
  <head>
    <title>Student Attendance</title>
    <meta name="keywords" content="attendance, attendance, student">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="css/department.css">
   <link rel="stylesheet" type="text/css" href="css/departmentofscience.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="javascript/fetchAttendance.js"></script>
<script>

/*$(document).ready(function() {
    $("#loadingContainer").load("Vice-Chancellor.php");
});

function loadDepartment(departmentName) {
    $("#loadingContainer").load(departmentName, function() {
        //alert(departmentName);
    });
}*/

</script>
</head>
<body style='background: #E9E9E9'>

   <div style="padding-left: 25%;" class="container-fluid">
    <div class="row">
        <div class='col-md'>
            <br>
            <!-- Course Comobo box -->
            <div class="row">
                <div class="col-md-4">
                    Select Course
                </div>
                <div class="col-md-4">
                    <select class="form-control" id="courseCombo" onchange="fetchFaculty(this.value)" name="attendanceCourse">
                        <option value="null">--Select Course--</option>
                        <option value="Under Graduate">Under Graduate</option>
                        <option value="Under Graduate (Semester)">Under Graduate (Semester)</option>
                        <option value="Post Graduate">Post Graduate</option>
                        <option value="Post Graduate (Semester)">Post Graduate (Semester)</option>
                    </select>
                </div>
            </div>
            <br>

            <!-- Course Comobo box -->
            <div class="row">
                <div class="col-md-4">
                    Select Faculty
                </div>
                <div class="col-md-4">
                    <select class="form-control" id="facultyCombo" onchange="fetchClass(this.value)" name="attendanceFaculty">
                        <option value="null">--Select Faculty--</option>
                    </select>
                </div>
            </div>
            <br>

            <!-- Year Comobo box -->
            <div class="row">
                <div class="col-md-4">
                    Select Class
                </div>
                <div class="col-md-4">
                    <select class="form-control" id="classCombo" onchange="fetchPaper()" name="attendanceClass">
                        <option value="null">--Select Class--</option>
                    </select>
                </div>
            </div>

            <!-- Syllabus search result -->
            <br>
            <div class="row">
                Attendance:-
                <div id="paperResult" class="col-md">
                    
                </div>
            </div>
        </div>
      
  </div>

</body>
</html>