const dbConn = require('../db/mysql_connect.js');
const Response = require("../utils/response");
const login = async (req, res) => {

  const kullanici_adi = req.body.kullanici_adi;
  const sifre = req.body.sifre;
  dbConn.query("SELECT * FROM yoneticiler WHERE k_adi=?", [kullanici_adi], (error, results) => {
    if (results.length > 0) {
      if (sifre == results[0].sifre) {
        return new Response(results).basarili_giris(res);
      } else {
        return res.status(203).json({
          success: false,
          message: "Kullanıcı veya Şifre Uyumsuz"
        });
      }
    } else {
      return res.status(203).json({
        success: false,
        message: "Kullanıcı Girişi Başarısız"
      });
    }
  });

  
  console.log(req.body);
};


const getSubeler = (req, res) => {
  const query = 'SELECT * FROM subeler';

  dbConn.query(query, (error, results) => {
    if (error) {
      console.error('Error executing MySQL query:', error);
      res.status(500).json({ error: 'Internal Server Error' });
      return;
    }

    res.json(results);
  });
};

const getAltinFiyatlari = async (req, res) => {
  try {
    
    const [rows] = await dbConn.promise().query('SELECT altinfiyati FROM altinfiyatlari');

    if (rows && rows.length > 0) {
      // Sadece null olmayan fiyatları al
      const altinFiyatlari = rows
        .map(row => row.altinfiyati)
        .filter(fiyat => fiyat !== null);

      if (altinFiyatlari.length > 0) {
        return res.json({ success: true, altinFiyati: altinFiyatlari });
      } else {
        return res.status(203).json({
          success: false,
          message: 'Tüm altın fiyatları null',
        });
      }
    } else {
      return res.status(203).json({
        success: false,
        message: 'Altın fiyatları bulunamadı',
      });
    }
  } catch (error) {
    console.error('Altın fiyatlarını çekerken bir hata oluştu:', error);
    return res.status(500).json({
      success: false,
      message: 'Altın fiyatları çekilemedi',
    });
  }
};

const getMusteriler = async (req, res) => {
  try {
    const result = await dbConn.promise().query('SELECT id, adSoyad, para FROM musteriler');

    if (result[0].length > 0) {
      const musteriVerileri = result[0];
      return res.json(musteriVerileri);
    } else {
      return res.status(203).json({
        success: false,
        message: 'Müşteri bulunamadı',
      });
    }
  } catch (error) {
    console.error('Müşteri verilerini çekerken bir hata oluştu:', error);
    return res.status(500).json({
      success: false,
      message: 'Müşteri verileri çekilemedi',
    });
  }
};
const getMusteriById = async (req, res) => {
  try {
    const musteriId = req.params.id; // URL'den müşteri ID'sini al

    const result = await dbConn.promise().query('SELECT id, adSoyad, para FROM musteriler WHERE id = ?', [musteriId]);

    if (result[0].length > 0) {
      const musteriBilgisi = result[0][0];
      return res.json(musteriBilgisi);
    } else {
      return res.status(203).json({
        success: false,
        message: 'Müşteri bulunamadı',
      });
    }
  } catch (error) {
    console.error('Müşteri bilgilerini çekerken bir hata oluştu:', error);
    return res.status(500).json({
      success: false,
      message: 'Müşteri bilgileri çekilemedi',
    });
  }
};
const getCalisanlar = async (req, res) => {
  try {
    const result = await dbConn.promise().query('SELECT id,adSoyad FROM calisanlar');
    if (result[0].length > 0) {
      const calisanVerileri = result[0];
      return res.json(calisanVerileri);
    } else {
      return res.status(203).json({
        success: false,
        message: 'Çalışan bulunamadı',
      });
    }
  } catch (error) {
    console.error('Çalışan verilerini çekerken bir hata oluştu:', error);
    return res.status(500).json({
      success: false,
      message: 'Çalışan verileri çekilemedi',
    });
  }
};
const getSubeHacmi = async (req, res) => {
  try {
    const subeID = req.params.subeID.split('=')[1];  
    // Ardından sorgunuzu düzenleyin
    const query = 'SELECT subeID, hacim FROM subehacmi WHERE subeID = ?';
    const result = await dbConn.promise().query(query, [subeID]);

if (result.length > 0) {
  const subeHacmiData = result[0];
  return res.json(subeHacmiData);
} else {
  return res.status(203).json({
    success: false,
    message: 'Şube hacmi verisi bulunamadı',
  });
}
    
  } catch (error) {
    console.error('Şube hacmi verisini çekerken bir hata oluştu:', error);
    return res.status(500).json({
      success: false,
      message: 'Şube hacmi verisi çekilemedi',
    });
  }
};
const getcalisanById = async (req, res) => {
  try {
    const calisanId = req.params.id; // Correct variable name

    const result = await dbConn.promise().query('SELECT id, adSoyad, unvanID, sure, maas, calistigiSubeID, hedefYuzde FROM calisanlar WHERE id = ?', [calisanId]);

    if (result[0].length > 0) {
      const calisanBilgisi = result[0][0];
      return res.json(calisanBilgisi);
    } else {
      return res.status(203).json({
        success: false,
        message: 'Çalışan bulunamadı',
      });
    }
  } catch (error) {
    console.error('Çalışan bilgilerini çekerken bir hata oluştu:', error);
    return res.status(500).json({
      success: false,
      message: 'Çalışan bilgileri çekilemedi',
    });
  }
};
module.exports = { login, getMusteriler, getMusteriById,getAltinFiyatlari, getCalisanlar, getcalisanById,getSubeHacmi,getSubeler};
