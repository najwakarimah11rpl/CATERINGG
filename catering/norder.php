<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Paket yang dipilih
    $paket_nasi_goreng_es_teh = isset($_POST['paket_nasi_goreng_es_teh']) ? $_POST['paket_nasi_goreng_es_teh'] : 0;
    $paket_ayam_bakar_es_teh = isset($_POST['paket_ayam_bakar_es_teh']) ? $_POST['paket_ayam_bakar_es_teh'] : 0;
    $paket_rendang_es_teh = isset($_POST['paket_rendang_es_teh']) ? $_POST['paket_rendang_es_teh'] : 0;
    $paket_gado_gado_es_teh = isset($_POST['paket_gado_gado_es_teh']) ? $_POST['paket_gado_gado_es_teh'] : 0;
    $paket_sate_ayam_es_teh = isset($_POST['paket_sate_ayam_es_teh']) ? $_POST['paket_sate_ayam_es_teh'] : 0;
    $payment_method = $_POST['payment_method'];

    // Harga paket
    $harga_paket_nasi_goreng_es_teh = 30000;
    $harga_paket_ayam_bakar_es_teh = 35000;
    $harga_paket_rendang_es_teh = 45000;
    $harga_paket_gado_gado_es_teh = 25000;
    $harga_paket_sate_ayam_es_teh = 40000;

    // Hitung total
    $total = ($paket_nasi_goreng_es_teh * $harga_paket_nasi_goreng_es_teh) + 
             ($paket_ayam_bakar_es_teh * $harga_paket_ayam_bakar_es_teh) + 
             ($paket_rendang_es_teh * $harga_paket_rendang_es_teh) + 
             ($paket_gado_gado_es_teh * $harga_paket_gado_gado_es_teh) + 
             ($paket_sate_ayam_es_teh * $harga_paket_sate_ayam_es_teh);

    // Cek jika tidak ada pesanan
    $no_order = ($paket_nasi_goreng_es_teh == 0 && 
                 $paket_ayam_bakar_es_teh == 0 && 
                 $paket_rendang_es_teh == 0 && 
                 $paket_gado_gado_es_teh == 0 && 
                 $paket_sate_ayam_es_teh == 0);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan Catering</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fff3e6;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #ff6600;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .container {
            width: 80%;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        h2 {
            color: #ff6600;
            border-bottom: 2px solid #ff6600;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        .order-details {
            margin-bottom: 20px;
        }

        .order-details p {
            font-size: 1.1rem;
            margin: 10px 0;
        }

        .order-summary {
            margin-top: 20px;
            padding: 15px;
            background-color: #ffcc99;
            border-radius: 8px;
        }

        .order-summary h3 {
            margin: 0 0 15px;
            color: #ff6600;
        }

        .total-price {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .payment-method {
            margin-top: 15px;
            font-size: 1.1rem;
        }

        footer {
            background-color: #ff6600;
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<header>
    <h1>Terima Kasih atas Pesanan Anda!</h1>
</header>

<div class="container">
    <h2>Detail Pesanan Anda</h2>

    <?php if ($no_order): ?>
        <p>Maaf, Anda belum memilih menu apapun. Silakan kembali dan pilih menu untuk memesan.</p>
        <button onclick="window.history.back()">Kembali</button>
    <?php else: ?>
        <div class="order-details">
            <?php
            if ($paket_nasi_goreng_es_teh > 0) {
                echo "<p><strong>Paket Nasi Goreng & Es Teh Manis</strong>: $paket_nasi_goreng_es_teh x Rp 30,000 = Rp " . ($paket_nasi_goreng_es_teh * $harga_paket_nasi_goreng_es_teh) . "</p>";
            }
            if ($paket_ayam_bakar_es_teh > 0) {
                echo "<p><strong>Paket Ayam Bakar & Es Teh Manis</strong>: $paket_ayam_bakar_es_teh x Rp 35,000 = Rp " . ($paket_ayam_bakar_es_teh * $harga_paket_ayam_bakar_es_teh) . "</p>";
            }
            if ($paket_rendang_es_teh > 0) {
                echo "<p><strong>Paket Rendang & Es Teh Manis</strong>: $paket_rendang_es_teh x Rp 45,000 = Rp " . ($paket_rendang_es_teh * $harga_paket_rendang_es_teh) . "</p>";
            }
            if ($paket_gado_gado_es_teh > 0) {
                echo "<p><strong>Paket Gado-Gado & Es Teh Manis</strong>: $paket_gado_gado_es_teh x Rp 25,000 = Rp " . ($paket_gado_gado_es_teh * $harga_paket_gado_gado_es_teh) . "</p>";
            }
            if ($paket_sate_ayam_es_teh > 0) {
                echo "<p><strong>Paket Sate Ayam & Es Teh Manis</strong>: $paket_sate_ayam_es_teh x Rp 40,000 = Rp " . ($paket_sate_ayam_es_teh * $harga_paket_sate_ayam_es_teh) . "</p>";
            }
            ?>
        </div>

        <div class="order-summary">
            <h3>Total Pembayaran</h3>
            <p class="total-price">Rp <?php echo number_format($total, 0, ',', '.'); ?></p>

            <div class="payment-method">
                <?php
                if ($payment_method == "COD") {
                    echo "<p><strong>Metode Pembayaran:</strong> Cash On Delivery (COD)</p>";
                }
                ?>
            </div>
        </div>

        <h3>Pesanan Anda akan segera diproses dan diantar ke alamat yang Anda berikan. Terima kasih telah memilih layanan catering kami!</h3>
        <button onclick="window.history.back()">Kembali</button>
    <?php endif; ?>
</div>

<footer>
    <p>&copy; 2025 Layanan Catering - Semua hak dilindungi</p>
</footer>

</body>
</html>
