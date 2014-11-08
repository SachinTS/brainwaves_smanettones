<!DOCTYPE html>
<html lang='en'>
<head>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>

    <meta charset="UTF-8" /> 
    <title>
        TRANSACTIONS
    </title>
 
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

 
  <h1 align="center">TRANSACTIONS</h1>

  <form class="example" action="page3.html">
  
  <!--label for="transfer">Click here to transfer money</label-->
  <input type="submit" name="transfer" id="transfer" value="TRANSFER MONEY"><br/><br/>
	
	<!-- </form>
	<form class="example1" action="page8.html">
	
  <input type="submit" name="notify" id="notify" value="NOTIFICATIONS">
	
	</form> -->
  <?php
    session_start();
  $conn = mysqli_connect("localhost","root","","digichq");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    else{

   // echo "successful connection";

    }
    $email = "nagaravali.t@gmail.com";//$_SESSION['semail'];
    $sql = "SELECT * FROM transaction tr, Tstatus t where remail = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //$link =  $row["bname"];
        //$bob = $row["accIdTr"];//. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
       // $link_address = '#';
       // echo $link;
        $_SESSION['simPin'] = $row['pin'];
        $_SESSION['sender_email']= $row['semail'];
        echo '<a href="page8.php?pin=$pin&semail=$semail">'.$row['semail'].'</a>';

    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>



 <form class="example2" action="login.html">
 <input type="submit" name="logout" id="logout" value="LOGOUT" align="right">
 </form>

</body>
</html>
