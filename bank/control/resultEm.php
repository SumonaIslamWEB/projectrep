<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
<body>
<h1>Employee Details:</h1>
<hr></hr>

First Name: <?php echo $_SESSION["fname"];?>
<br>

Last Name: <?php echo $_SESSION["lname"];?>
<br>

Gender: <?php echo $_SESSION["gender"];?>
<br>

E-mail: <?php echo $_SESSION["email"];?>
<br>

Address: <?php echo $_SESSION["address"];?>
<br>
</body>
</html>