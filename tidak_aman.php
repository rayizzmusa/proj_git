<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "namadatabase"; // Ganti nama database

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$query = "SELECT * FROM pasien WHERE nama = '$nama'";
$result = $conn->query($query);

echo "<h3>[Tidak Aman] Hasil Query:</h3>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nama: " . $row['nama'] . "<br>Alamat: " . $row['alamat'] . "<br><hr>";
    }
} else {
    echo "Tidak ditemukan.";
}
