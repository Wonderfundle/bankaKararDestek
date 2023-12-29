const router = require('express').Router();
const { login, getMusteriler, getMusteriById, getAltinFiyatlari, getCalisanlar, getcalisanById ,getSubeHacmi, getSubeler} = require('../controllers/controller.js');

router.post('/login', login);
router.get('/musteriler', getMusteriler);
router.get('/musteri/:id', getMusteriById);
router.get('/altin-fiyatlari', getAltinFiyatlari);
router.get('/calisanlar', getCalisanlar);
router.get('/calisan/:id', getcalisanById);
router.get('/subehacmi/:subeID', getSubeHacmi);
router.get('/subeler', getSubeler);
//router.get('/altin-fiyatlari/:vadeSuresi', getAltinFiyatlari); // Yeni eklenen satır

module.exports = router;
