<?php

session_start();
if(!isset($_SESSION["nama"])) { // jika ada session username
   header("Location:form.php");
}
?>
<h1>Halaman Beranda </h1>
<a href="user.php">Halaman User</a><br />
<a href="hapussesion.php">Logout</a>