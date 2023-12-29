<?php
include("baglan.php");

// AJAX isteği ile gönderilen çalışan ID'sini al
$calisanID = $_POST['calisanID'];

// Çalışan bilgilerini veritabanından al
$query = "SELECT unvanID, sure, maas, hedefYuzde FROM calisanlar WHERE id = $calisanID";
$result = mysqli_query($conn, $query);

// Sonucu JSON formatında döndür
if ($row = mysqli_fetch_assoc($result)) {
    echo json_encode($row);
} else {
    echo json_encode(array('error' => 'Bilgiler bulunamadı.'));
}

mysqli_close($conn);
?>
