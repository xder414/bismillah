<?php
// ============================================
// DATA DINAMIS PHP
// ============================================
$namaWebsite = "PHP Master";
$tahun = date("Y");

// Data Karyawan (Bisa ditambah/dikurangi)
$karyawan = [
    [
        'nama' => 'JEJEN JAENUDIN, S.M., M.Kom',
        'posisi' => 'CEO & Founder',
        'foto' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400',
        'email' => 'Marketing@gmail.com'
    ],
    [
        'nama' => 'INDRA APRIANA, S.Kom',
        'posisi' => 'Chief Operating Officer',
        'foto' => 'https://images.unsplash.com/photo-1573496359-7013c53bcae4?w=400',
        'email' => 'Marketing@gmail.com'
    ],
    [
        'nama' => 'NENI FARIDOH, S.Ak',
        'posisi' => 'Chief Finance Officer',
        'foto' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400',
        'email' => 'Marketing@gmail.com'
    ],
    [
        'nama' => 'ZAENORRIDHI',
        'posisi' => 'Marketing Manager',
        'foto' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400',
        'email' => 'Marketing@gmail.com'
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page <?php echo $namaWebsite; ?></title>
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-top: 70px;
        }

        /* Navbar Styling */
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #777BB4 !important;
        }
        .nav-link {
            font-weight: 500;
        }
        .nav-link:hover {
            color: #777BB4 !important;
        }

        /* Hero Section dengan Background Image */
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1579468118864-1b9ea3c0db4a?w=1920');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 150px 0;
            text-align: center;
            color: white;
        }
        .hero-title {
            font-size: 3rem;
            font-weight: 800;
            color: #fff;
        }
        .btn-primary {
            background-color: #777BB4;
            border-color: #777BB4;
        }
        .btn-primary:hover {
            background-color: #5a5a85;
        }

        /* Section Styling */
        .section-padding {
            padding: 80px 0;
        }
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-weight: 700;
        }
        .service-card {
            border: none;
            transition: transform 0.3s;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        .service-card:hover {
            transform: translateY(-5px);
        }
        .service-icon {
            font-size: 3rem;
            color: #777BB4;
            margin-bottom: 15px;
        }
        .code-block {
            background-color: #2d2d2d;
            color: #f8f8f2;
            padding: 20px;
            border-radius: 8px;
            font-family: 'Courier New', Courier, monospace;
            overflow-x: auto;
        }
        .contact-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Karyawan/Staff Styling */
        .karyawan-card {
            border: none;
            text-align: center;
            transition: transform 0.3s;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .karyawan-card:hover {
            transform: translateY(-10px);
        }
        .karyawan-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #777BB4;
            margin-bottom: 15px;
        }
        .karyawan-nama {
            font-weight: 700;
            font-size: 1.2rem;
            color: #333;
        }
        .karyawan-posisi {
            color: #777BB4;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .karyawan-email {
            font-size: 0.9rem;
            color: #666;
        }
        .social-icons a {
            color: #777BB4;
            margin: 0 5px;
            text-decoration: none;
            font-size: 1.2rem;
        }
        .social-icons a:hover {
            color: #5a5a85;
        }

        /* Dokumentasi Image Styling */
        .docs-image {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .docs-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            border: 1px solid #e9ecef;
        }
    </style>
</head>
<body>

    <!-- NAVBAR (Dashboard di Pojok Kiri Atas) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <!-- FITUR DASHBOARD (POJOK KIRI ATAS) -->
            <a class="navbar-brand" href="#">
                <span style="color: #777BB4;">Admin</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#karyawan">Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Kegiatan Kantor">Kegiatan Kantor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HOME / HERO SECTION -->
    <section id="home" class="hero-section">
        <div class="container">
            <h1 class="hero-title mb-3">Selamat Datang di <span style="color:#777BB4">PT Zen Multimedia</span></h1>
            <p class="lead mb-4">PT Zen Multimedia adalah sebuah kantor perusahaan yang menyediakan layanan pembuatan website, aplikasi, dan multimedia untuk mendukung kebutuhan Anda..</p>
            <a href="#services" class="btn btn-primary btn-lg me-2">Lihat Layanan</a>
            <a href="#docs" class="btn btn-outline-light btn-lg">Dokumentasi</a>
        </div>
    </section>

    <!-- KARYAWAN / STAFF SECTION -->
    <section id="karyawan" class="section-padding">
        <div class="container">
            <h2 class="section-title">Tim Karyawan Kami</h2>
            <p class="text-center mb-5">Kami memiliki tim yang terdiri dari para profesional berpengalaman di bidangnya, yang bekerja sama untuk mewujudkan Visi & Misi perusahaan kami.

</p>
            
            <div class="row g-4">
                <?php foreach($karyawan as $k): ?>
                <div class="col-md-3 col-sm-6">
                    <div class="card karyawan-card p-3">
                        <!-- Ganti foto karyawan di sini -->
                        <h3 class="Jejen jaenudin"><?php echo $k['nama']; ?></h3>
                        <p class="karyawan-posisi"><?php echo $k['posisi']; ?></p>
                        <p class="karyawan-email"><?php echo $k['email']; ?></p>
                        <div class="social-icons">
                            <a href="#">📧</a>
                            <a href="#">💼</a>
                            <a href="#">📱</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

      <h1 class="text-3xl font-bold text-black">Kegiatan dan Proyek IT
PT Zen Multimedia Indonesia</h1>
        <section id="Kegiatan Kantor" class="section">
            <div class="container">
                <div class id="row">
                    <div class="col-md-7 col-sm-12 wow fadeInLeft">
                    	<div class="sub-heading">
                    		    <h3>Form ini digunakan untuk mendokumentasikan kegiatan yang telah dilaksanakan.</h3>
                    	</div>
                        <div class="block">
                            <p>1. Dokumentasi Kunjungan ke Bapenda Kab. Subang untuk pengembangan Aplikasi Diskusi Dashboard Monitoring Pajak daerah untuk pengembangan Aplikasi.</p>
                            <p>
                               2. Dokumentasi Penyampaian Rencana Masterplan Teknologi Kab. Purwakarta Diskusi rencana perumusan Masterplan Teknologi / SPBE dengan Diskominfo Kabupaten Purwakarta, dimana kami hadir memberikan gagasan untuk membantu perencanaan kemajuan Teknologi melalui Digitalisasi.</div>
                        <p>3. Dokumentasi Perumusan SPMB Diskusi Pengembangan Aplikasi SPMB untuk membantu mempermudah Pendaftaran Murid Baru dengan Digitalisasi di Kab. Bekasi, dengan harapan aplikasi dapat digunakan oleh masyarakat luas dengan mudah dan tepat sasaran.</p>
                    </div>
                    <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="about-slider">
                        	<div class="init-slider">
                        		<div class="about-item">
                        			<img src="kunjungan1 (1).jpg" alt="">
                        		</div>
                        		<div class="about-item">
                        			<img src="kunjungan2 (2).jpg" alt="" class="img-responsive">
                        		</div>
                        		<div class="about-item">
                        			<img src="kunjungan3 (3).jpg" alt="" class="img-responsive">
                        		</div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
    <section id="services" class="section-padding">
        <div class="container">
            <h2 class="section-title">Layanan Kami</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card service-card h-100 p-3">
                        <div class="card-body text-center">
                            <div class="service-icon">💻</div>
                            <h3 class="h5 fw-bold">IT Konsultan</h3>
                            <p class="card-text">PT Zen Multimedia Indonesia menyediakan jasa IT Konsultan untuk membantu bisnis terkait teknologi. Kami membantu mengidentifikasi kebutuhan, merancang solusi..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card h-100 p-3">
                        <div class="card-body text-center">
                            <div class="service-icon">🔌</div>
                            <h3 class="h5 fw-bold">Pengembang Aplikasi</h3>
                            <p class="card-text">Pengembangan aplikasi web dan mobile yang responsif dan user-friendly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card h-100 p-3">
                        <div class="card-body text-center">
                            <div class="service-icon">🗄️</div>
                            <h3 class="h5 fw-bold">Penyedia Infrastruktur Server</h3>
                            <p class="card-text">PT Zen Multimedia Indonesia menawarkan layanan server untuk memenuhi kebutuhan infrastruktur bisnis dengan fokus pada keandalan, keamanan, dan kinerja tinggi, serta solusi yang disesuaikan untuk berbagai skala bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HUBUNGI KAMI -->
    <section id="contact" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <!-- Ganti URL gambar di bawah ini -->
                  
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="nama@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>PT Zen Multimedia Indonesia</p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    
</body>
</html>