<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "dbpuskes"; 

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>