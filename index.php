<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hackathon | Smart Catalog UMKM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/font.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <nav class="navbar-nav" id="navbar-nav">
        <div class="logo">
            <a href="">Micro<span>UMKM</span>.</a>
        </div>
        <div class="nav-menu" id="nav-menu">
            <i class="fas fa-x" id="times-nav" onclick="hideNav()"></i>
            <a href="" class="nav-list">Home</a>
            <a href="" class="nav-list">Daftar Produk</a>
            <a href="./auth/sign-in.php" class="nav-btn">Get Started</a>
        </div>
        <div class="nav-extra">
            <i class="fas fa-bars" id="hamburger" onclick="showNav()"></i>
        </div>
    </nav>

    <section class="hero">
        <div class="circle-blur-1"></div>
        <div class="circle-blur-2"></div>
        <div class="circle-blur-3"></div>
        <main class="content">
            <span class="badge">
                <p>Micro UMKM</p>
            </span>
            <h1>Smart Catalog <span>UMKM</span>: Berbasis QR Code</h1>
            <p>Selamat datang di platform inovatif yang menghadirkan kemudahan dalam mengakses informasi produk UMKM
                secara cepat dan praktis. Dengan memanfaatkan teknologi QR Code, promosi usaha menjadi lebih efisien,
                modern, dan menjangkau lebih banyak pelanggan.
            </p>
            <div class="searching">
                <input placeholder="Mencari produk" type="text">
                <button>Cari Produk</button>
            </div>
        </main>
    </section>

    <section class="partner">
        <div class="row-partner">
            <div class="col-partner">
                <img src="./assets/images/partner/logo_umkm_kementerian.svg" alt="">
            </div>
            <div class="col-partner">
                <img src="./assets/images/partner/logo_bumn.png" alt="">
            </div>
            <div class="col-partner">
                <img src="./assets/images/partner/logo_bri.png" alt="">
            </div>
            <div class="col-partner">
                <img src="./assets/images/partner/logo_kemenkop.png" alt="">
            </div>
            <div class="col-partner">
                <img src="./assets/images/partner/logo_kementerian_perdagangan.png" alt="">
            </div>
        </div>
    </section>

    <section class="about">
        <div class="header">
            <h1></h1>
        </div>
        <div class="row-about">
            <div class="right-about">
                <img src="./assets/images/umkm-trade.png" alt="">
            </div>
            <div class="left-about">
                <span class="badge">
                    <i class="fas fa-earth-asia"></i> Tentang MicroUMKM.
                </span>
                <h2>Mendukung Perkembangan <span>UMKM</span> Lokal Lewat Inovasi, Kreativitas, dan Semangat
                    Kewirausahaan
                    Berkelanjutan</h2>
                <p>Kami berkomitmen untuk membantu <span>UMKM</span> tumbuh melalui produk berkualitas, pemasaran
                    digital, dan
                    pelatihan berkelanjutan. Dengan memberdayakan pelaku usaha lokal, kami turut mendorong perekonomian
                    daerah serta menciptakan lapangan kerja yang bermanfaat bagi masyarakat secara luas dan
                    berkelanjutan.</p>
                <div class="count-about">
                    <div class="col-count-about">
                        <h3>65.2 M</h3>
                        <span>Pedagang UMKM</span>
                    </div>
                    <div class="col-count-about">
                        <h3>300 M - 2.5 B</h3>
                        <span>Rata-Rata Hasil Tahunan UMKM</span>
                    </div>
                    <div class="col-count-about">
                        <h3>10%</h3>
                        <span>Pertumbuhan Tahunan UMKM</span>
                    </div>
                    <div class="col-count-about">
                        <h3>9580 T</h3>
                        <span>Kontribusi UMKM</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="superiority" id="superiority">
        <div class="header">
            <h2>Keunggulan <span class="color-span-umkm">UMKM</span> (Usaha Mikro, Kecil, dan Menengah)</h2>
            <p><span class="color-span-umkm">UMKM</span> adalah penggerak ekonomi rakyat yang berperan penting dalam
                menciptakan peluang usaha lokal</p>
        </div>
        <div class="row-superiority">
            <div class="col-superiority">
                <div class="icon">
                    <i class="fas fa-people-group"></i>
                </div>
                <h4>Membuka Lapangan Kerja Baru</h4>
                <p><span class="color-span-umkm">UMKM</span> menciptakan banyak peluang kerja bagi masyarakat sekitar,
                    terutama di daerah, sehingga
                    mengurangi tingkat pengangguran dan meningkatkan kesejahteraan lokal</p>
            </div>
            <div class="col-superiority">
                <div class="icon">
                    <i class="fas fa-money-bill-trend-up"></i>

                </div>
                <h4>Perekonomian Menjadi Merata</h4>
                <p>Dengan tersebarnya <span class="color-span-umkm">UMKM</span> di berbagai daerah, pertumbuhan ekonomi
                    tidak hanya terpusat di kota besar,
                    tetapi juga merata hingga ke pelosok</p>
            </div>
            <div class="col-superiority">
                <div class="icon">
                    <i class="fa-solid fa-people-arrows"></i>
                </div>
                <h4>Memenuhi Kebutuhan Masyarakat</h4>
                <p><span class="color-span-umkm">UMKM</span> mampu menyediakan berbagai produk dan layanan yang
                    dibutuhkan masyarakat, seringkali dengan
                    harga lebih terjangkau dan kualitas yang tetap bersaing</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="row-footer">
            <div class="col-footer-brands">
                <h3>Micro<span class="color-span-umkm">UMKM</span>.</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae odit ipsa nemo voluptatibus
                    necessitatibus porro.</p>
            </div>
            <div class="col-footer-permalinks">
                <h4>Permalinks</h4>
                <div class="links">
                    <a href="">Home</a>
                    <a href="">Daftar Produk</a>
                    <a href="">Get Started</a>
                </div>
            </div>
            <div class="col-footer-sosmed">
                <h4>Social Media</h4>
                <div class="links">
                    <a href=""><i class="fab fa-instagram"></i> microumkm_</a>
                    <a href=""><i class="fab fa-facebook"></i> microumkm_</a>
                    <a href=""><i class="fab fa-tiktok"></i> microumkm_</a>
                    <a href=""><i class="fab fa-twitter"></i> microumkm_</a>
                </div>
            </div>
            <div class="col-footer-email">
                <h4>Subscribe Newsletter</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                <div class="form-group">
                    <input type="text" placeholder="Masukan email anda">
                    <button><i class="fas fa-arrow-up"></i></button>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; <span id="year_copyright">
                    <script>
                    document.getElementById("year_copyright").innerHTML = new Date().getFullYear();
                    </script>
                </span> Copyright All Reversed | Micro<span class="color-span-umkm">UMKM</span>.</p>
        </div>
    </footer>

    <script src="./assets/js/main.js"></script>
    <script>
    const navbarNav = document.getElementById("nav-menu");

    function showNav() {
        navbarNav.style.right = "0";
    }

    function hideNav() {
        navbarNav.style.right = "-75%";
    }

    const navBar = document.getElementById('navbar-nav');
    const hamburger = document.getElementById('hamburger');
    document.addEventListener('click', function(e) {
        if (!navBar.contains(e.target) && !hamburger.contains(e.target)) {
            navbarNav.style.right = '-75%'
        }
    })
    </script>
</body>

</html>