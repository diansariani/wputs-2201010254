<?php
$id     = $_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM dbuser WHERE id_user='$id'");
$data   = mysqli_fetch_array($tampil);
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <!---Container Fluid-->

  <div class="alert alert-light" role="alert">
    <h2 align="center">Hapus Data User</h2>
    <form method="POST">
      <div class="form-group">
        <div class="alert alert-danger" role="alert">
          <h6>Yakin Akan Menghapus Data User <b><?php echo $data['nama_user'] ?></b> ?</h6>
          <input type="hidden" name="id_user" value="<?php echo $id ?>" required class="form-control">
          <input type="submit" name="hapus" class="btn btn-primary" value="Hapus">
          <a href="index.php?hal=user" class="btn btn-secondary">Batal</a>
        </div>
      </div>
      </from>
  </div>
</div>

<?php
if (isset($_POST['hapus'])) { //proses hapus data penerbit
  $id_user    = $_POST['id_user'];

  $ubah = mysqli_query($koneksi, 'DELETE FROM dbuser WHERE id_user="' . $id . '"');
  if ($ubah) {
    echo '
                <script>
                  alert("Berhasil Menghapus Data User");
                  window.location="index.php?hal=user"; //menuju ke halaman user
                </script>
            ';
  }else {
    echo '
              <script>
                alert("Gagal Menhapus Data Mahasiswa");
              </script>
              ';
  }
}
?>