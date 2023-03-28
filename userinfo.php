<?php

$sname =  "localhost:3307";
$uname =  "root";
$password = "";
$dbname = "u";

$con = new mysqli($sname, $uname, $password, $dbname);
if($con->connect_error)
{
  die("connection fail");
}
 $user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$sql= "INSERT INTO `b` (`user`, `email`, `mobile`, `comment`) 
VALUES ('$user', '$email', '$mobile', '$comments')";

if($con->query($sql)==true)
{
  echo "new record add";
}
else{
  echo "error";
}
$con->closed();
?>