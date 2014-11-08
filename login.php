<?php
$username=$_POST['username'];
$passwd=$_POST['password'];

session_start();
	$con = mysqli_connect("localhost","root","","examination");

?>
