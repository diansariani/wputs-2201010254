<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Matakuliah</h1>
  </div>
  <!---Container Fluid-->

  <div class="card">
    <h2 class="mt-4" align="center">Data Matakuliah</h2>
    <div class="card-body">
      <form action="index.php?hal=matakuliah&" method="get">
        <div class="form-row align-items-center">
          <div class="col-sm-3 my-1">
            <label class="sr-only" for="inlineFormInputName">Name</label>
            <input type="text" name="carimk" class="form-control" id="inlineFormInputName" placeholder="Pencarian Nama Matakuliah">
          </div>
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-success">Cari Matakuliah</button>
          </div>
          <div class="col-sm-3 my-1">
            <a href="index.php?hal=mktambah" class="btn btn-primary">Tambah Matakuliah</a>
          </div>
        </div>
      </form>

      <?php
      if (isset($_GET['carimk'])) {
        $cari = $_GET['carimk'];
        echo "<b>Hasil pencarian : " . $cari . "</b>";
      }
      ?>

      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
              <th scope="col">ID Matakuliah</th>
              <th scope="col">Nama Matakuliah</th>
              <th scope="col">SKS</th>
              <th scope="col">Program Studi</th>
              <th scope="col">Kode Matakuliah</th>
              <th scope="col">Aksi</th>

            </tr>
          </thead>
          <?php
          if (isset($_GET['carimk'])) {
            $cari = $_GET['carimk'];
            $tampil = mysqli_query($koneksi, "SELECT * FROM dbmatakuliah WHERE nama_matakuliah like'%" . $cari . "%'");
          } else {
            $tampil = mysqli_query($koneksi, "SELECT * FROM dbmatakuliah");
          }
          while ($data = mysqli_fetch_array($tampil)) {
          ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $data['id_matakuliah']; ?></th>
                <td><?php echo $data['nama_matakuliah']; ?></td>
                <td><?php echo $data['sks']; ?></td>
                <td><?php echo $data['program_studi']; ?></td>
                <td><?php echo $data['kode_matakuliah']; ?></td>
                <td>
                  <?php
                  echo '
                <a href="index.php?hal=mkedit&id=' . $data['id_matakuliah'] . '" class="btn btn-warning mb-2"><i class="fas fa-edit"> Edit</a></i>
                <a href="index.php?hal=mkhapus&id=' . $data['id_matakuliah'] . '" class="btn btn-danger mb-2"><i class="fas fa-trash-alt"> Hapus</a></i>
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