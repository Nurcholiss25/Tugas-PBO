<?php
include "header.php";
session_start();
$user = $_SESSION['nama'];
$datauser = "catatan/$nama";

if(!file_exists($datauser)){
    die('<center>Kamu Belum Mempunyai Catatan</center>');
}else{
    $file = fopen($datauser, "r");

}

?>

<html>
    <body>
        <table border="1" align="center" widht="50%">
             <td>
                <a>Urutkan Berdasarkan</a>
                <select name="" id="">
                <option value="">Tanggal</option>
                <option value="">Waktu</option>
                <option value="">Lokasi</option>
                <option value="">Suhu</option>
               </select>
               <input type="submit" value="urutkan">
             </td>
        </table>
        <br>
        <td>
        <table border="1" align="center" width="50%" height="40%">
            <td>
                <table align="center" border="1" width="80%">
                    <tr>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Tempat Yang Dikunjungi</th>
                    <th>Suhu Tubuh</th>
                    </tr>
                    <?php
                    while(($row = fgets($file)) !=false){
                        $col = explode(',',$row);
                        foreach($col as $data)
                        echo "<td>". trim($data)."</td>";
                    }
                    ?>
                </table>
            </td>
            

        </table>
    </body>
</html>