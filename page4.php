<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digichq";
//$userId = $_POST['username'];
//$passd = $_POST['password'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
session_start();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
        Details of your Accounts
    </title>
    <script type="text/javascript">
  function validateform()
  {
		var ans=confirm("Do you want to confirm the transactions?");
		if(ans==true)
			return true;
		else
			{
				submit.focus();
				return false;
			}
  }
</script>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<form name="signup" onsubmit="return validateform()" action="">
  <h1>DETAILS OF YOUR BANK ACCOUNTS</h1>
  <div class="inset">
    
<?php
//session_start();
$sql = "SELECT * FROM userbank where email = $_SESSION['semail']";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $link =  $row["bname"];
        $bob = $row["accIdTr"];//. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
       // $link_address = '#';
       // echo $link;
        echo '<a href="localhost/summary.php?bname=$link&accIdTr=$bob">$Link</a>';
        
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>

  </div>
    <input type="submit" name="submit" id="submit" value="OK">
  </p>
</form>

</body>
</html>
