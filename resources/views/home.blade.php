    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Navbar with Search</title>
        
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
                top: -25px;
                left: 30px;
                width: 110px;
                
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
                margin-top: 50px;
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

.background-box {
    width: 100%;
    height: 100%;
    background: #232323;
    border-radius: 30px 30px 0 0;
    position: absolute;
    margin-right: 0px;
}

        </style>
    </head>
    <body>

    <header class="navbar">
        <div class="logo-container">
            <img src="img/logo.png" alt="Logo">
        </div>

        <nav class="nav-center">
            <div class="nav-links">
                <div class="back-store-container">
                    <a href="#">
                        <img src="img/arrow2.png" alt="Back" class="back">
                    </a>
                    <a href="#" class="store">Find a Store</a>
                </div>

                <a href="#" class="help">Help</a>
                <a href="#" class="join">Join Us</a>
                <a href="#" class="prof">Profile</a>
            </div>
            
            <div class="search-box">
                <img src="img/search.png" alt="Search Icon">
                <input type="text" placeholder="Search something...">
            </div>
        </nav>

        <div class="profile">
            <img src="img/avatar.png" alt="Avatar" class="avatar">
            <span class="username"><strong>Hi Example!</strong></span>
        </div>
    </header>

    <!-- Bagian Gambar Utama -->
    <div class="hero-section">
        <img src="img/home1.jpeg" alt="Main Banner">
    </div>

    <!-- Bagian Sepatu dan Menu -->
    <div class="bottom-box">
        <img src="img/home2.png" alt="Shoe Image" class="shoe-img">
        <div class="menu-items">
            <span>New & Featured</span>
            <span>Women</span>
            <span>Men</span>
            <span>Sale</span>
        </div>
    </div>
    <!-- Nike Men's Edition di atas -->
<div class="nike-edition men">
    <div class="left-section">
        <a href="#" class="shop-button">Shop Now</a>
        <h2>Nike Men's Edition</h2>
        <p>Performance & Style in Every Step</p>
        <div class="nav-buttons">
            <div class="arrow-btn"><img src="img/arrow2.png" alt="Left Arrow"></div>
            <div class="arrow-btn"><img src="img/arrow2.png" alt="Right Arrow" style="transform: rotate(180deg);"></div>
        </div>
    </div>
    <div class="right-section">
        <div class="background-box"></div>
    </div>
</div>

<!-- Nike Women's Edition di bawah -->
<div class="nike-edition women">
    <div class="left-section">
        <a href="#" class="shop-button">Shop Now</a>
        <h2>Nike Women's Edition</h2>
        <p>Performance & Style in Every Step</p>
        <div class="nav-buttons">
            <div class="arrow-btn"><img src="img/arrow2.png" alt="Left Arrow"></div>
            <div class="arrow-btn"><img src="img/arrow2.png" alt="Right Arrow" style="transform: rotate(180deg);"></div>
        </div>
    </div>
    <div class="right-section">
        <div class="background-box"></div>
    </div>
</div>




    </body>
    </html>
