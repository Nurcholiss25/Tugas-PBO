<?php
session_start();
 if(isset($_SESSION['nama'])){ // jika session username ada
    echo "<h1> ini Halaman User </h1>";
    echo $_SESSION["nama"];
 }