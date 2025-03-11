<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h1 class="display-4 fw-bold mb-4">Penerimaan Peserta Didik Baru Tahun 2025</h1>
        <p class="lead mb-4">Jadilah bagian dari keluarga besar Sekolah Modern untuk masa depan cemerlang. Pendaftaran dibuka secara online dan offline.</p>
        <div class="d-flex flex-wrap gap-2">
          <a href="#daftar" class="btn btn-light btn-lg">Daftar Sekarang</a>
          <a href="#alur" class="btn btn-outline-light btn-lg">Alur Pendaftaran</a>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="image1.png" class="img-fluid rounded-3 shadow-lg">
      </div>
    </div>
  </div>
</section>
<h2>Halo Saya siswa</h2>
<?= $this->endSection(); ?>