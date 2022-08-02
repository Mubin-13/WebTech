<!DOCTYPE html>

<html>
<head>
    <title>LOGIN</title>
</head>
<body>

     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"value="<?php if(isset($_COOKIE['uname'])) {echo $_COOKIE['uname'];} ?>"  required><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>"  
                    required><br> 
        <h4><input type="checkbox"  name="remember" value="remember" > Remember Me</h4>            
                  

        <button type="submit">Login</button>

     </form>

</body>

</html>