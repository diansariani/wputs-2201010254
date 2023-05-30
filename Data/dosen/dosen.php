<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dosen</h1>
  </div>
  <!---Container Fluid-->

  <div class="card">
    <h2 class="mt-4" align="center">Data Dosen</h2>
    <div class="card-body">
      <form action="index.php?hal=dosen" method="get">
        <div class="form-row align-items-center">
          <div class="col-sm-3 my-1">
            <label class="sr-only" for="inlineFormInputName">Name</label>
            <input type="text" name="caridos" class="form-control" id="inlineFormInputName" placeholder="Pencarian Nama Dosen">
          </div>
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-success">Cari Dosen</button>
          </div>
          <div class="col-sm-3 my-1">
            <a href="index.php?hal=dostambah" class="btn btn-primary">Tambah Dosen</a>
          </div>
        </div>
      </form>

      <?php
      if (isset($_GET['caridos'])) {
        $cari = $_GET['caridos'];
        echo "<b>Hasil pencarian : " . $cari . "</b>";
      }
      ?>
      <table class="table table-bordered table-responsive-lg">
        <thead>
          <tr class="text-center">
            <th scope="col">NIP</th>
            <th scope="col">Nama Dosen</th>
            <th scope="col">Alamat</th>
            <th scope="col">Telp</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Email</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <?php
        if (isset($_GET['caridos'])) {
          $cari = $_GET['caridos'];
          $tampil = mysqli_query($koneksi, "SELECT * FROM dbdosen WHERE nama_dosen like'%" . $cari . "%'");
        } else {
          $tampil = mysqli_query($koneksi, "SELECT * FROM dbdosen");
        }
        while ($data = mysqli_fetch_array($tampil)) {
        ?>
          <tbody>
            <tr>
              <th scope="row"><?php echo $data['nip']; ?></th>
              <td><?php echo $data['nama_dosen']; ?></td>
              <td><?php echo $data['alamat']; ?></td>
              <td><?php echo $data['telp']; ?></td>
              <td><?php echo $data['jabatan']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['tgl_lahir']; ?></td>
              <td>
                <?php
                echo '
                <a href="index.php?hal=dosedit&id=' . $data['id_dosen'] . '" class="btn btn-warning mb-2"><i class="fas fa-edit"> Edit</a></i>
                
                <a href="index.php?hal=doshapus&id=' . $data['id_dosen'] . '" class="btn btn-danger mb-2"><i class="fas fa-trash-alt"> Hapus</a></i>
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