<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nasi Kebuli AJB</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonty -->
    <link rel="stylesheet" href="libs/font/font.css" />
    <link rel="stylesheet" href="assets/css/tailwindcss/output.css" />
</head>

<body class="font-fira">
    <!-- Header Section -->
    <header class="header relative " id="beranda">
        <nav class="bg-transparant py-5 md:px-8 lg:px-14 min-[420px]:px-4 ">
            <div class="flex flex-wrap justify-between items-center mx-auto  py-4 px-6  lg:px-4 fixed top-0 w-full  left-0   z-50" id="navbar">
                <div class="logo flex items-center">
                    <img src="assets/images/logo.png" alt="" class="w-16  h-16 object-contain">
                    <a href="#" class="flex items-center space-x-3  lg:text-2xl md:text-2xl text-2xl font-bold whitespace-nowrap text-black/70">
                        Kebuli<span class="text-primary">  Ajb</span>
                    </a>
                </div>
                <div class=" md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col  mt-4 md:mt-0 rounded-lg  absolute lg:static lg:flex-row  max-sm:left-5 md:left-8  -top-96 lg:top-0 lg:left-0 max-lg:bg-secondary max-lg:border-gray-100  lg:border-0 w-[92%]  transition-all duration-500" id="navigation">
                        <li>
                            <a href="#beranda" class="block py-5 lg:py-0 lg:px-2 px-5  lg:text-base  border-b border-gray-100 lg:border-0 min-[420px]:text-white md:text-white lg:text-black/70 hover:text-primary transition-all duration-300 max-lg:text-xl" aria-current="page">Beranda</a>
                        </li>
                        <li>
                            <a href="#tentang" class="block py-5 lg:py-0 lg:px-2 px-5  lg:text-base  border-b border-gray-100 lg:border-0 min-[420px]:text-white md:text-white lg:text-black/70 hover:text-primary transition-all duration-300 max-lg:text-xl">Tentang</a>
                        </li>
                        <li>
                            <a href="#produk" class="block py-5 lg:py-0 lg:px-2 px-5  lg:text-base  border-b border-gray-100 lg:border-0 min-[420px]:text-white md:text-white lg:text-black/70  hover:text-primary transition-all duration-300 max-lg:text-xl">Produk</a>
                        </li>
                        <li>
                            <a href="#testimoni" class="block py-5 lg:py-0 lg:px-2 px-5  lg:text-base  border-b border-gray-100 lg:border-0 min-[420px]:text-white md:text-white lg:text-black/70 hover:text-primary transition-all duration-300 max-lg:text-xl">Testimoni</a>
                        </li>
                    </ul>
                </div>
                <div class="button-hamburger relative flex items-center lg:hidden ml-2">
                    <button id="hamburger" name="hamburger" type="button" class="block">
                        <span class="hamburger-bar bg-primary block w-[30px] h-[2px] my-2 rounded-md origin-top-left transition-all duration-500"></span>
                        <span class="hamburger-bar bg-primary block w-[30px] h-[2px] my-2 ml-2 rounded-md transition-all duration-500"></span>
                        <span class="hamburger-bar bg-primary block w-[30px] h-[2px] my-2 rounded-md origin-bottom-left transition-all duration-500"></span>
                    </button>

                </div>
        </nav>

    </header>


    <!-- Header Section End -->

    <!-- Beranda Section -->
    <div class="beranda h-screen">
        <!-- Backround -->
        <img src="assets/images/ruko/ruko-3.jpg" alt="" class="absolute -z-10 top-0 w-screen h-screen object-cover">
        <div class="background-overlay bg-white/80 w-full h-screen absolute top-0 -z-9 "></div>
        <div class="beranda-section-box-text text-center lg:mt-36 mt-24 ">
            <div class="beranda-section-text-title ">
                <h2 class="font-bold text-secondary max-lg:text-3xl max-md:text-2xl lg:text-[43px]">
                    Nasi Kebuli <span class="text-primary">Ajibarang</span> <br>
                    Dari Dapur ke Kampus - <span class="text-primary">Rasanya</span> ga main main!
                </h2>
            </div>
            <div class="beranda-section-text-subtitle mt-4">
                <p class="lg:text-base  text-secondary md:text-base text-sm font-[400] text-center lg:max-w-[720px] md:max-w-[630px] max-w-[370px] mx-auto">
                    Nasi Kebuli Ajibarang menyajikan berbagai hidangan lezat seperti ayam geprek, ayam telur, dan menu harian lainnya. Dimasak dengan bumbu pilihan dan rasa yang pas di lidah, cocok untuk kamu yang cari makan enak, praktis, dan terjangkau di sekitar UMP.
                </p>
            </div>
            <div class="beranda-section-cta mt-6">
                <a href="#produk" class="bg-primary hover:bg-amber-500 transition-all duration-500 text-white py-3 px-6 inline-block  md:w-[240px] rounded-[10px] font-medium md:text-lg text-base">Lihat Produk</a>
            </div>
        </div>

        <!-- Gradient -->
        <div class="absolute h-20 bg-linear-to-t from-white to-white/5  w-full bottom-0 -z-10"></div>
    </div>

    <!-- Beranda Section End -->

    <!-- Tentang Section -->
    <div class="tentang mt-12 lg:mt-0 px-30 relative scroll-mt-28 " id="tentang">
        <div class="tentang-container-content  flex flex-col-reverse lg:flex-row justify-between items-center">
            <div class="tentang-left-col mt-4 w-[350px] md:w-auto md:max-w-[500px]">
                <div class="judul">
                    <h2 class="text-xl lg:text-[28px] md:text-4xl font-bold text-secondary">Sejarah Nasi Kebuli<span class="text-primary"> Ajibarang </span></h2>
                </div>
                <div class="deskripsi mt-4 text-justify">
                    <p>Nasi Kebuli AJB, singkatan dari Ajibarang, dirintis sebagai usaha rumahan saat pandemi. Berawal dari dapur keluarga, penjualan dilakukan lewat sistem pre-order dan online.Berfokus pada usaha kuliner yang menyajikan cita rasa dengan sentuhan lokal.Kebuli AJB hadir untuk memanjakan lidah pecinta kuliner Ajibarang dan sekitarnya.Saat ini Kebuli AJB resmi hadir di lingkungan UMP. Respon pasar sangat baik, terutama dari mahasiswa. Mulai rutin melayani pesanan event dan konsumsi harian.</p>
                </div>
            </div>
            <div class="tentang-right-col max-lg:relative w-full lg:w-auto  h-[350px] md:h-[500px] lg:h-[400px]">
                <img src="assets/images/produk/kebuli ayam katsu harga 12.000.jpg" alt="" class="h-[150px] w-[270px] md:h-[232px]  border-8 border-white rounded-[20px] absolute max-md:right-5 md:max-lg:left-30 lg:right-70 lg:-top-10">
                <img src="assets/images/produk/kebuli ayam ori harga 12.000.jpg" alt="" class=" h-[150px]w-[270px] md:h-[232px]  border-8 border-white rounded-[20px] absolute max-md:left-16 max-md:top-12 max-lg:left-64 md:top-30  lg:right-32 lg:bottom-20 lg:top-5">
                <img src="assets/images/produk/kebuli ayam geprek harga 12.000.jpg" alt="" class="h-[150px] w-[270px] md:h-[232px]  border-8 border-white rounded-[20px] absolute max-md:right-12 max-md:top-28 md:top-50 md:right-50  lg:right-80 lg:-bottom-10 lg:top-40">



                
                <div class="circle bg-primary w-[250px] h-[250px] md:w-[400px] md:h-[400px] absolute rounded-full md:right-35  -z-10 blur-[100px] top-0"></div>
            </div>
        </div>
    </div>
    <!-- Tentang Section End -->

        <!-- Footer -->
    <footer class="footer mt-96 ">
        <div class="footer-container bg-white shadow-md border border-gray-100 rounded-[10px] p-12 lg:p-8 w-full gap-y-10 flex flex-wrap justify-between">
            <div class="foooter-col max-md:w-full md:max-w-72  ">
                <div class="judul">
                    <h3 class="max-md:text-center font-bold text-3xl text-secondary">Nasi Kebuli<span class="text-primary"> Ajb</span></h3>
                </div>
                <div class="deskripsi mt-2 text-secondary font-light max-md:text-center text-justify">
                    <p>Jl. Tegal Sari, Dusun III, Dukuhwaluh, Kec. Kembaran, Kabupaten Banyumas, Jawa Tengah 53182</p>
                </div>
                <div class="sosial-media mt-12">
                    <ul class="flex gap-x-3 max-md:justify-center ">
                        <li class="bg-primary rounded-full w-13  h-13 flex justify-center items-center p-2"><a href="https://www.instagram.com/nasikebuliajb/"><i class="fa-brands fa-instagram text-3xl text-white"></i></a></li>
                        <li class="bg-primary rounded-full w-13 h-13 flex justify-center items-center p-2"><a href="https://www.tiktok.com/@kebuliajb"><i class="fa-brands fa-tiktok text-3xl text-white"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="foooter-col max-w-90 h-full flex flex-col pt-2 items-center max-md:order-3">
                <div class="link-cepat border-t border-gray-200">
                    <ul class="flex gap-x-4 text-lg  text-secondary pt-2">
                        <li><a href="#beranda" class="hover:text-primary transition-all duration-500 ">Beranda</i></a></li>
                        <li><a href="#tentang" class="hover:text-primary transition-all duration-500 ">Tentang</i></a></li>
                        <li><a href="#produk" class="hover:text-primary transition-all duration-500 ">Produk</i></a></li>
                        <li><a href="#testimoni" class="hover:text-primary transition-all duration-500 ">Testimoni</i></a></li>
                    </ul>
                </div>
                <div class="tagline mt-8">
                    <h6 class="font-bold text-2xl text-center text-secondary italic"> Dari Dapur ke Kampus<br>
                        <span class="text-primary">Rasanya</span> ga Main Main !</h6>
                </div>
                <div class="copyright text-center mt-8 text-secondary">
                    <p>&copy; 2025 Kebuli Ajb. All rights reserved.</p>
                </div>
            </div>
            <div class="foooter-col  w-full lg:w-auto pt-5 lg:pt-2 max-md:order-2 max-lg:border-t border-gray-200">
                <div class="judul">
                    <h3 class="text-secondary font-bold text-2xl">Google Maps</h3>
                </div>
              
                <div class="map mt-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4397.572909878542!2d109.27115865010953!3d-7.41504994800072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655fcabb5fbda3%3A0x9146682eaeaef311!2sKEBULI%20AJB%20UMKM%20UMP!5e0!3m2!1sid!2sid!4v1748591256352!5m2!1sid!2sid" width="350" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-[10px]"></iframe>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer End -->


    <script>

        window.addEventListener('scroll', function() {
            const scrollY = window.pageYOffset;
            const navbar = document.getElementById('navbar');

            if (scrollY > 5) {
                navbar.classList.add('nav-scroll');
            } else {
                navbar.classList.remove('nav-scroll');
            }
        })

        // Responsive Navbar
        const navigation = document.getElementById('navigation');
        const hamburger = document.querySelector('#hamburger');

        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('hamburger-active');
            navigation.classList.toggle('nav-active');
        });

        navLinks.forEach(anchor => {
            anchor.addEventListener('click', function() {
                navigation.classList.remove('nav-active');
                hamburger.classList.remove('hamburger-active');
            });
        });

    </script>
</body>

</html>