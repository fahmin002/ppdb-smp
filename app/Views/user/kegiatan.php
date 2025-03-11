<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Kegiatan & Ekstrakurikuler</h1>
            <p class="lead mb-4">Temukan berbagai kegiatan dan ekstrakurikuler menarik yang dapat mengembangkan bakat dan minat siswa</p>
            <a href="#kegiatan" class="btn btn-light btn-lg px-4 me-2">Lihat Kegiatan</a>
            <a href="#ekstrakurikuler" class="btn btn-outline-light btn-lg px-4 mt-2">Lihat Ekstrakurikuler</a>
        </div>
    </section>

    <!-- Kegiatan Section -->
    <section id="kegiatan" class="py-5">
        <div class="container">
            <h2 class="section-title">Kegiatan Sekolah</h2>
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <p class="lead">Berbagai kegiatan sekolah yang dirancang untuk mengembangkan potensi akademik dan non-akademik siswa</p>
                </div>
            </div>
            <div class="filter-buttons text-center">
                <button class="filter-btn active">Semua</button>
                <button class="filter-btn">Akademik</button>
                <button class="filter-btn">Seni</button>
                <button class="filter-btn">Olahraga</button>
                <button class="filter-btn">Sosial</button>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card fade-in">
                        <span class="category-badge">Olahraga & Seni</span>
                        <img src="/api/placeholder/400/300" alt="Pekan Olahraga dan Seni" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Pekan Olahraga dan Seni</h5>
                            <p class="card-text">Ajang tahunan untuk mengembangkan bakat dan minat siswa dalam bidang olahraga dan seni yang diselenggarakan selama satu minggu penuh.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><i class="fas fa-calendar-alt me-2"></i>Agustus 2025</small>
                                <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card fade-in">
                        <span class="category-badge">Akademik</span>
                        <img src="/api/placeholder/400/300" alt="Kunjungan Industri" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Kunjungan Industri</h5>
                            <p class="card-text">Program educational trip untuk memberikan wawasan dunia kerja dan industri kepada siswa dengan mengunjungi perusahaan terkemuka.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><i class="fas fa-calendar-alt me-2"></i>September 2025</small>
                                <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card fade-in">
                        <span class="category-badge">Akademik</span>
                        <img src="/api/placeholder/400/300" alt="English Day" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">English Day</h5>
                            <p class="card-text">Kegiatan mingguan untuk meningkatkan kemampuan bahasa Inggris seluruh warga sekolah melalui berbagai aktivitas interaktif dan menarik.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><i class="fas fa-calendar-alt me-2"></i>Setiap Jumat</small>
                                <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card fade-in">
                        <span class="category-badge">Sosial</span>
                        <img src="/api/placeholder/400/300" alt="Bakti Sosial" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Bakti Sosial</h5>
                            <p class="card-text">Kegiatan amal yang melibatkan seluruh warga sekolah untuk membantu masyarakat sekitar yang membutuhkan dan menanamkan jiwa sosial.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><i class="fas fa-calendar-alt me-2"></i>Oktober 2025</small>
                                <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card fade-in">
                        <span class="category-badge">Akademik</span>
                        <img src="/api/placeholder/400/300" alt="Seminar Pendidikan" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Seminar Pendidikan</h5>
                            <p class="card-text">Seminar dengan mengundang pakar pendidikan untuk memberikan wawasan dan motivasi kepada siswa dan guru dalam dunia pendidikan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><i class="fas fa-calendar-alt me-2"></i>November 2025</small>
                                <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card fade-in">
                        <span class="category-badge">Seni</span>
                        <img src="/api/placeholder/400/300" alt="Festival Budaya" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Festival Budaya</h5>
                            <p class="card-text">Perayaan keberagaman budaya Indonesia melalui pertunjukan seni, pameran, dan kuliner tradisional dari berbagai daerah.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><i class="fas fa-calendar-alt me-2"></i>Desember 2025</small>
                                <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary px-4">Lihat Semua Kegiatan</a>
            </div>
        </div>
    </section>

    <!-- Ekstrakurikuler Section -->
    <section id="ekstrakurikuler" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Ekstrakurikuler</h2>
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <p class="lead">Pilihan ekstrakurikuler beragam untuk mengembangkan minat dan bakat siswa di luar kegiatan akademik</p>
                </div>
            </div>
            <div class="filter-buttons text-center">
                <button class="filter-btn active">Semua</button>
                <button class="filter-btn">Olahraga</button>
                <button class="filter-btn">Seni</button>
                <button class="filter-btn">Sains</button>
                <button class="filter-btn">Bahasa</button>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="ekskul-card fade-in">
                        <img src="/img/image.png" alt="Basket" class="ekskul-img">
                        <div class="ekskul-overlay">
                            <h5 class="ekskul-title">Basket</h5>
                            <p class="ekskul-day"><i class="fas fa-clock me-2"></i>Selasa & Kamis, 15:00-17:00</p>
                            <p class="ekskul-desc">Latihan intensif untuk mengembangkan kemampuan bermain basket dan membentuk tim yang solid untuk kompetisi antar sekolah.</p>
                            <a href="#" class="btn btn-sm btn-outline-light ekskul-btn">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ekskul-card fade-in">
                        <img src="/api/placeholder/400/300" alt="Paduan Suara" class="ekskul-img">
                        <div class="ekskul-overlay">
                            <h5 class="ekskul-title">Paduan Suara</h5>
                            <p class="ekskul-day"><i class="fas fa-clock me-2"></i>Senin & Rabu, 15:00-17:00</p>
                            <p class="ekskul-desc">Mengembangkan kemampuan vokal dan harmonisasi dalam bernyanyi bersama, untuk tampil di berbagai acara sekolah dan kompetisi.</p>
                            <a href="#" class="btn btn-sm btn-outline-light ekskul-btn">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ekskul-card fade-in">
                        <img src="/api/placeholder/400/300" alt="Robotik" class="ekskul-img">
                        <div class="ekskul-overlay">
                            <h5 class="ekskul-title">Robotik</h5>
                            <p class="ekskul-day"><i class="fas fa-clock me-2"></i>Jumat, 15:00-17:30</p>
                            <p class="ekskul-desc">Belajar merancang, membangun, dan memprogram robot dengan berbagai teknologi terbaru untuk kompetisi robotik nasional.</p>
                            <a href="#" class="btn btn-sm btn-outline-light ekskul-btn">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ekskul-card fade-in">
                        <img src="/api/placeholder/400/300" alt="Futsal" class="ekskul-img">
                        <div class="ekskul-overlay">
                            <h5 class="ekskul-title">Futsal</h5>
                            <p class="ekskul-day"><i class="fas fa-clock me-2"></i>Rabu & Jumat, 15:30-17:30</p>
                            <p class="ekskul-desc">Latihan teknik, taktik, dan strategi bermain futsal untuk mengembangkan keterampilan dan sportivitas dalam olahraga tim.</p>
                            <a href="#" class="btn btn-sm btn-outline-light ekskul-btn">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ekskul-card fade-in">
                        <img src="/api/placeholder/400/300" alt="Tari Tradisional" class="ekskul-img">
                        <div class="ekskul-overlay">
                            <h5 class="ekskul-title">Tari Tradisional</h5>
                            <p class="ekskul-day"><i class="fas fa-clock me-2"></i>Selasa & Kamis, 15:00-16:30</p>
                            <p class="ekskul-desc">Mempelajari dan melestarikan tarian tradisional Indonesia dari berbagai daerah dengan pelatih profesional berpengalaman.</p>
                            <a href="#" class="btn btn-sm btn-outline-light ekskul-btn">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ekskul-card fade-in">
                        <img src="/api/placeholder/400/300" alt="Klub Bahasa Jepang" class="ekskul-img">
                        <div class="ekskul-overlay">
                            <h5 class="ekskul-title">Klub Bahasa Jepang</h5>
                            <p class="ekskul-day"><i class="fas fa-clock me-2"></i>Senin, 15:00-16:30</p>
                            <p class="ekskul-desc">Belajar bahasa dan budaya Jepang, termasuk percakapan dasar, penulisan, dan berbagai aspek budaya populer Jepang.</p>
                            <a href="#" class="btn btn-sm btn-outline-light ekskul-btn">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary px-4">Lihat Semua Ekstrakurikuler</a>
            </div>
        </div>
    </section>

    <!-- Highlight Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Prestasi Terbaru</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="text-center fade-in">
                        <div class="feature-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h5>Juara 1 Robotik</h5>
                        <p>Kompetisi Robotik Nasional 2025</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center fade-in">
                        <div class="feature-icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h5>Juara 2 Basket</h5>
                        <p>Turnamen Basket Antar SMA 2025</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center fade-in">
                        <div class="feature-icon">
                            <i class="fas fa-music"></i>
                        </div>
                        <h5>Juara 1 Paduan Suara</h5>
                        <p>Festival Seni Provinsi 2025</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center fade-in">
                        <div class="feature-icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <h5>Finalis Olimpiade Sains</h5>
                        <p>Olimpiade Sains Nasional 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jadwal Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Jadwal Kegiatan Mendatang</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <div>
                                        <h6 class="mb-1">Pekan Olahraga dan Seni</h6>
                                        <p class="text-muted mb-0 small">Seluruh Siswa dan Guru</p>
                                    </div>
                                    <div class="text-end">
                                        <span class="badge bg-primary rounded-pill mb-1">15-20 Agustus 2025</span>
                                        <p class="text-muted mb-0 small">Lapangan & Aula Sekolah</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <div>
                                        <h6 class="mb-1">Kunjungan Industri</h6>
                                        <p class="text-muted mb-0 small">Kelas XII</p>
                                    </div>
                                    <div class="text-end">
                                        <span class="badge bg-primary rounded-pill mb-1">10-12 September 2025</span>
                                        <p class="text-muted mb-0 small">PT Teknologi Indonesia</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <div>
                                        <h6 class="mb-1">Kompetisi Robotik</h6>
                                        <p class="text-muted mb-0 small">Ekskul Robotik</p>
                                    </div>
                                    <div class="text-end">
                                        <span class="badge bg-primary rounded-pill mb-1">25 September 2025</span>
                                        <p class="text-muted mb-0 small">Universitas Nasional</p>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <div>
                                        <h6 class="mb-1">Bakti Sosial</h6>
                                        <p class="text-muted mb-0 small">OSIS & Pramuka</p>
                                    </div>
                                    <div class="text-end">
                                        <span class="badge bg-primary rounded-pill mb-1">5 Oktober 2025</span>
                                        <p class="text-muted mb-0 small">Desa Sejahtera</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-primary px-4">Lihat Semua Jadwal</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
  



<?= $this->endSection(); ?>