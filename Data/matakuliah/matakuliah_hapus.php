<?php
$id     = $_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM dbmatakuliah WHERE id_matakuliah='$id'");
$data   = mysqli_fetch_array($tampil);
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <!---Container Fluid-->

  <div class="alert alert-light" role="alert">
    <h2 align="center">Hapus Data Matakuliah</h2>
    <form method="POST">
      <div class="form-group">
        <div class="alert alert-danger" role="alert">
          <h6>Yakin Akan Menghapus Data Matakuliah <b><?php echo $data['nama_matakuliah'] ?></b> ?</h6>
          <input type="hidden" name="id_matakuliah" value="<?php echo $id ?>" required class="form-control">
          <input type="submit" name="hapus" class="btn btn-primary" value="Hapus">
          <a href="index.php?hal=matakuliah" class="btn btn-secondary">Batal</a>
        </div>
      </div>
      </from>
  </div>
</div>

<?php
if (isset($_POST['hapus'])) { //proses hapus data penerbit
  $id_matakuliah = $_POST['id_matakuliah'];

  $ubah = mysqli_query($koneksi, 'DELETE FROM dbmatakuliah WHERE id_matakuliah="' . $id . '"');
  if ($ubah) {
    echo '
                <script>
                  alert("Berhasil Menghapus Data Matakuliah");
                  window.location="index.php?hal=matakuliah"; //menuju ke halaman matakuliah
                </script>
            ';
  } else {
    echo '
              <script>
                alert("Gagal Menhapus Data Matakuliah");
              </script>
              ';
  }
}
?>