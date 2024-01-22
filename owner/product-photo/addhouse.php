<?php
session_start();
include("connection.php");

$property_title=$_POST['property_title'];
$property_details=$_POST['property_details'];
$price=$_GET['price'];
$property_address=$_POST['property_address'];
$property_img=$_POST['property_img'];
$utility=$_POST['utility'];

$sql = "INSERT INTO properties(property_title,property_details,price,property_address,property_img,utility) VALUES ('property_title','property_details','price','property_address','property_img','utility');"
mysqli_query($conn, $sql);
header("location:owner-index.php?add=success");












?>