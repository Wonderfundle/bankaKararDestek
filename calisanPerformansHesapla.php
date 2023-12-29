<head>


  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>GİGABANK</title>
  <link href="css/styles.css" rel="stylesheet" />
  <!-- progressbar.js -->
<link rel="stylesheet" href="https://cdn.rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/css/progressbar.css">
<script src="https://cdn.rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js"></script>

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
  <style>
    #puanDiv {
  display: none; /* Başlangıçta gizli yapılır */
}
  #progressbarContainer {
  margin: 0 auto; /* Ortalamak için */
  display: table; /* Dikey hizalamak için */
}
 /* Renk sınıfları eklendi */
 .progress-bar-yellow {
            background-color: #FFD700 !important;
        }

        .progress-bar-red {
            background-color: #FF0000 !important;
        }

        .progress-bar-green {
            background-color: #008000 !important;
        }
        #progressbarContainer {
  width: 200px; /* Örnek bir genişlik değeri */
  height: 200px; /* Örnek bir yükseklik değeri */
  position: relative;
}
  </style>
  <?php
include("baglan.php");
$queryCalisanlar = "SELECT id, adSoyad,unvanID,sure,hedefYuzde FROM calisanlar";
$resultCalisanlar = mysqli_query($conn, $queryCalisanlar);
?>
</head>

<body class="sb-nav-fixed">
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
                        <h3 class="card-title">Çalışan Performansı Hesapla</h3>
                    </div>

                    <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <div class="form-group row">
                        <label for="adSoyad" class="col-sm-2 col-form-label">Ad Soyad</label>
            <div class="col-sm-10">
                <select class="form-control" id="adSoyad" name="adSoyad">
                    <?php
                    // Şubeleri option elemanlarına doldur
                    while ($rowCalisan = mysqli_fetch_assoc($resultCalisanlar)) {
                        echo '<option value="' . $rowCalisan['id'] . '">' . $rowCalisan['adSoyad'] . '</option>';
                    }
                    ?>
                </select>
            </div>
                        </div>
                      </div>
                    </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="sure" class="col-sm-2 col-form-label">Çalışmaya Başladığı Tarih</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="sure" name="sure">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label>Çalıştığı Unvan Adı</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="unvanID">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label>Maaş</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="maas">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label>Ortalama Hedef Yüzdesi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="hedefYuzde">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
  <div class="col">
    <div class="form-group row">
      <label>Performans Göstergesi</label>
      <div class="col-sm-5">
        <!-- Yuvarlak İlerleme Çubuğu -->
        <div id="progressbarContainer"></div>
      </div>
    </div>
  </div>
</div>
                    </div>
                    </div>
                    <button type="button" onclick="calisanPerformansHesapla()" id="Hesapla" class="btn btn-primary mx-auto col-3 my-1">
                        Hesapla
                    </button>
                    <div class="row">
  <div class="col" id="puanDiv">
    <div class="form-group row">
      <label>Toplam Puanı</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="toplamPuan">
      </div>
    </div>
  </div>
</div>
<div class="col" id="puanDiv">
    <div  class="form-group row">
      <label>Toplam Puanı</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="toplamPuanIndicator">
      </div>
    </div>
  </div>
</div>


                </div>
            </section>
        </div>
    </main>
    
<script>
        // adSoyad seçildiğinde bu fonksiyon çalışacak
        function adSoyadDegisti() {
          // Seçilen çalışanın ID'sini al
          var calisanID = document.getElementById("adSoyad").value;

          // AJAX ile veri gönderme
          $.ajax({
            type: "POST",
            url: "getCalisanBilgileri.php",  // Bu dosya çalışan bilgilerini getirecek
            data: { calisanID: calisanID },
            success: function (response) {
              // Gelen veriyi işleme
              var bilgiler = JSON.parse(response);
              // Form elemanlarına bilgileri yerleştirme
              document.getElementById("unvanID").value = bilgiler.unvanID;
              document.getElementById("sure").value = bilgiler.sure;
              document.getElementById("maas").value = bilgiler.maas;
              document.getElementById("hedefYuzde").value = bilgiler.hedefYuzde;
              // Hesaplamaları yap
              hesaplamalariYap(bilgiler);
            }
          });
        }

        // Hesaplamaları yapacak fonksiyon
        function hesaplamalariYap(bilgiler) {
            var toplamPuan = 0;

            // Unvan ID'ye göre puan ekleme
            switch (parseInt(bilgiler.unvanID)) {
                case 1:
                    toplamPuan += 1;
                    break;
                case 2:
                    toplamPuan += 2;
                    break;
                case 3:
                    toplamPuan += 3;
                    break;
                case 4:
                    toplamPuan += 4;
                    break;
            }

            // Maaşa göre puan ekleme
            if (bilgiler.maas < 20000) {
                toplamPuan += 3;
            } else {
                toplamPuan += 1;
            }

            // Hedef yüzdesine göre puan ekleme
            if (bilgiler.hedefYuzde >= 60 && bilgiler.hedefYuzde < 70) {
                toplamPuan += 1;
            } else if (bilgiler.hedefYuzde >= 70 && bilgiler.hedefYuzde < 80) {
                toplamPuan += 2;
            } else if (bilgiler.hedefYuzde >= 80 && bilgiler.hedefYuzde < 90) {
                toplamPuan += 4;
            } else if (bilgiler.hedefYuzde >= 90 && bilgiler.hedefYuzde <= 100) {
                toplamPuan += 8;
            } else if (bilgiler.hedefYuzde < 60) {
                toplamPuan -= 5;
            }

            // Toplam puanı bir değişkene ata
            return toplamPuan;
        }


        // adSoyad değiştiğinde adSoyadDegisti fonksiyonunu çağır
        document.getElementById("adSoyad").addEventListener("change", adSoyadDegisti);

        // Sayfa yüklendiğinde de hesaplamaları yap
        var bar;

document.addEventListener("DOMContentLoaded", function () {
  // Initialize the progress bar when the page is loaded
  bar = new ProgressBar.Circle('#progressbarContainer', {
    color: '#4CAF50', // İlerleme çubuğu rengi (örnek: yeşil)
    strokeWidth: 6, // İlerleme çubuğu kalınlığı
    trailWidth: 1, // İz kalınlığı (görsel geride kalan kısım)
    duration: 2000, // Animasyon süresi (ms)
    text: {
      value: '0', // Gösterge metni başlangıç değeri
      className: 'progressbar-text' // Gösterge metni için CSS sınıfı
    },
    step: function (state, bar) {
      bar.setText(Math.round(bar.value() * 100)); // İlerleme yüzdesini göster
    }
  });
});

// Hesapla butonuna tıklandığında
    function calisanPerformansHesapla() {
  // Reset the progress bar before each calculation
  bar.destroy();
  bar = new ProgressBar.Circle('#progressbarContainer', {
    color: '#4CAF50',
    strokeWidth: 6,
    trailWidth: 1,
    duration: 2000,
    text: {
      value: '0',
      className: 'progressbar-text'
    },
    step: function (state, bar) {
      bar.setText(Math.round(bar.value() * 100));
    }
  });
  var sure = document.getElementById("sure").value;
  var unvanID = document.getElementById("unvanID").value;
  var maas = parseFloat(document.getElementById("maas").value);
  var hedefYuzde = parseFloat(document.getElementById("hedefYuzde").value);

  // Hesaplamaları yap
  var toplamPuan = hesaplamalariYap({ sure: sure, unvanID: unvanID, maas: maas, hedefYuzde: hedefYuzde });

  // Toplam puanı bir değişkene ata
  document.getElementById("toplamPuan").value = toplamPuan;

  // Yuvarlak ilerleme çubuğunu güncelle
  bar.animate(toplamPuan / 15); // Yüzde cinsinden değer bekler

  // Renk sınıflarını uygula
  if (toplamPuan <= 5) {
    bar.path.setAttribute('class', 'progress-bar progress-bar-red');
  } else if (toplamPuan <= 11) {
    bar.path.setAttribute('class', 'progress-bar progress-bar-yellow');
  } else {
    bar.path.setAttribute('class', 'progress-bar progress-bar-green');
  }
}

// Hesaplamaları yapacak fonksiyon
function hesaplamalariYap(bilgiler) {
  var toplamPuan = 0;

  // Unvan ID'ye göre puan ekleme
  switch (parseInt(bilgiler.unvanID)) {
    case 1:
      toplamPuan += 1;
      break;
    case 2:
      toplamPuan += 2;
      break;
    case 3:
      toplamPuan += 3;
      break;
    case 4:
      toplamPuan += 4;
      break;
  }

  // Maaşa göre puan ekleme
  if (bilgiler.maas < 20000) {
    toplamPuan += 3;
  } else {
    toplamPuan += 1;
  }

  // Hedef yüzdesine göre puan ekleme
  if (bilgiler.hedefYuzde >= 60 && bilgiler.hedefYuzde < 70) {
    toplamPuan += 1;
  } else if (bilgiler.hedefYuzde >= 70 && bilgiler.hedefYuzde < 80) {
    toplamPuan += 2;
  } else if (bilgiler.hedefYuzde >= 80 && bilgiler.hedefYuzde < 90) {
    toplamPuan += 4;
  } else if (bilgiler.hedefYuzde >= 90 && bilgiler.hedefYuzde <= 100) {
    toplamPuan += 8;
  } else if (bilgiler.hedefYuzde < 60) {
    toplamPuan -= 5;
  }

  // Toplam puanı bir değişkene ata
  return toplamPuan;
}
</script>
   

    </div>
  </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>
