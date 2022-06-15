<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $DOBErr= $genderErr = $degreeErr = $bloodErr = "";
$name = $email = $DOB= $gender = $comment = $degree = $blood = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["DOB"])) {
    $DOBErr = "Date of Birth is required";
  } else {
    $DOB = $_POST["DOB"];
    // check if e-mail address is well-formed
    if (!preg_match("/^(0?[1-9]|[0-9]|3[01])\/\.-\.-\d{2}$/",$DOB)) {
      $err_message = "Invalid Dod";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = $_POST["comment"];
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "Degree is required";
  } else {
    $degree = $_POST["degree"];
  }
  if (empty($_POST["blood"])) {
    $bloodErr = "Blood Group is required";
  } else {
    $blood = $_POST["blood"];
  }
}


?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  DOB: <input type="date" min="1953-01-01" max="1998-12-31" name="DOB" value="<?php echo $DOB;?>">
  <span class="error">* <?php echo $DOBErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Degree:
  <input type="checkbox" name="box" <?php if (isset($degree) && $degree=="SSC") echo "checked";?> value="SSC">  SSC
  <input type="checkbox" name="box" <?php if (isset($degree) && $degree=="HSC") echo "checked";?> value="HSC">  HSC
  <input type="checkbox" name="box" <?php if (isset($degree) && $degree=="BSc") echo "checked";?> value="BSc">BSc
  <input type="checkbox" name="box" <?php if (isset($degree) && $degree=="MSc") echo "checked";?> value="MSc">MSc
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>
  Blood Group:
  <select>
    <option value="A+">A(+ve)</option>
    <option value="A-">A(-ve)</option>
    <option value="B+">B(+ve)</option>
    <option value="B-">B(-ve)</option>
    <option value="O+">O(+ve)</option>
    <option value="O-">O(-ve)</option>
    <option value="AB+">Ab(+ve)</option>
    <option value="AB-">Ab(-ve)</option>
</select>
  <span class="error">* <?php echo $bloodErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $DOB;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $blood;
echo "<br>";
?>

</body>
</html>