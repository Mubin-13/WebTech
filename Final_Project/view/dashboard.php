
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
   <link rel="stylesheet" type="text/css" href="style.css">
    <title>Dashboard</title>
</head>
<body>

<?php require_once '../controller/header.php';?>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="dashboard.php">Home</a></li>
        <li><a href="viewprofile.php">View Patient Profile</a></li>
        <li><a href="editprofile.php">Edit Profile</a></li>
        <li><a href="patient.php">Patient</a></li>
        <li><a href="doctor_list.php">View Other Services</a></li>
        
      </ul><br>
      
    </div>

    <div class="col-sm-9">
      <h4><small>RECENT POSTS</small></h4>
      <hr>
      
      <h2>Post title</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Someone, jun 22, 2022.</h5>
      <h5><span class="label label-success">Lorem</span></h5><br>
      <?php include '../controller/viewpost.php'?>
      <?php include '../controller/feedback.php'?>
      <hr>

    <div class="col-sm-9">
    <h4 >Feed Back</h4>
    <form  method="post">
        
        <div class="form-group">
            <textarea class="form-control" rows="3" name="feedback" required></textarea>
        </div>
        <input  type="submit" name="submit" value="Reply" class="btn btn-primary" />

      
      <br><br> 
      
    </div>
  </div>
</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php include '../controller/footer.php';?>
</body>
</html>