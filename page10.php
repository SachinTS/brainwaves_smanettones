

 <!--    /*$date = $_POST['date'];
    $pin = $_SESSION['pin'];
    $remail = $_POST['remail'];
    $amount = $_POST['amount'];
    $semail = $_SESSION['semail'];
    $_SESSION['tid'] = $_SESSION['tid'] + 1;
    $tid = $_SESSION['tid'];*/
   /* $query = "select accIdTr from userbank where semail = '$semail' ";
    if (mysqli_query($conn, $query)) {
  //  echo "New record created successfully";
} else {
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    $res = mysqli_query($conn,$query);

    $row = mysqli_fetch_array($res,MYSQLI_NUM);
    $acc = $row['accIdTr'];
*/
     //  $sql = "INSERT INTO transaction(TId,amount,semail,remail,pin,date) VALUES ($tid','$amount','$semail','$remail','$pin','$date')";

/*if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
} else {
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
//header("Location: http://localhost/brainwaves_smanettones/page4.php");
  ?> -->
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
$email = $_SESSION['semail'];
$sql = "SELECT * FROM userbank where email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $link =  $row['bname'];
        $bob = $row['accIdTr'];//. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
       // $link_address = '#';
       // echo $link;
        //$query = "select balance from '. $bname.' where semail= $email";
       // $result = mysqli_query($conn, $query);
       // $row = mysqli_fetch_assoc($result);

        echo '<a href="summary1.php?bname='.$link.'&accIdTr='.$bob.'">'.$link.'</a>';
       //echo "     ". $row[balance];
        echo  "</br>";
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
