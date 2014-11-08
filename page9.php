<!DOCTYPE html>
<html lang='en'>
<head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>

    <meta charset="UTF-8" /> 
    <title>
        HTML Document Structure
    </title>
   
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<form name="signup"  id = "login" action="page10.php" >
  <h1>Details of Transaction </h1>
  <div class="inset">
  <p>
  <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digichq";
//userId = $_POST['username'];
//$passd = $_POST['password'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
session_start();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$pinn = $_SESSION['simPin'];
$sql = "SELECT * FROM transaction where pin = $pinn";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
   echo " <label for='from'>FROM</label>";
    echo $row['semail'];
 echo " </p>
  <p>
    <label for='date'>DATE</label>";
    echo $row['date'];
 echo " </p>

  <p>
    <label for='date'>AMOUNT</label>";
   echo $row['amount'];
 echo "</p>";?>



  </div>
  <p class="p-container">
    
    <input type="submit" name="submit" id="submit" value="CREDIT MONEY">
  </p>
</form>

</body>
</html>
