<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User</h1>
  </div>
  <!---Container Fluid-->

  <div class="card">
    <h2 class="mt-4" align="center">Data User</h2>
    <div class="card-body">
      <form action="index.php?hal=user&" method="get">
        <div class="form-row align-items-center">
          <div class="col-sm-3 my-1">
            <label class="sr-only" for="inlineFormInputName">Name</label>
            <input type="text" name="cariuser" class="form-control" id="inlineFormInputName" placeholder="Pencarian Nama User">
          </div>
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-success">Cari User</button>
          </div>
          <div class="col-sm-3 my-1">
            <a href="index.php?hal=usertambah" class="btn btn-primary">Tambah User</a>
          </div>
        </div>
      </form>

      <?php
      if (isset($_GET['cariuser'])) {
        $cari = $_GET['cariuser'];
        echo "<b>Hasil pencarian : " . $cari . "</b>";
      }
      ?>

      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
              <th scope="col">ID User</th>
              <th scope="col">Nama User</th>
              <th scope="col">Alamat User</th>
              <th scope="col">No Hp</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Aksi</th>

            </tr>
          </thead>
          <?php
          if (isset($_GET['cariuser'])) {
            $cari = $_GET['cariuser'];
            $tampil = mysqli_query($koneksi, "SELECT * FROM dbuser WHERE nama_user like'%" . $cari . "%'");
          } else {
            $tampil = mysqli_query($koneksi, "SELECT * FROM dbuser");
          }
          while ($data = mysqli_fetch_array($tampil)) {
          ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $data['id_user']; ?></th>
                <td><?php echo $data['nama_user']; ?></td>
                <td><?php echo $data['alamat_user']; ?></td>
                <td><?php echo $data['no_hp']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td>
                  <?php
                  echo '
                <a href="index.php?hal=useredit&id=' . $data['id_user'] . '" class="btn btn-warning mb-2"><i class="fas fa-edit"> Edit</a></i>
                <a href="index.php?hal=userhapus&id=' . $data['id_user'] . '" class="btn btn-danger mb-2"><i class="fas fa-trash-alt"> Hapus</a></i>
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