<?php
// prosedur menampilkan menu
function sideBar()
{
?>
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center " href="#">
        <div class="sidebar-brand-text mx-3">Kampus</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>

      <li class="nav-item">
        <a class="nav-link" href="index.php?hal=mahasiswa">
          <i class="fas fa-fw fa-users"></i>
          <span>Mahasiswa</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?hal=dosen">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Dosen</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?hal=user">
          <i class="fas fa-fw fa-address-card"></i>
          <span>User</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?hal=matakuliah">
          <i class="fas fa-fw fa-book-open"></i>
          <span>Matakuliah</span>
        </a>
      </li>
      <hr class="sidebar-divider">
    </ul>




    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small"><?php echo $_SESSION["username"] ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
      <?php
    }

    // dashboard
    function dashboard()
    {
      include("koneksi.php");
      ?>
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <!-- <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div> -->
                <div class="container-fluid" id="container-wrapper">
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                  </div>
                  <!-- /.col -->
                  <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div> -->
                  <!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <!-- Info boxes -->

                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title">Jumlah Data</h5>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="row row-cols-2">
                          <div class="col-lg-6 col-sm-6">
                            <div class="circle-tile ">
                              <a href="index.php?hal=mahasiswa">
                                <div class="circle-tile"><i class="fas fa-fw fa-users fa-3x"></i></div>
                              </a>
                              <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded"> Mahasiswa</div>
                                <div class="circle-tile-number text-faded "> Jumlah Mahasiswa :
                                  <?php
                                  $tampil = mysqli_query($koneksi, "SELECT * FROM dbmahasiswa");
                                  $jumlah = mysqli_num_rows($tampil);
                                  echo $jumlah;
                                  ?>
                                </div>
                                <a class="circle-tile-footer" href="index.php?hal=mahasiswa">Info Selanjutnya <i class="fa fa-chevron-circle-right"></i></a>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-6 col-sm-6">
                            <div class="circle-tile ">
                              <a href="index.php?hal=dosen">
                                <div class="circle-tile"><i class="fas fa-chalkboard-teacher fa-3x"></i></div>
                              </a>
                              <div class="circle-tile-content">
                                <div class="circle-tile-description text-faded"> Dosen </div>
                                <div class="circle-tile-number text-faded "> Jumlah Dosen :
                                  <?php
                                  $tampil = mysqli_query($koneksi, "SELECT * FROM dbdosen");
                                  $jumlah = mysqli_num_rows($tampil);
                                  echo $jumlah;
                                  ?>
                                </div>
                                <a class="circle-tile-footer" href="index.php?hal=dosen">Info Selanjutnya <i class="fa fa-chevron-circle-right"></i></a>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-6 col-sm-6 mt-5">
                            <div class="circle-tile ">
                              <a href="index.php?hal=user">
                                <div class="circle-tile"><i class="fa fa-address-card fa-fw fa-3x"></i></div>
                              </a>
                              <div class="circle-tile-content">
                                <div class="circle-tile-description text-faded"> User </div>
                                <div class="circle-tile-number text-faded "> Jumlah User :
                                  <?php
                                  $tampil = mysqli_query($koneksi, "SELECT * FROM dbuser");
                                  $jumlah = mysqli_num_rows($tampil);
                                  echo $jumlah;
                                  ?>
                                </div>
                                <a class="circle-tile-footer" href="index.php?hal=user">Info Selanjutnya <i class="fa fa-chevron-circle-right"></i></a>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-6 col-sm-6 mt-5">
                            <div class="circle-tile ">
                              <a href="index.php?hal=matakuliah">
                                <div class="circle-tile"><i class="fa fa-book-open fa-fw fa-3x"></i></div>
                              </a>
                              <div class="circle-tile-content">
                                <div class="circle-tile-description text-faded"> Matakuliah </div>
                                <div class="circle-tile-number text-faded "> Jumlah Matakuliah :
                                  <?php
                                  $tampil = mysqli_query($koneksi, "SELECT * FROM dbmatakuliah");
                                  $jumlah = mysqli_num_rows($tampil);
                                  echo $jumlah;
                                  ?>
                                </div>
                                <a class="circle-tile-footer" href="index.php?hal=matakuliah">Info Selanjutnya <i class="fa fa-chevron-circle-right"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.row -->
                      </div>

                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div><!--/. container-fluid -->
            </section>
            <!-- /.content -->
          </div>
        <?php
      }




      // prosedur footer
      function footer()
      {
        ?>
          <!-- Footer -->
          <footer class="sticky-footer bg-white mt-4">
            <div class="container my-auto">
              <div class="copyright text-center my-auto font-weight-bold">
                <span>Copyright &copy; INSTIKI 2023
                </span>
              </div>
            </div>
          </footer>
          <!-- Footer -->
        </div>
      </div>
    <?php
      }
    ?>