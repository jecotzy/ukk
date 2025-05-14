<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Women's Shoes</title>
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

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 40px;
  background-color: #fefaf6;
}

.navbar-left,
.navbar-right {
  display: flex;
  align-items: center;
  gap: 15px;
}

.icon-btn {
  width: 40px;
  height: 40px;
  background: #fff;
  padding: 6px;
  border-radius: 12px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  cursor: pointer;
}

.navbar-center {
  text-align: center;
}

.delivery-text {
  font-size: 14px;
  color: #888;
  margin: 0;
}

.delivery-address {
  font-size: 16px;
  font-weight: bold;
  color: #000;
  margin: 0;
}

.search-container {
  display: flex;
  justify-content: center;
  background-color: #F6F6F6;
  padding-bottom: 0px;
}

.search-box {
  display: flex;
  align-items: center;
  background: #f8f7fc;
  padding: 10px 450px;
  border-radius: 20px;
  width: 95%;
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

    /* Kategori Atas */
    .top-categories {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 80px;
        margin-left: -900px;
        margin-top: -25px;
    }
    .top-categories button {
        padding: 10px 20px;
        border: 1px solid black;
        background: none;
        cursor: pointer;
        border-radius: 20px;
        font-weight: bold;
        font-size: 16px;
        transition: 0.3s;
    }

.sidebar-categories {
  width: 160px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  border-right: 3px solid black;
  padding-right: 20px;
  background-color: #fefaf6;
  flex-shrink: 0;
  margin-left: 40px;
  margin-top: 50px;
}

.sidebar-categories button {
  background: #fefaf6;
  border: 1px solid black;
  padding: 10px 15px;
  cursor: pointer;
  border-radius: 20px;
  font-weight: bold;
  transition: 0.3s;
  gap: 100px;
  
}


    /* Konten */
    .content-wrapper {
        padding: 0 40px;
        margin-top: -200px;
        margin-left: 180px;
    }

    .page-title {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 30px;
        margin-top: 40px;
        text-align: left;
        margin-left: -178px;
        margin-top: -20px;
    }

    .top-title {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 30px;
        margin-top: 40px;
        text-align: left;
        margin-left: 40px;
    }

    .category-section {
        margin-bottom: 50px;
        margin-top: -15px;
    }

    .category-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: left;
    }
    .subtitle {
        font-weight: normal;
        font-size: 16px;
        color: gray;
        text-align: left;
    }

    /* Grid Produk */
    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 30px;
    }

    /* Card Produk */
    .product-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: 0.3s;
    }
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    .product-image {
        position: relative;
        width: 230px;
        padding-top: 180px;
        background: #f9f9f9;
        overflow: hidden;
        pad
    }
    .product-image img {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 80%;
        transform: translate(-50%, -50%);
        object-fit: contain;
    }

    .badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background: black;
        color: white;
        padding: 5px 10px;
        font-size: 12px;
        border-radius: 20px;
        font-weight: bold;
        font-weight: 400;
        text-transform: up;
    }

    .product-info {
        padding: 15px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .product-name {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
        text-align: left;
    }
    .product-description {
        font-size: 14px;
        color: gray;
        margin-bottom: 10px;
        text-align: left;
    }
    .product-price {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 10px;
        text-align: left;
    }
    .product-rating {
        display: flex;
        text-align: right;
        font-size: 16px;
        color: black;
        margin-left: 155px;
        margin-top: -25px;
        margin-bottom: -2px;
    }
    .star-icon {
        width: 16px;
        height: 16px;
        margin-right: 5px;
        margin-top: 2px;
    }

    /* Section khusus per Primary Category */
    .primary-category-section {
        margin-bottom: 80px;
    }

    .cart{
        width: 25px; 
        height: 25px;
        margin-left: 33px;
        margin-top: -67px;
    }
    .love {
        width: 25px; 
        height: 25px;
        margin-left: 65px;
        margin-top: -67px; 
    }
    
.top-categories button.active,
.sidebar-categories button.active {
  background: black;
  color: white;
}

.new-arrivals-section{
    margin-left: 40px;  
}

.new-title{
    font-size: 32px;
        font-weight: bold;
        margin-bottom: 30px;
        margin-top: 40px;
        text-align: left;
        margin-left: 0px;

}
.highlighted-products {
    display: flex;
    gap: 20px;
    justify-content: center;
    padding: 40px 0;
    flex-wrap: wrap;
}

.highlight-card {
    flex: 1 1 500px;
    max-width: 600px;
    border-radius: 20px;
    padding: 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    text-align: left;
    
}

.left-card {
    background: linear-gradient(to right, #0f1a3c, #1d2f57);
    color: #fff;
}

.right-card {
    background: linear-gradient(to right, #aaaaaa, #666666);
    color: #fff;
}

.highlight-card h4 {
    font-size: 14px;
    letter-spacing: 1px;
    font-weight: bold;
    margin-bottom: 10px;
}

.highlight-card h2 {
    font-size: 22px;
    margin-bottom: 5px;
}

.sub-title {
    font-size: 16px;
    margin-bottom: 10px;
    color: #ddd;
    width: 300px;
    
}

.description {
    font-size: 14px;
    margin-bottom: 20px;
    color: #ccc;
    width: 300px;
}

.highlight-button {
    background: #fff;
    color: #000;
    padding: 10px 20px;
    font-weight: bold;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    transition: 0.3s ease;
}

.highlight-button.alt {
    background: #eee;
}

.highlight-button:hover {
    background: #000;
    color: #fff;
}

.image-content img {
    width: 250px;
    height: 250px;
}

.reviews-section { padding: 2rem; background: #fdf9f3; }
.reviews-title { font-size: 1.75rem; margin-bottom: 1rem; text-align:center; }

.review-summary-box {
  display: flex;
  gap: 2rem;
  flex-wrap: wrap;
  margin-bottom: 2rem;
  align-items: center;
  margin-bottom:50px;
}

.rating-bars {
  flex: 1;
  max-width: 800px;
  margin-right: 30px;
}

.rating-bar {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin-bottom: 0.5rem;
}

.star-label {
  width: 2rem;
  text-align: right;
}

.bar {
  flex: 1;
  height: 6px;
  background: #eee;
  border-radius: 3px;
  overflow: hidden;
}

.fill {
  height: 100%;
  background: #2d1e65;
}

.count {
  width: 3rem;
  text-align: left;
}

/* Container for average + buttons */
.summary-container {
  display: flex;
  gap: 30px;
  align-items: center;
  flex-wrap: wrap;
  margin-top: -40px;
}

/* Left: average score */
.average-score {
  text-align: center;
  padding: 1rem;
  min-width: 120px;

}

.average-score h1 {
  font-size: 2.5rem;
  margin: 0;
}

.average-score .stars {
  font-size: 25px;
  margin: 0.25rem 0;
}

.average-score small {
  color: #666;
}

/* Right: buttons stacked vertically */
.review-buttons {
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
}

.btn {
  background: #2d1e65;
  color: #fff;
  padding: 0.5rem 1rem;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  text-decoration: none;
  text-align: center;
}

.btn-secondary {
  background: #eee;
  color: #333;
}



.write-review-form { background:#fff; padding:1rem; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,0.05); margin-bottom:2rem; }
.write-review-form .form-group { margin-bottom:1rem; }
.write-review-form label { display:block; font-weight:bold; margin-bottom:0.5rem; }
.write-review-form select, .write-review-form textarea { width:100%; padding:0.5rem; border:1px solid #ccc; border-radius:4px; }

.review-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1rem;
  font-size: 25px;
}

.all-reviews .review {
  padding: 1rem;
  border-radius: 8px;
  margin-bottom: 1.5rem;
  display: flex;
  justify-content: space-between;
  gap: 1rem;
  align-items: flex-start;
}

.review-content {
  text-align: left;
  max-width: 750px;
}

.stars {
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
}

.comment {
  margin: 0;
  color: #333;
}

.review-user {
  display: flex;
  align-items: center;
  gap: 10 px;
  white-space: nowrap;
  text-align: left;
  margin-top: -5px;
  
}

.review-user .avatar {
  width: 70px;
  height: 70px;
  border-radius: 50%;
}

.user-meta {
  display: flex;
  flex-direction: column;
  font-size: 0.875rem;
}

.see-all {
  text-align: right;
}

.see-link {
  color: #2d1e65;
  font-weight: 500;
  text-decoration: none;
}


.star-rating {
  display: flex;
  flex-direction: row-reverse;
  justify-content: flex-start;
  gap: 0.25rem;
  margin: 0.5rem 0;
}

.star-rating input {
  display: none;
}

.star-rating label {
  font-size: 2rem;
  color: #ccc;
  cursor: pointer;
  transition: color 0.3s;
}

.star-rating input:checked ~ label,
.star-rating label:hover,
.star-rating label:hover ~ label {
  color: #f5a623;
}

.form-group {
  margin-bottom: 1.5rem;
}

textarea {
  width: 100%;
  border: none;
  background-color: #f4f4f4;
  border-radius: 6px;
  padding: 1rem;
  font-size: 1rem;
  resize: vertical;
  min-height: 100px;
}

textarea::placeholder {
  color: #888;
}

small {
  display: block;
  margin-top: 0.5rem;
  color: #777;
  font-size: 0.875rem;
}

.btn-submit {
  background-color: #000;
  color: #fff;
  padding: 0.75rem 2rem;
  border: none;
  border-radius: 6px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.2s;
}

.btn-submit:hover {
  background-color: #333;
}

.modal {
  display: none; /* Default hidden */
  position: fixed;
  z-index: 999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.5);
}

.modal-content {
  background-color: #fff;
  margin: 10% auto;
  padding: 2rem;
  border-radius: 8px;
  width: 90%;
  max-width: 500px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.2);
  position: relative;
}

.close {
  position: absolute;
  top: 0.5rem;
  right: 1rem;
  font-size: 1.5rem;
  font-weight: bold;
  color: #999;
  cursor: pointer;
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

.product-link {
    text-decoration: none;
    color: inherit;
    display: block;
}
.product-link:hover {
    opacity: 0.95;
}


</style>

</head>
<body>
<header class="navbar">
  <div class="navbar-left" data-aos="fade">
    <img src="img/discount2.png" alt="Promo" class="icon-btn">
  </div>

  <div class="navbar-center" data-aos="fade">
    <p class="delivery-text">Delivery address</p>
    <h4 class="delivery-address">90 High Street, Yogyakarta</h4>
  </div>

  <div class="navbar-right" data-aos="fade">
    <img src="img/cart.png" alt="Cart" class="icon-btn">
    <img src="img/love.png" alt="Favorite" class="icon-btn">
    <img src="img/notif.png" alt="Notification" class="icon-btn">
  </div>
</header>

<div class="search-container" data-aos="fade">
  <div class="search-box">
    <img src="img/search.png" alt="Search Icon">
    <input type="text" placeholder="Search something...">
  </div>
</div>


    <div class="highlighted-products">
    <!-- Kiri -->
    <div class="highlight-card left-card">
        <div class="text-content">
            <h4>STEPBYSTEP</h4>
            <h2>Nike Pegasus 41</h2>
            <p class="sub-title">Men's Road Running Shoes</p>
            <p class="description">
                Lightweight, durable, and built for speed—experience unmatched comfort and performance with every stride.
                Perfect for runners of all levels!
            </p>
            <button class="highlight-button">20% OFF | BUY NOW</button>
        </div>
        <div class="image-content">
            <img src="{{ asset('img/shop1.png') }}" alt="Nike Pegasus 41">
        </div>
    </div>

    <!-- Kanan -->
    <div class="highlight-card right-card">
        <div class="text-content">
            <h4>STEPBYSTEP</h4>
            <h2>Nike Pegasus GORE-TEX</h2>
            <p class="sub-title">Women's Trail-Running Shoes</p>
            <p class="description">
                Stay unstoppable in any weather with lightweight, durable, and waterproof trail-running shoes.
                Designed for comfort, speed, and all-terrain adventures.
            </p>
            <button class="highlight-button alt">10% OFF | BUY NOW</button>
        </div>
        <div class="image-content">
            <img src="{{ asset('img/shop2.png') }}" alt="Nike Pegasus Trail 5">
        </div>
    </div>
</div>

<div class="shop-container">

    <!-- New Arrivals Section -->
    <div class="new-arrivals-section">
        <h1 class="new-title">New Arrivals</h1>
        <div class="product-grid">
        @foreach($newArrivals as $product)
    <a href="/products/{{ $product->slug }}" class="product-link">
        <div class="product-card">
            <div class="product-image">
                <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->product_name }}">
                <span class="badge">NEW</span>
                <img src="img/cart.png" class="cart" alt="Cart">
                <img src="img/love.png" class="love" alt="Love">
            </div>
            <div class="product-info">
                <h3 class="product-name">{{ $product->product_name }}</h3>
                <p class="product-description">{{ $product->description }}</p>
                <p class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <div class="product-rating">
                    <img src="{{ asset('img/star.png') }}" alt="star" class="star-icon">
                    <span>4.5</span>
                </div>
            </div>
        </div>
    </a>
@endforeach

        </div>
    </div>
    <!-- End of New Arrivals Section -->


    <!-- Baru kemudian Top Title dan Kategori -->
    <h1 class="top-title">Category</h1>

    <!-- Top Categories -->
    <div class="top-categories">
        <button class="active">Women</button>
        <button>Men</button>
        <button>Kids</button>
    </div>

<div class="sidebar-categories">
  <button data-target="lifestyle" class="active">Lifestyle</button>
  <button data-target="running">Running</button>
  <button data-target="basketball">Basketball</button>
</div>

    <!-- Content Wrapper -->
    <div class="content-wrapper">

        @foreach($groupedProducts as $primaryCategoryName => $categories)
            <div class="primary-category-section" data-primary="{{ strtolower($primaryCategoryName) }}">
                <h1 class="page-title">{{ $primaryCategoryName }}'s Shoes</h1>

                @php
                    $desiredOrder = ['Lifestyle', 'Running', 'Basketball'];
                @endphp

                @foreach($desiredOrder as $secondaryCategoryName)
                    @if(isset($categories[$secondaryCategoryName]))
                        <div id="{{ $secondaryCategoryName }}" class="category-section">
                            <h2 class="category-title">{{ $secondaryCategoryName }} <span class="subtitle">{{ $primaryCategoryName }}'s {{ $secondaryCategoryName }} Shoes</span></h2>

                            <div class="product-grid">
                            @foreach($categories[$secondaryCategoryName] as $product)
    <a href="/products/{{ $product->slug }}" class="product-link">
        <div class="product-card">
            <div class="product-image">
                <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->product_name }}">
                <span class="badge">{{ $primaryCategoryName }}'s Shoes</span>
                <img src="img/cart.png" class="cart" alt="Cart">
                <img src="img/love.png" class="love" alt="Love">
            </div>
            <div class="product-info">
                <h3 class="product-name">{{ $product->product_name }}</h3>
                <p class="product-description">{{ $product->description }}</p>
                <p class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <div class="product-rating">
                    <img src="{{ asset('img/star.png') }}" alt="star" class="star-icon">
                    <span>4.5</span>
                </div>
            </div>
        </div>
    </a>
@endforeach

                            </div>

                        </div>
                    @endif
                @endforeach

            </div>
        @endforeach
        
    </div>
<!-- Produk bagian atas tetap seperti biasa -->

{{-- Customer Ratings & Reviews --}}
<section class="reviews-section">

  {{-- 1. Judul --}}
  <h2 class="reviews-title">Customer Ratings & Reviews</h2>

{{-- Customer Ratings & Reviews --}}
<div class="review-summary-box">
  {{-- LEFT: Rating Bars --}}
  <div class="rating-bars">
    @foreach([5,4,3,2,1] as $star)
      <div class="rating-bar">
        <span class="star-label">{{ $star }} &#9733;</span>
        <div class="bar">
          <div class="fill" style="width: {{ $percentByRating[$star] ?? 0 }}%;"></div>
        </div>
        <span class="count">{{ $countsByRating[$star] ?? 0 }}</span>
      </div>
    @endforeach
  </div>

  {{-- RIGHT: Avg Rating + Buttons --}}
  <div class="summary-container">
    {{-- Avg Rating --}}
    <div class="average-score">
      <h1>{{ number_format($avgRating, 1) }}</h1>
      <div class="stars">
        @for($i = 1; $i <= 5; $i++)
          <span style="color: {{ $i <= round($avgRating) ? '#000' : '#ccc' }}">&#9733;</span>
        @endfor
      </div>
      <small>({{ number_format($totalReviews) }} Ratings)</small>
    </div>

    {{-- Buttons --}}
    <div class="review-buttons">
      @auth
        <button type="button" class="btn open-review-modal">Write A Review</button>
      @else
        <a href="{{ route('login') }}" class="btn">Write A Review</a>
      @endauth
      <a href="#all-reviews" class="btn btn-secondary">See All Review</a>
    </div>
  </div>
</div>

{{-- Modal Review --}}
<div id="reviewModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3>Write A Review</h3>
    <form method="POST" action="{{ route('reviews.store') }}">
      @csrf

      <div class="form-group">
        <label for="rating">Quality of Service</label>
        <small>Rate the quality of service provided</small>
        <div class="star-rating">
          @for($i = 5; $i >= 1; $i--)
            <input type="radio" name="rating" id="star{{ $i }}" value="{{ $i }}">
            <label for="star{{ $i }}">&#9733;</label>
          @endfor
        </div>
      </div>

      <div class="form-group">
        <label for="comment">Comments</label>
        <textarea name="comment" id="comment" placeholder="Comments"></textarea>
        <small>Please provide any additional comments or suggestions</small>
      </div>

      <button type="submit" class="btn-submit">Submit Review</button>
    </form>
  </div>
</div>




  {{-- 4. Daftar Review --}}
  <div class="review-header">
  <h4>Latest Reviews</h4>
  {{-- Hapus bagian sort --}}
</div>
  <div class="all-reviews">
  @foreach($reviews as $rev)
    <div class="review">
      <div class="review-content">
        <div class="stars">
          @for ($i = 1; $i <= 5; $i++)
            <span style="color: {{ $i <= $rev->rating ? '#000' : '#ccc' }}">&#9733;</span>
          @endfor
        </div>
        <p class="comment">{{ $rev->comment }}</p>
      </div>

      <div class="review-user">
      <img src="img/avatar.png" alt="Avatar" class="avatar">
        <div class="user-meta">
        <strong>{{ $rev->user->name }}</strong>
          <small>{{ $rev->created_at->format('M d, Y') }}</small>
        </div>
      </div>
    </div>
  @endforeach

  <div class="see-all">
    <a href="#" class="see-link">See All Review <span>&rarr;</span></a>
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

</div>


<script>
document.addEventListener('DOMContentLoaded', () => {
  // Init AOS
  AOS.init();

  // Ambil tombol & section
  const topBtns     = document.querySelectorAll('.top-categories button');
  const sidebarBtns = document.querySelectorAll('.sidebar-categories button');
  const sections    = document.querySelectorAll('.primary-category-section');

  // Track primary section yang sedang aktif
  let currentPrimary = 'women';

  // Utility untuk toggle class active
  function clearActive(btns) { btns.forEach(b => b.classList.remove('active')); }
  function setActive(btns, btn) { clearActive(btns); btn.classList.add('active'); }

  // Tampilkan hanya section primary tertentu
  function showPrimary(cat) {
    sections.forEach(sec => {
      sec.style.display = sec.dataset.primary === cat ? 'block' : 'none';
    });
  }

  // Scroll ke secondary category di dalam section yang aktif
  function scrollToCategory(catId) {
    const activeSection = document.querySelector(
      `.primary-category-section[data-primary="${currentPrimary}"]`
    );
    if (!activeSection) return;
    const target = activeSection.querySelector(`#${catId}`);
    if (target) {
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  }

  // Handler untuk top-categories (Women, Men, Kids, Sale)
  topBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      currentPrimary = btn.innerText.toLowerCase();
      showPrimary(currentPrimary);
      setActive(topBtns, btn);
      // reset sidebar ke tombol pertama
      if (sidebarBtns.length) setActive(sidebarBtns, sidebarBtns[0]);
    });
  });

  // Handler untuk sidebar-categories (Lifestyle, Running, Basketball)
  sidebarBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const catId = btn.innerText;        // nama id persis “Lifestyle”, “Running”, dll
      scrollToCategory(catId);
      setActive(sidebarBtns, btn);
    });
  });

  // Inisialisasi default pada load
  showPrimary(currentPrimary);
  topBtns.forEach(b => {
    if (b.innerText.toLowerCase() === currentPrimary) setActive(topBtns, b);
  });
  if (sidebarBtns.length) setActive(sidebarBtns, sidebarBtns[0]);
});

document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('reviewModal');
  const openBtn = document.querySelector('.open-review-modal');
  const closeBtn = document.querySelector('.modal .close');

  openBtn?.addEventListener('click', () => {
    modal.style.display = 'block';
  });

  closeBtn?.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  window.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.style.display = 'none';
    }
  });
});
</script>




</body>
</html>
