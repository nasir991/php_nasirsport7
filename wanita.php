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
        <h1>Produk Olahraga Khusus WANITA</h1>
    </header>

    <div class="container">
        <div class="products">
            <!-- Produk 1: Sepatu Futsal -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/c8/33/d8/c833d821c644169345503a974408bb53.jpg" alt="Sepatu Futsal">
                <div class="product-content">
                    <h3>Jaket Olahraga Wanita Quick-Dry</h3>
                    <p>Jaket olahraga ringan dengan teknologi quick-dry, melindungi dari angin dan cocok untuk olahraga pagi atau sore hari. Dilengkapi dengan hoodie dan ritsleting penuh.</p>
                    <p class="price">Rp 300.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Jaket Olahraga Wanita Quick-Dry">
                        <input type="hidden" name="price" value="300000">
                        <input type="hidden" name="product_id" value="1">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 2: Jersey Badminton -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/0b/74/50/0b745069ce6f620b060093dada1b9fa7.jpg" alt="Jersey Badminton">
                <div class="product-content">
                    <h3>Legging Olahraga Anti-Slip</h3>
                    <p>Legging dengan desain anti-selip dan bahan elastis yang nyaman untuk yoga, pilates, atau fitness. Dilengkapi dengan saku tersembunyi..</p>
                    <p class="price">Rp 200.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Legging Olahraga Anti-Slip">
                        <input type="hidden" name="price" value="200000">
                        <input type="hidden" name="product_id" value="2">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 3: Alat Gym -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/ec/be/09/ecbe09c7dde3371fdf9cb999befa225a.jpg" alt="Alat Gym">
                <div class="product-content">
                    <h3>Sepatu Lari Wanita Lightweight</h3>
                    <p>Alat gym multifungsi untuk pria yang ingin meningkatkan kekuatan tubuh secara maksimal di rumah atau gym.</p>
                    <p class="price">Rp 500.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Sepatu Lari Wanita Lightweight">
                        <input type="hidden" name="price" value="500000">
                        <input type="hidden" name="product_id" value="3">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 4: Tas Olahraga -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/e0/0a/c1/e00ac1b1abc5018393a88e46d3cacdb2.jpg" alt="Tas Olahraga">
                <div class="product-content">
                    <h3>Matras Yoga Anti-Selip</h3>
                    <p>Matras yoga berkualitas tinggi dengan permukaan anti-selip, cocok untuk segala jenis latihan seperti yoga, pilates, dan stretching.</p>
                    <p class="price">Rp 250.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Matras Yoga Anti-Selip">
                        <input type="hidden" name="price" value="250000">
                        <input type="hidden" name="product_id" value="4">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 5: Sepeda MTB -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/01/cc/b5/01ccb5fae9f46c93955b0387ac770278.jpg" alt="Sepeda MTB">
                <div class="product-content">
                    <h3>Jersey Training Wanita</h3>
                    <p>Jersey dengan bahan cepat kering, memiliki desain modern dan pas di badan. Cocok untuk aktivitas di dalam dan luar ruangan..</p>
                    <p class="price">Rp 180.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Jersey Training Wanita">
                        <input type="hidden" name="price" value="180000">
                        <input type="hidden" name="product_id" value="5">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 6: Baju Lari Pria -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/c9/2c/70/c92c702a4c76e141620ed321bc2e1ce5.jpg" alt="Baju Lari Pria">
                <div class="product-content">
                    <h3>Dumbbell Neoprene (2 Kg)</h3>
                    <p>Dumbbell kecil dengan lapisan neoprene, nyaman di genggaman, cocok untuk latihan kekuatan ringan seperti aerobik dan angkat beban.</p>
                    <p class="price">Rp 100.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Dumbbell Neoprene (2 Kg)">
                        <input type="hidden" name="price" value="100000">
                        <input type="hidden" name="product_id" value="6">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
