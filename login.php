
<!DOCTYPE html>
<html>
<head>
    <title>Login - MANCA GARAGE.ID</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background: #101b2b;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            background: white;
            width: 380px;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.3);
        }

        .brand {
            color: #e87532;
            font-size: 25px;
            font-weight: bold;
            text-align: center;
        }

        .tagline {
            color: #777;
            text-align: center;
            font-size: 12px;
            margin-bottom: 25px;
            letter-spacing: 2px;
        }

        .btn-login {
            background: #e87532;
            color: white;
            width: 100%;
            padding: 11px;
            border: none;
            border-radius: 7px;
            font-weight: bold;
        }

        .btn-login:hover {
            background: #cf6125;
            color: white;
        }
    </style>
</head>

<body>

<div class="login-box">

    <div class="brand">MANCA GARAGE.ID</div>

    <div class="tagline">
        RENT • DRIVE • EXPERIENCE
    </div>

    <h4 class="text-center mb-2">Selamat Datang</h4>

    <p class="text-center text-secondary mb-4">
        Silakan login untuk mengelola rental mobil.
    </p>

    <form action="proses_login.php" method="POST">

        <label class="mb-2">Email</label>

        <input type="email" name="email"
               class="form-control mb-3"
               placeholder="Masukkan email"
               required>

        <label class="mb-2">Password</label>

        <input type="password" name="password"
               class="form-control mb-4"
               placeholder="Masukkan password"
               required>

        <button type="submit" class="btn-login">
            LOGIN SEKARANG
        </button>

    </form>

    <hr>

    <p class="text-center text-secondary mb-0">
        © 2026 MANCA GARAGE.ID
    </p>

</div>

</body>
</html>
