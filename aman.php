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
$stmt = $conn->prepare("SELECT * FROM pasien WHERE nama = ?");
$stmt->bind_param("s", $nama);
$stmt->execute();
$result = $stmt->get_result();

echo "<h3>[Aman] Hasil Query:</h3>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nama: " . $row['nama'] . "<br>Alamat: " . $row['alamat'] . "<br><hr>";
    }
} else {
    echo "Tidak ditemukan.";
}
$stmt->close();
