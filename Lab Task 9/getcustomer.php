<?php
$mysqli = new mysqli("localhost", "root", "", "product");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT id, departure, destination, journeydate, returndate,class
FROM ticket WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $departure, $destination, $journeydate, $returndate, $class, );
$stmt->fetch();
$stmt->close();

echo "<table>
  <tr>
    <th>Ticket ID</th>
    <th>Departure</th> 
    <th>Destination</th>
  </tr>
  <tr>
    <td>" . $id . "</td>
    <td>" . $departure . "</td>
    <td>" . $destination . "</td>
  </tr>
  <tr>
    
  </tr>
  <tr>
    
  </tr>
</table>";
?>