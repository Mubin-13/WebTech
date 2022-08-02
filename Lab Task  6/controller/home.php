<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<?php 

}else{

     header("Location: index.php");

     exit();

}?>
<!DOCTYPE html>  

 <html>  
      <head> 
      <title>Home</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
        <title></title>  

        <div class="container" >
            <h1 class="bg-success text-center text-white p-2 m-3" >Welcome</h1><br>
            <h2 class="bg-success text-center text-white p-2 m-3" >User</h2>
            
        </div>
    <div class="container"> 
                               <h3 class="bg-success text-center text-white">
                               <a href = data.php>Dashboard</a><br>
                               <a href = forgetpassword.php>Change Password</a> <br>
                               <a href = changeprofilepicture.php>Change Profile Picture</a><br>
                               <a href = logout.php>Logout</a><br></h3>

    </div> 
          
      </head>  
        
 </html> 