<?php 

session_start();
echo "Username = ".$_SESSION['username'];
echo "<br/>";
echo "Password = ".$_SESSION['password'];

?>