<?php 
include 'config/koneksi.php';

$list_makanan = query("SELECT * FROM makanan");
$list_minuman = query("SELECT * FROM minuman");
$list_streetfood = query("SELECT * FROM streetfood");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Surabaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index">Kuliner Surabaya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#" id="navMakanan" class="nav-link active">Restoran</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" id="navCaffe" class="nav-link">Caffe</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" id="navMinuman" class="nav-link">Street Food</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" id="navInfo" class="nav-link">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="jumbotron jumbotron-fluid position-relative" style="background-image: url('https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/136/2023/08/17/KHAS-MAKANAN-3540635153.jpg'); background-size: cover; background-position: center;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.3); z-index: 1;"></div>
    <div class="container text-center" style="position: relative; z-index: 2;">
        <h1 class="display-4">Menjelajahi Kuliner Surabaya</h1>
        <p class="lead">Temukan tempat makan dan minuman terbaik di kota pahlawan</p>
    </div>
</div>

<div class="container">
    <div class="search-container mb-4 text-center">
        <div class="position-relative w-75 mx-auto">
            <input type="text" id="searchInput" placeholder="Cari tempat kuliner..." class="form-control w-100 px-4 py-3 rounded-pill shadow" style="border: none; transition: all 0.3s ease;">
            <i class="fas fa-search position-absolute top-50 translate-middle-y" style="right: 20px; color: #aaa;"></i>
        </div>
    </div>

    <section id="makanan" class="content" style="display:block">
    <h2 class="section-title">Tempat Makan</h2>
        <?php foreach ($list_makanan as $resto) : ?>
            <div class="place-item mb-4 p-3 rounded shadow-md" data-name="<?= htmlspecialchars($resto['data_name']); ?>">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="img/<?= htmlspecialchars($resto['foto']); ?>" alt="<?= htmlspecialchars($resto['nama']); ?>" class="img-fluid mb-2 rounded" style="height: 200px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <h3 class="mb-3"><?= htmlspecialchars($resto['nama']); ?></h3>
                        <p class="mb-2"><strong>Deskripsi:</strong> <?= htmlspecialchars($resto['deskripsi']); ?></p>
                        <p class="mb-2"><strong>Menu:</strong> <?= htmlspecialchars($resto['menu']); ?></p>
                        <p class="mb-2"><strong>Jam Buka:</strong> <?= htmlspecialchars($resto['buka']); ?></p>
                        <p class="mb-2"><strong>Nomor Telepon:</strong> <?= htmlspecialchars($resto['tlp']); ?></p>
                        <p class="mb-2"><strong>Harga:</strong> Rp <?= htmlspecialchars($resto['harga']); ?></p>
                        <p class="mb-2"><strong>Lokasi:</strong>
                            <a href="https://www.google.com/maps/place/<?= urlencode($resto['lokasi']); ?>" target="_blank" class="btn btn-outline-success btn-sm">
                                <i class="fas fa-map-marker-alt"></i> Lihat di Google Maps
                            </a>
                        </p>
                        <div class="social-buttons mt-3">
                            <a href="<?= htmlspecialchars($resto['instagram']); ?>" target="_blank" class="btn btn-outline-success btn-sm">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <section id="caffe" class="content" style="display:none">
        <h2 class="section-title">Caffe</h2>
        <?php foreach ($list_minuman as $minuman) : ?>
            <div class="place-item mb-4 p-3 rounded shadow-md" data-name="<?= htmlspecialchars($minuman['data_name']); ?>">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="img/<?= htmlspecialchars($minuman['foto']); ?>" alt="<?= htmlspecialchars($minuman['nama']); ?>" class="img-fluid mb-2 rounded" style="height: 200px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <h3 class="mb-3"><?= htmlspecialchars($minuman['nama']); ?></h3>
                        <p class="mb-2"><strong>Deskripsi:</strong> <?= htmlspecialchars($minuman['deskripsi']); ?></p>
                        <p class="mb-2"><strong>Menu:</strong> <?= htmlspecialchars($minuman['menu']); ?></p>
                        <p class="mb-2"><strong>Jam Buka:</strong> <?= htmlspecialchars($minuman['buka']); ?></p>
                        <p class="mb-2"><strong>Nomor Telepon:</strong> <?= htmlspecialchars($minuman['tlp']); ?></p>
                        <p class="mb-2"><strong>Harga:</strong> Rp <?= htmlspecialchars($minuman['harga']); ?></p>
                        <p class="mb-2"><strong>Lokasi:</strong>
                            <a href="https://www.google.com/maps/place/<?= urlencode($minuman['lokasi']); ?>" target="_blank" class="btn btn-outline-success btn-sm">
                                <i class="fas fa-map-marker-alt"></i> Lihat di Google Maps
                            </a>
                        </p>
                        <div class="social-buttons mt-3">
                            <a href="<?= htmlspecialchars($minuman['instagram']); ?>" target="_blank" class="btn btn-outline-success btn-sm">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <section id="minuman" class="content" style="display:none">
        <h2 class="section-title">Street Food</h2>
        <?php foreach ($list_streetfood as $streetfood) : ?>
            <div class="place-item mb-4 p-3 rounded shadow-md" data-name="<?= htmlspecialchars($streetfood['data_name']); ?>">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="img/<?= htmlspecialchars($streetfood['foto']); ?>" alt="<?= htmlspecialchars($streetfood['nama']); ?>" class="img-fluid mb-2 rounded" style="height: 200px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <h3 class="mb-3"><?= htmlspecialchars($streetfood['nama']); ?></h3>
                        <p class="mb-2"><strong>Deskripsi:</strong> <?= htmlspecialchars($streetfood['deskripsi']); ?></p>
                        <p class="mb-2"><strong>Menu:</strong> <?= htmlspecialchars($streetfood['menu']); ?></p>
                        <p class="mb-2"><strong>Jam Buka:</strong> <?= htmlspecialchars($streetfood['buka']); ?></p>
                        <p class="mb-2"><strong>Nomor Telepon:</strong> <?= htmlspecialchars($streetfood['tlp']); ?></p>
                        <p class="mb-2"><strong>Harga:</strong> Rp <?= htmlspecialchars($streetfood['harga']); ?></p>
                        <p class="mb-2"><strong>Lokasi:</strong>
                            <a href="https://www.google.com/maps/place/<?= urlencode($streetfood['lokasi']); ?>" target="_blank" class="btn btn-outline-success btn-sm">
                                <i class="fas fa-map-marker-alt"></i> Lihat di Google Maps
                            </a>
                        </p>
                        <div class="social-buttons mt-3">
                            <a href="<?= htmlspecialchars($streetfood['instagram']); ?>" target="_blank" class="btn btn-outline-success btn-sm">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <div class="no-results mb-2" id="noResults" style="display: none; color: red; text-align: center; margin-top: 20px;">Pencarian tidak ditemukan</div>
    <section id="about" class="content" style="display:none">
        <div class="about-container">
            <h2 class="section-title">Kuliner Surabaya</h2>
            <p>
                Selamat datang di Kuliner Surabaya, tempat di mana cinta untuk kuliner bertemu dengan semangat eksplorasi! Kami adalah tim penggemar kuliner yang berdedikasi untuk menghadirkan informasi terkini tentang kuliner viral yang sedang hits di Surabaya. Dari street food yang menggugah selera hingga restoran mewah yang Instagram-worthy, kami menjelajahi setiap sudut kota untuk menemukan pengalaman makan yang unik dan tak terlupakan.
            </p>
            
            <div class="vision-mission">
                <div class="vision">
                    <strong>Visi Kami</strong>
                    <ul>
                        <li>Menjadi sumber informasi utama bagi siapa saja yang ingin merasakan kuliner otentik Surabaya, baik bagi warga lokal maupun wisatawan.</li>
                        <li>Kami percaya bahwa makanan tidak hanya mengenyangkan, tetapi juga dapat menceritakan sejarah, budaya, dan identitas sebuah kota.</li>
                    </ul>
                </div>
                <div class="mission">
                    <strong>Misi Kami</strong>
                    <ul>
                        <li>Menyajikan rekomendasi kuliner terbaik dari berbagai sudut kota Surabaya.</li>
                        <li>Mengangkat makanan tradisional maupun modern agar lebih dikenal masyarakat luas.</li>
                        <li>Membantu pengunjung website menemukan tempat makan yang sesuai dengan selera mereka.</li>
                        <li>Mendukung bisnis kuliner lokal agar tumbuh dan berkembang.</li>
                    </ul>
                </div>
            </div>

            <div class="section-title">Tim Kami</div>
            <div class="team-container">
                <div class="team-member">
                    <img src="https://akcdn.detik.net.id/community/media/visual/2024/09/23/serunya-momen-kulineran-jefri-nichol-di-jepang-hingga-italia.png?w=700&q=90" alt="Abel" class="team-photo">
                    <strong>Abel</strong>
                    <p>Abel adalah ahli dalam analisis data dan strategi pemasaran digital. Dengan keterampilan yang mendalam dalam manajemen proyek, Abel selalu memastikan setiap ide dapat dieksekusi dengan baik dan tepat sasaran.</p>
                    <a href="https://www.instagram.com/abel_cavallera" target="_blank" class="social-link">
                        <i class="fa-brands fa-instagram"></i> Instagram
                    </a>
                </div>
                <div class="team-member">
                    <img src="https://akcdn.detik.net.id/community/media/visual/2024/09/23/serunya-momen-kulineran-jefri-nichol-di-jepang-hingga-italia.png?w=700&q=90" alt="Rozziq" class="team-photo">
                    <strong>Rozziq</strong>
                    <p>Rozziq memiliki ketertarikan besar pada teknologi dan inovasi. Sebagai spesialis pengembangan produk dan pengembangan website, Rozziq selalu berfokus pada penyempurnaan teknis dan fitur-fitur yang meningkatkan pengalaman pengguna.</p>
                    <a href="https://www.instagram.com/mrozziqq" target="_blank" class="social-link">
                        <i class="fa-brands fa-instagram"></i> Instagram
                    </a>
                </div>
                <div class="team-member">
                    <img src="https://akcdn.detik.net.id/community/media/visual/2024/09/23/serunya-momen-kulineran-jefri-nichol-di-jepang-hingga-italia.png?w=700&q=90" alt="Ara" class="team-photo">
                    <strong>Ara</strong>
                    <p>Ara adalah desainer UI/UX yang handal. Ia memiliki kepekaan dalam memahami kebutuhan pengguna dan mampu mengemasnya menjadi antarmuka yang mudah digunakan dan menarik secara visual.</p>
                    <a href="https://www.instagram.com/farhsnaa" target="_blank" class="social-link">
                        <i class="fa-brands fa-instagram"></i> Instagram
                    </a>
                </div>
            </div>
            <p>
                Dengan kombinasi keahlian yang dimiliki, kami siap menghadirkan solusi digital yang segar dan inovatif. Sebagai mahasiswa yang berada di prodi Bisnis Digital, kami selalu berusaha untuk mengintegrasikan teori yang kami pelajari di kampus dengan praktik nyata di dunia industri.
            </p>
        </div>
    </section>

</div>
<footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase text-success">Tentang Kami</h5>
                <p class="text-muted">
                    Kuliner Surabaya adalah platform yang menyediakan informasi tentang kuliner viral di Surabaya. 
                    Kami berdedikasi untuk menghadirkan pengalaman makan yang unik dan tak terlupakan.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase text-success">Media Sosial</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="https://www.instagram.com" target="_blank" class="text-muted">
                            <i class="fa-brands fa-instagram"></i> kuliner_surabaya
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase text-success">Feedback</h5>
                <p class="text-muted">
                    Kami senang mendengar pendapat Anda tentang platform kami. Silakan isi formulir di bawah ini untuk memberikan feedback.
                </p>
                <form id="feedbackForm" onsubmit="kirimPesan(event)">
                    <textarea class="form-control mb-2" id="message" placeholder="Pesan" required></textarea>
                    <button type="submit" class="btn btn-success">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <p class="text-muted mb-0">2024 Daftar Kuliner Surabaya. Semua hak dilindungi.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="script.js"></script>
<script>
    function kirimPesan(event) {
        event.preventDefault();

        const message = document.getElementById('message').value;

        const whatsappMessage = `Pesan: ${message}`;
        const phoneNumber = '6285203444454';
        const url = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;

        window.open(url, '_blank');
        
        document.getElementById('feedbackForm').reset();
    }
</script>

</body>
</html>
