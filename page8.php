<!DOCTYPE html>
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

<form name="signup" onsubmit="" id = "login" >
  <h1>CLAIM</h1>
  <div class="inset">
  <p>
    <label for="pin">PIN:</label>
    <input type="text" name="pin" id="pin">
  </p>
  <p>
    <label for="email">USERID:</label>
   <?php echo $_POST['semail'];?>
  </p>

  </div>
  <p class="p-container">
   
    <input type="submit" name="submit" id="submit" value="CLAIM">
  </p>
</form>

</body>
</html>
