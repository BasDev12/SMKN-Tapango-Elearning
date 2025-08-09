<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tentang | E-Learning SMKN Tapango</title>
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
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="assets/img/logo.png" alt="Logo Sekolah" class="logo-sekolah">
      SMKN Tapango
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link active" href="tentang.php">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
        <li class="nav-item"><a class="btn btn-light btn-sm ms-2" href="auth/login.php">Masuk</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Tentang Section -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Tentang E-Learning SMKN Tapango</h2>
    <div class="row">
      <div class="col-md-6 mb-3">
        <img src="assets/img/elearning.jpg" alt="E-Learning" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-6">
        <p>
          <strong>SMKN Tapango</strong> berkomitmen menjadi pelopor pendidikan berbasis teknologi melalui sistem e-learning. Dengan platform ini, kami memberikan pengalaman pembelajaran digital yang efisien, fleksibel, dan terarah bagi seluruh peserta didik.
        </p>
        <p>
          Sistem ini memfasilitasi:
          <ul>
            <li>Akses materi pembelajaran daring</li>
            <li>Tugas dan ujian online</li>
            <li>Forum diskusi interaktif antara siswa dan guru</li>
          </ul>
        </p>
        <p>
          Tujuan utama kami adalah mendukung proses belajar mengajar yang modern dan relevan dengan perkembangan teknologi informasi. Kami percaya bahwa pendidikan digital adalah jembatan menuju masa depan.
        </p>
        <p class="mt-3">
          Kembali ke <a href="index.php">Beranda</a> atau <a href="kontak.php">hubungi kami</a> untuk informasi lebih lanjut. <br>
          Siap belajar? <a href="auth/login.php">Masuk sekarang</a>.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-primary text-white text-center py-3 mt-5">
  <small>&copy; <?= date('Y'); ?> SMKN Tapango. All Rights Reserved.</small>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
