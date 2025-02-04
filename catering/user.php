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
    <title>Selamat Datang - Catering</title>
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

        /* Welcome Container */
        .welcome-container {
            width: 100%;
            max-width: 450px;
            padding: 30px;
            background-color: white;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
        }

        .welcome-container h2 {
            font-family: 'Roboto', sans-serif;
            margin-bottom: 20px;
            color: #333;
        }

        .welcome-container p {
            font-size: 18px;
            margin: 10px 0;
            color: #555;
        }

        .welcome-container .welcome-message {
            font-size: 1.3rem;
            font-weight: bold;
            margin-top: 20px;
            color: #E74C3C;
        }

        /* Button Styles */
        .back-button {
            display: block;
            margin-top: 30px;
            padding: 12px;
            background-color: #E74C3C;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            background-color: #C0392B;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .welcome-container {
                width: 90%;
                max-width: 400px;
            }
        }

        @media (max-width: 480px) {
            .welcome-container {
                width: 95%;
                max-width: 350px;
            }
        }
    </style>
</head>
<body>

    <!-- Welcome Message -->
    <div class="welcome-container">
        <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h2>
        <p>Terima kasih telah mendaftar untuk layanan catering kami.</p>
        Alamat: <strong><?php echo ($_SESSION['address']); ?></strong><br>
        Nomor Hp: <strong><?php echo ($_SESSION['phone']); ?></strong><br>

        <div class="welcome-message">
            Kami senang bisa melayani Anda! Pesanan Anda akan segera diproses.
        </div>

        <!-- Kembali Button -->
        <button class="back-button" onclick="window.history.back()">Kembali</button>
    </div>

</body>
</html>
