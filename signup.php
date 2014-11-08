<?php 
	$userid = $_POST['username'];
	$password =$_POST['password'];

	session_start();
	$conn = mysqli_connect("localhost","root","","digichq");
	//mysql_select_db($dbname) or die(mysql_error());
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user(passwd, email) VALUES ('$password','$userid')";
if (mysqli_query($conn, $sql)) {
  //  echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo "1";
mysqli_close($conn);
	//$result = mysqli_query($con,"select category from admin where userID = '". $_POST['userId']."' and password = '". $_POST['password']."'");
 	
  

 ?> 