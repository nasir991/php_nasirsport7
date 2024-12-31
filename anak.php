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
        <h1>Produk Olahraga Khusus ANAK</h1>
    </header>

    <div class="container">
        <div class="products">
            <!-- Produk 1: Sepatu Futsal -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/1e/f2/ef/1ef2ef1fa0bd5624c89f3da321df432e.jpg" alt="Sepatu Futsal">
                <div class="product-content">
                    <h3>Sepatu Lari Anak ComfortRun</h3>
                    <p>Sepatu lari ringan dengan sol anti-slip, dirancang untuk anak-anak aktif. Material bernapas dan nyaman untuk digunakan sepanjang hari.   .</p>
                    <p class="price">Rp 250.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Sepatu Lari Anak ComfortRun>
                        <input type="hidden" name="price" value="250000">
                        <input type="hidden" name="product_id" value="1">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 2: Jersey Badminton -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/2d/e3/3a/2de33a5888e3c0ca50e36fb66f86c3db.jpg" alt="Jersey Badminton">
                <div class="product-content">
                    <h3>Setelan Olahraga MiniChamp</h3>
                    <p>Setelan olahraga terdiri dari kaos berbahan ringan dan celana pendek elastis. Cocok untuk aktivitas olahraga sekolah atau bermain.</p>
                    <p class="price">Rp 180.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Setelan Olahraga MiniChamp">
                        <input type="hidden" name="price" value="180000">
                        <input type="hidden" name="product_id" value="2">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 3: Alat Gym -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/ec/be/09/ecbe09c7dde3371fdf9cb999befa225a.jpg" alt="Alat Gym">
                <div class="product-content">
                    <h3>Bola Sepak Anak SoftPlay</h3>
                    <p>Bola sepak ukuran kecil dengan bahan lembut yang aman digunakan oleh anak-anak usia 5-10 tahun. Cocok untuk bermain di taman atau halaman rumah.</p>
                    <p class="price">Rp 90.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Bola Sepak Anak SoftPlay">
                        <input type="hidden" name="price" value="90000">
                        <input type="hidden" name="product_id" value="3">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 4: Tas Olahraga -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/79/72/bc/7972bc9eb1b1287929451827acac1288.jpg" alt="Tas Olahraga">
                <div class="product-content">
                    <h3>Matras Yoga Anak FunFit</h3>
                    <p>Matras yoga khusus anak dengan desain warna-warni dan ukuran yang lebih kecil. Cocok untuk yoga, stretching, atau senam anak-anak.</p>
                    <p class="price">Rp 120.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Matras Yoga Anak FunFit">
                        <input type="hidden" name="price" value="120000">
                        <input type="hidden" name="product_id" value="4">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 5: Sepeda MTB -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/92/6d/10/926d10ffcc3f8e7cb748ea1fc18b3aee.jpg" alt="Sepeda MTB">
                <div class="product-content">
                    <h3>Helm Sepeda MiniShield</h3>
                    <p>Helm sepeda ringan dengan ventilasi yang baik. Dirancang dengan perlindungan ekstra untuk anak saat bermain sepeda atau skating.</p>
                    <p class="price">Rp 200.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Helm Sepeda MiniShield">
                        <input type="hidden" name="price" value="200000">
                        <input type="hidden" name="product_id" value="5">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>

            <!-- Produk 6: Baju Lari Pria -->
            <div class="product">
                <img src="https://i.pinimg.com/736x/d5/ec/14/d5ec147f77d22f4035d2dac57c7f41b5.jpg" alt="Baju Lari Pria">
                <div class="product-content">
                    <h3>Tas Olahraga Anak SportyPack</h3>
                    <p> Tas olahraga kecil yang ringan dengan kompartemen khusus untuk sepatu dan botol minum. Cocok untuk membawa perlengkapan olahraga anak.</p>
                    <p class="price">Rp 150.000</p>
                    <form action="pembayaran.php" method="POST">
                        <input type="hidden" name="product_name" value="Tas Olahraga Anak SportyPack">
                        <input type="hidden" name="price" value="150000">
                        <input type="hidden" name="product_id" value="6">
                        <button type="submit">Beli Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
