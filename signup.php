<?php 
	$userid = $_POST['userId'];
	$password = $_POST['password'];

	session_start();
	$con = mysqli_connect("localhost","root","","examination");
	
	$result = mysqli_query($con,"select category from admin where userID = '". $_POST['userId']."' and password = '". $_POST['password']."'");
 	
  

 ?> 