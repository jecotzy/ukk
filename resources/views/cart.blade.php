<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
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
    <h2 class="bot-text">My Cart</h2>
  </div>

  <div class="navbar-right">
    <img src="{{ asset('img/cart.png') }}" alt="Cart" class="icon-btn">
    <img src="{{ asset('img/love.png') }}" alt="Favorite" class="icon-btn">
    <img src="{{ asset('img/notif.png') }}" alt="Notification" class="icon-btn">
  </div>
</header>
    <div class="container">

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @php
        $total = 0;
    @endphp

    @if(count($cart) > 0)
        <div class="cart-items">
            @foreach($cart as $key => $item)
                @php
                    $itemTotal = $item['price'] * $item['quantity'];
                    $total += $itemTotal;
                @endphp

                <div class="cart-item" style="display: flex; align-items: center; margin-bottom: 15px;">
                    <img src="{{ asset('storage/' . $item['image_url']) }}" alt="{{ $item['product_name'] }}" width="80" height="80" style="object-fit: cover; border-radius: 10px; margin-right: 15px;">

                    <div style="flex: 1;">
                        <h5 style="margin: 0;">{{ $item['product_name'] }}</h5>
                        <p style="margin: 2px 0;">Size: {{ $item['size'] }} | Qty: {{ $item['quantity'] }}</p>
                        <p style="margin: 2px 0;">Price: Rp {{ number_format($item['price'], 0, ',', '.') }}</p>
                        <p style="margin: 2px 0;"><strong>Subtotal:</strong> Rp {{ number_format($itemTotal, 0, ',', '.') }}</p>
                    </div>

                    <form action="{{ route('cart.remove', $key) }}" method="POST" style="margin-left: 15px;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color: red; color: white; border: none; padding: 6px 12px; border-radius: 4px;">Remove</button>
                    </form>
                </div>
            @endforeach
        </div>

        <hr>
        <div class="cart-total" style="text-align: right;">
            <h4>Total: Rp {{ number_format($total, 0, ',', '.') }}</h4>
            
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif
    <a href="{{ route('checkout.index') }}">
    <button style="padding: 10px 20px; background: green; color: white;">Proceed to Checkout</button>
</a>

</div>
</body>
</html>