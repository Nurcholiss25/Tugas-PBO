<?php 

session_start();
$_SESSION['username'] = "staff";
$_SESSION['password'] = "123456";
echo "Username = ".$_SESSION['username'];
echo "<br/>";
echo "Password = ".$_SESSION['password'];

?>