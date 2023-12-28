<?php
include "baglan.php";
// Veritabanından urunler tablosundan veri çek
$sql = "SELECT id,adSoyad,tarih,gelir,para,krediSkoru,varlikSayisi,subeID FROM musteriler";
$result = $conn->query($sql);

// Veritabanı sorgusundan gelen verileri kullanarak tabloyu oluştur
$table = '<table id="datatablesSimple" class="table table-bordered">
            <thead>
                <tr>
                    <th>Müşteri ID</th>
                    <th>Ad Soyad</th>
                    <th>Tarih</th>
                    <th>Gelir</th>
                    <th>Para</th>
                    <th>KrediSkoru</th>
                    <th>Varlık Sayısı</th>
                    <th>Şube ID</th>
                </tr>
            </thead>
            <tbody>';

if ($result->num_rows > 0) {
    // Veritabanından gelen her bir satır için tabloya bir satır ekleyin
    while ($row = $result->fetch_assoc()) {
        $table .= '<tr>
                      <td>' . $row['id'] . '</td>
                      <td>' . $row['adSoyad'] . '</td>
                      <td>' . $row['tarih'] . '</td>
                      <td>' . $row['gelir'] . '</td>
                      <td>' . $row['para'] . '</td>
                      <td>' . $row['krediSkoru'] . '</td>
                      <td>' . $row['varlikSayisi'] . '</td>
                      <td>' . $row['subeID'] . '</td>
                   </tr>';
    }
} else {
    $table .= '<tr><td colspan="5">Tabloda hiç veri yok.</td></tr>';
}

$table .= '</tbody>
           </table>';

// Veritabanı bağlantısını kapat
$conn->close();

// Oluşturulan tabloyu döndür
?>

