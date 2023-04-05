<?php
	include_once("../db.php");
	
	
	
	$id = $_GET['id'];

	$query = mysqli_query($conectar, "DELETE FROM products WHERE id = '$id'");
	
	
	header("location: deleteMsg.php");
?>