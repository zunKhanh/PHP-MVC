<style>
.register-form {
  width: 100%;
  margin: 0 auto;
  font-family: Arial, sans-serif;
  text-align: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin-top: 50px;
}

.register-form h1 {
  font-size: 24px;
  font-weight: bold;
  margin-top: 20px;
  margin-bottom: 10px;
}

.register-form p {
  font-size: 14px;
  color: #666;
  margin-bottom: 20px;
}

.register-form a {
  color: #333;
  text-decoration: none;
  font-size: 14px;
}

.register-form a:hover {
  text-decoration: underline;
}

.register-form form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.section {
  width: 80%;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
}

.section h2 {
  font-size: 18px;
  font-weight: bold;
  color: #333;
  margin-top: 0;
  margin-bottom: 10px;
}

.input-group {
  width: 100%;
  margin-bottom: 10px;
}

.input-group label {
  display: block;
  font-size: 16px;
  color: #333;
  margin-bottom: 5px;
  text-align: left;
  font-weight: normal;
}

.input-group input {
  display: block;
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  outline: none;
  background-color: #f0f0f0;
}

.submit-button {
  width: 80%;
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.submit-button button {
  display: block;
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #f0c14b;
  color: #333;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
}
</style>
<div class="register-form">
  <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
  <p>Bạn đã có tài khoản? <a href="index.php?action=dangnhap">Đăng nhập tại đây</a></p>
  <form action="index.php?action=dangky&act=dangky_action" method="post" class="form" role="form">
    <div class="section">
      <h2>THÔNG TIN CÁ NHÂN</h2>
      <div class="input-group">
        <label for="last-name">Tên *</label>
        <input type="text" id="last-name" name="txttenkh" placeholder="Nhập tên của bạn" required>
      </div>
      <div class="input-group">
        <label for="last-name">Địa chỉ *</label>
        <input type="text" id="last-name" name="txtdiachi" placeholder="Nhập tên của bạn" required>
      </div>
      <div class="input-group">
        <label for="last-name">Tên đăng nhập *</label>
        <input type="text" id="last-name" name="txtusername" placeholder="Nhập tên của bạn" required>
      </div>
      <div class="input-group">
        <label for="phone-number">Số điện thoại *</label>
        <input type="tel" id="phone-number" name="txtsodt" placeholder="Nhập số điện thoại của bạn" required>
      </div>
      <div class="input-group">
        <label for="email">Email *</label>
        <input type="email" id="email" name="txtemail" placeholder="Nhập email của bạn" required>
      </div>
      <div class="input-group">
        <label for="password">Mật khẩu *</label>
        <input type="password" id="password" name="txtpass" placeholder="Nhập mật khẩu của bạn" required>
      </div>
    </div>
    <div class="submit-button">
      <button type="submit" name="submit">Đăng ký</button>
    </div>
  </form>
</div>
