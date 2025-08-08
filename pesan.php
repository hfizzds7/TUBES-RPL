<?php
session_start();
include 'conn.php';

// Ambil id_menu dari URL
$id_menu = $_GET['id_menu'];

// Misalnya id_meja diambil dari session login pelanggan
$id_meja = $_SESSION['id_meja'] ?? 1; // Default meja 1 jika belum ada

// Jumlah default = 1
$jumlah = 1;

// Catatan kosong
$catatan = "";

// Status awal
$status = "pending";

// Query insert ke tabel pemesanan
$stmt = $conn->prepare("INSERT INTO pemesanan (id_meja, id_menu, jumlah, catatan, waktu_pesan, status) 
                        VALUES (?, ?, ?, ?, NOW(), ?)");
$stmt->bind_param("iiiss", $id_meja, $id_menu, $jumlah, $catatan, $status);

if ($stmt->execute()) {
    echo "<script>alert('Pesanan berhasil ditambahkan!'); window.location='menu.php';</script>";
} else {
    echo "Error: " . $conn->error;
}
