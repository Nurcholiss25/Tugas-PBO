<div class="container">
<div class="row">
        <div class="col-md-12" mt-3>
            <p>Selamat Datang</p>
            <div class="card">
            <div class="card-header">
                DATA TANGGAPAN
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                <th>NO</th>
                <th>TANGGAL</th>
                <th>NIK</th>
                <th>JUDUL</th>
                <th>LAPORAN</th>
                <th>STATUS</th>
                <th>AKSI</th>
            </tr>
                    </thead>
                    <tbody>
                    <?php
                include '../config/koneksi.php';
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT a.*, b.* FROM tanggapan a INNER JOIN pengaduan b ON a.id_pengaduan=b.id_pengaduan");
                while ($data = mysqli_fetch_array($query)) { ?>


                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['tgl_tanggapan'] ?></td>
                    <td><?php echo $data['nik'] ?></td>
                    <td><?php echo $data['judul_laporan'] ?></td>
                    <td><?php echo $data['isi_laporan'] ?></td>
                    <td><?php echo $data['tanggapan'] ?></td>
                    <td>
                        <?php
                      if ($data['status'] == 'proses') {
                        echo "<span class='badge bg-warning'>Proses</span>";
                      } elseif ($data['status'] == 'selesai') {
                        echo "<span class='badge bg-success'>Selesai</span>";
                      } else {
                        echo "<span class='badge bg-danger'>Menunggu</span>";
                      }
                      ?>
                      </td>
                    <td>
                    <a href="delete.php?id_pengaduan=<?= $data['id_pengaduan'] ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </td>
                       
                        </tr>
                        <?php }?>
                        </tbody><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
                    </tbody>
                </table>
                </div>