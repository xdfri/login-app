<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cemerlang </title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      overflow: hidden;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #1b3261;
      font-family: Arial, sans-serif;
      position: relative;
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
      max-width: 90vw;
      max-height: 90vh;
      box-sizing: border-box;
    }

  

    .gambar-container img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .judul {
      font-size: 21px;
      font-weight: bold;
      color: #fff;
      margin-bottom: 2px;
    }

    .judul span {
      color: #FFB547;
    }

    .deskripsi {
      font-size: 12px;
      color: #ffffff;
      margin-bottom: 20px;
      padding: 10px;
      border-radius: 10px;
      display: inline-block;
    }

    .btn {
      display: block;
      width: 220px;
      padding: 15px;
      margin: 10px auto;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-masuk {
      background-color: #ffffff;
      color: #163972;
    }

    .btn-daftar {
      background-color: #4e5c97;
      color: white;
    }

    .btn-masuk:hover {
      background-color: #e6e6e6;
    }

    .btn-daftar:hover {
      background-color: #3a477b;
    }
  </style>
</head>
<body>
  <div class="bentuk bentuk1"></div>
  <div class="bentuk bentuk2"></div>
  <div class="bentuk bentuk3"></div>

  <div class="konten">
    <div class="gambar-container">
      <img src="assets/img.png" alt="PCN img">
    </div>
    <div class="judul">
      Annajach <span>Cemerlang</span>
    </div>
    <p class="deskripsi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur animi et odio at!</p>
    <a href="login.php"><button class="btn btn-masuk">Masuk</button></a>
    <a href="login.php"><button class="btn btn-daftar">Daftar</button></a>
    </div>
</body>
</html>
