<html lang="en">
 <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <title>Contact</title>
    <link rel="icon" href="images/hotel.ico" />
 </head>
 <body class="bg-gray-100">
  <!-- Header -->
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
    
    
    <div id="home-contact">
      <div class="container">
        <div class="content">
          <h1>Hubungi Kami</h1>
          <p class="lead-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
            dolorem cupiditate qui eum eius quis provident, a pariatur animi
            libero!
          </p>
        </div>
      </div>
    </div>
  </header>

  <section class="contact-section bg-black text-white py-16">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-6">
      <!-- Contact Form -->
      <div class="form-container" id="contact" style="background-color: rgba(235, 213, 15, 0.5); color: black;  border: 2px solid #DFE70F; padding: 2rem; border-radius: 12px; width: 600px; height: auto; margin-top: 30px; margin-bottom: 30px;">
        <h2 class="text-2xl font-bold mb-4" style="color: #DFE70F;">Hubungi kami</h2>
        <p class="mb-6" style="color: white;">
          Jangan ragu untuk meminta konsultasi atau bertanya langsung saja hubungi kami
        </p>
        <form>
          <!-- Field with Label Always Above -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <!-- First Name -->
            <div class="w-full">
              <label
                for="first-name"
                style="color: #DFE70F; font-size: 0.875rem; margin-bottom: 0.25rem; display: block;">
                First Name
              </label>
              <input
              id="first-name"
              style="background-color: rgba(223, 231, 15, 0.5); color: white; border: 2px solid #DFE70F; padding: 12px; border-radius: 40px; width: 100%;"
              placeholder="first-name"
              type="text"
              required
            />
            </div>
            
            <!-- Last Name -->
            <div class="w-full">
              <label for="last-name" style="color:#DFE70F; font-size: 0.875rem; margin-bottom: 0.25rem; display: block;">
                Last Name
              </label>
              <input
                id="last-name"
                style="background-color: rgba(223, 231, 15, 0.5); color: white; border: 2px solid #DFE70F; padding: 12px; border-radius: 40px; width: 100%;"
                placeholder="Last name"
                type="text"
                required
              />
            </div>
          </div>
  
          <!-- Email -->
          <div class="w-full mb-4">
            <label for="email" style="color:#DFE70F; font-size: 0.875rem; margin-bottom: 0.25rem; display: block;">
              Email Address
            </label>
            <input
              id="email"
              style="background-color: rgba(223, 231, 15, 0.5); color: white; border: none; border: 2px solid #DFE70F; padding: 12px; border-radius: 40px; width: 100%;"
              placeholder="Email Address"
              type="email"
              required
            />
          </div>
  
          <!-- Subject -->
          <div class="w-full mb-4">
            <label for="subject" style="color: #DFE70F; font-size: 0.875rem; margin-bottom: 0.25rem; display: block;">
              Subjek
            </label>
            <input
              id="subject"
              style="background-color: rgba(223, 231, 15, 0.5); color: white;  border: 2px solid #DFE70F; padding: 12px; border-radius: 40px; width: 100%;"
              placeholder="Subjek"
              type="text"
              required
            />
          </div>
  
          <!-- Message -->
          <div class="w-full mb-4">
            <label for="message" style="color:#DFE70F; font-size: 0.875rem; margin-bottom: 0.25rem; display: block;">
              Pesan
            </label>
            <textarea
              id="message"
              style="background-color: rgba(223, 231, 15, 0.5); color: white;  border: 2px solid #DFE70F; padding: 12px; border-radius: 20px; width: 100%; height: 120px;"
              placeholder="Pesan"
              required
            ></textarea>
          </div>
  
          <!-- Button -->
          <button
            style="background-color: #DFE70F; color: black; padding: 12px 24px; border: none; border-radius: 40px; cursor: pointer; transition: all 0.3s ease; margin-top: 20px;"
            type="submit"
          >
            SEND MESSAGE
          </button>
        </form>
      </div>
  
      <!-- Contact Information -->
      <div class="info-container">
        <h3 class="info-subtitle">Tetap bersama kami</h3>
        <h2 class="info-title">Hubungi kami</h2>
        <p class="info-description">
          Jangan ragu untuk meminta konsultasi atau bertanya langsung saja hubungi kami
        </p>
        <ul class="contact-list">
          <li class="contact-item">
            <i class="fas fa-map-marker-alt"></i>
            <div>
              <p>Tempat Kami</p>
              <span>Wonosobo, Indonesia</span>
            </div>
          </li>
          <li class="contact-item">
            <i class="fas fa-envelope"></i>
            <div>
              <p>Email Address</p>
              <span>ag@Email.com</span>
            </div>
          </li>
          <li class="contact-item">
            <i class="fas fa-phone"></i>
            <div>
              <p>Telephone</p>
              <span>(+62) 123 456 789</span>
            </div>
          </li>
        </ul>
        
      </div>
    </div>
  </section>
  
  
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
  <script src="{{ URL::asset('js/script.js') }}"></script>
 </body>
</html>