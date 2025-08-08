<?php
include '../conn.php'; // koneksi ke database

// Filter
$filter_nomor = $_GET['nomor_meja'] ?? '';
$filter_status = $_GET['status_meja'] ?? '';

// Query ambil data
$query = "SELECT * FROM meja WHERE 1=1";
if (!empty($filter_nomor)) {
    $query .= " AND nomor_meja LIKE '%$filter_nomor%'";
}
if (!empty($filter_status)) {
    $query .= " AND status_meja = '$filter_status'";
}
$query .= " ORDER BY id_meja ASC";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Meja | SajiOne Admin</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- sesuaikan jika perlu -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <i class="fas fa-chair"></i> Dashboard Meja
                <small>Status Ketersediaan</small>
            </h1>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <form method="GET" class="form-inline">
                        <input type="text" name="nomor_meja" class="form-control mr-2" placeholder="Nomor Meja" value="<?= htmlspecialchars($filter_nomor) ?>">
                        <select name="status_meja" class="form-control mr-2">
                            <option value="">Semua Status</option>
                            <option value="Tersedia" <?= $filter_status == 'Tersedia' ? 'selected' : '' ?>>Tersedia</option>
                            <option value="Tidak Tersedia" <?= $filter_status == 'Tidak Tersedia' ? 'selected' : '' ?>>Tidak Tersedia</option>
                        </select>
                        <button type="submit" class="btn btn-warning">Terapkan Filter</button>
                        <a href="daftar-meja.php" class="btn btn-secondary ml-2">Reset</a>
                    </form>
                </div>

                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID Meja</th>
                                <th>Nomor Meja</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (mysqli_num_rows($result) > 0): ?>
                                <?php while ($meja = mysqli_fetch_assoc($result)): ?>
                                    <tr>
                                        <td><?= $meja['id_meja'] ?></td>
                                        <td><?= $meja['nomor_meja'] ?></td>
                                        <td>
                                            <span class="badge badge-<?= $meja['status_meja'] == 'Tersedia' ? 'success' : 'danger' ?>">
                                                <?= $meja['status_meja'] ?>
                                            </span>
                                        </td>
                                        <td>
                                            <a href="edit_meja.php?id=<?= $meja['id_meja'] ?>" class="btn btn-sm btn-info">Edit</a>
                                            <a href="hapus_meja.php?id=<?= $meja['id_meja'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center">Tidak ada data meja</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                    <a href="tambah_meja.php" class="btn btn-primary">+ Tambah Meja</a>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
