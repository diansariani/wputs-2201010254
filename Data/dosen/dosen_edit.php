<?php
$id     = $_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM dbdosen WHERE id_dosen= '$id'");
$data   = mysqli_fetch_array($tampil);
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <!---Container Fluid-->

  <div class="alert alert-light" role="alert">
    <h2 align="center">Form Ubah Data Dosen</h2>
    <form method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">NIP</label>
        <input type="number" name="nip" value="<?php echo $data['nip'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIP">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Dosen</label>
        <input type="text" name="nama_dosen" value="<?php echo $data['nama_dosen'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Dosen">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Alamat Dosen</label>
        <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Alamat Dosen">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Telepon</label>
        <input type="number" name="telp" value="<?php echo $data['telp'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Telepon">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Jabatan</label>
        <input type="text" name="jabatan" value="<?php echo $data['jabatan'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Jabatan">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" name="email" value="<?php echo $data['email'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
      </div>

      <input type="submit" name="ubah" class="btn btn-primary" value="Simpan Perubahan">
      <a href="index.php?hal=dosen" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>

<?php
if (isset($_POST['ubah'])) { //proses simpan perubahan data dosen
  // $id_guru   = $_POST['id_guru'];
  $nip = $_POST['nip'];
  $nama_dosen = $_POST['nama_dosen'];
  $alamat = $_POST['alamat'];
  $telp = $_POST['telp'];
  $jabatan = $_POST['jabatan'];
  $email = $_POST['email'];
  $tgl_lahir = $_POST['tgl_lahir'];

  $ubah = mysqli_query($koneksi, 'UPDATE dbdosen SET nip="' . $nip . '",alamat="' . $alamat . '",telp="' . $telp . '",jabatan="' . $jabatan . '",email="' . $email . '",tgl_lahir="' . $tgl_lahir . '" WHERE id_dosen="' . $id . '"');
  if ($ubah) {
    echo '
          <script>
            alert("Berhasil Mengubah Data Dosen");
            window.location="index.php?hal=dosen"; //menuju ke halaman dosen
          </script>
        ';
  }else {
    echo '
              <script>
                alert("Gagal Mengubah Data Dosen");
              </script>
              ';
  }
}
?>