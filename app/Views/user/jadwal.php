<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section id="daftar" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="section-title text-start">Persyaratan Pendaftaran</h2>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary me-3"></i>
                            <span>Fotokopi Ijazah/STTB terakhir yang dilegalisir</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary me-3"></i>
                            <span>Fotokopi Kartu Keluarga</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary me-3"></i>
                            <span>Fotokopi Akta Kelahiran</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary me-3"></i>
                            <span>Fotokopi rapor semester terakhir</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary me-3"></i>
                            <span>Pas foto berwarna ukuran 3x4 (4 lembar)</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary me-3"></i>
                            <span>Membayar biaya pendaftaran Rp. 250.000,-</span>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary">Download Formulir</a>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3 class="card-title text-center mb-4">Form Pendaftaran Online</h3>
                            <form>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap">
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="tempat" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat" placeholder="Masukkan tempat lahir">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tanggal" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="Laki-laki">
                                            <label class="form-check-label" for="laki">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                                    <textarea class="form-control" id="alamat" rows="2" placeholder="Masukkan alamat lengkap"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="sekolah" class="form-label">Asal Sekolah</label>
                                    <input type="text" class="form-control" id="sekolah" placeholder="Masukkan asal sekolah">
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telp" class="form-label">No. Telepon</label>
                                        <input type="tel" class="form-control" id="telp" placeholder="Masukkan no. telepon">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="orangtua" class="form-label">Nama Orang Tua/Wali</label>
                                    <input type="text" class="form-control" id="orangtua" placeholder="Masukkan nama orang tua/wali">
                                </div>
                                <div class="mb-3">
                                    <label for="telp_ortu" class="form-label">No. Telepon Orang Tua/Wali</label>
                                    <input type="tel" class="form-control" id="telp_ortu" placeholder="Masukkan no. telepon orang tua/wali">
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<section id="jadwal" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Jadwal PPDB 2025</h2>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="timeline">
                        <div class="timeline-item fade-in">
                            <p class="timeline-date">1 - 15 Juni 2025</p>
                            <h5>Pendaftaran Gelombang I</h5>
                            <p>Pendaftaran online melalui website atau datang langsung ke sekolah.</p>
                        </div>
                        <div class="timeline-item fade-in">
                            <p class="timeline-date">18 - 20 Juni 2025</p>
                            <h5>Tes Seleksi Gelombang I</h5>
                            <p>Tes potensi akademik, wawancara, dan tes minat bakat.</p>
                        </div>
                        <div class="timeline-item fade-in">
                            <p class="timeline-date">25 Juni 2025</p>
                            <h5>Pengumuman Gelombang I</h5>
                            <p>Pengumuman hasil seleksi melalui website dan papan pengumuman sekolah.</p>
                        </div>
                        <div class="timeline-item fade-in">
                            <p class="timeline-date">1 - 15 Juli 2025</p>
                            <h5>Pendaftaran Gelombang II</h5>
                            <p>Pendaftaran online melalui website atau datang langsung ke sekolah.</p>
                        </div>
                        <div class="timeline-item fade-in">
                            <p class="timeline-date">18 - 20 Juli 2025</p>
                            <h5>Tes Seleksi Gelombang II</h5>
                            <p>Tes potensi akademik, wawancara, dan tes minat bakat.</p>
                        </div>
                        <div class="timeline-item fade-in">
                            <p class="timeline-date">25 Juli 2025</p>
                            <h5>Pengumuman Gelombang II</h5>
                            <p>Pengumuman hasil seleksi melalui website dan papan pengumuman sekolah.</p>
                        </div>
                        <div class="timeline-item fade-in">
                            <p class="timeline-date">1 - 15 Agustus 2025</p>
                            <h5>Daftar Ulang</h5>
                            <p>Proses daftar ulang dan pembayaran biaya pendidikan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

<?= $this->endSection(); ?>