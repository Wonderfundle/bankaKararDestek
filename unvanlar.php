<?php
include("baglan.php");
// Unvan verilerini çek
$sql = "SELECT unvanID, unvanAD FROM unvanlar";
$result = $conn->query($sql);

// Verileri JSON formatına çevir
$unvanlar = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $unvanlar[] = $row;
    }
}

echo json_encode($unvanlar);

// Veritabanı bağlantısını kapat
$conn->close();
?>
