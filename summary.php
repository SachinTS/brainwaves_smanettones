<!DOCTYPE html>
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

<form name="signup" onsubmit="return validateform()" action="mail.php">
  <h1>DETAILS OF YOUR BANK ACCOUNTS</h1>
  <div class="inset">

  <?php
	session_start();
	$conn = mysqli_connect("localhost","root","","digichq");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    else{

    //echo "successful connection";

    }

   //echo "Amount transfered";

   $semail = $_SESSION['semail'];

   $bname = $_SESSION['bname'];

   $pin = $_SESSION['pin'];

   $sql1 = "select accIdTr from userbank where bname='$bname' and email='$semail'";

   $res1=mysqli_query($conn,$sql1);

   $row1 = mysqli_fetch_assoc($res1);

   $acc = $row1['accIdTr'];

   $query = "insert into transaction(accIdTr) values('$acc') where pin = '$pin'";
   
   $res2 = mysqli_query($conn,$query);

       $sql =  "select t.amount,t.remail,t.pin,t.date from transaction t,userbank u where u.bname ='$bname' and t.accIdTr like u.accIdTr";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    echo "DATE : ". "14/11/2014"; ?> <br /><br />
    <?php
    echo "RECIPIENT EMAIL-ID :". "sachintshebbar@gmail.co"; ?> <br /><br />
    <?php
    echo "PIN USED :". "8456" ?> <br /><br />
    <?php
    echo "AMOUNT : ". "45000"; ?> <br /><br />

    <?php
   
    echo "BANK NAME :" . $bname; ?> <br /><br />
    
    <input type="submit" name="submit" id="submit" value="NEXT">
  </p>
</form>

</body>
</html>
