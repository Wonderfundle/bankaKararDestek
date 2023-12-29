<?php
include("baglan.php");

// Şubeleri ve toplam hacimleri çek
$sql = "SELECT subeler.id, subeler.adi, COALESCE(SUM(subehacmi.hacim), 0) as toplamHacim
        FROM subeler
        LEFT JOIN subehacmi ON subeler.id = subehacmi.subeID
        GROUP BY subeler.id, subeler.adi";

$result = $conn->query($sql);

// Verileri JSON formatına çevir
$subeHacimleri = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $subeHacimleri[] = $row;
    }
}

// Sadece JSON çıktısı döndür
header('Content-Type: application/json');
echo json_encode($subeHacimleri);

// Veritabanı bağlantısını kapat
$conn->close();
?>
