function search() {
    var searchTerm = document.getElementById("searchBox").value;
    searchTerm = encodeURIComponent(searchTerm.trim());
    
    document.getElementById("searchResult").style.display = "block";
    document.getElementById("searchResult").innerHTML = "<img src='images/searching.gif' height='50px' width='50px'>";

    $("#searchResult").load("search.php?searchTerm="+searchTerm);
    document.getElementById("searchBox").focus();
}

function clear() {
    if(document.getElementById('searchBox').value.trim() === '') 
        document.getElementById('searchDialog').style.display = 'none'; 
    else 
        document.getElementById('searchBox').value = '';
}