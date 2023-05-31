<?php
$id     = $_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM dbuser WHERE id_user= '$id'");
$data   = mysqli_fetch_array($tampil);
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <!---Container Fluid-->

  <div class="alert alert-light" role="alert">
    <h2 align="center">Form Ubah Data User</h2>
    <form method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama User</label>
        <input type="text" name="nama_user" value="<?php echo $data['nama_user'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama User">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Alamat User</label>
        <input type="text" name="alamat_user" value="<?php echo $data['alamat_user'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Alamat User">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nomor Hp</label>
        <input type="number" name="no_hp" value="<?php echo $data['no_hp'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Nomor Hp">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Username</label>
        <input type="text" name="username" value="<?php echo $data['username'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="text" name="password" value="<?php echo $data['password'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <input type="submit" name="ubah" class="btn btn-primary" value="Simpan Perubahan">
      <a href="index.php?hal=user" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>

<?php
if (isset($_POST['ubah'])) { //proses simpan perubahan data penerbit
  $id_user    = $_POST['id_user'];
  $nama_user = $_POST['nama_user'];
  $alamat_user = $_POST['alamat_user'];
  $no_hp = $_POST['no_hp'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $ubah = mysqli_query($koneksi, 'UPDATE dbuser SET nama_user="' . $nama_user . '",alamat_user="' . $alamat_user . '",no_hp="' . $no_hp . '",username="' . $username . '",password="' . $password . '" WHERE id_user="' . $id . '"');
  if ($ubah) {
    echo '
          <script>
            alert("Berhasil Mengubah Data User");
            window.location="index.php?hal=user"; //menuju ke halaman user
          </script>
        ';
  } else {
    echo '
              <script>
                alert("Gagal Mengubah Data User");
              </script>
              ';
  }
}
?>