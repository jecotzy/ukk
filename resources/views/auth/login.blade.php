
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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

        document.addEventListener("DOMContentLoaded", function () {
            const loginForm = document.querySelector("form");

            loginForm.addEventListener("submit", function (event) {
                event.preventDefault(); // Cegah submit langsung agar animasi berjalan

                document.body.classList.add("fade-out"); // Tambahkan efek fade-out

                setTimeout(() => {
                    loginForm.submit(); // Kirim form setelah animasi selesai
                }, 500); // Sesuai dengan durasi animasi fade-out (0.5 detik)
            });
        });
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