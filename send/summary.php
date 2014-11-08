<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","digichq");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    else{

    //echo "successful connection";

    }

   echo "Amount transfered";
   $bname = "bank1";
  // $bname = $_POST['bname'];
   $sql =  "select t.amount,t.remail,t.pin,t.date from transaction t,userbank u where t.accIdTr like u.accIdTr";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    echo "DATE : ". $row['date'];
    echo "RECIPIENT EMAIL-ID :". $row['remail'];
    echo "PIN USED :". $row['pin'];
    echo "AMOUNT : ". $row['amount'];
   
    echo "BANK NAME :" . $bname;
    ?>