<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <!---Container Fluid-->

  <div class="alert alert-light" role="alert">
    <h2 align="center">Form Tambah Data Dosen</h2>
    <form method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">NIP</label>
        <input type="number" name="nip" required class="form-control" id="exampleInputEmail1" aria-describedy="emailHelp" placeholder="NIP">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Dosen</label>
        <input type="text" name="nama_dosen" required class="form-control" id="exampleInputEmail1" aria-describedy="emailHelp" placeholder="Nama Dosen">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Alamat Dosen</label>
        <input type="text" name="alamat" required class="form-control" id="exampleInputPassword1" placeholder="Alamat Dosen">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Telepon Dosen</label>
        <input type="number" name="telp" required class="form-control" id="exampleInputPassword1" placeholder="Telepon Dosen">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Jabatan</label>
        <input type="text" name="jabatan" required class="form-control" id="exampleInputPassword1" placeholder="Jabatan">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" name="email" required class="form-control" id="exampleInputPassword1" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" required class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
      </div>

      <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
      <a href="index.php?hal=dosen" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>

<?php
if (isset($_POST['simpan'])) { //proses simpan data dosen
  $nip = $_POST['nip'];
  $nama_dosen = $_POST['nama_dosen'];
  $alamat = $_POST['alamat'];
  $telp = $_POST['telp'];
  $jabatan = $_POST['jabatan'];
  $email = $_POST['email'];
  $tgl_lahir = $_POST['tgl_lahir'];


  $simpan = mysqli_query($koneksi, 'INSERT INTO dbdosen(nip,nama_dosen,alamat,telp,jabatan,email,tgl_lahir) VALUES ("' . $nip . '","' . $nama_dosen . '","' . $alamat . '","' . $telp . '","' . $jabatan . '","' . $email . '","' . $tgl_lahir . '")');
  if ($simpan) {
    echo '
              <script>
                alert("Berhasil Menambah Data Dosen");
                window.location="index.php?hal=dosen"; //menuju ke halaman dosen
              </script>
            ';
  }else {
    echo '
              <script>
                alert("Gagal Menambah Data Dosen");
              </script>
              ';
  }
}
?>