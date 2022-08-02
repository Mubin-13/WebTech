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
$CurrentPasswordErr = $NewPasswordErr =  $RetypePasswordErr = "";
$CurrentPassword = $NewPassword =  $RetypePassword = "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if(!empty($_POST["CurrentPassword"] )) {
    $NewPassword = $_POST["NewPassword"];
    $CurrentPassword = $_POST["CurrentPassword"];
    $RetypePassword = $_POST["RetypePassword"];
    


    if (strlen($_POST["CurrentPassword"]) <= '8') {
        $CurrentPasswordErr = "Your Password Must Contain At Least 2 Characters!";
    }
    
  
    
}
 
  else if ($CurrentPassword != $NewPassword) {
        $CurrentPasswordErr = "Passwords must match!";
    } 

}

?>

<h2>Change Password</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  Current Password: <input type="text" name="password" value="<?php echo $CurrentPassword;?>">
  <span class="error">* <?php echo $CurrentPasswordErr;?></span>
  <br><br>
  New Password: <input type="text" name="newpassword" value="<?php echo $NewPassword;?>">
  <span class="error">* <?php echo $NewPasswordErr;?></span>
  <br><br>

  Retype New Password: <input type="text" name="retypepassword" value="<?php echo $RetypePassword;?>">
  <span class="error">* <?php echo $RetypePasswordErr;?></span>
  <br><br>

  
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>	