    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
        <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }

            body {
                background: #fefaf6;
                text-align: center;
                overflow-x: hidden;
            }

            /* Navbar */
            .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 15px 50px;
                background: #fefaf6;
            }

            .logo-container img {
                height: 90px;
                width: 150px;
                margin-left: -20px;
            }

            .back {
                width: 23px;
                height: 23px;
                cursor: pointer;
                margin-top: 5px;
            }

            .nav-center {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .nav-links {
                display: flex;
                align-items: center;
                gap: 30px; /* Default gap untuk semua elemen */
            }

            .back-store-container {
                display: flex;
                align-items: center;
                gap: 10px; /* Hilangkan jarak antara Back dan Find a Store */
            }

            .store, .help, .join, .prof {
                text-decoration: none;
                color: black;
                font-weight: 400;
            }

            .cart, .love {
                width: 27px; 
                height: 27px;
                margin-left: 10px;
                margin-top: 10px;
            }

            .search-box {
                display: flex;
                align-items: center;
                background: #f8f7fc;
                padding: 10px 15px;
                border-radius: 20px;
                margin-top: 10px;
                width: 500px;
                
            }

            .search-box img {
                height: 18px;
                margin-right: 10px;
            }

            .search-box input {
                border: none;
                background: transparent;
                outline: none;
                font-size: 16px;
                width: 100%;
            }

            .profile {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .avatar {
                height: 65px;
                border-radius: 50%;
                background: #f0f0f5;
            }

            /* Bagian Gambar Utama */
            .hero-section {
                display: flex;
                justify-content: center;
                margin-top: 50px;
            }

            .hero-section img {
                width: 900px;
                height: auto;
                border-radius: 20px;
            }

            /* Bagian Sepatu & Menu */
            .bottom-box {
                position: relative;
                width: 700px;
                height: 100px;
                background: white;
                border-radius: 20px;
                padding: 20px;
                margin-top: -55px;
                margin-left: 290px;
                display: flex;
                justify-content: space-around;
                align-items: center;
                border: 2px solid black;
            }

            .shoe-img {
                position: absolute;
                top: 0px;
                left: 25px;
                width: 150px;
                
            }

            .menu-items {
                margin-top: 5px;
                margin-left: 120px;
                display: flex;
                gap: 50px;
                font-weight: bold;
            }

                    /* Bagian Nike Men's Edition */
                    .nike-edition {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 80px;
                width: 90%;
                max-width: 1200px;
                margin-left: auto;
                margin-right: auto;
            }



/* Pastikan left-section juga mendapatkan jarak yang sesuai */
.nike-edition.men {
    display: flex;
    align-items: center;
    justify-content: flex-start; /* Pastikan bagian kiri tetap di kiri */
    width: 90%;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}

.nike-edition.men .left-section {
    width: 30%;
    text-align: left; /* Teks tetap di kiri */
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* Pastikan elemen di kiri */
    margin-left: 0; /* Tidak ada margin kiri */
    padding-left: 20px; /* Memberikan jarak kiri */
}

/* Women's Edition Styling */
.nike-edition.women {
    flex-direction: row-reverse; /* Membalik urutan */
    justify-content: flex-end; /* Konten tetap di kanan */
}

.nike-edition.women .left-section {
    width: 30%;
    text-align: right; /* Ubah teks ke kanan */
    display: flex;
    flex-direction: column;
    align-items: flex-end; /* Elemen di kanan */
    margin-left: auto; /* Jarak kiri */
    padding-right: 20px; /* Memberikan jarak kanan */
}

.left-section {
    width: 30%;
    text-align: right; /* Ubah teks agar berada di kanan */
    display: flex;
    flex-direction: column;
    align-items: flex-end; /* Pastikan elemen di dalamnya berada di kanan */
    margin-left: auto; /* Pindahkan bagian kiri ke kanan */
    padding-right: 20px; /* Memberikan sedikit jarak pada kanan */
}

.left-section h2 {
    font-size: 24px;
    font-weight: 700;
}

.left-section p {
    font-size: 14px;
    color: #555;
    margin-bottom: 15px;
}

.shop-button {
    display: inline-block;
    background: black;
    color: white;
    font-size: 14px;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 500;
    margin-bottom: 10px;
}

.nav-buttons {
    display: flex;
    gap: 10px;
    align-items: center;
}

.arrow-btn {
    width: 30px;
    height: 30px;
    background: #ddd;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.arrow-btn img {
    width: 20px;
    height: 20px;
}

/* Bagian Kanan */
.right-section {
    width: 70%;
    position: relative;
    height: 220px;
}



.hero-review {
  background: #f5f9fa;
  padding: 60px 0;
}

.hero-review-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1200px;
  margin: auto;
  gap: 30px;
  padding: 0 20px;
  margin-top: 80px;
}

.review-left, .review-right {
  flex: 1;
  text-align: left; /* Inilah kunci utama agar semua teks rata kiri */
}

.review-img {
  flex: 1;
  display: flex;
  justify-content: center;
}

.review-img img {
  width: 100%;
  max-width: 350px;
  border-radius: 20px;
  margin-right: 70px;
}

.review-left .brand {
  font-weight: 600;
  font-size: 16px;
  color: #000;
  margin-top: -200px;
}

.review-left h2 {
  font-size: 28px;
  font-weight: 700;
  margin-top: 30px;
}

.review-left p.desc {
  font-size: 14px;
  color: #555;
  margin-top: 20px;
  margin-bottom: 40px;
  margin-right: 70px;
}

.btn-collection {
  background-color: #1a1a1a;
  color: white;
  padding: 10px 20px;
  border-radius: 15px;
  text-decoration: none;
  font-weight: 500;
  font-size: 14px;
}

.review-right .desc-small {
  font-size: 14px;
  color: #555;
  margin-bottom: 15px;
  margin-top: -150px;
}

.review-stats {
  display: flex;
  flex-direction: column; /* susun vertikal */
  gap: 18px; /* jarak antar stat box */
}

.stat-box {
  display: flex;
  flex-direction: column;
  align-items: flex-start; /* biar rata kiri */
}

.stat-box .number {
  font-weight: 700;
  font-size: 24px;
  color: #000;
}

.stat-box .label {
  font-size: 16px;
  color: #555;
}


.review-avatars {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 11px;
  margin-top: 25px;
}

.review-avatars img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  object-fit: cover;
}

.review-avatars .stars {
  font-size: 16px;
  color: gold;
}

.review-link {
  font-size: 14px;
  text-decoration: none;
  color: #000;
  font-weight: 500;
}

.trending-now {
  margin: 100px auto 60px;
  max-width: 1200px;
  padding: 0 20px;
  text-align: left;
  margin-top: 50px;
}

.trending-title {
  font-size: 28px;
  font-weight: 700;
  color: #232323;
  margin-bottom: 30px;
}

.trending-container {
  display: flex;
  align-items: center;
  gap: 25px;
  margin-left: 140px;
}

.trending-card {
  width: 200px;
  height: 350px;
  border-radius: 20px;
  overflow: hidden;
  background-color: #ccc;
  flex-shrink: 0;
  transition: transform 0.3s;
  cursor: pointer;
}

.trending-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.trending-arrow {
  width: 100px;
  height: 100px;
  border-radius: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  margin-left: 40px;
}

.trending-arrow img {
  width: 50px;
  height: 50px;
 
}
/* Footer with Gradient Background */
.footer-gradient {
    background: linear-gradient(130.45deg, #000000 -7.99%, #331200 73.01%);
    padding: 50px 0;
    margin-top: 80px;
    font-family: 'Poppins', sans-serif;
    color: #ffffff;
    text-align: left;

}

.footer-gradient .footer-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 0 20px;
}

.footer-gradient .footer-brand {
    width: 30%;
    margin-bottom: 30px;
}

.footer-gradient .footer-logo {
    margin-top: -60px;
    height: 200px;
    width: 200px;
    margin-bottom: -45px;
    filter: brightness(0) invert(1); /* Makes logo white */
}

.footer-gradient .footer-description {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.8);
    line-height: 1.6;
    margin-bottom: 22px;
    text-align: left;
}

.footer-gradient .social-media {
    display: flex;
    gap: 15px;
}

.footer-gradient .social-icon {
    width: 35px;
    height: 35px;
    transition: opacity 0.3s;
    filter: brightness(0) invert(1); /* Makes icons white */
}

.footer-gradient .social-icon:hover {
    opacity: 0.7;
}

.footer-gradient .footer-section {
    width: 20%;
    margin-bottom: 30px;
}

.footer-gradient .footer-heading {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #ffffff;
    text-align: lef;
}

.footer-gradient .footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-gradient .footer-links li {
    margin-bottom: 10px;
}

.footer-gradient .footer-link {
    text-decoration: none;
    color: rgba(255, 255, 255, 0.8);
    font-size: 14px;
    transition: color 0.3s;
    display: flex;
    align-items: center;
    
}

.footer-gradient .footer-link:hover {
    color: #ffffff;
    text-decoration: underline;
}

.footer-gradient .copyright {
    text-align: center;
    margin-top: 50px;
    padding-top: 20px;
    border-top: 1px solid #ffffff;
}

.footer-gradient .copyright-text {
    color: rgba(255, 255, 255, 0.6);
    font-size: 14px;
}
.footer-gradient .footer-icon {
    width: 22px;
    height: 22px;
    margin-right: 10px;
    vertical-align: middle;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .footer-gradient .footer-brand,
    .footer-gradient .footer-section {
        width: 100%;
        text-align: center;
    }
    
    .footer-gradient .social-media {
        justify-content: center;
    }
    
    .footer-gradient .footer-links {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;

    }
    
    .footer-gradient .footer-links li {
        margin: 0 10px 10px 0;
    }
}


/* 1. Biarkan background-box jadi “jendela” yang memotong overflow */
.background-box {
  width: 100%;
  height: 260px;
  background: #232323;
  border-radius: 30px 30px 0 0;
  padding: 0px 20px;
  overflow: hidden;
  position: relative;
  
}

/* 2. Carousel: flex layout + scroll tersembunyi */
.carousel-container {
  display: flex;
  gap: 24px;
  align-items: flex-start;
  overflow-x: auto;             /* scrollable */
  scroll-behavior: smooth;      
}

/* 3. Sembunyikan scrollbar */
.carousel-container::-webkit-scrollbar {
  display: none;
}
.carousel-container {
  -ms-overflow-style: none;     /* IE/Edge */
  scrollbar-width: none;        /* Firefox */
}

/* 4. Card styling */
.product-card {
  flex: 0 0 auto;               /* fixed width, tidak mengecil */
  width: 250px;
  background: #fff;
  border-radius: 0 0 20px 20px;
  overflow: hidden;
  box-shadow: 0 8px 20px rgba(0,0,0,0.05);
  transition: transform .3s;
  margin-top: 30px;
}
.product-card:hover {
  transform: translateX(5px);
}
.product-img {
  width: 100%;
  height: 150px;
  object-fit: cover;
  background: #f5f5f5;
}
.product-details {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 2px 16px 5px;
}
.text-info h4 {
  font-size: 16px;
  font-weight: 600;
  margin: 0 0 0px;
  text-align: left;
}
.text-info p {
  font-size: 14px;
  color: #555;
  margin: 0;
  text-align: left;
}

.nike-hero {
  position: relative;
  width: 100%;
  height: 300px;
  overflow: hidden;
  margin-top: 120px;
  margin-bottom: 90px;
}

.hero-img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover; /* Biar cover penuh tapi proporsional */
  object-position: center -415px;
  z-index: 0;
}

.hero-overlay {
  position: relative;
  z-index: 1;
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  height: 100%;
  padding: 0 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: white;
}

.hero-left {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 10px;
}

.nike-logo {
  height: 400px;
  width: auto;
  margin-left: 150px;
  margin-top: -50px;
}


.hero-right .shop-button {
  background: rgba(255, 255, 255, 0.3);
  border: none;
  padding: 15px 50px;
  font-size: 30px;
  border-radius: 40px;
  color: #fff;
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  transition: background 0.3s;
  backdrop-filter: blur(5px);
  margin-right: 200px;
}

.hero-right .shop-button:hover {
  background: rgba(255, 255, 255, 0.5);
  color: black;
}





        </style>
    </head>
    <body>

    <header class="navbar">
        <div class="logo-container" data-aos="fade">
            <img src="img/logo.png" alt="Logo">
        </div>

        <nav class="nav-center" >
            <div class="nav-links" data-aos="fade">
                <div class="back-store-container">
                    <a href="#">
                        <img src="img/arrow2.png" alt="Back" class="back">
                    </a>
                    <a href="#" class="store">Find a Store</a>
                </div>

                <a href="#" class="help">Help</a>
                <a href="#" class="join">Join Us</a>
                <a href="#" class="prof">Profile</a>
                <a href="/cart">
                    <img src="img/cart.png" class="cart" alt="Cart">
                </a>
                <a href="/favorites">
                    <img src="img/love.png" class="love" alt="Love">
                </a>
                
            </div>
            
            <div class="search-box" data-aos="fade">
                <img src="img/search.png" alt="Search Icon">
                <input type="text" placeholder="Search something...">
            </div>
        </nav>

        <div class="profile" data-aos="fade">
            <img src="img/avatar.png" alt="Avatar" class="avatar">
            <span class="username"><strong>Hi, {{ Auth::user()->name }} !</strong></span>
        </div>
    </header>

    <!-- Bagian Gambar Utama -->
    <div class="hero-section" data-aos="fade">
        <img src="img/home1.jpeg" alt="Main Banner">
    </div>

    <!-- Bagian Sepatu dan Menu -->
    <div class="bottom-box" data-aos="fade">
        <img src="img/niki.png" alt="Shoe Image" class="shoe-img">
        <div class="menu-items">
            <span>New & Featured</span>
            <span>Women</span>
            <span>Men</span>
            <span>Sale</span>
        </div>
    </div>
{{-- Nike Men's Edition --}}
<div class="nike-edition men">
  <div class="left-section" data-aos="fade-right">
    <!-- tombol Shop Now + panah -->
    <a href="#" class="shop-button">Shop Now</a>
    <h2>Nike Men's Edition</h2>
    <p>Performance &amp; Style in Every Step</p>
    <div class="nav-buttons">
      <div class="arrow-btn" onclick="scrollCarousel('men-carousel', -1)">
        <img src="img/arrow2.png" alt="Left">
      </div>
      <div class="arrow-btn" onclick="scrollCarousel('men-carousel', 1)">
        <img src="img/arrow2.png" alt="Right" style="transform:rotate(180deg)">
      </div>
    </div>
  </div>

  <div class="right-section" data-aos="fade-left">
    <div class="background-box">
      <div class="carousel-container" id="men-carousel">
        @foreach($menProducts as $product)
          <div class="product-card">
            <img src="{{ asset('storage/'.$product->image_url) }}" class="product-img" alt="">
            <div class="product-details">
              <div class="text-info">
                <h4>{{ $product->product_name }}</h4>
                <p>Rp {{ number_format($product->price,0,',','.') }}</p>
              </div>
              <a href="/cart"><img src="img/cart.png" class="cart" alt="Cart"></a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<section class="nike-hero" data-aos="fade-up">
<img src="img/home7.jpg" class="hero-img" />
  <div class="hero-overlay">
    <div class="hero-left">
      <img src="img/home8.png" alt="Nike Logo" class="nike-logo">
    </div>
    <div class="hero-right">
      <a href="#" class="shop-button">Shop</a>
    </div>
  </div>
</section>


{{-- Nike Women's Edition --}}
<div class="nike-edition women">
  <div class="left-section" data-aos="fade-right">
    <a href="#" class="shop-button">Shop Now</a>
    <h2>Nike Women's Edition</h2>
    <p>Performance &amp; Style in Every Step</p>
    <div class="nav-buttons">
      <div class="arrow-btn" onclick="scrollCarousel('women-carousel', -1)">
        <img src="img/arrow2.png" alt="Left">
      </div>
      <div class="arrow-btn" onclick="scrollCarousel('women-carousel', 1)">
        <img src="img/arrow2.png" alt="Right" style="transform:rotate(180deg)">
      </div>
    </div>
  </div>

  <div class="right-section" data-aos="fade-left">
    <div class="background-box">
      <div class="carousel-container" id="women-carousel">
        @foreach($womenProducts as $product)
          <div class="product-card">
            <img src="{{ asset('storage/'.$product->image_url) }}" class="product-img" alt="">
            <div class="product-details">
              <div class="text-info">
                <h4>{{ $product->product_name }}</h4>
                <p>Rp {{ number_format($product->price,0,',','.') }}</p>
              </div>
              <a href="/cart"><img src="img/cart.png" class="cart" alt="Cart"></a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>



<!-- Section Testimoni & Promo -->
<section class="hero-review">
  <div class="hero-review-container">
    <!-- Kiri -->
    <div class="review-left" data-aos="zoom-out-right">
      <h2 class="brand">StepByStep</h2>
      <h2>Unstoppable <br>Performance,<br> Unmatched Style</h2>
      <p class="desc">
      Step into excellence with the latest Nike collection. Cutting-edge technology meets modern design for ultimate performance and style—anytime, anywhere.
      </p>
      <a href="#" class="btn-collection">Explore Collection</a>
    </div>

    <!-- Tengah Gambar -->
    <div class="review-img" data-aos="zoom-out-up">
      <img src="img/home3.jpeg" alt="Nike Model 2">
    </div>

    <!-- Kanan -->
    <div class="review-right" data-aos="zoom-out-left">
      <p class="desc-small">
      Experience next-level comfort and performance with the latest Nike Men’s Collection. Designed for athletes and trendsetters, our shoes combine cutting-edge technology with a sleek, modern look.
      </p>
      <div class="review-stats">
  <div class="stat-box">
    <span class="number">17.5M+</span>
    <span class="label">Happy Customers</span>
  </div>
  <div class="stat-box">
    <span class="number">1.5K+</span>
    <span class="label">Unique Designs</span>
  </div>
</div>

      <div class="review-avatars" >
        <img src="img/p1.jpeg" alt="User 1">
        <img src="img/p2.jpeg" alt="User 2">
        <img src="img/p3.jpeg" alt="User 3">
        <span class="stars">★★★★★</span>
      </div>
      <a href="#" class="review-link">See All Reviews →</a>
    </div>
  </div>
</section>
<section class="trending-now">
  <h2 class="trending-title">Trending Now</h2>
  <div class="trending-container" data-aos="flip-right">
    <div class="trending-card"><img src="img/home4.jpeg" alt="Trending 1"></div>
    <div class="trending-card"><img src="img/home5.jpeg" alt="Trending 2"></div>
    <div class="trending-card"><img src="img/home6.jpeg" alt="Trending 3"></div>
    <div class="trending-arrow">
      <img src="img/arrow2.png" alt="Next" style="transform: rotate(180deg);">
    </div>
  </div>
</section>
<footer class="footer-gradient">
    <div class="footer-container">
        <!-- Logo and Description -->
        <div class="footer-brand">
            <img src="img/logo2.png" alt="StepByStep Logo" class="footer-logo">
            <p class="footer-description">
                Because every step tells a story. Our shoes are designed to support your journey, blending comfort, style, and a perfect fit for any moment.
            </p>
            <div class="social-media">
                <a href="#"><img src="img/ig.png" alt="Instagram" class="social-icon"></a>
                <a href="#"><img src="img/fb.png" alt="Facebook" class="social-icon"></a>
                <a href="#"><img src="img/x.png" alt="Twitter/X" class="social-icon"></a>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-section">
            <h3 class="footer-heading">Quick Link</h3>
            <ul class="footer-links">
                <li><a href="#" class="footer-link">Contact Us</a></li>
                <li><a href="#" class="footer-link">FAQs</a></li>
                <li><a href="#" class="footer-link">Booking</a></li>
                <li><a href="#" class="footer-link">Pages</a></li>
            </ul>
        </div>

        <!-- Services -->
        <div class="footer-section">
            <h3 class="footer-heading">Services</h3>
            <ul class="footer-links">
                <li><a href="#" class="footer-link">Home</a></li>
                <li><a href="#" class="footer-link">Contact</a></li>
                <li><a href="#" class="footer-link">Blog</a></li>
                <li><a href="#" class="footer-link">404</a></li>
            </ul>
        </div>

        <!-- Contact Info -->
       <!-- Contact Info -->
<div class="footer-section">
    <h3 class="footer-heading">Jakarta, Indonesia</h3>
    <ul class="footer-links">
        <li class="footer-link">
            <img src="img/loc.png" alt="Location Icon" class="footer-icon"> Jakarta, Indonesia
        </l>
        <li class="footer-link">
            <img src="img/mail.png" alt="Email Icon" class="footer-icon"> nikeindonesia@gmail.com
        </li>
        <li class="footer-link">
            <img src="img/call.png" alt="Phone Icon" class="footer-icon"> +62 812-xxxx-xxxx
        </li>
    </ul>
</div>

    </div>

    <!-- Copyright -->
    <div class="copyright">
        <p class="copyright-text">© 2025 Nike, Inc. All rights reserved</p>
    </div>
</footer>

<script>
  function scrollCarousel(id, direction) {
    const c = document.getElementById(id);
    if (!c) return console.error('Carousel not found:', id);
    const move = 280; // lebar kartu + gap
    c.scrollBy({ left: direction * move, behavior: 'smooth' });
  }
  AOS.init({
    duration: 1000,    // durasi animasi (ms)
  });
</script>



    </body>
    </html>
