<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Form Login</title>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="{{ route('proseslogin') }}" method="POST">
            @csrf
            <div class="input-group">
                <input type="email" name="email" placeholder="email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <a href="#">
                <button type="submit" class="btn btn-login mb-3">Login</button>
            </a>
        </form>
        <div class="daftar">
            Belum punya akun? <a href="/register/">Daftar</a>
        </div>
    </div>
  
</body>

</html>
