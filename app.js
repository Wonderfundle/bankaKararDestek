const express = require('express')
const dbConn = require('./db/mysql_connect.js')
const session = require('express-session');
const cors = require('cors');
const router=require("./routers")
const app = express()
//const Response = require("utils/response.js");

//Require = Import in Python
app.get('/', function (req, res) {
  res.send('Hello World')
})

app.get('/login', function (req, res) {
  console.log('Gelen Veri:', req.body)
  res.send('app sayfası')
})
app.use((req, res, next) => {
  res.header('Access-Control-Allow-Origin', '*');
  res.header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');
  res.header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
  res.header('Access-Control-Allow-Credentials', true);
  next();
});

  app.post('/api/logout', (req, res) => {
    // Oturumu sonlandır
    req.session.destroy((err) => {
      if (err) {
        console.error(err);
        res.status(500).json({ success: false, message: 'Çıkış yapılamadı' });
      } else {
        res.json({ success: true, message: 'Çıkış yapıldı' });
      }
    });
  });
  app.get('/musteriler', async (req, res) => {
    try {
        const result = await dbConn.promise().query("SELECT id, adSoyad, tarih, gelir, para, krediSkoru, varlikSayisi FROM musteriler");
        
        if (result[0].length > 0) {
            return res.json(new Response(result[0]).basarili_giris(res));
        } else {
            return res.status(203).json({
                success: false,
                message: "Müşteri bulunamadı"
            });
        }
    } catch (error) {
        console.error("Müşteri verilerini çekerken bir hata oluştu:", error);
        return res.status(500).json({
            success: false,
            message: "Müşteri verileri çekilemedi"
        });
    }
});
app.use('/api', router);
app.get('/calisanlar', async (req, res) => {
  try {
    const result = await dbConn.promise().query("SELECT id, adSoyad, unvanID, sure, maas, calistigiSubeID, hedefYuzde FROM calisanlar");

    if (result[0].length > 0) {
      return res.json({
        success: true,
        data: result[0], // Verileri direkt olarak gönder
      });
    } else {
      return res.status(203).json({
        success: false,
        message: "Çalışan bulunamadı"
      });
    }
  } catch (error) {
    console.error("Çalışan verilerini çekerken bir hata oluştu:", error);
    return res.status(500).json({
      success: false,
      message: "Çalışan verileri çekilemedi"
    });
  }
});


app.use(cors());
app.use(express.json())
app.use(express.json({limit:'50mb'}))
app.use(express.json({limit:'50mb',extended:true,parameterLimit:50000}))
app.use('/api',router)
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Sunucu ${PORT} portunda çalışıyor.`);
});