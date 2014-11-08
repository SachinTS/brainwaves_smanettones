
<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","digichq");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    else{

    echo "successful connection";

    }

    $date = $_POST['date'];
    $pin = $_POST['pin'];
    $remail = $_POST['remail'];
    $amount = $_POST['amount'];
    $semail = $_SESSION["semail"];
    $_SESSION['tid'] = 1;
    $tid = $_SESSION['tid'];
    $query = "select accIdTr from userbank where semail = '$semail' ";
    if (mysqli_query($conn, $query)) {
  //  echo "New record created successfully";
} else {
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    $res = mysqli_query($conn,$query);

    $row = mysqli_fetch_array($res,MYSQLI_NUM);
    $acc = $row['accIdTr'];

       $sql = "INSERT INTO transaction VALUES ('$acc','$tid','$amount','$semail','$remail','$pin','$date')";

if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
} else {
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location: http://localhost/brainwaves_smanettones/page4.php");
  ?>