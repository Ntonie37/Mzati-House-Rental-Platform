<?php
include_once "connection.php";

if(isset($_GET['id'])){
	$pageid = $_GET['id'];
}

$query = "select * from properties, agent where properties.property_id = '$pageid' and properties.agent_id = agent.agent_id";
$result = mysqli_query($con, $query);

if(!$result){
	echo "Error Found!!!";
}

while($property_result = mysqli_fetch_assoc($result)){
			$property_title = $property_result['property_title'];
			$property_details = $property_result['property_details'];

			$servant_quarters = $property_result['servant_quarters'];
			$price = $property_result['price'];
			$property_address = $property_result['property_address'];
			$property_img = $property_result['property_img'];
			$bed_room = $property_result['bed_room'];
			$liv_room = $property_result['liv_room'];
			$parking = $property_result['parking'];
			$kitchen = $property_result['kitchen'];
			$utility = $property_result['utility'];





		}



?>

<?php
$imgquery = "select * from property_image where property_id = '$pageid'";
$imgresult = mysqli_query($con, $imgquery);

if(!$imgresult){
	echo "Error Found!!!";
}
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Property Details -House Rental Platform</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="assets/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->




<script src='assets/google_analytics_auto.js'></script></head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" style="background-color: #140B5C">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
						<div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-left">
               <li><a href="index.php">Home</a></li>
							   <li><a href="list-properties.php">List Properties</a>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
							  <ul class="nav navbar-nav navbar-right">
									<li><a href="owner-register.php">Register</a></li>
									<li><a href="owner-login.php">Login</a></li>
								</ul>

            </div>



            <!-- #Nav Ends -->

          </div>
        </div>

    </div>

<!-- #Header Starts -->









<div class="container">
<div class="properties-listing spacer">



<div class="col-lg-9 col-sm-8 ">

<h2><?php echo $property_title; ?></h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->

      <div class="carousel-inner">
      	<!-- Item 0 -->
        <div class="item active">
          <img src="images/properties/default.jpg" class="properties" alt="properties" />
        </div>
        <!-- #Item 0 -->

        <!-- Item 1 -->
        <?php
			while($imageresult = mysqli_fetch_assoc($imgresult)){
				$image = $imageresult['property_images'];

		?>
        <div class="item">
          <img src="<?php echo $image; ?>" class="properties" alt="properties" />
        </div>
        <?php } ?>
        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>




  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
  <p><?php echo $property_details; ?></p>

  </div>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
<div class="well"><?php echo $property_address; ?></div>
  </div>

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">

<div class="well"><p class="price"> Mwk <?php echo $price; ?></p></div>

  <p class="area"><div class="well"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $property_address; ?> </div></p>

</div>

    <div class="well"><span class="glyphicon glyphicon-check"></span> &nbsp; <b>servant quarters - <?php if($servant_quarters == 0){echo "Not Available";} else {echo "Available";} ?></b></div>


    <div class="listing-detail">
    <div class="well">
    <b>Utility: &nbsp;</b>
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $bed_room; ?></span>
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $liv_room; ?></span>
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $parking; ?></span>
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $kitchen; ?></span>
    </div>
    </div>



</div>
<div class="col-lg-12 col-sm-6 ">

</div>
  </div>
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
	<span class="glyphicon glyphicon-map-marker" ></span> Thyolo, Malawi <br>
	<span class="glyphicon glyphicon-envelope"></span>www.HouseRentalPlatform.com<br>
	<span class="glyphicon glyphicon-earphone"></span> +265991631429</p>



	            </div>
	        </div>




</div></div>






</body>

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:26 GMT -->
</html>
