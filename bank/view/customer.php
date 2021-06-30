<?php 
include "../control/datacheck.php";
include "../control/Cusvalidation.php";
include "../control/cookie.php"
?>
<?php
$data = file_get_contents("../view/data.json");
$mydata = json_decode($data);
foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
  echo "Account ".$key." is ".$value."<br>";
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