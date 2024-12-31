<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Olahraga Pria | Sportaways</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(13, 26, 65);
            color: #333;
        }
        header {
            background-color: #005fa3; 
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        /* Navbar Styling */
        nav {
            background-color: #005fa3;
            padding: 15px;
            color: white;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 1.1em;
            margin: 0 20px;
        }
        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .product {
            background-color: #007acc;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .product img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .product-content {
            padding: 15px;
            background-color: #005fa3;
            color: #fff;
            text-align: center;
        }
        .product h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .product p {
            font-size: 1em;
            margin: 15px 0;
            line-height: 1.6;
        }
        .product .price {
            font-size: 1.4em;
            font-weight: bold;
            color: #fdd835;
        }
        .product button {
            padding: 10px 15px;
            background-color: #f7b731;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 1em;
            width: 100%;
        }
        .product button:hover {
            background-color: #fc5c65;
        }
        .product:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <!-- Navbar untuk kembali ke Dashboard -->
    <nav>
        <a href="dashboard.php">Kembali ke Dashboard</a>
    </nav>

    <header>
        <h1>Produk Olahraga Khusus Pria</h1>
    </header>

    <div class="container">
        <div class="products">
            <!-- Produk 1: Sepatu Futsal -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/df/c8/80/dfc880349ecdfe5f4d440c14cced98a2.jpg" alt="Sepatu Futsal">
                <div class="product-content">
                    <h3>Sepatu Futsal Pria</h3>
                    <p>Sepatu futsal dengan desain stylish dan kenyamanan luar biasa. Memaksimalkan performa saat bermain futsal atau olahraga indoor lainnya.</p>
                    <p class="price">Rp 650.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Sepatu Futsal Pria">
                        <input type="hidden" name="price" value="650000">
                        <input type="hidden" name="product_id" value="1">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 2: Jersey Badminton -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/16/9b/96/169b96cca19d957bfa7e34aec283d571.jpg" alt="Jersey Badminton">
                <div class="product-content">
                    <h3>Jersey Badminton Pria</h3>
                    <p>Jersey badminton berbahan nyaman dan ringan, membantu Anda bergerak lebih bebas. Dapatkan kenyamanan maksimal di lapangan.</p>
                    <p class="price">Rp 350.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Jersey Badminton Pria">
                        <input type="hidden" name="price" value="350000">
                        <input type="hidden" name="product_id" value="2">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 3: Alat Gym -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/9d/26/ee/9d26ee6a042d37fa1b7cdc0f58761088.jpg" alt="Alat Gym">
                <div class="product-content">
                    <h3>Alat Gym Pria</h3>
                    <p>Alat gym multifungsi untuk pria yang ingin meningkatkan kekuatan tubuh secara maksimal di rumah atau gym.</p>
                    <p class="price">Rp 900.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Alat Gym Pria">
                        <input type="hidden" name="price" value="900000">
                        <input type="hidden" name="product_id" value="3">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 4: Tas Olahraga -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/9c/e0/26/9ce0265b551cb3e23e6c397c0bdd0314.jpg" alt="Tas Olahraga">
                <div class="product-content">
                    <h3>Tas Olahraga Pria</h3>
                    <p>Tas olahraga modern dengan banyak ruang untuk perlengkapan olahraga Anda. Nyaman dan tahan lama untuk setiap aktivitas fisik.</p>
                    <p class="price">Rp 350.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Tas Olahraga Pria">
                        <input type="hidden" name="price" value="350000">
                        <input type="hidden" name="product_id" value="4">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 5: Sepeda MTB -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/1f/1e/3a/1f1e3a6c072d1493bb2be0b8c02a3dc6.jpg" alt="Sepeda MTB">
                <div class="product-content">
                    <h3>Sepeda MTB Pria</h3>
                    <p>Sepeda MTB dengan frame kokoh, ban besar untuk kenyamanan di berbagai medan. Ideal untuk petualangan di alam terbuka.</p>
                    <p class="price">Rp 4.500.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Sepeda MTB Pria">
                        <input type="hidden" name="price" value="4500000">
                        <input type="hidden" name="product_id" value="5">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 6: Baju Lari Pria -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/a8/41/c0/a841c0ce68e49fc7c8472def0af3439f.jpg" alt="Baju Lari Pria">
                <div class="product-content">
                    <h3>Baju Lari Pria</h3>
                    <p>Baju lari pria dengan bahan anti-bau dan cepat kering, memberikan kenyamanan selama sesi lari panjang atau latihan.</p>
                    <p class="price">Rp 250.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Baju Lari Pria">
                        <input type="hidden" name="price" value="250000">
                        <input type="hidden" name="product_id" value="6">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
