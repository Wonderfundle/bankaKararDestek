<?php
include("baglan.php");
// Çalışan verilerini çek
$sql = "SELECT unvanID, COUNT(*) as calisanSayisi FROM calisanlar GROUP BY unvanID";
$result = $conn->query($sql);

// Verileri JSON formatına çevir
$calisanlar = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $calisanlar[] = $row;
    }
}

echo json_encode($calisanlar);

// Veritabanı bağlantısını kapat
$conn->close();
?>
