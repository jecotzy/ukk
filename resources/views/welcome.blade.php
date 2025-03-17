<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

<script>
document.addEventListener("DOMContentLoaded", function() {
    const loadingScreen = document.querySelector('.loading-screen');
    const container = document.querySelector('.container');

    // Cek apakah halaman sedang di-refresh
    if (performance.navigation.type === 1) { // 1 berarti "page reload"
        sessionStorage.removeItem("visited"); // Hapus flag visited agar animasi muncul kembali
    }

    // Cek apakah pengguna kembali dari halaman lain
    if (sessionStorage.getItem("visited")) {
        loadingScreen.style.display = 'none';
        container.style.opacity = '1';
        container.style.transform = 'translateY(0)';
        container.style.animation = 'none'; // Hapus animasi slideUp
    } else {
        // Set visited agar animasi tidak muncul lagi setelah kembali dari halaman lain
        sessionStorage.setItem("visited", "true");
    }

    // Tombol "Get Started" dengan animasi slide ke kiri
    document.querySelector('.cta-button').addEventListener('click', function(event) {
        event.preventDefault();
        container.classList.add('slide-left');

        setTimeout(() => {
            window.location.href = "{{ route('register') }}";
        }, 500);
    });
});
</script>






</head>
<body>
    <div class="loading-screen">
        <div class="circle"></div>
    </div>

    <div class="container">
        <h1>Make Live</h1>
        <h2>More Comfortable</h2>
        <div class="image-container">
            <div class="bubble-chat">
                <span>STEPBYSTEP</span>
                <p>With Love,</p>
            </div>
            <div class="shoe-shadow"></div>
            <img src="/img/shoe1.png" alt="Shoe">
        </div>
        <p class="sub-text">Start Your Journey with Us!</p>
        <button class="cta-button">Get Started</button>

    </div>
</body>
</html>