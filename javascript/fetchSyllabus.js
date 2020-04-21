function fetchCourse(schemeName) {
    $.post("fetchSyllabus.php", {scheme: schemeName}, function(result) {
        result = result.split("\"");

        document.getElementById("yearCombo").innerHTML = "<option value='null'>--Select Semester/Year--</option>";
        document.getElementById("paperResult").innerHTML = "";

        document.getElementById("courseCombo").innerHTML = "<option value='null'>--Select Course--</option>";

        for(i=1; i<result.length; i+=2) {
            document.getElementById("courseCombo").innerHTML += "<option value='"+result[i]+"'>"+result[i]+"</option>";
        }
    });
}

function fetchYear(courseName) {
    $.post("fetchSyllabus.php", {course: courseName}, function(result) {
        result = result.split("\"");

        document.getElementById("paperResult").innerHTML = "";

        document.getElementById("yearCombo").innerHTML = "<option value='null'>--Select Semester/Year--</option>";
        
        for(i=1; i<result.length; i+=2) {
            document.getElementById("yearCombo").innerHTML += "<option value='"+result[i]+"'>"+result[i]+"</option>";
        }
    });
}

function fetchPaper() {
    var schemeName = document.getElementById("schemeCombo").value;
    var courseName = document.getElementById("courseCombo").value;
    var yearName = document.getElementById("yearCombo").value;
    
    $.post("fetchSyllabus.php", {scheme: schemeName, course: courseName, year: yearName}, function(result) {
        if(result === "null") {
            document.getElementById("paperResult").innerHTML = "No papers available";
        }
        else {
            result = result.split("\"");
            
            for(i=1; i<result.length; i+=2) {
                document.getElementById("paperResult").innerHTML += "<a href='syllabus/"+schemeName+"/"+courseName+"/"+yearName+"/"+result[i]+"' target='blank'> "+result[i]+" </a> <br>";
            }
        }
    });
}