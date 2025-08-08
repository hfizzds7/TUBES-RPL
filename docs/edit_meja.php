<?php
include '../conn.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM meja WHERE id_meja = $id"));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomor = $_POST['nomor_meja'];
    $status = $_POST['status_meja'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("UPDATE meja SET nomor_meja = ?, status_meja = ? WHERE id_meja = ?");
    $stmt->bind_param("isi", $nomor, $status, $id);
    $stmt->execute();
    $stmt->close();
    
    header('Location: daftar-meja.php');
    exit;
}
?>

<form method="POST">
    <label>Nomor Meja:</label><br>
    <input type="text" name="nomor_meja" value="<?= htmlspecialchars($data['nomor_meja']) ?>" required><br>
    
    <label>Status Meja:</label><br>
    <select name="status_meja">
        <option value="Kosong" <?= ($data['status_meja'] == 'Kosong') ? 'selected' : '' ?>>Kosong</option>
        <option value="Ditempati" <?= ($data['status_meja'] == 'Ditempati') ? 'selected' : '' ?>>Ditempati</option>
        <option value="Menunggu Bayar" <?= ($data['status_meja'] == 'Menunggu Bayar') ? 'selected' : '' ?>>Menunggu Bayar</option>
    </select><br><br>
    
    <button type="submit">Update</button>
</form>