<?php 
session_start();
session_unset();
session_destroy();
 
 
echo "Username = ".$_SESSION['username'];
echo "<br/>";
echo "Password = ".$_SESSION['password'];

?>