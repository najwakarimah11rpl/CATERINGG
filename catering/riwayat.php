<?php
session_start();

// Periksa apakah ada riwayat pesanan
if (!isset($_SESSION['order_history']) || count($_SESSION['order_history']) == 0) {
    $no_order = true;
} else {
    $no_order = false;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan</title>
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

        footer {
            background-color: #ff6600;
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            width: 100%;
            bottom: 0;
        }

        .order-history {
            margin-top: 20px;
        }

        .order-item {
            background-color: #ffcc99;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<header>
    <h1>Riwayat Pesanan Anda</h1>
</header>

<div class="container">
    <h2>Pesanan Sebelumnya</h2>
    <button onclick="window.history.back()">Kembali</button>

    <?php if ($no_order): ?>
        <p>Anda belum memiliki riwayat pesanan.</p>
    <?php else: ?>
        <div class="order-history">
            <?php foreach ($_SESSION['order_history'] as $order): ?>
                <div class="order-item">
                    <h3><?php echo htmlspecialchars($order['date']); ?></h3>
                    <p><strong>Menu:</strong> <?php echo htmlspecialchars($order['menu']); ?></p>
                    <p><strong>Total:</strong> Rp <?php echo number_format($order['total'], 0, ',', '.'); ?></p>
                    <p><strong>Metode Pembayaran:</strong> <?php echo htmlspecialchars($order['payment_method']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>


</div>

    <p>&copy; 2025 Layanan Catering - Semua hak dilindungi</p>
</footer>

</body>
</html>
