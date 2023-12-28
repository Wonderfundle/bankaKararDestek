<?php
include "baglan.php";
// Veritabanından urunler tablosundan veri çek
$sql = "SELECT calisanlar.id, calisanlar.adSoyad, calisanlar.unvanID, calisanlar.sure, calisanlar.maas, calisanlar.calistigiSubeID, calisanlar.hedefYuzde, subeler.adi, unvanlar.unvanAD
FROM calisanlar
LEFT JOIN subeler ON calisanlar.calistigiSubeID = subeler.id
LEFT JOIN unvanlar ON calisanlar.unvanID = unvanlar.unvanID";
$result = $conn->query($sql);

// Veritabanı sorgusundan gelen verileri kullanarak tabloyu oluştur
$table = '<table id="datatablesSimple" class="table table-bordered">
            <thead>
                <tr>
                    <th>Çalışan ID</th>
                    <th>Ad Soyad</th>
                    <th>Unvan Adı</th>
                    <th>İşe Girdiği Tarih</th>
                    <th>Maaş</th>
                    <th>Çalıştığı Şube Adı</th>
                    <th>Ortalama Hedef Yüzdesi</th>
                </tr>
            </thead>
            <tbody>';

if ($result->num_rows > 0) {
    // Veritabanından gelen her bir satır için tabloya bir satır ekleyin
    while ($row = $result->fetch_assoc()) {
        $table .= '<tr>
                      <td>' . $row['id'] . '</td>
                      <td>' . $row['adSoyad'] . '</td>
                      <td>' . $row['unvanAD'] . '</td>
                      <td>' . $row['sure'] . '</td>
                      <td>' . $row['maas'] . '</td>
                      <td>' . $row['adi'] . '</td>
                      <td>' . $row['hedefYuzde'] . '</td>
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

