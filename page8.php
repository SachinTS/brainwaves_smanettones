
<html lang='en'>
<head>
>

    <meta charset="UTF-8" /> 
    <title>
        CLAIM AMOUNT  
    </title>
    
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<form name="signup" action="page9.php" id = "login" >
  <h1>CLAIM</h1>
  <div class="inset">
  <p>
  <?php 
  //$pin = $_SESSION['pin'];
  ?>

    <label for='pin'>PIN:</label>
    <input type='text' name='pin' id='pin'>
  </p>
  <p>
    <label for='email'>USERID:</label>

   <?php
    session_start();
    echo $_SESSION['sender_email'];
    ?>
  </p>

  </div>
  <p class="p-container">
   
    <input type="submit" name="submit" id="submit" value="CLAIM">
  </p>
</form>

</body>
</html>
