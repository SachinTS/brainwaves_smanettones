<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digichq";
$userId = $_POST['username'];
$passd = $_POST['password'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
session_start();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM user where passwd = '$passd' and email = '$userId' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // output data of each row
    /*while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";*/
        $num = 1;
        echo $num;
	$_SESSION['semail'] = $userId;
    }
 else {
    echo "0 results";
}

mysqli_close($conn);
?>
