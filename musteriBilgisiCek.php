<?php
include("baglan.php");
// Müşteri verilerini çek
$sql = "SELECT id, para FROM musteriler";
$result = $conn->query($sql);

// Verileri JSON formatına çevir
$customers = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $customers[] = $row;
    }
}

// Para aralıklarını tanımla
$paraAraliklari = [
    ['min' => 0, 'max' => 20000],
    ['min' => 20001, 'max' => 30000],
    ['min' => 30001, 'max' => PHP_INT_MAX] // Dilediğiniz ek aralıkları ekleyebilirsiniz
];

// Para aralıklarına göre müşteri sayısını hesapla
$customerCounts = array_fill(0, count($paraAraliklari), 0);
foreach ($customers as $customer) {
    foreach ($paraAraliklari as $key => $aralik) {
        if ($customer['para'] >= $aralik['min'] && $customer['para'] <= $aralik['max']) {
            $customerCounts[$key]++;
            break;
        }
    }
}

echo json_encode($customerCounts);

// Veritabanı bağlantısını kapat
$conn->close();
?>
