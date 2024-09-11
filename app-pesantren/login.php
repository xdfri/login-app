<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    html, body {
      height: 100%;
      margin: 0;
      overflow: hidden;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #1b3261, #4e5c97);
      animation: fadeIn 2s ease-out;
    }

    .bentuk {
      position: absolute;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.1);
      z-index: 1;
      animation: bentukAnimasi 15s infinite alternate;
    }

    .bentuk1 {
      width: 300px;
      height: 300px;
      top: -50px;
      left: -50px;
    }

    .bentuk2 {
      width: 200px;
      height: 200px;
      bottom: -60px;
      right: -60px;
    }

    .bentuk3 {
      width: 150px;
      height: 150px;
      top: 20%;
      left: 70%;
    }

    @keyframes bentukAnimasi {
      0% {
        transform: scale(1) translateY(0);
        opacity: 0.5;
      }
      100% {
        transform: scale(1.2) translateY(-20px);
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    .konten {
      text-align: center;
      z-index: 2;
      position: relative;
      width: 250px; /* Ukuran form lebih kecil */
      padding: 20px; /* Padding lebih kecil */
    }

    .judul {
      font-size: 24px; /* Ukuran judul lebih kecil */
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 15px; /* Jarak bawah judul lebih kecil */
    }

    .judul span {
      color: #FFB547;
    }

    .form-group {
      margin-bottom: 15px; /* Jarak bawah antar input lebih kecil */
    }

    .form-group label {
      display: block;
      font-size: 13px; /* Ukuran font label lebih kecil */
      color: #ffffff;
      margin-bottom: 5px;
      text-align: left;
    }

    .form-group input {
      width: 100%;
      padding: 6px; /* Padding lebih kecil */
      border: none;
      border-bottom: 2px solid #ffffff; /* Hanya garis bawah */
      background: transparent;
      color: #ffffff;
      font-size: 13px; /* Ukuran font input lebih kecil */
      box-sizing: border-box;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-group input:focus {
      border-bottom: 2px solid #FFB547; /* Warna garis bawah saat fokus */
      outline: none;
      box-shadow: 0 0 5px rgba(255, 255, 255, 0.7); /* Efek fokus */
    }

    .btn {
      display: block;
      width: 100px;
      padding: 8px; /* Padding lebih kecil */
      border: none;
      border-radius: 6px; /* Radius sudut lebih kecil */
      font-size: 13px; /* Ukuran font tombol lebih kecil */
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-login {
      background-color: #4e5c97;
      color: white; 
    }

    .btn-login:hover {
      background-color: #3a477b;
      transform: scale(1.02);
    }

    .btn-register {
      background-color: #ffffff;
      color: #4e5c97;
    }

    .btn-register:hover {
      background-color: #f0f0f0;
      transform: scale(1.02);
    }

    .button-container {
      display: flex;
      justify-content: center;
      gap: 10px; 
      
    }
  </style>
</head>
<body >
  <div class="bentuk bentuk1"></div>
  <div class="bentuk bentuk2"></div>
  <div class="bentuk bentuk3"></div>

  <div class="konten">
    <div class="judul">
      Login & Regist
    </div>
    <form action="proses_login.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="button-container">
        <button type="submit" class="btn btn-login" name="login" >Login</button>
        <button type="button" class="btn btn-register">Register</button>
      </div>
    </form>
  </div>
</body>
</html>
