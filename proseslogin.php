<?php
session_start();
include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        // Simpan data ke session
        $_SESSION['id_user'] = $user['id'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        header("Location: admin1.php");
        exit;
    } else {
        echo "<script>alert('Password salah!'); window.location='login.php';</script>";
    }
} else {
    echo "<script>alert('Username tidak ditemukan!'); window.location='login.php';</script>";
}
