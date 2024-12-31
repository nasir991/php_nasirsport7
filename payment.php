<?php
// Mulai session
session_start();

// Cek apakah ada produk yang dipilih
if (!isset($_GET['product_name']) || !isset($_GET['product_price'])) {
    die("Tidak ada produk yang dipilih.");
}

// Ambil data dari parameter GET
$product_name = htmlspecialchars($_GET['product_name']);
$product_price = htmlspecialchars($_GET['product_price']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #1d3557, #457b9d);
            color: #fff;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }
        .payment-box {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 20px 40px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.6);
            max-width: 500px;
            text-align: center;
            width: 100%;
        }
        .payment-box h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #ffd700;
        }
        .payment-box .product-details {
            text-align: left;
            margin-bottom: 20px;
            font-size: 16px;
        }
        .payment-box .product-details p {
            margin: 5px 0;
        }
        .review-section {
            margin-top: 30px;
        }
        .review-section h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #ffd700;
        }
        .review-section ul {
            list-style: none;
            padding: 0;
        }
        .review-section ul li {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            margin: 5px 0;
            padding: 10px;
        }
        .payment-methods {
            margin-top: 30px;
        }
        .payment-methods h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #ffd700;
        }
        .payment-methods select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
        }
        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .btn-pay,
        .btn-back {
            display: inline-block;
            text-align: center;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            color: white;
        }
        .btn-pay {
            background-color: #4caf50;
        }
        .btn-pay:hover {
            background-color: #3e8e41;
        }
        .btn-back {
            background-color: #f44336;
        }
        .btn-back:hover {
            background-color: #d32f2f;
        }
        @media (max-width: 768px) {
            .payment-box {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="payment-box">
        <h1>Pembayaran</h1>
        <div class="product-details">
            <p><strong>Nama Produk:</strong> <?php echo $product_name; ?></p>
            <p><strong>Harga:</strong> Rp <?php echo number_format($product_price, 0, ',', '.'); ?></p>
        </div>

        <div class="review-section">
            <h3>Ulasan Pelanggan:</h3>
            <ul>
                <li>⭐⭐⭐⭐⭐ "Produk sangat berkualitas dan sesuai deskripsi!"</li>
                <li>⭐⭐⭐⭐⭐ "Pengiriman cepat dan barang aman sampai tujuan."</li>
                <li>⭐⭐⭐⭐⭐ "Pelayanan yang ramah dan profesional, sangat direkomendasikan!"</li>
            </ul>
        </div>

        <div class="payment-methods">
            <h3>Metode Pembayaran:</h3>
            <form action="proses_payment.php" method="POST">
                <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
                <input type="hidden" name="product_price" value="<?php echo $product_price; ?>">
                <select name="payment_method" required>
                    <option value="" disabled selected>Pilih metode pembayaran</option>
                    <option value="bank_transfer">Transfer Bank</option>
                    <option value="e_wallet">E-Wallet (OVO, GoPay, DANA)</option>
                    <option value="cod">Cash on Delivery (COD)</option>
                </select>
                <div class="btn-container">
                    <button type="button" class="btn-back" onclick="window.location.href='produk.php'">Kembali</button>
                    <button type="submit" class="btn-pay">Bayar Sekarang</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
