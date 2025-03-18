<?php
// Memasukkan definisi kelas Lingkaran di sini
class Lingkaran {
    public $jari;
    public const PHI = 3.14;

    public function __construct($jari) {
        $this->jari = $jari;
    }

    public function getLuas() {
        $luas = self::PHI * $this->jari * $this->jari;
        return $luas;
    }

    public function getKeliling() {
        $keliling = 2.0 * self::PHI * $this->jari;
        return $keliling;
    }

    public function cetak() {
        echo "Lingkaran dengan jari-jari " . $this->jari;
        echo "<br>Luas = " . $this->getLuas();
        echo "<br>Keliling = " . $this->getKeliling();
    }
}

// Contoh penggunaan kelas Lingkaran
$jari_jari = 5; // Misalnya jari-jari lingkaran adalah 5
$lingkaran = new Lingkaran($jari_jari); // Membuat objek Lingkaran
$lingkaran->cetak(); // Mencetak informasi lingkaran
?>