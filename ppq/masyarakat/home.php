<div class="container">
    <div class="row">
        <div class="col-md-12" mt-3>
            <p>Selamat Datang <?php echo $_SESSION['nama']?></p>
            <div class="card">
            <div class="card-header">
                RIWAYAT PENGADUAN
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                <th>NO</th>
                <th>JUDUL</th>
                <th>ISI</th>
                <th>FOTO</th>
                <th>STATUS</th>
                <th>AKSI</th>
            </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../config/koneksi.php";
                        $no = 1;
                        $nik = $_SESSION['nik'];
                        $query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE $nik='$nik' ORDER BY id_pengaduan DESC");
                        while ($data = mysqli_fetch_array($query)){?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['judul_laporan']; ?></td>
                            <td><?php echo $data['isi_laporan']; ?></td>
                            <td><img src="../asset/img/<?php echo $data ['foto']?>" width="100" alt=""></td>
                            <td>
                                <?php
                                if($data['status']== 'proses'){
                               echo"<span class='badge bg-warning'>Proses</span>";
                               }elseif ($data['status']== 'selesai'){
                                echo"<span class='badge bg-success'>Selesai</span>";
                               }else {
                                echo"<span class='badge bg-danger'>Menunggu</span>";
                               }
                               ?>
                            </td>
                            <td>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?php echo 
$data['id_pengaduan']?>">
  Hapus
</button>

<!-- Modal Hapus-->
<div class="modal fade" id="hapusModal<?php echo $data['id_pengaduan']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="edit_data.php" method="POST">
        <input type="hidden" name="id_pengaduan" value="<?php echo $data['id_pengaduan']?>">
      <div class="modal-body">
        Apakah Anda Yakin Ingin Menghapus Data <br> <?php echo ['judul_laporan']?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" name="hapus_pengaduan" >Hapus</button>
      </div>
      </form>
    </div>
  </div>
</div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
</div>
<div>
  <label  class="form-label">Judul Laporan</label>
    <input type="text" class="form-control" name="judul_laporan" placeholder="Masukkan Judul Laporan..." required>
  <label  class="form-label">Isi Laporan</label>
  <textarea class="form-control" name="laporan" placeholder="Masukkan Isi Laporan..." required></textarea>
  <label  class="form-label">Foto</label>
  <input type="file" class="form-control" name="foto" required>
  
                <button type="submit" name="kirim" class="btn btn-primary">KIRIM</button>
            </div>
            </form>
            <?php
            include '../config/koneksi.php';
            $tanggal = date("y-m-d");
            if(isset($_POST['kirim'])){
            $nik = $_SESSION['nik'];
            $judul_laporan = $_POST['judul_laporan'];
            $laporan = $_POST['laporan'];
            $status = 0;
            $foto = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];
            $lokasi = '../asset/img/';
            $nama_foto = rand(0,999).'-'.$foto;

            move_uploaded_file($tmp, $lokasi.$nama_foto);
            $query = mysqli_query($koneksi, "INSERT INTO pengaduan VALUES ('','$tanggal','$nik','$judul_laporan','$laporan',
            '$nama_foto','$status')");
            
            echo "<script>
            alert('Data Berhasil Di Kirim!!');
            window.location='index.php';
            </script>
            ";
          }
          
            ?>
            </div>
            </div>
        </div>
     </div>
</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3"></div>
    </div>
</div>