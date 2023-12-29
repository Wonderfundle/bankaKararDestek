<?php
include("baglan.php");

// Ürünleri ve toplam miktarları çek
$sql = "SELECT urunler.ad, COALESCE(SUM(kullanilanurunler.miktar), 0) as toplamMiktar
        FROM urunler
        LEFT JOIN kullanilanurunler ON urunler.id = kullanilanurunler.urun_id
        GROUP BY urunler.id, urunler.ad";
$result = $conn->query($sql);

// Verileri JSON formatına çevir
$urunHacimleri = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $urunHacimleri[] = $row;
    }
}

// Sadece JSON çıktısı döndür
header('Content-Type: application/json');
echo json_encode($urunHacimleri);

// Veritabanı bağlantısını kapat
$conn->close();
?>