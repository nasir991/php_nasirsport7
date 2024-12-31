<?php
// Mengambil data yang dikirim dari formulir
$product_name = $_POST['product_name'] ?? '';
$price = $_POST['price'] ?? '';
$product_id = $_POST['product_id'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #002244;
            color: #fff;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #0056b3;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            color: #fff;
        }

        p {
            font-size: 18px;
            margin: 15px 0;
        }

        .payment-method {
            background-color: #003d82;
            padding: 15px;
            margin: 15px 0;
            border-radius: 8px;
        }

        .payment-method label {
            font-size: 16px;
        }

        .payment-method input {
            margin-right: 10px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .buttons a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            font-size: 18px;
            text-align: center;
        }

        .buttons a:hover {
            background-color: #0056b3;
        }

        .buttons form button {
            border: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
        }

        .buttons form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Pembayaran</h1>
        <p><strong>Produk:</strong> <?= htmlspecialchars($product_name) ?></p>
        <p><strong>Harga:</strong> Rp <?= number_format($price, 0, ',', '.') ?></p>

        <div class="payment-method">
            <h2>Metode Pembayaran</h2>
            <form action="checkout.php" method="post">
                <label><input type="radio" name="payment_method" value="transfer_bca" required> Transfer Bank - BCA</label><br>
                <label><input type="radio" name="payment_method" value="transfer_mandiri"> Transfer Bank - Mandiri</label><br>
                <label><input type="radio" name="payment_method" value="transfer_bri"> Transfer Bank - BRI</label><br>
                <label><input type="radio" name="payment_method" value="kredit"> Kartu Kredit</label><br>
                <label><input type="radio" name="payment_method" value="e_wallet_dana"> E-Wallet - DANA</label><br>
                <label><input type="radio" name="payment_method" value="e_wallet_oppo"> E-Wallet - OVO</label><br>
                <label><input type="radio" name="payment_method" value="e_wallet_shopeepay"> E-Wallet - ShopeePay</label><br>
                <label><input type="radio" name="payment_method" value="cod"> Bayar di Tempat (COD)</label>
                <input type="hidden" name="product_name" value="<?= htmlspecialchars($product_name) ?>">
                <input type="hidden" name="price" value="<?= htmlspecialchars($price) ?>">
            </form>
        </div>

        <div class="buttons">
            <a href="dashboard.php">Kembali ke Dashboard</a>
            <form action="checkout.php" method="post">
                <button type="submit">Checkout</button>
                <input type="hidden" name="product_name" value="<?= htmlspecialchars($product_name) ?>">
                <input type="hidden" name="price" value="<?= htmlspecialchars($price) ?>">
                <input type="hidden" name="product_id" value="<?= htmlspecialchars($product_id) ?>">
            </form>
        </div>
    </div>
</body>
</html>
