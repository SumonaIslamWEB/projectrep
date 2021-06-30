<?php 
include "../control/datacheckEm.php";
include "../control/Emvalidation.php";
?>
<!DOCTYPE html>
<html>
<body>
<h1>Employee Details</h1>
<hr></hr>
<form action="" method="post" enctype="multipart/form-data">
<form action="" method="post">
First Name: <input type="text" name="fname"><?php echo $validatefname; ?><br><br>
Last Name: <input type="text" name="lname"> <?php echo $validatelname; ?>
<br><br>
<p>Gender:</p>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label><br>
<?php echo $validateradio; ?>
<br>
Email ID: <input type="text" name="email"><?php echo $validateemail; ?>
<br>
<br>
Address: <textarea name="address" rows="5" cols="25"></textarea><?php echo $validateaddress; ?>
<br>
<input type="submit" name="submit" value="Submit">
<br>

<?php
$data = file_get_contents("../view/data.json");
$mydata = json_decode($data);
foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
  echo "Account Holder ".$key." is ".$value."<br>";
} 
echo "<br>";
}
echo "<hr>";
if (!isset($_COOKIE[$cookie_name])) {
  echo "Hello New User Your Cookie is not set";
}else{
  echo "Hello Old user Your Cookie is seted";
}
?>

</form>
</body>
</html>