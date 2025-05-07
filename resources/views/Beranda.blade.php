<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>

    @include('anggota.style.gaya')
</head>
<body>
    <main class="main">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
    
          <a href="#hero" class="logo d-flex align-items-center me-auto">
                 <h1 class="sitename">Perpustakaan Online</h1>
          </a>
    
          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="/" class="active">Beranda<br></a></li>
              <li><a href="{{route('anggota.koleksi')}}">Koleksi</a></li>
        </div>
      </header>
    
        <!-- Hero Section -->
        <section id="hero" class="hero section">
    
          <img src="{{ asset('template/assets/img/hero-bg-abstract.jpg')}}" alt="" data-aos="fade-in" class="">
    
          <div class="container">
            <div class="row justify-content-center" data-aos="zoom-out">
              <div class="col-xl-7 col-lg-9 text-center">
                <h1>Perpustakaan Online</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quaerat harum dolorem pariatur in laborum accusamus. Repellendus adipisci itaque cum maxime ipsam iusto, possimus ex quidem voluptas. Adipisci, tenetur</p>
              </div>
            </div>
            <div class="text-center" data-aos="zoom-out" data-aos-delay="100">
              <a href="{{route('anggota.koleksi')}}" class="btn-get-started">Lihat Koleksi</a>
            </div>
    
            <div class="row gy-4 mt-5">
              <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="100">
                <div class="icon-box">
                  <div class="icon"><i class="bi bi-easel"></i></div>
                  <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                  <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
              </div><!--End Icon Box -->
    
              <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
                <div class="icon-box">
                  <div class="icon"><i class="bi bi-gem"></i></div>
                  <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                  <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
              </div><!--End Icon Box -->
    
              <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><i class="bi bi-geo-alt"></i></div>
                  <h4 class="title"><a href="">Magni Dolores</a></h4>
                  <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
              </div><!--End Icon Box -->
    
              <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="400">
                <div class="icon-box">
                  <div class="icon"><i class="bi bi-command"></i></div>
                  <h4 class="title"><a href="">Nemo Enim</a></h4>
                  <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
              </div><!--End Icon Box -->
    
            </div>
          </div>
    
        </section><!-- /Hero Section -->
        <footer id="footer" class="footer light-background">

            <div class="container footer-top">
              <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                  <a href="index.html" class="logo d-flex align-items-center">
                    <span class="sitename">Perpustakaan Online</span>
                  </a>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem enim odit ut totam, sint doloremque magnam ducimus tenetur? Rerum vitae incidunt facilis consectetur excepturi ipsam eum harum iure ipsum aperiam?</p>
                  <div class="social-links d-flex mt-4">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
        
                <div class="col-lg-2 col-6 footer-links">
                  <h4>Our Services</h4>
                  <ul>
                      <li><a href="#">Peminjaman Buku</a></li>
                      <li><a href="#">Pembelian Buku</a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                  </ul>
                </div>
        
                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                  <h4>Contact Us</h4>
                  <p>Jl Raya Bandung No.03</p>
                  <p> Bojong, Kec. Karangtengah, Kabupaten Cianjur,</p>
                  <p>Jawa Barat 43281</p>
                  <p class="mt-4"><strong>Whatsapp:</strong> <span>+62 8131 346</span></p>
                  <p><strong>Email:</strong> <span>perpustakaanonline@gmail.com</span></p>
                </div>
        
              </div>
            </div>
        
            <div class="container copyright text-center mt-4">
              <p>© <span>Copyright</span> <strong class="px-1 sitename">SMKS AL-ITTIHAD</strong> <span>All Rights Reserved</span></p>
              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="#">Kelompok 5</a>
              </div>
            </div>
        
          </footer>
    </main>

          <script>
            AOS.init();
        </script>
</body>
</html>