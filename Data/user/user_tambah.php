<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <!---Container Fluid-->

  <div class="alert alert-light" role="alert">
    <h2 align="center">Form Tambah Data User</h2>
    <form method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Id User</label>
        <input type="number" name="id_user" required class="form-control" id="exampleInputEmail1" aria-describedy="emailHelp" placeholder="Id User">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nama User</label>
        <input type="text" name="nama_user" required class="form-control" id="exampleInputEmail1" aria-describedy="emailHelp" placeholder="Nama User">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Alamat User</label>
        <input type="text" name="alamat_user" required class="form-control" id="exampleInputPassword1" placeholder="Alamat User">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nomor HP</label>
        <input type="number" name="no_hp" required class="form-control" id="exampleInputPassword1" placeholder="Nomor HP">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Username</label>
        <input type="text" name="username" required class="form-control" id="exampleInputPassword1" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="text" name="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
      <a href="index.php?hal=user" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>

<?php
if (isset($_POST['simpan'])) { //proses simpan data penerbit
  $id_user = $_POST['id_user'];
  $nama_user = $_POST['nama_user'];
  $alamat_user = $_POST['alamat_user'];
  $no_hp = $_POST['no_hp'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $simpan = mysqli_query($koneksi, 'INSERT INTO dbuser(id_user,nama_user,alamat_user,no_hp,username,password) VALUES ("' . $id_user . '","' . $nama_user . '","' . $alamat_user . '","' . $no_hp . '","' . $username . '","' . $password . '")');
  if ($simpan) {
    echo '
              <script>
                alert("Berhasil Menambah Data User");
                window.location="index.php?hal=user"; //menuju ke halaman user
              </script>
            ';
  }else {
    echo '
              <script>
                alert("Gagal Menambah Data User");
              </script>
              ';
  }
}
?>