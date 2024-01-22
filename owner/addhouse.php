
<?php


    $property_title='';
    $property_details='';
    $price='';
    $property_address='';
    $property_img='';
    $utility='';


	
$db = new mysqli('localhost','root','','house rental platform');

if($db->connect_error){
	echo "Error connecting database";
}



if(isset($_POST['submit'])){
	add_property();
}




	
function add_property(){

	global $property_title,$property_details,$price,$property_address,$property_img,$utility,$db;




	$property_title=$_POST['property_title'];
	$property_details=$_POST['property_details'];
	$price=$_POST['price'];
	$property_address=$_POST['property_address'];
	$property_img=$_POST['property_img'];
	$utility=$_POST['utility'];
	
   	$sql = "INSERT INTO properties(property_title,property_details,price,property_address,property_img,utility) VALUES('$property_title','$property_details','$price','$property_address','$property_img','$utility')";
		$query=mysqli_query($db,$sql);
		header("location:owner-index.php");




}




	?>













