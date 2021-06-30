<?php
$validatefname="";
$validatelname="";
$validateemail="";
$validateaddress="";
$validateradio="";
$name=$email=$gender="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fname"];
$name=$_REQUEST["lname"];
$email=$_REQUEST["email"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatefname= "you must enter first name";
}
else
{
    $validatefname;
}

if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<3))
{
    $validatelname= "you must enter last name";
}
else
{
    $validatelname;
}
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email";
}
else{
    $validateemail;
}
if(empty($_REQUEST["address"]) || (strlen($_REQUEST["address"])<3))
{
    $validateaddress= "you must enter Address";

}
else
{
    $validateaddress;
}
if(isset($_REQUEST["gender"]))
{
    $validateradio;
}
else{
    $validateradio= "please select Gender";
}
}
?>