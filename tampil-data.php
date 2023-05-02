<?php
$host = "localhost";
$user = "root";
$password = ""; // kalau kosong pakai ""
$dbs = "mahasiswa";
$conn = new mysqli($host, $user, $password, $dbs);
if ($conn->connect_error) {
    die("No Connection to Database");
}

$sql = "SELECT * FROM data_diri";
if ($conn->query($sql)) {
    $hasil = $conn->query($sql);

    if($hasil->num_rows > 0) {

        while($row = $hasil->fetch_assoc()) {
            echo $row['nim']." ".$row['nama']." ".$row['jenis_kelamin']." ".$row['tempat_lahir']." ".$row['tanggal_lahir']." ".$row['alamat'];
            echo "<br>";
        }
    }
} else {
    echo "perintah gagal dijalankan";
}