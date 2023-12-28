const express = require('express')
const dbConn = require('./db/mysql_connect.js')
const session = require('express-session');
const cors = require('cors');
const router=require("./routers")
const app = express()
//Require = Import in Python
app.get('/', function (req, res) {
  res.send('Hello World')
})

app.get('/login', function (req, res) {
  console.log('Gelen Veri:', req.body)
  res.send('app sayfası')
})

app.use(session({
    secret: 'Merhaba',
    resave: false,
    saveUninitialized: true
  }));

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
  
app.use(cors());
app.use(express.json())
app.use(express.json({limit:'50mb'}))
app.use(express.json({limit:'50mb',extended:true,parameterLimit:50000}))
app.use('/api',router)
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Sunucu ${PORT} portunda çalışıyor.`);
});