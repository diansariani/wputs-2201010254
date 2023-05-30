<?php
$id     = $_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM dbdosen WHERE id_dosen='$id'");
$data   = mysqli_fetch_array($tampil);
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <!---Container Fluid-->

  <div class="alert alert-light" role="alert">
    <h2 align="center">Hapus Data Dosen</h2>
    <form method="POST">
      <div class="form-group">
        <div class="alert alert-danger" role="alert">
          <h6>Yakin Akan Menghapus Data Dosen <b><?php echo $data['nama_dosen'] ?></b> ?</h6>
          <input type="hidden" name="id_guru" value="<?php echo $id ?>" required class="form-control">
          <input type="submit" name="hapus" class="btn btn-primary" value="Hapus">
          <a href="index.php?hal=guru" class="btn btn-secondary">Batal</a>
        </div>
      </div>
      </from>
  </div>
</div>

<?php
if (isset($_POST['hapus'])) { //proses hapus data dosen
  $ubah = mysqli_query($koneksi, 'DELETE FROM dbdosen WHERE id_dosen="' . $id . '"');
  if ($ubah) {
    echo '
                <script>
                  alert("Berhasil Menghapus Data Dosen");
                  window.location="index.php?hal=dosen"; //menuju ke halaman dosen
                </script>
            ';
  }else {
    echo '
              <script>
                alert("Gagal Menghapus Data Dosen");
              </script>
              ';
  }
}
?>