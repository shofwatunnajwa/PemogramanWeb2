<?php
// Koneksi langsung ke database di awal file ini (tanpa include dbkoneksi.php)
$host = 'localhost';
$db = 'dbpuskes';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $dbh = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
    exit;
}

// Ambil data pasien beserta nama kelurahan
$query = "SELECT p.*, k.nama_kelurahan 
          FROM pasien p 
          LEFT JOIN klurahan k ON p.klurahan_id = k.id";
$stmt = $dbh->query($query);
$pasien = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Data Pasien</h2>
    <a href="form_pasien.php" class="btn btn-primary mb-3">Tambah Pasien</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Gender</th>
                <th>Kelurahan</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pasien as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row->kode); ?></td>
                <td><?= htmlspecialchars($row->nama); ?></td>
                <td><?= htmlspecialchars($row->tmp_lahir); ?></td>
                <td><?= htmlspecialchars($row->tgl_lahir); ?></td>
                <td><?= htmlspecialchars($row->gender); ?></td>
                <td><?= htmlspecialchars($row->nama_kelurahan); ?></td>
                <td><?= htmlspecialchars($row->email); ?></td>
                <td><?= htmlspecialchars($row->alamat); ?></td>
                <td>
                    <a href="form_pasien.php?id=<?= $row->id; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="proses_pasien.php?delete&id=<?= $row->id; ?>" 
                       class="btn btn-danger btn-sm" 
                       onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php if (empty($pasien)): ?>
            <tr><td colspan="9" class="text-center">Tidak ada data pasien</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>