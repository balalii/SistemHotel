<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Welcome to our hotel" />
    <meta name="keywords" content="hotel, dhaka, 5 star" />
    <title>Hotel AG | Welcome</title>
    <link rel="icon" href="images/hotel.ico" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> 
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link
      rel="stylesheet"
      media="screen and (max-width: 768px)"
      href="css/mobile.css"/>
    <script
      src="https://kit.fontawesome.com/d2f5c4b57c.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <nav id="navbar">
        <div class="container">
          <h1 class="logo">
            <a href="index.html">AG</a>
          </h1>
          <ul class="nav-links">
            <li><a href="{{ route('customer.home') }}">Home</a></li>
            <li><a href="{{ route('customer.services') }}">Services</a></li>
            <li><a href="{{ route('customer.rooms') }}">Rooms</a></li>
            <li><a href="{{ route('customer.about') }}">About</a></li>
            <li><a href="{{ route('customer.contact') }}">Contact</a></li>
          </ul>
          <div class="login">
            <a href="{{ route('logincustomer') }}"><button class="btn">Login</button></a>
          </div>
          <div class="menu-toggle">
            <i class="bx bx-menu"></i>
          </div>
        </div>
      </nav>
      <script>
        // Pilih elemen menu toggle dan daftar menu
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('#navbar ul');
      
        // Tambahkan event listener untuk toggle
        menuToggle.addEventListener('click', () => {
          navLinks.classList.toggle('active'); // Tambah/hapus kelas 'active' saat ditekan
        });
      </script>
      
      
      <div id="home">
          <div class="content">
            <h1>Tempat Sewa Kamar Impian Anda</h1>
            <p class="lead-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
              dolorem cupiditate qui eum eius quis provident, a pariatur animi
              libero!
            </p>
          </div>
      </div>
    </header>

    <section class="fasilitas" id="fasilitas">
      <div class="fasilitas-content">
        <h3>Fasilitas Kami</h3>
        <p>Kami menawarkan fasilitas hotel modern (bintang 5) untuk kenyamanan Anda</p>
        <ul class="fasilitas">
          <li>
            <i class='bx bx-swim' ></i> 
              <span class="text">Kami menyediakan kola renang </span>
          </li>
          <li>
            <i class='bx bx-wifi'></i>
              <span class="text">Kami menyediakan wifi gratis</span>
          </li>
          <li>
            <i class='bx bx-restaurant'></i>
              <span class="text">Kami mempunyai sebuah Restoran </span>
          </li>
      </ul>
      </div>
    </section>

    <section class="kamar" id="kamar">
      <div class="kamar-content">
        <h3>Kamar Mewah</h3>
        <p>Semua kamar dirancang untuk kenyamanan Anda</p>
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('images/kamar 1.jpeg') }}" alt="Kamar 1" class="kamar-image">
              <img src="{{ asset('images/kamar 2.jpeg') }}" alt="Kamar 2" class="kamar-image">
              <img src="{{ asset('images/kamar 3.jpeg') }}" alt="Kamar 3" class="kamar-image">
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/kamar 4.jpg') }}" alt="Kamar 4" class="kamar-image">
              <img src="{{ asset('images/kamar 5.jpg') }}" alt="Kamar 5" class="kamar-image">
            </div>
          </div>
          <!-- Tambahkan navigasi jika diinginkan -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>

    <section class="testimoni" id="testimoni">
      <div class="kamar-content">
        <h3>Testimoni Pengunjung Kami</h3>
        <p>Apa Yang Mereka Katakan</p>
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="testimoni-card">
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <p>
              "Pelayanan yang sangat baik, kamar bersih dan nyaman. Pasti akan kembali lagi!"
            </p>
            <span class="date">2 Mar, 2023</span>
          </div>
               <div class="testimoni-card">
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <p>
              "Pelayanan yang sangat baik, kamar bersih dan nyaman. Pasti akan kembali lagi!"
            </p>
            <span class="date">2 Mar, 2023</span>
          </div>
               <div class="testimoni-card">
            <div class="rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <p>
              "Pelayanan yang sangat baik, kamar bersih dan nyaman. Pasti akan kembali lagi!"
            </p>
            <span class="date">2 Mar, 2023</span>
          </div>
            </div>
            <div class="swiper-slide">
              <div class="testimoni-card">
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
                </div>
                <p>
                  "Pelayanan yang sangat baik, kamar bersih dan nyaman. Pasti akan kembali lagi!"
                </p>
                <span class="date">2 Mar, 2023</span>
              </div>
              <div class="testimoni-card">
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
                </div>
                <p>
                  "Pelayanan yang sangat baik, kamar bersih dan nyaman. Pasti akan kembali lagi!"
                </p>
                <span class="date">2 Mar, 2023</span>
              </div>
              <div class="testimoni-card">
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
                </div>
                <p>
                  "Pelayanan yang sangat baik, kamar bersih dan nyaman. Pasti akan kembali lagi!"
                </p>
                <span class="date">2 Mar, 2023</span>
              </div>
            </div>
          </div>
          <!-- Tambahkan navigasi jika diinginkan -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>


    
   
    

<div class="footer">
  <div>
      <h3>HOUSE.</h3>
      <p>Aplikasi terbaik layanan penginapan</p>
      <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-pinterest"></i></a>
      </div>
  </div>
  <div class="quick-links">
      <h3>Quick Links</h3>
      <a href="#">Home</a>
      <a href="#">Service</a>
      <a href="#">Room</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
  </div>
  <div class="contact-info">
      <h3>Tetap bersama kami</h3>
      <p><i class="fas fa-map-marker-alt"></i>Wonosobo, Indonesia</p>
      <p><i class="fas fa-envelope"></i>ag@Email.com</p>
      <p><i class="fas fa-phone"></i>(+62) 123 456 789</p>
  </div>
  <div class="copyright">
      COPYRIGHT AG
  </div>
</div>


<script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
