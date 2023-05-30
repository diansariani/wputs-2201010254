<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <!---Container Fluid-->

  <div class="alert alert-light" role="alert">
    <h2 align="center">Form Tambah Data Mahasiswa</h2>
    <form method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Nim</label>
        <input type="text" name="nim" required class="form-control" id="exampleInputEmail1" aria-describedy="emailHelp" placeholder="NIM">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Mahasiswa</label>
        <input type="text" name="nama_mahasiswa" required class="form-control" id="exampleInputEmail1" aria-describedy="emailHelp" placeholder="Nama Mahasiswa">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Program Studi</label>
        <select name="program_studi" class="form-control" id="exampleFormControlSelect1">
          <option value="TI-MDI">TI-MDI</option>
          <option value="TI-KAB">TI-KAB</option>
          <option value="TI-PAR">TI-PAR</option>
          <option value="SK">SK</option>
          <option value="DKV">DKV</option>
          <option value="BD">BD</option>
        </select>
        <div class="form-group">
          <label for="exampleInputPassword1">Alamat</label>
          <input type="text" name="alamat" required class="form-control" id="exampleInputPassword1" placeholder="Alamat">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Telepon</label>
          <input type="number" name="telp" required class="form-control" id="exampleInputPassword1" placeholder="Telepon">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Jenis Kelamin</label>
          <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" required class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" required class="form-control" id="exampleInputPassword1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Semester</label>
            <input type="number" name="semester" required class="form-control" id="exampleInputPassword1" placeholder="Semester">
          </div>

          <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
          <a href="index.php?hal=mahasiswa" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>

<?php
if (isset($_POST['simpan'])) { //proses simpan data penerbit
  $nim = $_POST['nim'];
  $nama_mahasiswa = $_POST['nama_mahasiswa'];
  $program_studi = $_POST['program_studi'];
  $alamat = $_POST['alamat'];
  $telp = $_POST['telp'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $email = $_POST['email'];
  $semester = $_POST['semester'];


  $simpan = mysqli_query($koneksi, 'INSERT INTO dbmahasiswa(nim,nama_mahasiswa,program_studi,alamat,telp,jenis_kelamin,tgl_lahir,email,semester) VALUES ("' . $nim . '", "' . $nama_mahasiswa . '","' . $program_studi . '","' . $alamat . '","' . $telp . '","' . $jenis_kelamin . '","' . $tgl_lahir . '","' . $email . '","' . $semester . '")');
  if ($simpan) {
    echo '
              <script>
                alert("Berhasil Menambah Data Mahasiswa");
                window.location="index.php?hal=mahasiswa"; //menuju ke halaman mahasiswa
              </script>
              ';
  } else {
    echo '
              <script>
                alert("Gagal Menambah Data Mahasiswa");
              </script>
              ';
  }
}
?>