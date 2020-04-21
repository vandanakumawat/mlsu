function fetchCourse(schemeName) {
    $.post("fetchPapers.php", {scheme: schemeName}, function(result) {
        result = result.split("\"");

        document.getElementById("paperResult").innerHTML = "";

        document.getElementById("courseCombo").innerHTML = "<option value='null'>--Select Course--</option>";
        for(i=1; i<result.length; i+=2) {
            document.getElementById("courseCombo").innerHTML += "<option value='"+result[i]+"'>"+result[i]+"</option>";
        }
    });
}

function fetchPapers(courseName) {
    var schemeName = document.getElementById("schemeCombo").value;

    $.post("fetchPapers.php", {scheme: schemeName, course: courseName}, function(result) {
        result = result.split("\"");
        
        document.getElementById("paperResult").innerHTML = "";
        for(i=1; i<result.length; i+=2) {
            document.getElementById("paperResult").innerHTML += "<a href='"+schemeName+"/"+courseName+"/"+result[i]+"' target='blank'> "+result[i]+" </a> <br>";
        }
    });
}