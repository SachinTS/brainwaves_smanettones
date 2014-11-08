<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
        Generate Cheque
    </title>

    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<form name="signup" action="page4.php" method = "post">
  <h1>INITIATE TRANSACTION</h1>
  <div class="inset">
  <p>
    <label for="date">DATE : </label>
    <input type="date" name="date" id="date">
  </p>
  <p>
    <?php
      session_start();
         $_SESSION['pin'] = rand();
         $pin = $_SESSION['pin'];
      ?>

    <label for="pin">PIN : </label>
    <input class="ex1" type="button" name="pin" id="pin" value = " <?php echo $pin  ?> " disabled />
  </p>

  <p>
    <label for="remail">RECEIVER ID : </label>
    <input type="text" name="remail" id="remail">
  </p>
  <p>
    <label for="amount">AMOUNT : </label>
    <input type="text" name="amount" id="amount">
  </p>


  </div>
  
  <p class="p-container">
    
    <input type="submit" name="submit" id="submit" value="NEXT">
  </p>
</form>

</body>
</html>

