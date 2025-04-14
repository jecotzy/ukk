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

    <div class="back-buttons">
    <a href="#" class="back-button large" id="arrowButton" onclick="toggleSection(event)">
        <img src="{{ asset('img/arrow.png') }}" alt="Arrow">
    </a>

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

    <!-- Hidden Section -->
    <!-- Hidden Section -->
<div class="hidden-section" id="hiddenSection">
    <div class="stats-container">
        <div class="stat">
            <h2 id="counter1">0</h2>  <!-- Tambahkan ID untuk animasi angka -->
            <p>Happy Customers</p>  
        </div>
        <div class="stat">
            <h2 id="counter2">0</h2>  <!-- Tambahkan ID untuk animasi angka -->
            <p>Unique Design</p>
        </div>
        <div class="stat">
            <h2 id="counter3">0</h2>  <!-- Tambahkan ID untuk animasi angka -->
            <p>Exclusive Members</p>
        </div>
        <div class="premium">
            <p>Premium Quality Guaranteed</p>
            <button onclick="hideSection()" id="shopButton">Shop</button>
        </div>
    </div>
</div>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
    document.body.classList.add("fade-in"); // Tambahkan class saat halaman dimuat
});
        // Array yang menyimpan ID setiap sepatu
        let shoeIds = ["shoe-0", "shoe-1", "shoe-2", "shoe-3"];
        let currentIndex = 0; // Indeks awal untuk rotasi

        function rotateShoes() {
            let topShoe = document.getElementById(shoeIds[(currentIndex + 1) % 4]);
            let centerShoe = document.getElementById(shoeIds[currentIndex]);
            let bottomShoe = document.getElementById(shoeIds[(currentIndex + 3) % 4]);
            let hiddenShoe = document.getElementById(shoeIds[(currentIndex + 2) % 4]);

            let backgroundColors = ["#FDFBEDFA", "#EDFAFDFA", "#FDEDF4FA", "#F8F0FCFA"];
            document.body.style.backgroundColor = backgroundColors[currentIndex];

            if (bottomShoe.classList.contains("hidden")) {
                bottomShoe.classList.remove("hidden");
                bottomShoe.classList.add("bottom");
            }

            hiddenShoe.classList.remove("hidden");
            hiddenShoe.classList.add("top");

            topShoe.classList.remove("top");
            topShoe.classList.add("center");

            centerShoe.classList.remove("center");
            centerShoe.classList.add("bottom");

            bottomShoe.classList.remove("bottom");
            bottomShoe.classList.add("hidden");

            currentIndex = (currentIndex + 1) % 4;
        }

        // Tambahkan event listener untuk setiap sepatu agar bisa diklik dan memicu animasi
        document.querySelectorAll('.shoe').forEach(shoe => {
            shoe.addEventListener('click', rotateShoes);
        });

        // Fungsi animasi angka bertambah
function animateCounter(element, target, duration) {
    let start = 0;
    let increment = (target - start) / (duration / 10); // Hitung kenaikan per interval (10ms)
    let current = start;

    let counter = setInterval(() => {
        current += increment;
        if (current >= target) {
            clearInterval(counter);
            current = target; // Pastikan berhenti di angka target
        }
        element.textContent = formatNumber(current);
    }, 10); // Perbarui angka setiap 10ms
}

// Fungsi format angka agar menjadi "17.5M"
function formatNumber(num) {
    if (num >= 1000000) {
        return (num / 1000000).toFixed(1) + "M+"; // Format dalam jutaan
    }
    return Math.floor(num) + "+"; // Tampilkan angka bulat untuk angka kecil
}

// Fungsi untuk menampilkan atau menyembunyikan hidden section
// Fungsi animasi angka bertambah dalam format K/M dengan tanda "+"
function animateCounter(element, target, duration) {
    let start = 0;
    let increment = (target - start) / (duration / 10); 
    let current = start;

    let counter = setInterval(() => {
        current += increment;

        if (current >= target) {
            clearInterval(counter);
            current = target; // Pastikan berhenti di angka target
        }

        element.textContent = formatNumber(current) + "+"; // Update tampilan
    }, 10);
}

// Fungsi format angka agar tetap dalam "M+" dan "K+"
function formatNumber(num) {
    if (num >= 1000000) {
        return (num / 1000000).toFixed(1) + "M"; // Contoh: 17.5M
    } else if (num >= 1000) {
        return (num / 1000).toFixed(1) + "K"; // Contoh: 1.5K, 10K
    }
    return Math.floor(num); // Jika di bawah 1.000, tampilkan angka asli
}

// Fungsi untuk menampilkan atau menyembunyikan hidden section
function toggleSection(event) {
    event.preventDefault();
    let hiddenSection = document.getElementById("hiddenSection");
    let arrowButton = document.getElementById("arrowButton").parentElement;

    if (hiddenSection.classList.contains("active")) {
        hiddenSection.classList.remove("active");
        hiddenSection.classList.add("inactive");

        arrowButton.classList.remove("active");
        arrowButton.classList.add("inactive");

        setTimeout(() => {
            hiddenSection.style.visibility = "hidden"; 
        }, 800);
    } else {
        hiddenSection.style.visibility = "visible"; 
        hiddenSection.classList.remove("inactive");
        hiddenSection.classList.add("active");

        arrowButton.classList.remove("inactive");
        arrowButton.classList.add("active");

        // Animasi angka saat hidden section muncul
        animateCounter(document.getElementById("counter1"), 17500000, 1500); // 17.5M+
        animateCounter(document.getElementById("counter2"), 1500, 1500); // 1.5K+
        animateCounter(document.getElementById("counter3"), 10000, 1500); // 10K+
    }
}

document.getElementById("shopButton").addEventListener("click", function (event) {
    event.preventDefault();
    document.body.classList.add("fade-out"); // Tambahkan efek fade-out

    setTimeout(() => {
        window.location.href = "{{ route('home') }}"; // Redirect setelah animasi
    }, 500); // Sesuaikan dengan durasi animasi CSS
});








    </script>

</body>
</html>
