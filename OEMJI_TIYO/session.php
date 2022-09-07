<?php
session_start();
$nama = $_POST['nama'];
$password = $_POST['password'];

//koneksi database
$koneksi = new pdo('mysql:host=localhost;dbname=puskesmas', 'root', '');
//cari di database, berdasarkan username dan password
$query = $koneksi->query("select * from tbuser where nama ='$nama' AND password='$password'");
// cek jika ada data,maka bikin session ke halaman beranda

if ($query->rowCount() > 0) {
    $_SESSION["nama"] = $_POST['nama'];
    $_SESSION["password"] = $_POST['password'];
    header("location:beranda.php");
    
} else {
    //jika tidak maka ke halaman login
    header("location:form.php");
}