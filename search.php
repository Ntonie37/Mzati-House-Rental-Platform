<?php
$result = [];
include_once "connection.php";

if(isset($_POST['submit'])){
	$search_value = $_POST['search'];
	$search_price = $_POST['search_price'];






	if(empty($search_value) and empty($search_price)){
		header ("Location: index.php");
	}

	if($search_price ==0 ){
		echo "ing";
		$searchQuery = "SELECT * FROM properties WHERE property_address LIKE '%$search_value%'";
		$result = mysqli_query($con,$searchQuery);
		if($result){
		}else{
			echo mysqli_error($con);
		}
	}

	if($search_price ==1 ){
		$searchQuery = "SELECT * FROM properties WHERE property_address LIKE '%$search_value%' AND (price >= 50000 and price <= 200000)";
		$result = mysqli_query($con,$searchQuery);
		if($result){
		}else{
			echo mysqli_error($con);
		}
	}
	if($search_price == 2){
		$searchQuery = "SELECT * FROM properties WHERE property_address LIKE '%$search_value%' AND (price >= 200000 and price <= 500000)";
		$result = mysqli_query($con,$searchQuery);
		if($result){
		}else{
			echo mysqli_error($con);
		}
	}

	if($search_price == 3){
		$searchQuery = "SELECT * FROM properties WHERE property_address LIKE '%$search_value%' AND (price >= 500000 and price <= 800000)";
		$result = mysqli_query($con,$searchQuery);
		if($result){
		}else{
			echo mysqli_error($con);
		}
	}

	if($search_price == 4){
		$searchQuery = "SELECT * FROM `properties` WHERE `property_address` LIKE '%$search_value%' AND price > 800000";
		$result = mysqli_query($con,$searchQuery);
		if($result){
		}else{
			echo mysqli_error($con);
		}

	}




}


?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<title>Search Result - House Rental Platform</title>
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
	                              <li><a href="owner-login.php">Login</a></li>
	                            </ul>

	                        </div>







	          </div>
	        </div>

	    </div>




          </div>
        </div>
    </div>






<div class="container">




</div>




<div class="inside-banner">
  <div class="container">
    <h2>Search Result:</h2>
</div>
</div>



<div class="container">
<div class="properties-listing spacer">

<div class="row">







<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result">Showing: Search Result </div>
  <div class="pull-left">
  </div>

</div>
<div class="row">


      <?php

	  	while($property_result = mysqli_fetch_assoc($result)){
			$id = $property_result['property_id'];
			$property_title = $property_result['property_title'];

			$servant_quarters = $property_result['servant_quarters'];
			$property_address = $property_result["property_address"];
			$price = $property_result['price'];
			$property_img = $property_result['property_img'];
			$bed_room = $property_result['bed_room'];
			$liv_room = $property_result['liv_room'];
			$parking = $property_result['parking'];
			$kitchen = $property_result['kitchen'];
			$utility = $property_result['utility'];

	  ?>
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo $property_img; ?>" class="img-responsive" alt="properties">
          <?php if($servant_quarters == 0){ ?><div class="status No">No Servant quarters</div> <?php } else { ?>
          <div class="status Yes">>servant quarters</div>
          <?php } ?>
        </div>
        <h4><a href="property-detail.php?id=<?php echo $id; ?>"><?php echo $property_title;  ?></a></h4>
        <p class="price">Price: Mwk<?php echo $price; ?></p>
        <p class="price">Location: <?php echo $property_address; ?></p>
        <p class="price">Utilities: <?php echo $utility; ?></p>
        <div class="listing-detail">
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $bed_room; ?></span>
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $liv_room; ?></span>
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $parking; ?></span>
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $kitchen; ?></span>
        </div>
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $id; ?>">View Details</a>
      </div>
      </div>
      <?php } ?>



</div>
</div>
</div>
</div>
</div>




<div style="background-color: #000080">

<div class="container">
<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="index.php">Home</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.html">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.html">Contact</a></li>
              </ul>
            </div>


             <div class="col-lg-3 col-sm-3">

										<h4>Contact us</h4>
										<p><b>HOUSE RENTAL PLATFROM</b><br>
<span class="glyphicon glyphicon-map-marker"></span>Thyolo, Malawi<br>
<span class="glyphicon glyphicon-envelope"></span>www.HouseRentalPlatform.com<br>
<span class="glyphicon glyphicon-earphone"></span> +265991631429</p>

            </div>
        </div>



</div></div>







</body>


</html>
