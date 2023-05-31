<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <!---Container Fluid-->

  <div class="alert alert-light" role="alert">
    <h2 align="center">Form Tambah Data Matakuliah</h2>
    <form method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Matakuliah</label>
        <input type="text" name="nama_matakuliah" required class="form-control" id="exampleInputEmail1" aria-describedy="emailHelp" placeholder="Nama Matakuliah">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">SKS</label>
        <input type="number" name="sks" required class="form-control" id="exampleInputPassword1" placeholder="SKS">
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
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Kode Matakuliah</label>
        <input type="text" name="kode_matakuliah" required class="form-control" id="exampleInputPassword1" placeholder="Kode Matakuliah">
      </div>
      <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
      <a href="index.php?hal=user" class="btn btn-secondary">Batal</a>
    </form>
  </div>

</div>

<?php
if (isset($_POST['simpan'])) { //proses simpan data matakuliah
  $nama_matakuliah = $_POST['nama_matakuliah'];
  $sks = $_POST['sks'];
  $program_studi = $_POST['program_studi'];
  $kode_matakuliah = $_POST['kode_matakuliah'];

  $simpan = mysqli_query($koneksi, 'INSERT INTO dbmatakuliah(nama_matakuliah,sks,program_studi,kode_matakuliah) VALUES (
    "' . $nama_matakuliah . '","' . $sks . '","' . $program_studi . '","' . $kode_matakuliah . '")');
  if ($simpan) {
    echo '
              <script>
                alert("Berhasil Menambah Data Matakuliah");
                window.location="index.php?hal=matakuliah"; //menuju ke halaman matakuliah
              </script>
            ';
  } else {
    echo '
              <script>
                alert("Gagal Menambah Data Matakuliah");
              </script>
              ';
  }
}
?>