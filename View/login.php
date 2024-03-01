<style>
 .container{
  border-radius: 10px;
  background-color: white;
  padding-bottom: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.login-form{
  background-color: white;
  width: 100%;
  margin-top: 50px;
}

.login-form h1 {
  font-size: 24px;
  font-weight: bold;
  margin-top: 20px;
  margin-bottom: 10px;
}

.login-form p {
  font-size: 14px;
  color: #666;
  margin-bottom: 20px;
}

.login-form a {
  color: #00a0e9;
  text-decoration: none;
}

.login-form a:hover {
  text-decoration: underline;
}

.login-form form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.input-group {
  width: 80%;
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

.forgot-password {
  width: 80%;
  margin-bottom: 20px;
  text-align: right;
}

.forgot-password a {
  color: #333;
  font-size: 14px;
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
<div class="container">
<div class="login-form">
  <h1>ĐĂNG NHẬP TÀI KHOẢN</h1>
  <p>Bạn chưa có tài khoản? <a href="index.php?action=dangky">Đăng ký tại đây</a></p>
  <form action="index.php?action=dangnhap&act=dangnhap_action" class="login-form" method="post">
    <div class="input-group">
      <label for="exampleInputEmail1">Username *</label>
      <input type="Username" id="Username" name="txtusername" required>
    </div>
    <div class="input-group">
      <label for="exampleInputPassword1">Mật khẩu *</label>
      <input type="password" id="password" name="txtpassword" required>
    </div>
    <div class="forgot-password">
      <a href="index.php?action=forget">Quên mật khẩu? Nhấn vào đây</a>
    </div>
    <div class="submit-button">
      <button type="submit" name="submit">Đăng nhập</button>
    </div>
  </form>
</div>
</div>