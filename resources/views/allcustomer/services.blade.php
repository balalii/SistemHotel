<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Services</title>
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
        
        
        <div id="home-services">
          <div class="container">
            <div class="content">
              <h1>Layanan Kami</h1>
              <p class="lead-text">
                Kami berusaha memberikan kenyamanan yang dibutuhkan tamu saat mereka membutuhkannya. Kami melengkapi dengan cermat demi kenyamanan, sanitasi, dan keselamatan Anda yang optimal. Anda dapat merasa nyaman karena kami mengutamakan kenyamanan pelanggan
              </p>
            </div>
          </div>
        </div>
      </header>

      <div class="container" style="margin-top: 160px;">
        <section class="features" id="service">
          <div class="feature">
            <i class='bx bxs-home' style='color:#e7fb34'  ></i>
            <h3>Ruangan Modern</h3>
            <p>Memberikan kamar yang modern dan sesuai dengan impian anda</p>
          </div>
          <div class="feature">
            <i class='bx bxs-paint-roll' style='color:#e7fb34' ></i>
            <h3>Fasilitas Lengkap</h3>
            <p>Menyediakan semua fasilitas yang mendukung dan memadai</p>
          </div>
          <div class="feature">
            <i class='bx bxs-shield' style="color: #e7fb34;"></i>
            <h3>Keamanan Terjaga</h3>
            <p>Kemanan terbaik agar pengunjung merasa lebih aman</p>
          </div>
          <div class="feature">
            <i class='bx bxs-building' style="color: #e7fb34;"></i>
            <h3>Lokasi Strategis</h3>
            <p>Lokasi strategis agar segala aktivitas bisa lebih nyaman</p>
          </div>
        </section>
    
        <section class="gallery">
          <h1>GALERI RUANGAN APARTEMEN TERBAIK</h1>
          <h2>Galeri Apartemen Di Indonesia</h2>
          <div class="gallery-grid">
            <img src="{{ asset('images/services kamar 1.jpg') }}" alt="Apartemen 1">
            <img src="{{ asset('images/services kamar 2.jpg') }}" alt="Apartemen 2">
            <img src="{{ asset('images/services kamar 3.jpg') }}" alt="Apartemen 3">
            <img src="{{ asset('images/services kamar 1.jpg') }}" alt="Apartemen 4">
            <img src="{{ asset('images/services kamar 2.jpg') }}" alt="Apartemen 5">
            <img src="{{ asset('images/services kamar 3.jpg') }}" alt="Apartemen 6">
          </div>
        </section>
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
        <p><i class="fas fa-map-marker-alt"></i>JWonosobo, Indonesia</p>
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