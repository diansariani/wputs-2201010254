<?php
$id     = $_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM dbmahasiswa WHERE id_mahasiswa='$id'");
$data   = mysqli_fetch_array($tampil);
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <!---Container Fluid-->

  <div class="alert alert-light" role="alert">
    <h2 align="center">Hapus Data Mahasiswa</h2>
    <form method="POST">
      <div class="form-group">
        <div class="alert alert-danger" role="alert">
          <h6>Yakin Akan Menghapus Data Mahasiswa <b><?php echo $data['nama_mahasiswa'] ?></b> ?</h6>
          <input type="hidden" name="id_mahasiswa" value="<?php echo $id ?>" required class="form-control">
          <input type="submit" name="hapus" class="btn btn-primary" value="Hapus">
          <a href="index.php?hal=mahasiswa" class="btn btn-secondary">Batal</a>
        </div>
      </div>
      </from>
  </div>
</div>

<?php
if (isset($_POST['hapus'])) { //proses hapus data Mahasiswa
  $id_mahasiswa = $_POST['id_mahasiswa'];

  $ubah = mysqli_query($koneksi, 'DELETE FROM dbmahasiswa WHERE id_mahasiswa="' . $id_mahasiswa . '"');
  if ($ubah) {
    echo '
                <script>
                  alert("Berhasil Menghapus Data Mahasiswa");
                  window.location="index.php?hal=mahasiswa"; //menuju ke halaman mahasiswa
                </script>
            ';
  }
}
?>