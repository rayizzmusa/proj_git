<!DOCTYPE html>
<html>

<head>
    <title>Uji SQL Injection</title>
</head>

<body>
    <h2>Uji Pencarian Pasien</h2>
    <form method="POST" action="">
        <label for="nama">Nama Pasien:</label>
        <input type="text" name="nama" id="nama" required>
        <br><br>
        <button type="submit" name="tes" value="tidak_aman">Tes Tidak Aman</button>
        <button type="submit" name="tes" value="aman">Tes Aman</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_POST['tes'] === 'tidak_aman') {
            include 'tidak_aman.php';
        } elseif ($_POST['tes'] === 'aman') {
            include 'aman.php';
        }
    }
    ?>
</body>

</html>