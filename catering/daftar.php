<?php
session_start(); // Mulai session

// Menangkap data yang dikirim melalui POST
$name = isset($_POST['name']) ? $_POST['name'] : 'Pengguna';
$address = isset($_POST['address']) ? $_POST['address'] : '-';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '-';

// Simpan data ke session
$_SESSION['name'] = $name;
$_SESSION['address'] = $address;
$_SESSION['phone'] = $phone;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Catering</title>
    <style>
        /* Reset dan Basic Style */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Daftar Container */
        .register-container {
            width: 100%;
            max-width: 450px;
            padding: 30px;
            background-color: white;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;
        }

        .register-container h2 {
            font-family: 'Roboto', sans-serif;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .register-container input {
            width: 100%;
            padding: 14px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .register-container input:focus {
            border-color: #E74C3C;
            box-shadow: 0 0 8px rgba(231, 76, 60, 0.5);
        }

        .register-container button {
            width: 100%;
            padding: 14px;
            background-color: #E74C3C;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .register-container button:hover {
            background-color: #C0392B;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: #E74C3C;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .back-button {
            display: block;
            margin: 20px auto;
            padding: 12px;
            background-color: #95a5a6;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            text-align: center;
            width: 100%;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            background-color: #7f8c8d;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .register-container {
                width: 90%;
                max-width: 400px;
            }

            h1 {
                font-size: 32px;
            }
        }

        @media (max-width: 480px) {
            .register-container {
                width: 95%;
                max-width: 350px;
            }

            h1 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>

    <!-- Daftar Form -->
    <div class="register-container">
        <h2>Silahkan Daftar</h2>
        <h2>Jawa dilarang daftar!</h2>
        <form action="menu.php" method="POST">
            <input type="text" name="name" placeholder="Nama" required> <!-- Variabel untuk nama -->
            <input type="text" name="address" placeholder="Alamat" required> <!-- Variabel untuk alamat -->
            <input type="tel" name="phone" placeholder="Nomor HP" required> <!-- Variabel untuk nomor HP -->
            <button type="submit">Daftar</button>
        </form>

        <!-- Back Button -->
        <button class="back-button" onclick="window.history.back()">Kembali</button>
    </div>

</body>
</html>
