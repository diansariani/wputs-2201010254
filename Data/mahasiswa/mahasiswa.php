<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Mahasiswa</h1>
  </div>
  <!---Container Fluid-->

  <div class="card">
    <h2 align="center" class="mt-4">Data Mahasiswa</h2>
    <div class="card-body">
      <form action="index.php?hal=mahasiswa&" method="get">
        <div class="form-row align-items-center">
          <div class="col-sm-3 my-1">
            <label class="sr-only" for="inlineFormInputName">Name</label>
            <input type="text" name="carimah" class="form-control" id="inlineFormInputName" placeholder="Pencarian Nama Mahasiswa">
          </div>
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-success">Cari Mahasiswa</button>
          </div>
          <div class="col-sm-3 my-1">
            <a href="index.php?hal=mahtambah" class="btn btn-primary">Tambah Mahasiswa</a>
          </div>
        </div>
      </form>

      <?php
      if (isset($_GET['carimah'])) {
        $cari = $_GET['carimah'];
        echo "<b>Hasil pencarian : " . $cari . "</b>";
      }
      ?>

      <div class="table-responsive">

        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
              <th scope="col">NIM</th>
              <th scope="col">Nama Mahasiswa</th>
              <th scope="col">Program Studi</th>
              <th scope="col">Alamat</th>
              <th scope="col">Telepon</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Email</th>
              <th scope="col">Semester</th>
              <th scope="col">Aksi</th>

            </tr>
          </thead>
          <?php
          if (isset($_GET['carimah'])) {
            $cari = $_GET['carimah'];
            $tampil = mysqli_query($koneksi, "SELECT * FROM dbmahasiswa WHERE nama_mahasiswa like'%" . $cari . "%'");
          } else {
            $tampil = mysqli_query($koneksi, "SELECT * FROM dbmahasiswa");
          }
          while ($data = mysqli_fetch_array($tampil)) {
          ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $data['nim']; ?></th>
                <td><?php echo $data['nama_mahasiswa']; ?></td>
                <td><?php echo $data['program_studi']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['telp']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <td><?php echo $data['tgl_lahir']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['semester']; ?></td>
                <td>
                  <?php
                  echo '
                <a href="index.php?hal=mahedit&id=' . $data['id_mahasiswa'] . '" class="btn btn-warning mb-2"><i class="fas fa-edit"> Edit</a></i>
                <a href="index.php?hal=mahhapus&id=' . $data['id_mahasiswa'] . '" class="btn btn-danger mb-2"><i class="fas fa-trash-alt"> Hapus</a></i>
            '; ?>
                </td>
              </tr>
            </tbody>
          <?php
          }
          ?>
        </table>
      </div>
    </div>
  </div>
</div>