const router=require('express').Router()
const {login,getMusteriler,getMusteriById}=require('../controllers/controller.js')
router.post("/login",login)

router.get('/musteriler', getMusteriler);

router.get('/musteri/:id', getMusteriById);
//post:veri gönderme get:veri alma put:veri güncelleme patch:veri güncelleme delete:veri silme
module.exports=router