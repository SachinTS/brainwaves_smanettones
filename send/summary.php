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
   
   $sql =  "select amount,remail,pin,date from transaction";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    echo "DATE : ". $row['date'];
    echo "RECIPIENT EMAIL-ID :". $row['remail'];
    echo "PIN USED :". $row['pin'];
    echo "AMOUNT : ". $row['amount'];
    $query = "select u.bname from userbank u,transaction t where t.accIdTr like u.accIdTr";
     $res1 = mysqli_query($conn,$query);
    $row1 = mysqli_fetch_assoc($res1);
    echo "BANK NAME :" . $row1['bname'];
    ?>