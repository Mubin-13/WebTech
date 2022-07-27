<?php include '../controller/header.php';?>
<?php include '../controller/login.php';?>

  <link rel="stylesheet" type="text/css" href="../css/login.css">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

<div class="container">
<?php if(isset($msg)){?>
		    <tr>
		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		    </tr>
    	<?php } ?>
      <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit">Login</button>
    </div>
    <?php include '../controller/footer.php';?>
    
  </div>
  

  
	
</form>