<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Catering - COD</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #ff6600;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: relative;
        }

        h1 {
            margin: 0;
            font-size: 32px;
        }

        .header-button {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #ffffff;
            color: #ff6600;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .header-button:hover {
            background-color: #e65c00;
            color: white;
        }

        .container {
            width: 90%;
            margin: 30px auto;
            padding: 30px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .menu-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .menu-item {
            background-color: #ffcc99;
            padding: 15px;
            border-radius: 10px;
            box-sizing: border-box;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .menu-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .menu-item h3 {
            font-size: 20px;
            margin: 10px 0;
            color: #333;
        }

        .menu-item p {
            font-size: 16px;
            color: #555;
        }

        .menu-item input {
            padding: 8px;
            width: 60px;
            text-align: center;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-top: 10px;
        }

        .order-form {
            margin-top: 30px;
            text-align: center;
        }

        .order-form h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .order-form label {
            font-size: 16px;
            color: #333;
        }

        .order-form input[type="radio"] {
            margin-left: 10px;
        }

        .order-form input[type="submit"] {
            background-color: #ff6600;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            margin-top: 20px;
        }

        .order-form input[type="submit"]:hover {
            background-color: #e65c00;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            padding: 15px;
            background-color: #ff6600;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Catering!</h1>
        <button class="header-button" onclick="window.location.href='user.php'">Saya</button>
    </header>

    <div class="container">
        <h2>Pilih Menu Paket Makan dan Minum Anda</h2>
        <form action="order.php" method="POST">
            <div class="menu-list">
                <!-- Paket 1 -->
                <div class="menu-item">
                    <h3>Paket Nasi Goreng & Es Teh Manis</h3>
                    <img src="nasi_goreng.jpg" alt="Nasi Goreng" style="width: 100%; border-radius: 10px;">
                    <p>Rp 30,000</p>
                    <p>Menu lengkap: Nasi Goreng + Es Teh Manis</p>
                    <input type="number" name="paket_nasi_goreng_es_teh" value="0" min="0">
                </div>

                <!-- Paket 2 -->
                <div class="menu-item">
                    <h3>Paket Ayam Bakar & Es Teh Manis</h3>
                    <img src="ayam_bakar.jpg" alt="Ayam Bakar" style="width: 100%; border-radius: 10px;">
                    <p>Rp 35,000</p>
                    <p>Menu lengkap: Ayam Bakar + Es Teh Manis</p>
                    <input type="number" name="paket_ayam_bakar_es_teh" value="0" min="0">
                </div>

                <!-- Paket 3 -->
                <div class="menu-item">
                    <h3>Paket Rendang & Es Teh Manis</h3>
                    <img src="rendang.jpg" alt="Rendang" style="width: 100%; border-radius: 10px;">
                    <p>Rp 45,000</p>
                    <p>Menu lengkap: Rendang + Es Teh Manis</p>
                    <input type="number" name="paket_rendang_es_teh" value="0" min="0">
                </div>

                <!-- Paket 4 -->
                <div class="menu-item">
                    <h3>Paket Gado-Gado & Es Teh Manis</h3>
                    <img src="gado_gado.jpg" alt="Gado-Gado" style="width: 100%; border-radius: 10px;">
                    <p>Rp 25,000</p>
                    <p>Menu lengkap: Gado-Gado + Es Teh Manis</p>
                    <input type="number" name="paket_gado_gado_es_teh" value="0" min="0">
                </div>

                <!-- Paket 5 -->
                <div class="menu-item">
                    <h3>Paket Sate Ayam & Es Teh Manis</h3>
                    <img src="sate.jpg" alt="Sate Ayam" style="width: 100%; border-radius: 10px;">
                    <p>Rp 40,000</p>
                    <p>Menu lengkap: Sate Ayam + Es Teh Manis</p>
                    <input type="number" name="paket_sate_ayam_es_teh" value="0" min="0">
                </div>
            </div>

            <div class="order-form">
                <h3>Pilih Pembayaran</h3>
                <label for="cod">Cash On Delivery (COD)</label>
                <input type="radio" id="cod" name="payment_method" value="COD" required>
                <br><br>
                <input type="submit" value="Pesan Sekarang">
            </div>
        </form>
    <button class="view-history-button" onclick="window.location.href='riwayat.php'">Lihat Riwayat Pesanan</button>

    </div>

    <footer>
        <p>&copy; 2025 Layanan Catering COD</p>
    </footer>
</body>
</html>
