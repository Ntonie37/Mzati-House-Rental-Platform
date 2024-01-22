
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<title>Owner Login - House Rental Platform</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="assets/style.css"/>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
<script src="assets/jquery-1.9.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>
<script src="assets/script.js"></script>

<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<script src='assets/google_analytics_auto.js'></script>

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
	                           <li><a href="index.php">Home</a></li>
	                             <li><a href="list-properties.php">List Properties</a>
	                            <li><a href="about.html">About</a></li>
	                            <li><a  href="contact.html">Contact</a></li>
	                          </ul>
	                            <ul class="nav navbar-nav navbar-right">
	                              <li><a href="owner-register.php">Register</a></li>
	                              <li class="active"><a href="owner-login.php">Login</a></li>
	                            </ul>

	                        </div>







	          </div>
	        </div>

	    </div>

</body>
</html>













<?php
session_start();
if(isset($_SESSION["email"])){
  header("location:owner/owner-index.php");

}


include("owner-engine.php");

 ?>



<div class="container">
  <h3 style="font-weight: bold; text-align: center;">Owner Login</h3><hr><br><br>
  <form method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    <div class="form-group">
      <a href="forgot-password-owner.php">Lost your Password ? </a>
    </div>
    <center><input type="submit" id="submit" name="owner_login" class="btn btn-primary btn-block" value="Login"></center>
  </form>
</div>
