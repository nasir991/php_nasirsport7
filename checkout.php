<?php
// Mengatur data pesanan dan status pembayaran
$order_id = rand(100000, 999999); // ID pesanan unik
$status = "Pesanan sedang diproses. Mohon tunggu...";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a73e8; /* Warna biru utama */
            color: #fff; /* Teks putih */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #004ba0; /* Warna biru tua */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 600px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .spinner {
            margin: 20px auto;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #ffffff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        p {
            font-size: 18px;
            margin: 15px 0;
        }

        .button {
            margin-top: 20px;
        }

        a {
            display: inline-block;
            text-decoration: none;
            background-color: #006dd2;
            color: #ffffff;
            padding: 12px 25px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0051a0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Status Pesanan</h1>
        <div class="spinner"></div>
        <p><?php echo $status; ?></p>
        <p>Nomor Pesanan Anda: <strong>#<?php echo $order_id; ?></strong></p>
        <div class="button">
            <a href="dashboard.php">Kembali ke Dashboard</a>
        </div>
    </div>
</body>
</html>
