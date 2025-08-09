<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kontak | E-Learning SMKN Tapango</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="tentang.php">Tentang</a></li>
        <li class="nav-item"><a class="nav-link active" href="kontak.php">Kontak</a></li>
        <li class="nav-item"><a class="btn btn-light btn-sm ms-2" href="auth/login.php">Masuk</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Kontak Section -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Hubungi Kami</h2>
    <div class="row">
      <div class="col-md-6">
        <form>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Anda</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" placeholder="nama@email.com" required>
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda di sini..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
      </div>
      <div class="col-md-6">
        <h5 class="mb-3">Alamat Sekolah</h5>
        <p>
          SMK Negeri Tapango<br>
          Jl. Pendidikan No. 10, Tapango, Polewali Mandar<br>
          Sulawesi Barat, Indonesia
        </p>
        <p>
          <strong>Telepon:</strong> (0428) 123456<br>
          <strong>Email:</strong> smkntapango@domain.sch.id
        </p>
        <div class="mt-4">
          <iframe class="rounded w-100" height="250" 
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.829969723444!2d119.03320341477349!3d-8.154925794127792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbfe4f40cd9d7eb%3A0x2c8a54e83dcf2f10!2sSMKN%20Tapango!5e0!3m2!1sid!2sid!4v1681111111111" 
                  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-primary text-white text-center py-3 mt-5">
  <small>&copy; <?= date('Y'); ?> SMKN Tapango. All Rights Reserved.</small>
</footer>

<!-- JS Bootstrap -->
<script s
