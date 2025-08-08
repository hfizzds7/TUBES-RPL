<?php
include '../conn.php'; // sesuaikan path

$username = $_POST['username'];
$password_baru = password_hash($_POST['password_baru'], PASSWORD_DEFAULT);

// Cek username
$cek = $conn->prepare("SELECT * FROM users WHERE username = ?");
$cek->bind_param("s", $username);
$cek->execute();
$hasil = $cek->get_result();

if ($hasil->num_rows === 0) {
    echo "<script>alert('Username tidak ditemukan!'); window.location='lupa_password.php';</script>";
    exit;
}

// Update password
$update = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
$update->bind_param("ss", $password_baru, $username);

if ($update->execute()) {
    echo "<script>alert('Password berhasil diubah! Silakan login.'); window.location='../login.php';</script>";
} else {
    echo "Gagal memperbarui password: " . $conn->error;
}
