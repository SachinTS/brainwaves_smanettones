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

<form name="signup" action="putData.php">
  <h1>GENERATE CHEQUE</h1>
  <div class="inset">
  <p>
    <label for="date">DATE : </label>
    <input type="date" name="date" id="date">
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
    
    <input type="submit" name="submit" id="submit" value="Generate">
  </p>
</form>

</body>
</html>