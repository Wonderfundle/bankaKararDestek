<?php
// kullanilanurunekle.php

include "baglan.php";

// Veritabanına bağlanma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Veritabanına bağlantı hatası: " . $conn->connect_error);
}

// POST verilerini alma
$urun_id = $_POST['urun_id'];
$musteri_id = $_POST['musteri_id'];
$sube_id = $_POST['sube_id'];
$miktar = $_POST['miktar'];

$sql = "INSERT INTO kullanilanurunler (urun_id, musteri_id, sube_id, miktar) VALUES ('$urun_id', '$musteri_id', '$sube_id', '$miktar')";

// Sorguyu çalıştırma ve sonucu kontrol etme
if ($conn->query($sql) === TRUE) {
    echo "Veri başarıyla eklendi";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapatma
$conn->close();
?>