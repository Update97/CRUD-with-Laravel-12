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
    <div class="register-box">
        <h2>Register</h2>
        
        <form action="{{ route('prosesregister') }}" method="POST">
            @csrf
            <div class="input-group">
                <input type="text" name="nama" placeholder="nama lengkap" required>
                <i class='bx bxs-id-card'></i>
            </div>
            <div class="input-group">
                <input type="text" name="username" placeholder="username" required>
                <i class='bx bxs-id-card'></i>
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="email" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
             <div class="input-group">
                <input type="password" name="confirm_password" placeholder="konfirmasi password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <a href="#">
                <button type="submit" class="btn btn-register mb-3">Daftar</button>
            </a>
        </form>
        <div class="daftar">
            sudah punya akun? 
            <a href="{{ route('login')}}">Login</a>
        </div>
    </div>
  
</body>

</html>
