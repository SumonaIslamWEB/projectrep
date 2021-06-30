<?php
session_start(); 

?>

<!DOCTYPE html>
<html>
<body>
<h1>Customer Details:</h1>
<hr></hr>

First Name: <?php echo $_SESSION["fname"];?>
<br>

Last Name: <?php echo $_SESSION["lname"];?>
<br>

Gender: <?php echo $_SESSION["gender"];?>
<br>

E-mail: <?php echo $_SESSION["email"];?>
<br>

Phone: <?php echo $_SESSION["phone"];?>
<br>

Address: <?php echo $_SESSION["address"];?>
<br>

Bank Branch: <?php echo $_SESSION["branch"];?>
<br>

Account No: <?php echo $_SESSION["accountno"];?>
<br>

</body>
</html>