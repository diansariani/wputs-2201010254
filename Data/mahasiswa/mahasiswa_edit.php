<?php
$id     = $_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM dbmahasiswa WHERE id_mahasiswa= '$id'");
$data   = mysqli_fetch_array($tampil);
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <!---Container Fluid-->
  <div class="alert alert-light" role="alert">
    <h2 align="center">Form Ubah Data Mahasiswa</h2>
    <form method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">NIM</label>
        <input type="text" name="nim" value="<?php echo $data['nim'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM">
      </div>
      <div class="form-group">
        <input type="hidden" name="id_mahasiswa" value="<?php echo $id ?>" required class="form-control" id="exampleInputEmail1" aria-describedy="emailHelp" placeholder="Masukkan Id Mahasiswa">
        <label for="exampleInputEmail1">Nama Mahasiswa</label>
        <input type="text" name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Mahasiswa">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Program Studi</label>
        <select name="program_studi" class="form-control" id="exampleFormControlSelect1">
          <option value="TI-MDI" <?php if ($data['program_studi'] == 'TI-MDI') {
                                    echo 'selected';
                                  } ?>>TI-MDI</option>
          <option value="TI-KAB" <?php if ($data['program_studi'] == 'TI-KAB') {
                                    echo 'selected';
                                  } ?>>TI-KAB</option>
          <option value="TI-PAR" <?php if ($data['program_studi'] == 'TI-PAR') {
                                    echo 'selected';
                                  } ?>>TI-PAR</option>
          <option value="SK" <?php if ($data['program_studi'] == 'SK') {
                                echo 'selected';
                              } ?>>SK</option>
          <option value="DKV" <?php if ($data['program_studi'] == 'DKV') {
                                echo 'selected';
                              } ?>>DKV</option>
          <option value="BD" <?php if ($data['program_studi'] == 'BD') {
                                echo 'selected';
                              } ?>>BD</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Alamat</label>
        <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Alamat">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Telepon</label>
        <input type="text" name="telp" value="<?php echo $data['telp'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Telepon">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
          <option value="Laki-Laki" <?php if ($data['jenis_kelamin'] == 'Laki-Laki') {
                                      echo 'selected';
                                    } ?>>Laki-Laki</option>
          <option value="Perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan') {
                                      echo 'selected';
                                    } ?>>Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" name="email" value="<?php echo $data['email'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Semester</label>
        <input type="number" name="semester" value="<?php echo $data['semester'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Semester">
      </div>

      <input type="submit" name="ubah" class="btn btn-primary" value="Simpan Perubahan">
      <a href="index.php?hal=mahasiswa" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>

<?php
if (isset($_POST['ubah'])) { //proses simpan perubahan data penerbit
  $nim = $_POST['nim'];
  $nama_mahasiswa = $_POST['nama_mahasiswa'];
  $program_studi = $_POST['program_studi'];
  $alamat = $_POST['alamat'];
  $telp = $_POST['telp'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $email = $_POST['email'];
  $semester = $_POST['semester'];

  $ubah = mysqli_query($koneksi, 'UPDATE dbmahasiswa SET nim="' . $nim . '",nama_mahasiswa="' . $nama_mahasiswa . '",program_studi="' . $program_studi . '",alamat="' . $alamat . '",telp="' . $telp . '",jenis_kelamin="' . $jenis_kelamin . '",tgl_lahir="' . $tgl_lahir . '",email="' . $email . '",semester="' . $semester . '" WHERE id_mahasiswa="' . $id . '"');
  if ($ubah) {
    echo '
          <script>
            alert("Berhasil Mengubah Data Mahasiswa");
            window.location="index.php?hal=mahasiswa"; //menuju ke halaman mahasiswa
          </script>
        ';
  } else {
    echo '
              <script>
                alert("Gagal Mengubah Data Mahasiswa");
              </script>
              ';
  }
}
?>