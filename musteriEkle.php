<?php
// baglan.php dosyasını ekleyin
include('baglan.php');

// POST verilerini al
$adSoyad = $_POST['adSoyad'];
$tarih = $_POST['tarih'];
$gelir = $_POST['gelir'];
$para = $_POST['para'];
$krediSkoru = $_POST['krediSkoru'];
$varlikSayisi = $_POST['varlikSayisi'];
$subeID = $_POST['subeID'];

// Veritabanına ekleme işlemini gerçekleştir
$query = "INSERT INTO musteriler (adSoyad, tarih, gelir, para, krediSkoru, varlikSayisi, subeID) VALUES ('$adSoyad', '$tarih', '$gelir', '$para', '$krediSkoru', '$varlikSayisi', '$subeID')";
$result = mysqli_query($conn, $query);

// Ekleme işleminin başarı durumunu kontrol et
if ($result) {
    echo "Müşteri başarıyla eklendi.";
} else {
    echo "Müşteri eklenirken bir hata oluştu: " . mysqli_error($conn);
}

// Bağlantıyı kapat
mysqli_close($conn);
?>