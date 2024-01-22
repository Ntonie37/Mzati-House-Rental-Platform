<?php

$db = new mysqli('localhost','root','','house rental platform');

if($db->connect_error){
	echo "Error connecting database";
}

 ?>
