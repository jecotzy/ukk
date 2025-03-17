<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
<script>
    function goBack(event) {
        event.preventDefault(); // Mencegah perpindahan langsung

        // Simpan status di sessionStorage
        sessionStorage.setItem('skipAnimation', 'true');

        // Tambahkan animasi ke body
        document.body.classList.add('slide-out');

        // Tunggu animasi selesai, lalu redirect
        setTimeout(() => {
            window.location.href = "{{ route('welcome') }}"; 
        }, 500);
    }
    function goToLogin(event) {
        event.preventDefault(); // Mencegah perpindahan langsung

        // Simpan status di sessionStorage agar animasi tidak muncul kembali saat kembali ke halaman ini
        sessionStorage.setItem('skipAnimation', 'true');

        // Tambahkan class animasi ke body
        document.body.classList.add('slide-out-left');

        // Tunggu animasi selesai, lalu redirect ke halaman login
        setTimeout(() => {
            window.location.href = "{{ route('login') }}"; 
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
        <h1>Create an account</h1>
        <p class="login-text">Already have an account? 
            <a href="{{ route('login') }}" class="login-link" onclick="goToLogin(event)">Log in</a>
        </p>

        <form method="POST" action="{{ route('register.submit') }}">
    @csrf
    <input type="text" name="username" placeholder="Enter username" value="{{ old('username') }}">
    <input type="password" name="password" placeholder="Enter password">

    <div class="checkbox">
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember me</label>
    </div>

    <button type="submit">Login</button>

    <div class="checkbox terms">
        <input type="checkbox" id="terms" name="terms" required>
        <label for="terms">I agree to the platform’s <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
    </div>
</form>

    </div>
</body>
</html>
