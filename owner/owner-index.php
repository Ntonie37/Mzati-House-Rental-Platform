<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location:../index.php");
}

include("engine.php");


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Owner home - House Rental Platform</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="signup.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>

  <div class="navbar-wrapper">

          <div class="navbar-inverse" style="background-color: #000080">
            <div class="container">
              <div class="navbar-header">


                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

              </div>




              <div class="navbar-collapse  collapse">
                <ul class="nav navbar-nav navbar-left">
                 <li class="active"><a href="owner-index.php">Home</a></li>
                   <li><a href="profile.php">Profile</a>
                    <li ><a href ="#">Add House</a></li>
                  <li><a href="#">Delete</a></li>

                </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php">Logout</a></li>
                  </ul>

              </div>





            </div>
          </div>

      </div>



















<div class="container" style="margin-top:5px ">
<h3><b>Welcome</b><br><br></h3>
 <div class="row">
  <div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px" >
  <img class="card-img-top" src="img/home1.jpg" alt="Card image" width="250px;" height="190px;">
  <div class="card-body">
    <center><h4 class="card-title"><b>Profile</b></h4><br>
    <p class="card-text">This page allows you to update your profile.</p><br>
    <a href="profile.php" class="btn btn-primary">Update profile</a></center>
    <br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="img/home3.jpg" alt="Card image" width="250px;" height="190px;">
  <div class="card-body">
    <center>
    <h4 class="card-title"><b>Add property</b></h4><br>
    <p class="card-text">This page allows you to add houses.</p><br>
    <a href="addhouse.html" class="btn btn-primary">Add House</a></center>
    <br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="img/home2.jpg" alt="Card image" width="250px;" height="190px;">
  <div class="card-body">
    <center>
      <h4 class="card-title"><b>Delete</b></h4><br>
    <p class="card-text">This page allows you to remove house.</p><br>
    <a href="#" class="btn btn-primary">Delete</a></center>
    <br>
  </div>
</div>
<br>

</div>


</div>

</div>
</body>
</html>
