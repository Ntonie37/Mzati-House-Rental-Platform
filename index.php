<?php
include_once "connection.php";

$query = "select * from properties";
$result = mysqli_query($con, $query);

if(!$result){
	echo "Error Found!!!";
}
?>

<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Home - House Rental Platform</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" href="style.css">

	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>


  <link rel="stylesheet" href="assets/style.css"/>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <script src="assets/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

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
               <li class="active"><a href="index.php">Home</a></li>
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


</div>
<div class="">


            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
						  <div class="bg-img bg-img-1"></div>
              <h2><a href="property-detail.php?id=1">4 Bed Rooms House for Let</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Blantyre Nyambadwe</p>
							<cite><a href="property-detail.php?id=1">Mwk 500,000</a></cite>
              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2">
              <h2><a href="property-detail.php?id=6">4 Bed Rooms and 1 Dinning Room house for let</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>  Mzuzu chimaliro </p>
              <cite><a href="property-detail.php?id=6">Mwk 500,000</a></cite>
              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><a href="property-detail.php?id=4">5 Bed Rooms and 2 Dinning Room House for let</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Lilongwe, Area 47</p>

              <cite><a href="property-detail.php?id=4">Mwk 750,000</a></cite>
              </blockquote>
            </div>
          </div>


        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>

<div class="banner-search">
  <div class="container">
    <!-- banner -->
    <h3>Search a house by location and price </h3>
    <div class="searchbar">
      <div class="column">
        <div class="col-lg-6 col-sm-6">
        <form action="search.php" method="post">
					<input name="search" type="text" class="form-control" placeholder="Search by location">
        	<div class="row">
		        <div class="col-lg-3 col-sm-3 ">

		</div>
		<div class="col-lg-3 col-sm-4">
		 <select name="search_price" class="form-control">
				<option value="0">Price</option>
				<option value="1">Mwk50,000 - Mwk200,000</option>
				<option value="2">Mwk200,000 - Mwk500,000</option>
				<option value="3">Mwk500,000 - Mwk800,000</option>
				<option value="4">Mwk800,000 - above</option>

			</select>
		</div>

			<div class="col-lg-3 col-sm-4">
			<button name="submit" class="btn btn-success"  onclick="window.location.href='index.php'">Search</button>

              </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="list-properties.php" class="pull-right viewall">View All Listing</a>
    <h2>Featured Properties</h2>
    <div id="owl-example" class="owl-carousel">



      <?php
		while($property_result = mysqli_fetch_assoc($result)){
		$id = $property_result['property_id'];
		$property_title = $property_result['property_title'];
		$property_address =$property_result['property_address'];
		$servant_quarters = $property_result['servant_quarters'];
		$price = $property_result['price'];
		$property_img = $property_result['property_img'];
		$bed_room = $property_result['bed_room'];
		$liv_room = $property_result['liv_room'];
		$parking = $property_result['parking'];
		$kitchen = $property_result['kitchen'];
		$utility = $property_result['utility'];


	  ?>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo $property_img; ?>" class="img-responsive" alt="properties">
          <?php if($servant_quarters == 0){ ?><div class="status No">No servant quartrers</div> <?php } else { ?>
          <div class="status Yes">Servant quartrers</div>
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

      <?php } ?>

    </div>
  </div>

</div>

<div style="background-color: #140B5C">

<div class="container">

	<div class="row">




<br>
<div class="content">
	<div class="link-boxes">
        <ul class="box">
          <li class="link_name">Company</li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">About us</a></li>

        </ul>

				</div>
	</div>

	        </div>






</div></div>







</body>

</html>
