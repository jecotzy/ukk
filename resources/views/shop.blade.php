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
        margin-bottom: 50px;
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

    /* Sidebar */
    .sidebar-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 160px;
    height: 100%;
}

.sidebar-categories {
    position: sticky;
    top: 2000px;
    display: flex;
    flex-direction: column;
    gap: 15px;
    border-right: 4px solid black;
    padding-right: 20px;
    background: white;
}

    .sidebar-categories button {
        background: none;
        border: 1px solid black;
        padding: 8px 15px;
        cursor: pointer;
        border-radius: 20px;
        font-weight: bold;
        transition: 0.3s;
        
    }

    /* Konten */
    .content-wrapper {
        margin-left: 180px;
        padding: 0 40px;
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
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->product_name }}">
                        <span class="badge">NEW</span>
                        <a href="/cart">
                            <img src="img/cart.png" class="cart" alt="Cart">
                        </a>
                        <a href="/favorites">
                            <img src="img/love.png" class="love" alt="Love">
                        </a>
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
                                    <div class="product-card">
                                        <div class="product-image">
                                            <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->product_name }}">
                                            <span class="badge">{{ $primaryCategoryName }}'s Shoes</span>
                                            <a href="/cart">
                                                <img src="img/cart.png" class="cart" alt="Cart">
                                            </a>
                                            <a href="/favorites">
                                                <img src="img/love.png" class="love" alt="Love">
                                            </a>
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
                                @endforeach
                            </div>

                        </div>
                    @endif
                @endforeach

            </div>
        @endforeach
    </div>

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

document.addEventListener("scroll", function() {
    const sidebarWrapper = document.querySelector(".sidebar-wrapper");
    const contentSection = document.querySelector(".products-content");
    const sidebar = document.querySelector(".sidebar-categories");

    const rect = contentSection.getBoundingClientRect();

    if (rect.top <= 120 && rect.bottom > 200) {
        sidebar.style.position = "sticky";
        sidebar.style.top = "120px";
    } else {
        sidebar.style.position = "relative";
        sidebar.style.top = "0";
    }
});
</script>




</body>
</html>
