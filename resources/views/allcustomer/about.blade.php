<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>About</title>
    <link rel="icon" href="images/hotel.ico" />
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
        
        
        <div id="home-about">
          <div class="container">
            <div class="content">
              <h1>Tentang Kami</h1>
              <p class="lead-text">
                Kami menawarkan fasilitas hotel modern (bintang 5) untuk kenyamanan Anda.
              </p>
            </div>
          </div>
        </div>
      </header>

      <div class="image-container" id="about">
        <img src="{{ asset('images/about 1.jpg') }}" alt="Descriptive Alt Text">
    </div>
      <div class="image-about">
        <img src="{{ asset('images/about 2.jpg') }}" alt="">
      </div>
      <div class="about-container">
        <h1>Layanan Terbaik</h1>
        <h2>Kami Berikan Kamar dan Layanan Terbaik Untuk Anda</h2>
        <p>Memberikan layanan terbaik sampai anda mendapatkan apartemen sesuai dengan impian</p>
        
        <!-- Container untuk h3 dan p -->
        <div class="stats-container">
          <h3>99%</h3>
          <p>Customer Suka</p>
        </div>
      </div>
      
      
      <div class="about-content">
        <!-- Heading -->
        <div class="about-header">
          <h2>BAGAIMANA CARA KERJA LAYANAN KAMI</h2>
          <h3>Kami Memberikan Langkah Kerja Yang Mudah</h3>
        </div>
      
        <!-- Kontainer Card -->
        <div class="card-container">
          <div class="card">
            <h3>01</h3>
            <h3>Check In</h3>
            <p>Set jangka waktu check in dan check out sesuai keinginan</p>
          </div>
          <div class="card">
            <h3>02</h3>
            <h3>Pilih Tempat</h3>
            <p>Pilih tempat yang sesuai dengan keinginan anda</p>
          </div>
          <div class="card">
            <h3>03</h3>
            <h3>Bayar Tempat</h3>
            <p>Lakukan pembayaran sesuai dengan harga check in & check out</p>
          </div>
          <div class="card">
            <h3>04</h3>
            <h3>Unduh Aplikasi</h3>
            <p>Unduh aplikasi kami untuk mengelola pemesanan anda</p>
          </div>
        </div>
      </div>

      <div class="aboutku-container">
        <div class="left-section">
            <h1>KENAPA HARUS GUNAKAN LAYANAN KAMI</h1>
            <h2>Kami Memberikan Hasil Layanan Terbaik Untuk Kamar Anda</h2>
            <div class="content-wrapper">
                <div class="image-placeholder"></div>
                <ul class="list">
                    <li>
                        <i class='bx bxs-shield'></i>
                        <span>Garansi Layanan</span>
                        <p> Mendapatkan keamanan</p>
                    </li>
                    <li>
                        <i class='bx bx-list-ul'></i>
                        <span>Kamar Terbaik</span>
                        <p> Apartemen terbaik di Indonesia</p>
                    </li>
                    <li>
                        <i class='bx bxs-chat'></i>
                        <span>Gratis Konsultasi</span>
                        <p>Tersedia konsultasi terbaik</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right-section">
            <blockquote>
                "Lorem ipsum dolor sit amet consectetur adipiscing elit."
            </blockquote>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <ul>
                <li><i class='bx bxs-check-circle' style='color:#d4e01f' ></i>Konsultasi Gratis</li>
                <li><i class='bx bxs-check-circle' style='color:#d4e01f' ></i>Layanan Terbaik</li>
                <li><i class='bx bxs-check-circle' style='color:#d4e01f' ></i>Tempat Nyaman</li>
            </ul>
        </div>
    </div>
      
    <!-- Footer -->
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