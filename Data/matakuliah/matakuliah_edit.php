<?php
$id     = $_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM dbmatakuliah WHERE id_matakuliah= '$id'");
$data   = mysqli_fetch_array($tampil);
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <!---Container Fluid-->
  <div class="alert alert-light" role="alert">
    <h2 align="center">Form Ubah Data Matakuliah</h2>
    <form method="POST">
      <div class="form-group">
        <input type="hidden" name="id_matakuliah" value="<?php echo $id ?>" required class="form-control" id="exampleInputEmail1" aria-describedy="emailHelp" placeholder="Masukkan Nama Matakuliah">
        <label for="exampleInputEmail1">Nama Matakuliah</label>
        <input type="text" name="nama_matakuliah" value="<?php echo $data['nama_matakuliah'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Matakuliah">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">SKS</label>
        <input type="text" name="sks" value="<?php echo $data['sks'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="SKS">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Program Studi</label>
        <input type="text" name="program_studi" value="<?php echo $data['program_studi'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Program Studi">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Kode Matakuliah</label>
        <input type="text" name="kode_matakuliah" value="<?php echo $data['kode_matakuliah'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Kode Matakuliah">
      </div>
      <input type="submit" name="ubah" class="btn btn-primary" value="Simpan Perubahan">
      <a href="index.php?hal=matakuliah" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>

<?php
if (isset($_POST['ubah'])) { //proses simpan perubahan data matakuliah
  $id_matakuliah  = $_POST['id_matakuliah'];
  $nama_matakuliah       = $_POST['nama_matakuliah'];
  $sks     = $_POST['sks'];
  $program_studi    = $_POST['program_studi'];
  $kode_matakuliah = $_POST['kode_matakuliah'];

  $ubah = mysqli_query($koneksi, 'UPDATE dbmatakuliah SET id_matakuliah="' . $id_matakuliah . '",nama_matakuliah="' . $nama_matakuliah . '",sks="' . $sks . '",program_studi="' . $program_studi . '",kode_matakuliah="' . $kode_matakuliah . '" WHERE id_matakuliah="' . $id_matakuliah . '"');
  if ($ubah) {
    echo '
          <script>
            alert("Berhasil Mengubah Data Matakuliah");
            window.location="index.php?hal=matakuliah"; //menuju ke halaman matakuliah
          </script>
        ';
  } else {
    echo '
              <script>
                alert("Gagal Mengubah Data Matakuliah");
              </script>
              ';
  }
}
?>