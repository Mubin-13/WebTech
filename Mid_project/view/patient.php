<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Patient</title>
</head>
<body>
<?php include '../controller/logoutclick.php';?>
<?php include '../controller/feedback.php';?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
        
      
      <ul class="nav nav-pills nav-stacked">
        <li><a href="dashboard.php">Home</a></li>
        <li><a href="viewprofile.php">View Patient Profile</a></li>
        <li class="active"><a href="patient.php">Patient</a></li>
        
      </ul><br>
      
    </div>
    <div class="col-sm-9">
      <h4><small>RECENT POSTS</small></h4>
      <hr>
      
      <h2>Post title</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Someone, jun 22, 2022.</h5>
      <h5><span class="label label-success">Admin</span></h5><br>
      <?php include '../controller/viewfeedback.php'?>
      <?php include '../controller/addpost.php'?>
      <hr>
    <div class="col-sm-9">
    <h4 >Help Desk</h4>
    <form  method="post">
        
        <div class="form-group">
            <textarea class="form-control" rows="3" name="view_post" required></textarea>
        </div>
        <input  type="submit" name="submit" value="Submit" class="btn btn-primary" /><a href="doctor_list.php" class="btn btn-primary">View Other Services</a>
          

      </form>
      
      <br><br>
    </div>
  </div>
</div>
<?php include '../controller/footer.php';?>



</body>
</html>