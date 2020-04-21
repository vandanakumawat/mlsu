function fetchFaculty(courseName) {
    $.post("fetchAttendance.php", {course: courseName}, function(result) {
        result = result.split("\"");

        document.getElementById("classCombo").innerHTML = "<option value='null'>--Select Semester/Year--</option>";
        document.getElementById("paperResult").innerHTML = "";

        document.getElementById("facultyCombo").innerHTML = "<option value='null'>--Select Faculty--</option>";

        for(i=1; i<result.length; i+=2) {
            document.getElementById("facultyCombo").innerHTML += "<option value='"+result[i]+"'>"+result[i]+"</option>";
        }
    });
}

function fetchClass(facultyName) {
    var courseName = document.getElementById("courseCombo").value;

    $.post("fetchAttendance.php", {faculty: facultyName, course: courseName}, function(result) {
        result = result.split("\"");

        document.getElementById("paperResult").innerHTML = "";

        document.getElementById("classCombo").innerHTML = "<option value='null'>--Select Class--</option>";
        
        for(i=1; i<result.length; i+=2) {
            document.getElementById("classCombo").innerHTML += "<option value='"+result[i]+"'>"+result[i]+"</option>";
        }
    });
}

function fetchPaper() {
    var courseName = document.getElementById("courseCombo").value;
    var facultyName = document.getElementById("facultyCombo").value;
    var className = document.getElementById("classCombo").value;
    
    $.post("fetchAttendance.php", {course: courseName, faculty: facultyName, class: className}, function(result) {
        if(result === "null") {
            document.getElementById("paperResult").innerHTML = "Attendance unavailable";
        }
        else {
            result = result.split("\"");
            
            document.getElementById("paperResult").innerHTML = "";
            for(i=1; i<result.length; i+=2) {
                document.getElementById("paperResult").innerHTML += "<a href='attendance/"+courseName+"/"+facultyName+"/"+className+"/"+result[i]+"' target='blank'> "+result[i]+" </a> <br>";
            }
        }
    });
}