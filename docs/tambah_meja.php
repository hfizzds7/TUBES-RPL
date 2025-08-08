<?php
include '../conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomor = $_POST['nomor_meja'];
    $status = $_POST['status_meja'];
    
    // Using a prepared statement for security
    $stmt = $conn->prepare("INSERT INTO meja (nomor_meja, status_meja) VALUES (?, ?)");
    $stmt->bind_param("is", $nomor, $status);
    $stmt->execute();
    $stmt->close();
    
    header('Location: daftar-meja.php');
    exit; // It's a good practice to exit after a header redirect
}
?>

<form method="POST">
    <label>Nomor Meja:</label><br>
    <input type="text" name="nomor_meja" required><br>
    <label>Status Meja:</label><br>
    <select name="status_meja">
        <option value="Kosong">Kosong</option>
        <option value="Ditempati">Ditempati</option>
        <option value="Menunggu Bayar">Menunggu Bayar</option>
    </select><br><br>
    <button type="submit">Simpan</button>
</form>