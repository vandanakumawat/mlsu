function search() {
    var searchTerm = document.getElementById("searchBox").value;
    searchTerm = encodeURIComponent(searchTerm.trim());

    $("#searchResult").load("search.php?searchTerm="+searchTerm);
    document.getElementById("searchResult").style.display = "block";
    document.getElementById("searchBox").focus();
}

function clear() {
    if(document.getElementById('searchBox').value.trim() === '') 
        document.getElementById('searchDialog').style.display = 'none'; 
    else 
        document.getElementById('searchBox').value = '';
}