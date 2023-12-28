<?php
include "baglan.php";
// Veritabanından urunler tablosundan veri çek
$sql = "SELECT id, adi FROM subeler";
$result = $conn->query($sql);

// Veritabanı sorgusundan gelen verileri kullanarak tabloyu oluştur
$table = '<table id="datatablesSimple" class="table table-bordered">
            <thead>
                <tr>
                    <th>Şube ID</th>
                    <th>Şube Adı</th>
                </tr>
            </thead>
            <tbody>';

if ($result->num_rows > 0) {
    // Veritabanından gelen her bir satır için tabloya bir satır ekleyin
    while ($row = $result->fetch_assoc()) {
        $table .= '<tr>
                      <td>' . $row['id'] . '</td>
                      <td>' . $row['adi'] . '</td>
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

