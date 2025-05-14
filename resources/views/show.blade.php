<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Produk</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #F1F1F1;
      color: #1e1e1e;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
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

    .logo{
      width: 120px;
      height: 70px;
    }
    .navbar-center {
      text-align: center;
    }

    .top-text {
      font-size: 14px;
      color: #888;
      margin-top: 2%;
    }

    .bot-text {
      font-size: 20px;
      font-weight: bold;
      margin-top: 2%;
    }

    .product-wrapper {
      max-width: 1100px;
      margin: 40px auto;
      padding: 0 20px;
    }

.product-container {
  display: flex;
  flex-wrap: wrap;
  gap: 50px;
  align-items: start;
}

.product-gallery {
  display: flex;
  gap: 20px;
  background: #FBFBFB;
  padding: 20px;
  border-radius: 16px;
}

.main-image-box {
  position: relative;
    background-color: #FBFBFB;
}

.main-image {
  width: 360px;
  height: auto;
  border-radius: 16px;
  background-color: #FBFBFB;
}

.favorite-btn {
  position: absolute;
  top: -10px;
  padding: 5px 12px;
  border-radius: 20px;
  font-size: 12px;
  display: flex;
  align-items: center;
  gap: 6px;
  font-weight: 600;
  border: 1.5px solid black; /* Tambahkan baris ini */
}

.favorite-btn img {
  width: 18px;
  height: 18px;
}

.product-info {
  flex: 1;
}

.product-info h2 {
  font-size: 25px;
  display: flex;
  align-items: center;
  gap: 13px;
}

.rating {
  display: inline-flex;
  align-items: center;
  background: #f4f4f4;
  padding: 4px 10px;
  border-radius: 12px;
  font-size: 15px;
  font-weight: 500;
}

.rating img {
  width: 15px;
  margin-right: 5px;
}

.product-info .category {
  font-size: 15px;
  color: #888;
}

.product-info .price {
  font-size: 22px;
  font-weight: 600;
  margin: 20px 0;
}

.select{
  color: rgba(0, 0, 0, 0.64);
  font-size: 18px;
  font-weight: 600;
}

.sizes span {
  display: inline-block;
  border: 1.5px solid black;
  padding: 1px 18px;
  border-radius: 20px;
  margin-right: 10px;
  cursor: pointer;
  margin-top: 5px;
}

.sizes span.selected {
  background: #000;
  color: #fff;
  border-color: #000;
}

.qty-cart-container {
  display: flex;
  align-items: center;
  gap: 20px;
  margin: 20px 0;
}

.qty-cart {
  display: flex;
  align-items: center;
  gap: 0;
  border-radius: 10px;
  overflow: hidden;
  
}

.qty-btn {
  padding: 2px 10px;
  font-size: 18px;
  font-weight: 500;
  cursor: pointer;
  border: 1.5px solid black;
  border-radius: 20px;
  background: none;

}

.qty-btn.minus {
  background-color: none;
  color: black;
}

.qty-btn.plus {
  background-color: black;
  color: white;
}

.qty-cart input {
  width: 40px;
  text-align: center;
  font-size: 20px;
  font-weight: 600;
  border: none;
  background: #f1f1f1;
  pointer-events: none; /* agar tidak bisa diklik */
}


.add-to-cart-btn {
  padding: 12px 30px;
  background: #2e3a59;
  color: #fff;
  border: none;
  border-radius: 24px;
  font-size: 16px;
  font-weight: 500;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 10px;
}

.add-to-cart-btn img {
  width: 18px;
  filter: brightness(0) invert(1);
}

.people-favorite {
  display: flex;
  align-items: center;
  margin-top: 25px;
}

.people-favorite img {
  width: 35px;
  height: 35px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid #fff;
  box-shadow: 0 0 3px rgba(0,0,0,0.1);
}

.people-favorite span {
  margin-left: 10px;
  font-size: 14px;
  color: #555;
  font-weight: 500;
}


    .desc-box {
      background-color: #FBFBFB;
      margin-top: 40px;
      padding: 20px;
      border-radius: 16px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .desc-box h3 {
      margin-bottom: 10px;
    }

    .desc-box p {
      color: #555;
      margin-bottom: 10px;
    }

    .desc-box ul {
      padding-left: 20px;
      color: #555;
    }

    .desc-box li {
      margin-bottom: 5px;
    }

    @media (max-width: 768px) {
      .product-container {
        flex-direction: column;
      }

      .product-image-box {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>

<header class="navbar">
  <div class="navbar-left">
    <a href="#">
      <img src="{{ asset('img/arrow2.png') }}" class="icon-btn">
    </a>
    <img src="{{ asset('img/logo.png') }}" class="logo" alt="icon-btn">
  </div>

  <div class="navbar-center">
    <p class="top-text">90 High Street, Yogyakarta</p>
    <h2 class="bot-text">Details Product</h2>
  </div>

  <div class="navbar-right">
    <img src="{{ asset('img/cart.png') }}" alt="Cart" class="icon-btn">
    <img src="{{ asset('img/love.png') }}" alt="Favorite" class="icon-btn">
    <img src="{{ asset('img/notif.png') }}" alt="Notification" class="icon-btn">
  </div>
</header>

<main class="product-wrapper">
<section class="product-container">
<div class="product-gallery">
  <div class="main-image-box">
    <div class="favorite-btn">
      <img src="{{ asset('img/love.png') }}" alt="Favorite"> Favorite
    </div>
    <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->product_name }}" class="main-image" />
  </div>
</div>


  <div class="product-info">
    <h2>{{ $product->product_name }} <span class="rating"><img src="{{ asset('img/star.png') }}" alt="star"> 4.9</span></h2>
    <p class="category">Women's Shoes</p>
    <p class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</p>

<form action="{{ route('cart.add', $product->id) }}" method="POST" id="add-to-cart-form">
    @csrf
    <input type="hidden" name="size" id="selected-size" value="37">
    <input type="hidden" name="quantity" id="selected-qty" value="1">

    <div class="sizes">
        <strong class="select">Select Size</strong><br>
        @foreach([37, 38, 39, 40] as $size)
            <span class="size-option {{ $size == 37 ? 'selected' : '' }}" data-size="{{ $size }}">{{ $size }}</span>
        @endforeach
    </div>

    <div class="qty-cart-container">
        <div class="qty-cart">
            <button type="button" class="qty-btn minus">-</button>
            <input type="text" id="qty-display" value="1" readonly>
            <button type="button" class="qty-btn plus">+</button>
        </div>

        <button type="submit" class="add-to-cart-btn">
            Add to Cart
            <img src="{{ asset('img/cart.png') }}" alt="Cart">
        </button>
    </div>
</form>
  </div>
</section>


  <section class="desc-box">
    <h3>Description</h3>
    <p>{{ $product->description }}</p>
    <ul>
      <li>Colour: Metallic Summit White / Pure Platinum / Wolf Grey / White</li>
      <li>Style: FV6603-101</li>
      <li>Origin: Vietnam</li>
    </ul>
  </section>
</main>
<script>
document.querySelectorAll('.size-option').forEach(btn => {
    btn.addEventListener('click', function () {
        document.querySelectorAll('.size-option').forEach(s => s.classList.remove('selected'));
        this.classList.add('selected');
        document.getElementById('selected-size').value = this.dataset.size;
    });
});

const qtyInput = document.getElementById('qty-display');
const qtyHidden = document.getElementById('selected-qty');

document.querySelector('.qty-btn.plus').addEventListener('click', () => {
    let current = parseInt(qtyInput.value);
    qtyInput.value = qtyHidden.value = current + 1;
});

document.querySelector('.qty-btn.minus').addEventListener('click', () => {
    let current = parseInt(qtyInput.value);
    if (current > 1) {
        qtyInput.value = qtyHidden.value = current - 1;
    }
});
</script>

</body>
</html>
