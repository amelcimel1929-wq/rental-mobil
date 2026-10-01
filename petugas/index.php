<!DOCTYPE html>
<html lang="en">

<!-- head -->
 <?php include 'partials/head.php' ?>
 <!-- head -->

<body>
  <div id="overlay" class="overlay"></div>

  <!-- TOPBAR -->
  <?php include 'components/topbar.php' ?>
  <!-- TOPBAR -->

  <!-- SIDEBAR -->
    <?php include 'components/sidebar.php' ?>

  <!-- MAIN CONTENT -->
   <?php
    $page = isset($_GET['page']) ? $_GET['page'] : "dashboard";
    switch ($page) {
        //untuk dashboard
        case 'dashboard':
            // isinya apa / mau diisi dengan bagian pages apa
            include 'pages/dashboard.php';
            // Fungsinya untuk menahan halaman agar tidak 
            // otomatis berpindah ke halaman setelahnya
            break;
        case 'kendaraan':
            include 'pages/kendaraan/kendaraan.php';
            break;
        case 'tambah-kendaraan':
            include 'pages/kendaraan/tambah.php';
            break;
        case 'pembayaran':
            include 'pages/pembayaran/pembayaran.php';
            break;
        case 'tambah-pembayaran':
            include 'pages/pembayaran/tambah.php';
            break;
        case 'penyewaan':
            include 'pages/penyewaan/penyewaan.php';
            break;
        case 'tambah-penyewaan':
            include 'pages/penyewaan/tambah.php';
            break;
   
        
    }
    ?>

  <!-- Bootstrap JS -->
  <?php include 'partials/script.php' ?>



</body>

</html>