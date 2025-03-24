<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #FFFDF9;
      color: #0A0A0A;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
    }

    /* Container Styling */
    .container {
      width: 100%;
      max-width: 400px;
      padding: 20px;
    }

    /* Login Box Styling */
    .login-box {
      background-color: #FFFFFF;
      border: 4px solid #0A0A0A;
      border-radius: 16px;
      box-shadow: 10px 10px 0px 0px #0A0A0A;
      padding: 25px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .title {
      font-size: 28px;
      font-weight: bold;
      text-align: center;
      color: #005F73;
    }

    .subtitle {
      font-size: 14px;
      text-align: center;
      color: #333333;
    }

    /* Form Styling */
    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    label {
      font-size: 14px;
      font-weight: bold;
    }

    .input-group {
      display: flex;
      align-items: center;
      position: relative;
    }

    input {
      font-size: 14px;
      padding: 10px;
      border: 3px solid #0A0A0A;
      border-radius: 10px;
      background-color: #F5F5F5;
      width: 100%;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    input:focus {
      outline: none;
      border-color: #005F73;
      background-color: #FFFFFF;
      transform: scale(1.02);
    }

    .reveal-btn {
      position: absolute;
      right: 10px;
      background-color: transparent;
      border: none;
      font-size: 14px;
      cursor: pointer;
      color: #005F73;
      font-weight: bold;
    }

    .reveal-btn:hover {
      transform: scale(1.1);
    }

    .login-btn {
      font-size: 16px;
      font-weight: bold;
      color: #FFFFFF;
      background-color: #EE9B00;
      padding: 10px;
      border: 3px solid #0A0A0A;
      border-radius: 12px;
      cursor: pointer;
    }

    .login-btn:hover {
      transform: translateY(-3px);
      background-color: #FF7A00;
    }

    /* Footer Text Styling */
    .footer-text {
      font-size: 12px;
      text-align: center;
    }

    .footer-text a {
      color: #005F73;
      text-decoration: none;
      font-weight: bold;
      position: relative;
    }

    .footer-text a::after {
      content: '';
      position: absolute;
      width: 100%;
      height: 2px;
      background-color: #005F73;
      left: 0;
      bottom: -2px;
      transform: scaleX(0);
      transform-origin: left;
    }

    .footer-text a:hover::after {
      transform: scaleX(1);
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="login-box">
      <h1 class="title">Masuk</h1>
      <p class="subtitle">Selamat datang kembali! Silakan masuk ke akun Anda.</p>
      <form id="login-form">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Masukkan username Anda" required>
          
        <label for="password">Kata Sandi</label>
        <div class="input-group">
          <input type="password" id="password" name="password" placeholder="Masukkan kata sandi Anda" required>
          <button type="button" class="reveal-btn" onclick="togglePassword('password')">👁</button>
        </div>
        <button type="submit" class="login-btn">Masuk</button>
      </form>
      <p class="footer-text">Belum punya akun? <a href="register">Daftar</a> | <a href="index">Kembali ke Index</a></p>
    </div>
  </div>

<script>
  document.getElementById("login-form").onsubmit = function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    fetch('', { // Kirim request ke file yang sama
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: `username=${encodeURIComponent(username)}&password=${encodeURIComponent(password)}`
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        alert(data.message);
        window.location.href = "index"; // Redirect ke halaman utama setelah login
      } else {
        alert(data.message);
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Terjadi kesalahan pada server.');
    });
  };

  function togglePassword(id) {
    const input = document.getElementById(id);
    input.type = input.type === "password" ? "text" : "password";
  }
</script>

</body>
</html>