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
        <h1>Produk Olahraga Khusus Alat olahraga</h1>
    </header>

    <div class="container">
        <div class="products">
            <!-- Produk 1: Sepatu Futsal -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/1c/79/46/1c79465b7305564f6894285cc521b405.jpg" alt="Sepatu Futsal">
                <div class="product-content">
                    <h3>Dumbbell Set Adjustable 20kg</h3>
                    <p>Set dumbbell yang dapat disesuaikan hingga 20 kg, cocok untuk latihan kekuatan di rumah. Dilengkapi dengan pegangan ergonomis dan pelat besi yang tahan lama..</p>
                    <p class="price">Rp 750.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Dumbbell Set Adjustable 20kg">
                        <input type="hidden" name="price" value="750000">
                        <input type="hidden" name="product_id" value="1">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 2: Jersey Badminton -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/e7/d9/46/e7d946253c06395da5fe6aca79b6fcbf.jpg" alt="Jersey Badminton">
                <div class="product-content">
                    <h3>Matras Yoga Premium Non-Slip</h3>
                    <p> Matras yoga premium berbahan TPE, anti-slip, ringan, dan mudah dibawa. Cocok untuk yoga, pilates, dan latihan peregangan lainnya.</p>
                    <p class="price">Rp 250.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Matras Yoga Premium Non-Slip">
                        <input type="hidden" name="price" value="250000">
                        <input type="hidden" name="product_id" value="2">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 3: Alat Gym -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/9b/c7/58/9bc7587f2a5bc9b6be1f370300202f72.jpg" alt="Alat Gym">
                <div class="product-content">
                    <h3>Resistance Band Set 11 Pcs</h3>
                    <p>Set resistance band lengkap dengan berbagai tingkat resistensi, dilengkapi pegangan, ankle straps, dan tas untuk beragam jenis latihan.</p>
                    <p class="price">Rp 350.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Resistance Band Set 11 Pcs">
                        <input type="hidden" name="price" value="350000">
                        <input type="hidden" name="product_id" value="3">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 4: Tas Olahraga -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/9b/45/dc/9b45dc7262a9e7f7a34093e1a2814d5e.jpg" alt="Tas Olahraga">
                <div class="product-content">
                    <h3>Bola Pilates Anti-Burst 65cm</h3>
                    <p>Bola pilates dengan teknologi anti-burst, ideal untuk meningkatkan keseimbangan, fleksibilitas, dan latihan core. Termasuk pompa untuk pengisian mudah.</p>
                    <p class="price">Rp 120.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Bola Pilates Anti-Burst 65cm">
                        <input type="hidden" name="price" value="180000">
                        <input type="hidden" name="product_id" value="4">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 5: Sepeda MTB -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/52/4a/1c/524a1cdff0e6517396b2b9192d24c787.jpg" alt="Sepeda MTB">
                <div class="product-content">
                    <h3>Skipping Rope Speed Pro Adjustable</h3>
                    <p>Tali skipping profesional dengan panjang yang dapat disesuaikan. Dirancang untuk latihan kardio dan meningkatkan koordinasi. </p>
                    <p class="price">Rp 100.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Skipping Rope Speed Pro Adjustable">
                        <input type="hidden" name="price" value="100000">
                        <input type="hidden" name="product_id" value="5">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 6: Baju Lari Pria -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/37/ce/59/37ce5986a846ce239b098fee97d68da8.jpg" alt="Baju Lari Pria">
                <div class="product-content">
                    <h3>Pull-Up Bar Doorway Adjustable</h3>
                    <p> Alat pull-up yang mudah dipasang di kusen pintu tanpa sekrup. Cocok untuk berbagai jenis latihan seperti chin-ups dan leg raises.</p>
                    <p class="price">Rp 450.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Pull-Up Bar Doorway Adjustable">
                        <input type="hidden" name="price" value="450000">
                        <input type="hidden" name="product_id" value="6">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
