<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bankaKararDestek";
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı hatası kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

?>