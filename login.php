
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sajione Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="css/styles.css" rel="stylesheet"/>
</head>
<body class="login-page">
    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center bg-light">
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden" style="max-width: 900px; width: 100%;">
        <div class="row g-0">

            <!-- Form Login -->
            <div class="col-lg-6 bg-white p-5 d-flex flex-column justify-content-center">
            <div class="text-center mb-4">
                <img src="assets/img/SajiOne.png" alt="logo" style="width: 150px;">
                <h4 class="mt-3">SajiOne Admin</h4>
            </div>
            <form action="proseslogin.php" method="POST">
    <p class="text-center">Masukkan Akun Anda untuk Login!</p>
    <div class="form-outline mb-3">
        <label class="form-label">Email</label>
        <input type="text" name="username" class="form-control" placeholder="Nama atau Email Admin" required />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required />
    </div>
    <div class="text-center mb-3">
        <button type="submit" class="btn btn-primary w-100 mb-2">Log in</button>
        <a href="examples/rename-pass.php" class="text-muted">Lupa password?</a>
    </div>
    <div class="text-center mb-3">
        <a href="examples/register-v2.php" class="text-muted">Register</a>
    </div>
</form>

            </div>

            <!-- Welcome Panel -->
            <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center gradient-panel text-white p-4">
            <div>
                <h4 class="mb-3 fw-bold">Selamat datang di Sajione – Surga Kuliner Nusantara!</h4>
                <p class="small">
                Nikmati ribuan pilihan menu khas Indonesia yang kaya rasa, populer, dan penuh cita rasa autentik.
                Sajione hadir membawa kelezatan sejati dari berbagai penjuru Nusantara, disajikan dengan penuh cinta dan kualitas terbaik.
                </p>
            </div>
            </div>

        </div>
        </div>
    </div>
</body>
</html>
