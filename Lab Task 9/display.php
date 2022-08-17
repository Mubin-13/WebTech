<!DOCTYPE html>
<html>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
<body>

<button type="button" onclick="loadXMLDoc()">Get my CD collection</button>
<br><br>
<table id="demo"></table>

<script>
function loadXMLDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    const xmlDoc = xhttp.responseXML;
    const cd = xmlDoc.getElementsByTagName("CD");
    myFunction(cd)
  }
  xhttp.open("GET", "cd_catalog.xml");
  xhttp.send();
}
function myFunction(cd) {
  let table="<tr><th>Artist</th><th>Title</th></tr>";
  for (let i = 0; i < cd.length; i++) { 
    table += "<tr><td>" +
    cd[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "</td><td>" +
    cd[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>

</body>
</html>


<table >
 <tr>
 <th>Ticket ID</th>
 <td>" . $id . "</td>
 <th>Departure</th>
 <td>" . $departure . "</td>
 <th>Destination</th>
 <td>" . $destination . "</td>
 <th>Journey Date</th>
 <td>" . $journeydate . "</td>
 <th>Return Date</th>
 <td>" . $returndate . "</td>
<th>Class</th>
 <td>" . $class . "</td>
 </tr>
</table>