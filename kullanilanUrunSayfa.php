<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>GİGABANK</title>
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css"  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

</head>

<body class="sb-nav-fixed">
<?php include 'calisanTablo.php' ?>
  <nav class="sb-topnav navbar navbar-expand navbar-warning bg-success">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">GİGABANK</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
      <i class="fas fa-bars"></i>
    </button>
    <!-- Navbar Search-->
    <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></div>
    <!-- Navbar-->

    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <!--  <li><a class="dropdown-item" href="#!">Settings</a></li>-->
          <!-- <li><a class="dropdown-item" href="#!">Activity Log</a></li>-->
          <li class="dropdown-header">
            Sistem Yöneticisi
          </li>
          <li><a class="dropdown-item" id="cikisYap">Çıkış Yap</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
  <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <a class="nav-link" href="index.html">
              <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt" style="color:blue"></i>
              </div>
              Gösterge Paneli
            </a>
            <a class="nav-link" href="kullanilanUrunSayfa.php">
              <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
              </div>
              Ürün Kullanımı Ekle
            </a>
            <a class="nav-link" href="subeParaYonet.html">
              <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
              </div>
              Şube Parası Yönet
            </a>
            <a class="nav-link" href="calisanPerformansHesapla.php">
              <div class="sb-nav-link-icon">
                <i class="fas fa-dolly"></i>
              </div>
              Çalışan Performansı Hesapla
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
          <!--    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link" href="depo1.php">
                  <div class="sb-nav-link-icon"><i class="fa fa-align-left"></i></div>
                  Depo 1
                </a>
                <a class="nav-link" href="depo2.php">
                  <div class="sb-nav-link-icon"><i class="fa fa-align-left"></i></div>
                  Depo 2
                </a>
                <a class="nav-link" href="depo3.php">
                  <div class="sb-nav-link-icon"><i class="fa fa-align-left"></i></div>
                  Depo 3
                </a>

              </nav>-->
            </div>
            <div class="sb-sidenav-menu-heading">Müşteri İşlemleri</div>
            <a class="nav-link" href="musteriFaizHesapla.html">
              <div class="sb-nav-link-icon">
                <i class="fa fa-pen"></i>
              </div>
              Müşteri Faiz Oranı Hesapla
            </a>
            <a class="nav-link" href="musteriAltinGeliriHesapla.html">
              <div class="sb-nav-link-icon">
                <i class="fa fa-boxes-packing"></i>
              </div>
             Müşteri Altın Geliri Hesapla
            </a>        
            <div class="sb-sidenav-menu-heading">Çalışan İşlemleri</div>
            <a class="nav-link" href="calisanVerimlilikHesapla.html">
              <div class="sb-nav-link-icon">
                <i class="fa fa-align-left"></i>
              </div>
              Çalışan Verimlilik Hesapla
            </a>
            <a class="nav-link" href="calisanPrimHesapla.html">
              <div class="sb-nav-link-icon">
                <i class="fa fa-truck-field"></i>
              </div>
              Çalışan Prim Hesapla
            </a>
           <div class="sb-sidenav-menu-heading">Listeleme İşlemleri</div>
           <a class="nav-link" href="calisanListele.php">
            <div class="sb-nav-link-icon">
              <i class="fa fa-truck-field"></i>
            </div>
            Çalışan Listele
          </a>
          <a class="nav-link" href="musteriListele.php">
            <div class="sb-nav-link-icon">
              <i class="fa fa-truck-field"></i>
            </div>
            Müşteri Listele
          </a>
            <a class="nav-link" href="subeListele.php">
              <div class="sb-nav-link-icon">
                <i class="fa fa-truck-field"></i>
              </div>
             Şubeleri Listele
            </a>
            <a class="nav-link" href="yoneticiListele.php">
              <div class="sb-nav-link-icon">
                <i class="fa fa-truck-field"></i>
              </div>
              Yöneticileri Listele
            </a>
          
          <div class="sb-sidenav-menu-heading">Listeleme İşlemleri</div>
          <a class="nav-link" href="musteriEkleSayfa.php">
            <div class="sb-nav-link-icon">
              <i class="fa fa-truck-field"></i>
            </div>
           Müşteri Ekle
          </a>
          <a class="nav-link" href="calisanEkleSayfa.php">
            <div class="sb-nav-link-icon">
              <i class="fa fa-truck-field"></i>
            </div>
            Çalışan Ekle
          </a>
        </div>
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
    <main>
            <div class="container">
              <section class="content">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Ürün Kullanımı Düzenleme</h3>
                  </div>
    
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <div class="form-group row">
                          <label>Ürün Adı</label>
                          <div class="col-sm-10">
                            <select class="form-control" id="urunSec" required>
                                <option value="" disabled selected>Ürün Seçin</option>
                                <?php
include 'baglan.php';

// Kategorileri sorgula
$sql = "SELECT id, ad FROM urunler";
$result = $conn->query($sql);

// Kategorileri <option> elemanları olarak döngü ile oluştur
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . htmlspecialchars($row["id"]) . '">' . htmlspecialchars($row["ad"]) . '</option>';
    }
} else {
    echo '<option value="">Veritabanında ürün bulunamadı.</option>';
}

// Veritabanı bağlantısını kapat
$conn->close();
?>                 
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group row">
                          <label>Kullanan Müşteri</label>
                          <div class="col-sm-10">
                            <select class="form-control" id="musteriSec" required>
                                <option value="" disabled selected>Müşteri Seçin</option>
                                <?php
include 'baglan.php';

// Kategorileri sorgula
$sql = "SELECT id, adSoyad FROM musteriler";
$result = $conn->query($sql);

// Kategorileri <option> elemanları olarak döngü ile oluştur
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . htmlspecialchars($row["id"]) . '">' . htmlspecialchars($row["adSoyad"]) . '</option>';
    }
} else {
    echo '<option value="">Veritabanında ürün bulunamadı.</option>';
}

// Veritabanı bağlantısını kapat
$conn->close();
?>                                
                              </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group row">
                          <label>Kullanılan Şube</label>
                          <div class="col-sm-10">
                          <select class="form-control" id="subeSec" required>
                                <option value="" disabled selected>Şube Seçin</option>
                                <?php
include 'baglan.php';

// Kategorileri sorgula
$sql = "SELECT id, adi FROM subeler";
$result = $conn->query($sql);

// Kategorileri <option> elemanları olarak döngü ile oluştur
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . htmlspecialchars($row["id"]) . '">' . htmlspecialchars($row["adi"]) . '</option>';
    }
} else {
    echo '<option value="">Veritabanında ürün bulunamadı.</option>';
}

// Veritabanı bağlantısını kapat
$conn->close();
?>                                
                              </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col">
                        <div class="form-group row">
                          <label>Miktar</label>
                          <div class="col-sm-10">
                            <input type="text" placeholder="Müşteri Seçilmedi" class="form-control" id="miktar">
                          </div>
                        </div>
                      </div>                       
                  </div>
                  <button type="button" onclick="kullanilanUrunEkle()" class="btn btn-primary mx-auto col-3 my-1">
                    Ürün Kullanımı Ekle
                  </button>
                

                </main>
  </div>
  </div>
  <script>
    function kullanilanUrunEkle() {
        var urun_id = document.getElementById('urunSec').value;
        var musteri_id = document.getElementById('musteriSec').value;
        var sube_id = document.getElementById('subeSec').value;
        var miktar = document.getElementById('miktar').value;

        if (urun_id === "" || musteri_id === "" || sube_id === "" || miktar === "") {
            alert("Lütfen tüm alanları doldurun.");
        } else {
            var url = 'kullanilanUrunEkle.php'; // Değiştirmeniz gereken URL
            var params = 'urun_id=' + urun_id + '&musteri_id=' + musteri_id + '&sube_id=' + sube_id + '&miktar=' + miktar;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', url, true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.responseText);
                }
            }

            xhr.send(params);
        }
    }
</script>
    
  <script>
    document.getElementById("cikisYap").addEventListener("click", function() {
        window.location.href = "login.html"; // Sayfa yönlendirme işlemi
    });
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>

</html>