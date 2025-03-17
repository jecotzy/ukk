<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StepByStep Shoes</title>

    <!-- Link ke file CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>
<body>

    <!-- Logo -->
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="StepByStep Logo">
    </div>

    <div class="container">
        <!-- Bagian teks dan informasi produk -->
        <div class="text-section">
            <h1>Nike Air Force 1 ‘07</h1>
            <p class="description">
                Professional Running Shoes for All Terrain. Designed with the latest technology for ultimate comfort and durability during every run.
            </p>

            <!-- Harga sepatu -->
            <div class="price">
                <span class="new-price">Rp 1.678.000</span> 
                <span class="old-price">Rp 2.099.000</span>
            </div>

            <!-- Ikon sosial media -->
            <div class="social-icons">
                <img src="{{ asset('img/ig.png') }}" alt="Instagram">
                <img src="{{ asset('img/fb.png') }}" alt="Facebook">
                <img src="{{ asset('img/x.png') }}" alt="X">
            </div>
        </div>

        <!-- Bagian tampilan sepatu dengan animasi rotasi -->
        <div class="shoes-container">
            <img src="{{ asset('img/sh4.png') }}" alt="Shoe 0" class="shoe center" id="shoe-0">
            <img src="{{ asset('img/sh1.png') }}" alt="Shoe 1" class="shoe top" id="shoe-1">
            <img src="{{ asset('img/sh2.png') }}" alt="Shoe 2" class="shoe hidden" id="shoe-2">
            <img src="{{ asset('img/sh3.png') }}" alt="Shoe 3" class="shoe hidden" id="shoe-3">
        </div>
    </div>

    <script>
        // Array yang menyimpan ID setiap sepatu
        let shoeIds = ["shoe-0", "shoe-1", "shoe-2", "shoe-3"];
        let currentIndex = 0; // Indeks awal untuk rotasi

        function rotateShoes() {
            // Ambil elemen sepatu berdasarkan indeks saat ini
            let topShoe = document.getElementById(shoeIds[(currentIndex + 1) % 4]);
            let centerShoe = document.getElementById(shoeIds[currentIndex]);
            let bottomShoe = document.getElementById(shoeIds[(currentIndex + 3) % 4]); // Sepatu bawah
            let hiddenShoe = document.getElementById(shoeIds[(currentIndex + 2) % 4]); // Sepatu baru yang akan muncul

            // Ubah warna background berdasarkan siklus sepatu
            let backgroundColors = ["#FDFBEDFA", "#EDFAFDFA", "#FDEDF4FA", "#F8F0FCFA"];
            document.body.style.backgroundColor = backgroundColors[currentIndex];

            // Pastikan sepatu bawah tetap terlihat setelah pertama kali klik
            if (bottomShoe.classList.contains("hidden")) {
                bottomShoe.classList.remove("hidden");
                bottomShoe.classList.add("bottom");
            }

            // Geser posisi sepatu dalam animasi rotasi
            hiddenShoe.classList.remove("hidden");
            hiddenShoe.classList.add("top");

            topShoe.classList.remove("top");
            topShoe.classList.add("center");

            centerShoe.classList.remove("center");
            centerShoe.classList.add("bottom");

            bottomShoe.classList.remove("bottom");
            bottomShoe.classList.add("hidden");

            // Update indeks untuk rotasi berikutnya
            currentIndex = (currentIndex + 1) % 4;
        }

        // Tambahkan event listener untuk setiap sepatu agar bisa diklik dan memicu animasi
        document.querySelectorAll('.shoe').forEach(shoe => {
            shoe.addEventListener('click', rotateShoes);
        });
    </script>

</body>
</html>
