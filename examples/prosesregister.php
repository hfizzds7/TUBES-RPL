<?php
include '../conn.php';

$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password
$role = $_POST['role'];

// Cek apakah username sudah ada
$cek = $conn->prepare("SELECT * FROM users WHERE username = ?");
$cek->bind_param("s", $username);
$cek->execute();
$hasil = $cek->get_result();

if ($hasil->num_rows > 0) {
    echo "<script>alert('Username sudah digunakan!'); window.location='register.php';</script>";
    exit;
}

// Simpan data
$stmt = $conn->prepare("INSERT INTO users (nama_lengkap, username, password, role) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nama_lengkap, $username, $password, $role);

if ($stmt->execute()) {
    echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='../login.php';</script>";
} else {
    echo "Error: " . $conn->error;
}
