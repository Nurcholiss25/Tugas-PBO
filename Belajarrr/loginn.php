<?php
session_start();
$nik = $_POST['nik'];
$nama = $_POST['nama'];

$koneksi = new PDO('mysql:host=localhost;dbname=pedulidirii', 'root', '');
$query = $koneksi->query("SELECT * FROM `login` WHERE nik='$nik' AND nama='$nama'");
$data = $query->fetch();
if($data){
        $_SESSION['nik'] = $nik;
        $_SESSION['nama'] = $nama;
        header("Location:beranda.php");
}else{
    header("Location:login.php");
    
}
