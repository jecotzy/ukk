<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StepByStep Shoes</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #FDEDF4FA; /* Warna awal */
            transition: background-color 0.5s ease-in-out;
        }

        .container {
    width: 90%; /* Memperbesar container */
    max-width: 1400px; /* Maksimal ukuran */
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.text-section {
    flex: 2; /* Membuat text-section lebih besar */
    max-width: 1000px; /* Memberi batas agar tidak terlalu lebar */
    padding-right: 250px; /* Memberi ruang antara teks dan sepatu */
    max-height: 100%;
    margin-left: -130px;
    
}

h1 {
    font-size: 50px; /* Memperbesar judul */
    font-weight: 700;
    margin-bottom: 50px;
}

.description {
    font-size: 22px; /* Memperbesar deskripsi */
    line-height: 1.8;
    margin-bottom: 50px;
}

.price {
    font-size: 30px; /* Harga lebih besar */
}

.old-price {
    font-size: 26px;
    color: #999; /* Warna abu-abu */
    text-decoration: line-through;
    font-weight: 700; /* Tambahkan ketebalan */
    opacity: 0.8; /* Efek sedikit transparan */
    margin-left: 8px; /* Beri jarak dari harga baru */
}


.social-icons {
    display: flex;
    gap: 20px; /* Menambahkan jarak antar ikon */
    margin-top: 30px;
}

.social-icons img {
    width: 50px; /* Ukuran ikon tetap */
    height: auto;
}


.shoes-container {
    width: 40%; /* Memperkecil area sepatu */
    height: 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-left: 50px; /* Mengurangi padding agar lebih proporsional */
}


.logo {
    display: flex;
    align-items: center;
    gap: 15px; /* Beri jarak antara logo dan teks */
    margin-top: -590px;
    padding-left: -100px;
    margin-left: 15px;
}

.logo img {
    width: 170px; /* Ukuran lebih kecil agar proporsional */
    height: 100px; /* Menjaga aspek rasio */
    
}


        .shoe {
    width: 420px;
    height: 420px;
    position: absolute;
    transition: transform 1.4s ease-in-out, opacity 1.4s ease-in-out, filter 1.4s ease-in-out;
    cursor: pointer;
    margin-left: -200px;
    margin-top: -150px;
}

/* Sepatu Tengah - Efek membesar & blur hilang perlahan */
.shoe.center {
    transform: translateY(0) scale(1);
    z-index: 3;
    filter: blur(0px);
    opacity: 1;
}

/* Sepatu Atas - Lebih kecil & blur */
.shoe.top {
    transform: translateY(-180px) translateX(120px) scale(0.5); /* Tambah translateX */
    z-index: 2;
    filter: blur(2px);
    opacity: 0.5;
}

/* Sepatu Bawah - Lebih kecil, blur, dan geser sedikit ke kanan */
.shoe.bottom {
    transform: translateY(180px) translateX(110px) scale(0.5); /* Tambah translateX */
    z-index: 1;
    filter: blur(2px);
    opacity: 0.5;
}


/* Sepatu yang belum muncul */
.shoe.hidden {
    opacity: 0;
    visibility: hidden;
    transform: translateY(-200px) scale(0.7);
}


    </style>
</head>
<body>
<div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="logo">
            </div>
    <div class="container">
        <div class="text-section">
            

            <h1>Nike Air Force 1 ‘07</h1>
            <p class="description">
                Professional Running Shoes for All Terrain. Designed with the latest technology for ultimate comfort and durability during every run.
            </p>

            <div class="price">
                <span style="font-weight: bold;">Rp 1.678.000</span> 
                <span class="old-price">Rp 2.099.000</span>
            </div>

            <div class="social-icons">
                <img src="{{ asset('img/ig.png') }}" alt="Instagram">
                <img src="{{ asset('img/fb.png') }}" alt="Facebook">
                <img src="{{ asset('img/x.png') }}" alt="X">
            </div>
        </div>

        <div class="shoes-container">
            <img src="{{ asset('img/sh4.png') }}" alt="Shoe 0" class="shoe center" id="shoe-0">
            <img src="{{ asset('img/sh1.png') }}" alt="Shoe 1" class="shoe top" id="shoe-1">
            <img src="{{ asset('img/sh2.png') }}" alt="Shoe 2" class="shoe hidden" id="shoe-2">
            <img src="{{ asset('img/sh3.png') }}" alt="Shoe 3" class="shoe hidden" id="shoe-3">
        </div>
    </div>

    <script>
       let shoeIds = ["shoe-0", "shoe-1", "shoe-2", "shoe-3"];
let currentIndex = 0; // Indeks awal

function rotateShoes() {
    let topShoe = document.getElementById(shoeIds[(currentIndex + 1) % 4]);
    let centerShoe = document.getElementById(shoeIds[currentIndex]);
    let bottomShoe = document.getElementById(shoeIds[(currentIndex + 3) % 4]); // Sepatu bawah
    let hiddenShoe = document.getElementById(shoeIds[(currentIndex + 2) % 4]); // Sepatu baru

    // Ubah warna background berdasarkan siklus sepatu
    let backgroundColors = ["#FDFBEDFA", "#EDFAFDFA", "#FDEDF4FA", "#F8F0FCFA"];
    document.body.style.backgroundColor = backgroundColors[currentIndex];

    // Pastikan sepatu bawah tetap terlihat setelah pertama kali klik
    if (bottomShoe.classList.contains("hidden")) {
        bottomShoe.classList.remove("hidden");
        bottomShoe.classList.add("bottom");
    }

    // Geser posisi sepatu
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

// Tambahkan event listener untuk setiap sepatu
document.querySelectorAll('.shoe').forEach(shoe => {
    shoe.addEventListener('click', function () {
        rotateShoes();
    });
});

    </script>

</body>
</html>
