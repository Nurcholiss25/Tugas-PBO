<?php
    session_start();
?>
<!DOCTYPE html>
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body class="form">
    <h1>Halaman Login </h1>
    <div>
    <form action="loginn.php" method="post" name="form_input">
        <div class="nik">
        Nik: <input type="number" name="nik" placeholder="Masukan nik" required="" ></br>
        </div>
        <div class="nama">
        Nama: <input type="text" name="nama" placeholder="Nama lengkap" required=""></br>
        </div>

        <div class="tombol">
        <input type="submit" name="input" value="LOGIN">
        <input type="submit" name="input" value="REGISTER">
      </div>
    </form>
</div>
</body>
</head>
</html>