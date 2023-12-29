<?php
// baglan.php dosyasını ekleyin
include('baglan.php');

// POST verilerini al
$adSoyad = $_POST['adSoyad'];
$unvanID = $_POST['unvanID'];
$sure = $_POST['sure'];
$maas = $_POST['maas'];
$calistigiSubeID = $_POST['calistigiSubeID'];
$hedefYuzde = $_POST['hedefYuzde'];

// Veritabanına ekleme işlemini gerçekleştir
$query = "INSERT INTO calisanlar (adSoyad, unvanID, sure, maas, calistigiSubeID, hedefYuzde) VALUES ('$adSoyad', '$unvanID', '$sure', '$maas', '$calistigiSubeID', '$hedefYuzde')";
$result = mysqli_query($conn, $query);

// Ekleme işleminin başarı durumunu kontrol et
if ($result) {
    echo "Çalışan başarıyla eklendi.";
} else {
    echo "Çalışan eklenirken bir hata oluştu: " . mysqli_error($conn);
}

// Bağlantıyı kapat
mysqli_close($conn);
?>
