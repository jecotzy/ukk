<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;700&family=Poppins:wght@300;500;700&display=swap');
    
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
            overflow: hidden; /* Mencegah scroll saat animasi */
        }

        .back-buttons {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
            margin-left: 30px;
        }

        .back-button {
            display: flex;
            line-height: 0;
        }

        .back-button img {
            display: block;
            padding: 0;
            margin: 0;
        }

        .back-button.small img {
            width: 25px;
            height: 50px;
        }

        .back-button.large img {
            width: 30px;
            height: 55px;
        }

        .back-button:hover img {
            transform: scale(1.1);
        }

        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
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

        .slide-out-left {
            animation: slideOutLeft 0.5s ease forwards;
        }

        .slide-out-right {
            animation: slideOutRight 0.5s ease forwards;
        }

        .container {
            background: transparent;
            padding: 40px;
            border-radius: 10px;
            text-align: left;
            max-width: 400px;
            width: 100%;
            margin-bottom: 150px;
        }

        h1 {
            font-size: 33px;
            font-weight: 600;
            color: #433039;
            margin-bottom: 0px;
            font-family: 'Poppins', sans-serif;
            white-space: nowrap; /* Cegah pemotongan teks */
        }

        .login-text {
            padding-top: -20px;
            font-size: 17px;
            font-weight: 400;
            color: #000000;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 25px;
        }

        .login-link {
            font-size: 17px;
            font-weight: 400;
            color: #4E3E6D;
            text-decoration: underline;
            transition: color 0.3s ease-in-out;
            font-family: 'Poppins', sans-serif;
        }

        .login-link:hover {
            color: #6A4C5A;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            height: 40px;
            padding: 12px;
            margin-top: 15px;
            border: 1px solid #443B55;
            border-radius: 10px;
            font-size: 16px;
            background: #fff;
            outline: none;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 12px;
        }

        .checkbox {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            margin-top: 15px;
            color: #D9D9D9 ;            
        }

        .checkbox input[type="checkbox"] {
            appearance: none;
            width: 20px;
            height: 20px;
            background: #D9D9D9;
            border-radius: 2px;
            border: 1px solid #000;
            cursor: pointer;
            position: relative;
            transition: background 0.3s ease;
        }

        .checkbox input[type="checkbox"]:checked {
            background: #000;
        }

        .checkbox label {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            font-weight: 500;
            color: #000;
            line-height: 100%;
            letter-spacing: 0%;
        }

        button {
            width: 100%;
            padding: 14px;
            background: black;
            color: white;
            border: 1px solid #443B55;
            border-radius: 30px;
            font-size: 16px;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.3s ease-in-out;
            font-family: 'Instrument Sans', sans-serif;
            margin-top: 45px;
        }

        button:hover {
            background: #333;
        }

        .terms {
            font-size: 12px;
            font-family: 'Instrument Sans', sans-serif;
            font-weight: 500;
            line-height: 100%;
            letter-spacing: 0%;
            margin-top: 35px;
            white-space: normal;
            
            
        }

        .terms a {
            color: #4E3E6D;
            text-decoration: underline;
        }
    </style>

<script>
    function goBack(event) {
        event.preventDefault();
        sessionStorage.setItem('skipAnimation', 'true');
        document.body.classList.add('slide-out-right');
        setTimeout(() => {
            window.location.href = "{{ route('register') }}"; 
        }, 500);
    }

    function goToDashboard(event) {
        event.preventDefault();
        sessionStorage.setItem('skipAnimation', 'true');
        document.body.classList.add('slide-out-left');
        setTimeout(() => {
            window.location.href = "{{ route('dashboard') }}"; 
        }, 500);
    }
</script>

</head>
<body>
    <div class="back-buttons">
        <a href="#" class="back-button large" onclick="goBack(event)">
            <img src="{{ asset('img/arrow.png') }}" alt="Back">
        </a>
        <a href="#" class="back-button small" onclick="goBack(event)">
            <img src="{{ asset('img/arrow.png') }}" alt="Back">
        </a>
    </div>

    <div class="container">
        <h1>Login to Your Account</h1>
        <p class="login-text">Access your account</p>
        
        <form method="POST" action="{{ route('login.submit') }}">
    @csrf
    <input type="text" name="username" placeholder="Enter username" required>
    <input type="password" name="password" placeholder="Enter password" required>
    <div class="checkbox">
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember me</label>
    </div>
    <button type="submit">Login</button>
    <div class="checkbox terms">
        <input type="checkbox" id="terms" required>
        <label for="terms">I agree to the platform’s <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
    </div>
</form>

    </div>
    
   
</body>
</html>
