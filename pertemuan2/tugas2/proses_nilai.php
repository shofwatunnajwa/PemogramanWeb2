<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <h1>Data yang Dikirim</h1>
<?php
// Periksa apakah tombol submit sudah diklik
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $nama   = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts    = $_POST['uts'];
    $uas    = $_POST['uas'];
    $tugas  = $_POST['tugas'];

    // Konversi ke float atau integer jika ingin perhitungan
    $uts    = (float) $uts;
    $uas    = (float) $uas;
    $tugas  = (float) $tugas;

    // Contoh perhitungan rata-rata
    $rata   = ($uts + $uas + $tugas) / 3;

    // Tampilkan hasil dalam tampilan Bootstrap (opsional)
    echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>";
    echo "<div class='container mt-4'>";
    echo "<h2>Hasil Nilai Siswa</h2><hr>";
    echo "<p><strong>Nama Lengkap:</strong> $nama</p>";
    echo "<p><strong>Mata Kuliah:</strong> $matkul</p>";
    echo "<p><strong>Nilai UTS:</strong> $uts</p>";
    echo "<p><strong>Nilai UAS:</strong> $uas</p>";
    echo "<p><strong>Nilai Tugas:</strong> $tugas</p>";
    echo "<p><strong>Rata-rata:</strong> $rata</p>";
    echo "</div>";
} else {
    // Jika file ini diakses tanpa melalui form (belum submit)
    echo "<h2>Form belum disubmit!</h2>";
}
?>
</div>

</body>
</html>