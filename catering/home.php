<?php
// Cek apakah user sudah login atau belum
session_start();
$isLoggedIn = isset($_SESSION['user_logged_in']) ? $_SESSION['user_logged_in'] : false;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Catering</title>
    <!-- Link ke Google Fonts untuk font yang lebih elegan -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
            color: #333;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, rgba(255, 87, 34, 1) 0%, rgba(233, 53, 53, 1) 100%);
            color: white;
            padding: 80px 20px;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        header .header-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
        }

        header h1 {
            font-size: 48px;
            font-weight: 700;
            margin: 20px 0;
            letter-spacing: 2px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
        }

        header p {
            font-size: 20px;
            font-weight: 300;
            margin-bottom: 30px;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
        }

        header .logo {
            max-width: 180px;
            margin-bottom: 30px;
            transition: transform 0.3s ease-in-out;
        }

        header .logo:hover {
            transform: scale(1.1);
        }

        header .btn-container {
            margin-top: 20px;
        }

        header .login-btn, .logout-btn {
            background-color: #f44336; /* Red */
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        header .login-btn:hover, header .logout-btn:hover {
            background-color: #c62828;
            transform: scale(1.05);
        }

        /* Menu list styles */
        .container {
            width: 85%;
            margin: 40px auto;
        }

        h2 {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            color: #333;
            text-align: center;
            margin-bottom: 40px;
        }

        .menu-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            list-style: none;
            padding: 0;
        }

        .menu-list li {
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .menu-list li:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .menu-list li h3 {
            margin-bottom: 15px;
            font-size: 20px;
            color: #e53935;
            font-weight: 600;
        }

        .menu-list li p {
            font-size: 16px;
            color: #777;
            margin-bottom: 10px;
        }

        .menu-list li span {
            font-size: 18px;
            font-weight: 700;
            color: #e53935;
        }

        /* Footer Styles */
        footer {
            background-color: #e53935;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            font-size: 14px;
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }

            header h1 {
                font-size: 32px;
            }

            .menu-list {
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 26px;
            }

            header p {
                font-size: 14px;
            }

            .menu-list li {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="header-content">
        <img src="logo.jpg" alt="Logo Catering" class="logo">
        <h1>Selamat Datang di Catering!</h1>
        <p>Hidangan Lezat yang Siap Memanjakan Anda</p>
        <div class="btn-container">
            <?php if ($isLoggedIn): ?>
                <!-- <p>Welcome back, User!</p> -->
                <a href="home.php" class="logout-btn">Logout</a>
            <?php else: ?>
                <a href="daftar.php" class="login-btn">Daftar</a>
            <?php endif; ?>
        </div>
    </div>
</header>

<div class="container">
    <h2>Menu Catering Kami</h2>
    <ul class="menu-list">
        <li>
            <img src="nasi-goreng.jpg" alt="Nasi Goreng Spesial" style="max-width: 100%; border-radius: 10px;">
            <h3>Nasi Goreng Spesial</h3>
            <p>Kombinasi nasi, sayuran, dan ayam yang dibumbui khas.</p>
            <span>Rp 30,000</span>
        </li>
        <li>
            <img src="ayam-bakar.jpg" alt="Ayam Bakar" style="max-width: 100%; border-radius: 10px;">
            <h3>Ayam Bakar</h3>
            <p>Ayam bakar dengan bumbu spesial, dijamin lezat!</p>
            <span>Rp 35,000</span>
        </li>
        <li>
            <img src="sate-ayam.jpg" alt="Sate Ayam" style="max-width: 100%; border-radius: 10px;">
            <h3>Sate Ayam</h3>
            <p>Sate ayam empuk dengan bumbu kacang yang nikmat.</p>
            <span>Rp 25,000</span>
        </li>
        <li>
            <img src="rendang.jpg" alt="Rendang Daging" style="max-width: 100%; border-radius: 10px;">
            <h3>Rendang Daging</h3>
            <p>Daging empuk dimasak dengan rempah pilihan yang menggugah selera.</p>
            <span>Rp 40,000</span>
        </li>
        <li>
            <img src="gado-gado.jpg" alt="Gado-Gado" style="max-width: 100%; border-radius: 10px;">
            <h3>Gado-Gado</h3>
            <p>Salad sayur dengan bumbu kacang yang segar dan gurih.</p>
            <span>Rp 20,000</span>
        </li>
    </ul>
</div>

<footer>
    <p>&copy; 2025 Catering Lezat | All Rights Reserved</p>
</footer>

</body>
</html>
