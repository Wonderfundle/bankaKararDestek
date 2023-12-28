const router=require('express').Router()
const {login}=require('../controllers/controller.js')
router.post("/login",login)
router.get('/session-check', (req, res) => {
    const isLoggedIn = !!req.session.k_adi;
    res.json({ isLoggedIn });
  });
//post:veri gönderme get:veri alma put:veri güncelleme patch:veri güncelleme delete:veri silme
module.exports=router