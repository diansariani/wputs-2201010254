<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kampus</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <!-- <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css"> -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="css/adminlte.min.css"> -->

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="img/logo/campus.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        </head>

        <body class="">
            <?php
            include("koneksi.php");
            include("function.php");
            sideBar();

            // pencarian mahasiswa
            if (isset($_GET['carimah'])) {
                include("Data/mahasiswa/mahasiswa.php");
            }

            // pencarian dosen
            else if (isset($_GET['caridos'])) {
                include("Data/dosen/dosen.php");
            }

            // pencarian user
            else if (isset($_GET['cariuser'])) {
                include("Data/user/user.php");
            }

            // pencarian matakuliah
            else if (isset($_GET['carimk'])) {
                include("Data/matakuliah/matakuliah.php");
            }

            // halaman 
            else if (isset($_GET['hal'])) {
                $hal = $_GET['hal'];

                // murid
                if ($hal == 'mahasiswa') {
                    include("Data/mahasiswa/mahasiswa.php");
                } else if ($hal == 'mahtambah') {
                    include("Data/mahasiswa/mahasiswa_tambah.php");
                } else if ($hal == 'mahedit') {
                    include("Data/mahasiswa/mahasiswa_edit.php");
                } else if ($hal == 'mahhapus') {
                    include("Data/mahasiswa/mahasiswa_hapus.php");
                }

                // guru
                else if ($hal == 'dosen') {
                    include("Data/dosen/dosen.php");
                } else if ($hal == 'dostambah') {
                    include("Data/dosen/dosen_tambah.php");
                } else if ($hal == 'dosedit') {
                    include("Data/dosen/dosen_edit.php");
                } else if ($hal == 'doshapus') {
                    include("Data/dosen/dosen_hapus.php");
                }

                // petugas
                else if ($hal == 'user') {
                    include("Data/user/user.php");
                } else if ($hal == 'usertambah') {
                    include("Data/user/user_tambah.php");
                } else if ($hal == 'useredit') {
                    include("Data/user/user_edit.php");
                } else if ($hal == 'userhapus') {
                    include("Data/user/user_hapus.php");
                }

                // konsultasi
                else if ($hal == 'matakuliah') {
                    include("Data/matakuliah/matakuliah.php");
                } else if ($hal == 'mktambah') {
                    include("Data/matakuliah/matakuliah_tambah.php");
                } else if ($hal == 'mkedit') {
                    include("Data/matakuliah/matakuliah_edit.php");
                } else if ($hal == 'mkhapus') {
                    include("Data/matakuliah/matakuliah_hapus.php");
                }
            } else {
                dashboard(); // memanggil prosedur dashboard
            }
            footer(); // memanggil prosedur footer
            ?>

            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
            <script src="js/adminlte.js"></script>

            <!-- Menu Active Javascript -->
            <script>
                var active = window.location;

                $('li a').filter(function() {

                    return this.href == active;

                }).parent().addClass('active');
            </script>

            <!-- ./wrapper -->

            <!-- REQUIRED SCRIPTS -->
            <!-- jQuery -->
            <!-- <script src="plugins/jquery/jquery.min.js"></script> -->
            <!-- Bootstrap -->
            <!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
            <!-- overlayScrollbars -->
            <script src="vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            <!-- <script src="dist/js/adminlte.js"></script> -->

            <!-- PAGE PLUGINS -->
            <!-- jQuery Mapael -->
            <script src="vendor/jquery-mousewheel/jquery.mousewheel.js"></script>
            <script src="vendor/raphael/raphael.min.js"></script>
            <script src="vendor/jquery-mapael/jquery.mapael.min.js"></script>
            <script src="vendor/jquery-mapael/maps/usa_states.min.js"></script>
            <!-- ChartJS -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- AdminLTE for demo purposes -->
            <script src="js/demo.js"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="js/pages/dashboard2.js"></script>

        </body>

</html>