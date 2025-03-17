<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Landing Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom, #FFFCFD, #FFEAF0, #F4F9FF);
            text-align: center;
            overflow: hidden; /* Mencegah scroll */
        }

        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: black;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 100;
            animation: fadeOut 0.5s ease-in-out 1s forwards;
        }

        .circle {
            width: 80px;
            height: 80px;
            background: radial-gradient(circle, #FFFCFD, #FFEAF0);
            border-radius: 50%;
            display: block;
            animation: fallBounce 0.8s ease-in-out, expandFade 0.3s ease-in-out 1s forwards;
        }

        @keyframes fallBounce {
            0% {
                transform: translateY(-200px);
                opacity: 0;
            }
            50% {
                transform: translateY(0);
                opacity: 1;
            }
            70% {
                transform: translateY(-20px);
            }
            85% {
                transform: translateY(5px);
            }
            100% {
                transform: translateY(0);
            }
        }

        @keyframes expandFade {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            100% {
                transform: scale(12);
                opacity: 0;
            }
        }

        @keyframes fadeOut {
            to { opacity: 0; visibility: hidden; }
        }

        .container {
            position: relative;
            max-width: 400px;
            padding: 20px;
            transform: translateY(100vh);
            opacity: 0;
            animation: slideUp 0.8s ease-out 1.3s forwards;
        }

        @keyframes slideUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 52px;
            font-weight: 550;
            color: #433039;
            padding-right: 65px;
            margin-bottom: 0px;
        }

        h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 28px;
            font-weight: 500;
            color: #3d3d3d;
            text-decoration: underline;
            margin-top: 0px;
        }

        .image-container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: fit-content;
            margin: auto;
        }

        .image-container img {
            width: 300px;
            position: relative;
        }

        .shoe-shadow {
            position: absolute;
            bottom: 90px;
            left: 160px;
            transform: translateX(-50%);
            width: 250px;
            height: 60px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Bubble Chat Styling */
        .bubble-chat {
            position: absolute;
            top: 60px;
            left: 10px;
            background: #FEF5FB;
            padding: 15px 20px;
            border-radius: 40%;
            width: 117px;
            height: 90px;
            box-shadow: 0px 5px 10px rgba(255, 255, 255, 0);
            text-align: center;
            max-width: 180px;
        }

        .bubble-chat::after {
            content: "";
            position: absolute;
            bottom: 7px;
            left: 90px;
            width: 20px;
            height: 20px;
            background: #FEF5FB;
            clip-path: polygon(0% 0%, 100% 100%, 100% 0%);
            transform: rotate(90deg);
        }

        .bubble-chat span {
            font-family: 'Instrument Sans', sans-serif;
            font-size: 20px;
            font-style: italic;
            font-weight: 700;
            color: #896A78;
            display: block;
        }

        .bubble-chat p {
            font-family: 'Fredoka', sans-serif;
            font-size: 16px;
            font-weight: 600;
            color: #B19DA6FA;
        }

        .sub-text {
            font-family: 'Instrument Sans', sans-serif;
            font-weight: 600;
            font-size: 33px;
            color: #000000;
            margin: 20px 15px;
            margin-top: 3px;
        }

        .cta-button {
            font-family: 'Instrument Sans', sans-serif;
            background-color: black;
            color: white;
            font-size: 20px;
            font-weight: 500;
            width: 250px;
            height: 55px;
            border: none;
            border-radius: 18px;
            cursor: pointer;
            transition: transform 700ms cubic-bezier(0.61, -0.01, 0.1, 1);
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 50px;
        }

        .cta-button:hover {
            background-color: #333;
        }

        .cta-button:active {
            transform: translateX(10px);
        }

        @keyframes slideOutLeft {
    from {
        transform: translateX(0);
        opacity: 1;
    }
    to {
        transform: translateX(-100%);
        opacity: 0;
    }
}

.container.slide-left {
    animation: slideOutLeft 0.2s ease-in-out forwards;
}


    </style>

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