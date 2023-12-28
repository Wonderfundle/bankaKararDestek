class Response {
    constructor(data, message, success = true) {
      this.data = data;
      this.message = message;
      this.success = success;
    }
  
    success(res) {
      return res.status(200).json({
        success: this.success,
        message: this.message,
        data: this.data,
      });
    }
  
    error500(res) {
      return res.status(500).json({
        success: false,
        message: "Internal Server Error",
      });
    }
  
    kayit_silme(res) {
      return res.status(200).json({
        success: this.success,
        message: "Kayıt Silindi",
        data: this.data,
      });
    }
  
    // Başarıyla giriş
    basarili_giris(res) {
      return res.status(200).json({
        success: this.success,
        message: "Başarılı Giriş",
        data: this.data,
      });
    }
  }
  
  module.exports = Response;
  