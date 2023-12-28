const router = require('express').Router();
const { login, getMusteriler, getMusteriById, getAltinFiyatlari } = require('../controllers/controller.js');

router.post("/login", login);
router.get('/musteriler', getMusteriler);
router.get('/musteri/:id', getMusteriById);
router.get('/altin-fiyatlari', getAltinFiyatlari);
//router.get('/altin-fiyatlari/:vadeSuresi', getAltinFiyatlari); // Yeni eklenen satır

module.exports = router;
