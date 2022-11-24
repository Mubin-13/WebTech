<?php

$conn = mysqli_connect("localhost","root","","patient");


if(isset($_POST["username"])) {
  $query = "SELECT * FROM user WHERE Username ='" . $_POST["username"] . "'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result)>0) {
      echo "<span class='status-not-available'> This username is already used.</span>";
  }else{
      echo "<span class='status-available'> Username Available.</span>";
  }
}
?>