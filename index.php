<?php
session_start();

// Redirect jika sudah login
if (isset($_SESSION['role'])) {
    switch ($_SESSION['role']) {
        case 'admin':
            header('Location: admin/dashboard.php');
            exit;
        case 'guru':
            header('Location: guru/dashboard.php');
            exit;
        case 'siswa':
            header('Location: siswa/dashboard.php');
            exit;
        case 'wali':
            header('Location: wali/dashboard.php');
            exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda | E-Learning SMKN Tapango</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .logo-sekolah {
            height: 50px;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="assets/img/logo.png" alt="Logo Sekolah" class="logo-sekolah">
      SMKN Tapango
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="tentang.php">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
        <li class="nav-item"><a class="btn btn-light btn-sm ms-2" href="auth/login.php">Masuk</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Carousel Slide -->
<div id="slideShow" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/slide1.jpg" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="assets/img/slide2.jpg" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="assets/img/slide3.jpg" class="d-block w-100" alt="Slide 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#slideShow" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#slideShow" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Hero Section -->
<section class="py-5 text-center bg-light">
  <div class="container">
    <h1 class="display-5 fw-bold">Selamat Datang di Sistem E-Learning</h1>
    <p class="lead">SMKN Tapango – Pembelajaran Digital Menuju Sekolah Masa Depan</p>
    <a href="auth/login.php" class="btn btn-primary btn-lg">Mulai Belajar</a>
  </div>
</section>

<!-- Info Sekolah -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Mengapa E-Learning?</h2>
    <div class="row text-center">
      <div class="col-md-4">
        <h5>Akses Mudah</h5>
        <p>Dapat diakses kapan saja dan di mana saja oleh siswa dan guru.</p>
      </div>
      <div class="col-md-4">
        <h5>Interaktif</h5>
        <p>Dilengkapi forum diskusi dan tugas online yang efisien.</p>
      </div>
      <div class="col-md-4">
        <h5>Efisien</h5>
        <p>Mendukung pengelolaan pembelajaran secara digital dan terstruktur.</p>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-primary text-white text-center py-3 mt-5">
  <small>&copy; <?= date('Y'); ?> SMKN Tapango. All Rights Reserved.</small>
</footer>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
