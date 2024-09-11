<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Services</title>
    <!-- Link Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(to right, hsl(232, 92%, 95%), #d3d6da);
            overflow-x: hidden;
            position: relative;
        }

        .background-animations {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background-color: rgba(12, 26, 48, 0.2);
            animation: move 20s infinite ease-in-out;
            opacity: 0.8;
        }

        @keyframes move {
            0% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
            50% {
                transform: translateY(-100px) scale(1.2);
                opacity: 0.5;
            }
            100% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        }

        .circle-1 {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 10%;
        }

        .circle-2 {
            width: 150px;
            height: 150px;
            top: 50%;
            right: 15%;
            animation-delay: 5s;
        }

        .circle-3 {
            width: 200px;
            height: 200px;
            bottom: 15%;
            left: 20%;
            animation-delay: 8s;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background: linear-gradient(135deg, #2c3e50, #4a69bd);
            padding: 20px 25px;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .header-left h1 {
            font-size: 26px;
            color: #ffffff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .header-left p {
            font-size: 16px;
            color: #d1e7ff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .profile-pic img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .search-bar {
            margin-top: 20px;
        }

        .search-bar input {
            width: 100%;
            padding: 12px;
            border-radius: 30px;
            border: 1px solid #ccc;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            color: #333;
            font-size: 16px;
            transition: box-shadow 0.3s ease-in-out;
        }

        .search-bar input:focus {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            border-color: #4174c5;
            outline: none;
        }

        .services {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            grid-gap: 10px; 
            margin-bottom: 20px;
        }

        .service {
            text-align: center;
            text-decoration: none;
            color: inherit;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .service i {
            font-size: 24px;
            color: #163972;
        }

        .service p {
            margin-top: 10px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .service i {
                font-size: 20px;
            }

            .header-left h1 {
                font-size: 22px;
            }

            .header-left p {
                font-size: 14px;
            }

            .search-bar input {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .service i {
                font-size: 18px;
            }

            .header-left h1 {
                font-size: 20px;
            }

            .header-left p {
                font-size: 12px;
            }

            .search-bar input {
                font-size: 12px;
            }
        }

        .profile-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }

        .profile-menu a {
            display: block;
            padding: 10px 20px;
            color: #163972;
            text-decoration: none;
            border-bottom: 1px solid #eee;
            font-size: 9px;
        }

        .profile-menu a:hover {
            background-color: #f1f1f1;
            border-radius: 10px;
        }

        .profile-menu a:last-child {
            border-bottom: none;
        }

        .coupon-section {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .coupon {
            background-color: white;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out, transform 0.3s;
        }

        .coupon:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }

        .coupon h2 {
            color: #163972;
            font-size: 20px;
        }

        .coupon p {
            margin-top: 10px;
            color: #555;
        }

        .coupon button {
            margin-top: 20px;
            background-color: #163972;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .coupon button:hover {
            background-color: #0f2b5a;
        }
    </style>
</head>
<body>
    <div class="background-animations">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>
    </div>

    <header>
        <div class="header-content">
            <div class="header-left">
                <h1>Hello Nessa</h1>
                <p>Akun santri : xxxxxxxxxxxxx</p>
            </div>
            <div class="profile-pic">
                <img src="../assets/profil.png" alt="Profile Icon" id="profileIcon">
            </div>
            <div id="profileMenu" class="profile-menu">
                <a href="#profile">Profile</a>
                <a href="#settings">Settings</a>
                <form action="proses/proses_logout.php" method="post">
                <button name = "logout">LogOut</button>
                </form>
            </div>
        </div>

        <div class="search-bar">
            <input type="text" placeholder="Search">
        </div>
    </header>

    <div class="container">
        <div class="services">
            <a href="data-santri.html" class="service">
                <i class="fas fa-user-graduate"></i>
                <p>Data Santri</p>
            </a>
            <a href="rapot.html" class="service">
                <i class="fas fa-file-alt"></i>
                <p>Berita</p>
            </a>
            <a href="hafalan.html" class="service">
                <i class="fas fa-book"></i>
                <p>Hafalan</p>
            </a>
            <a href="prestasi.html" class="service">
                <i class="fas fa-trophy"></i>
                <p>Prestasi</p>
            </a>
            <a href="psb.html" class="service">
                <i class="fas fa-chalkboard-teacher"></i>
                <p>PSB</p>
            </a>
            <a href="pembayaran.html" class="service">
                <i class="fas fa-credit-card"></i>
                <p>Pembayaran</p>
            </a>
        </div>

        <div class="coupon-section">
            <div class="coupon">
                <h2>50% Off Coupon!</h2>
                <p>For Your First Appointment</p>
                <button>Get Coupon</button>
            </div>
            <div class="coupon">
                <h2>Free Delivery</h2>
                <p>For Adopting a Pet</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const profileIcon = document.getElementById('profileIcon');
            const profileMenu = document.getElementById('profileMenu');

            profileIcon.addEventListener('click', function () {
                // Toggle visibility of the profile menu
                if (profileMenu.style.display === 'block') {
                    profileMenu.style.display = 'none';
                } else {
                    profileMenu.style.display = 'block';
                }
            });

            // Close the menu if clicking outside of it
            document.addEventListener('click', function (event) {
                if (!profileMenu.contains(event.target) && event.target !== profileIcon) {
                    profileMenu.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
