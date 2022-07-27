<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <title>Online Doctor & Emergency Service</title>
   
</head>


<body>

<div class="container">
<?php include '../controller/logoutclick.php';?>
   <div class="main">
      <div class="navbar">
      <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
          <div class="">
              <h2 class="logo">Our Services</h2>
          </div>

          <div class="menu">
          <ul class="nav nav-pills nav-stacked">
        <li><a href="dashboard.php">Home</a></li>
        <li><a href="viewprofile.php">View Patient Profile</a></li>
        <li class="active"><a href="patient.php">Patient</a></li>
        
      </ul><br>
          </div>

      </div> 

<div class="main">

 <!--cards -->

<div class="card">

<div class="image">
   <img src="https://bddoctorlist.com/wp-content/uploads/2017/04/ent_specialist_BD.jpg">
</div>
<div class="title">
 <h1> ENT</h1>
</div>
<div class="des">
 <p>Fine The Doctor's Name and Time</p>
 <button class="btnn"><a href="../Treatment/entdoctor.html">Click Here</a></button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="https://bddoctorlist.com/wp-content/uploads/2017/04/kidney-medicine-doctor-bangladesh.jpg">
</div>
<div class="title">
 <h1>Kidney & Medicine</h1>
</div>
<div class="des">
 <p>Fine The Doctor's Name and Time</p>
 <button class="btnn"><a href="../Treatment/Kidney.html">Click Here</a></button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="https://bddoctorlist.com/wp-content/uploads/2017/04/Neuromedicine_Doctor_Dhaka.jpg">
</div>
<div class="title">
 <h1>Neuromedicine</h1>
</div>
<div class="des">
 <p>Fine The Doctor's Name and Time</p>
 <button class="btnn"><a href="../Treatment/Neuromedicine.html">Click Here</a></button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="https://bddoctorlist.com/wp-content/uploads/2017/04/Orthopedics_Doctor_Dhaka.jpg">
</div>
<div class="title">
 <h1>Orthopaedic Surgeon</h1>
</div>
<div class="des">
 <p>Fine The Doctor's Name and Time</p>
 <button class="btnn"><a href="../Treatment/Orthopaedic.html">Click Here</a></button>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include '../controller/footer.php';?>
</body>
</html>