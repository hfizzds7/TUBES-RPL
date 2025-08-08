<?php
include 'conn.php';
session_start();

if (isset($_POST['items']) && is_array($_POST['items'])) {
    foreach ($_POST['items'] as $item) {
        $id_meja = intval($item['tableNumber']);
        $id_menu = intval($item['id_menu']);
        $jumlah = intval($item['quantity']);
        $catatan = $conn->real_escape_string($item['notes']);
        $waktu_pesan = date('Y-m-d H:i:s');
        $status = 'masuk';

        $sql = "INSERT INTO pesanan (id_meja, id_menu, jumlah, catatan, waktu_pesan, status_pesanan)
                VALUES ('$id_meja', '$id_menu', '$jumlah', '$catatan', '$waktu_pesan', '$status')";
        $conn->query($sql);
    }

    // Hapus cart setelah pesanan dibuat
    echo "<script>
        localStorage.removeItem('cart');
        window.location.href = 'admin/pesanan-masuk.php';
    </script>";
} else {
    echo "Tidak ada pesanan yang dikirim.";
}
?>
