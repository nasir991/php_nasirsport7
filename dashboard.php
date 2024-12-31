<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportaways Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #002244; /* Biru gelap */
            color: #fff;
        }
        nav {
            background-color: #007bff;
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        nav .logo {
            font-size: 1.5em;
            font-weight: bold;
        }
        nav .menu {
            display: flex;
            gap: 20px;
        }
        nav .menu a {
            color: #fff;
            text-decoration: none;
            font-size: 1em;
        }
        nav .menu a:hover {
            text-decoration: underline;
        }
        nav .search-bar {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        nav .search-bar input[type="text"] {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 1em;
        }
        nav .search-bar button {
            padding: 8px 12px;
            background-color: #0056b3;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        nav .search-bar button:hover {
            background-color: #003d82;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background-color: #003366; /* Biru terang */
            border-radius: 8px;
        }
        .video-container {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .video-container iframe {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 8px;
        }
        .category {
            margin-bottom: 20px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }
        .category a.category-button {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            display: inline-block;
        }
        .category a.category-button:hover {
            background-color: #0056b3;
        }
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }
        .product {
            background-color: rgb(9, 10, 10);
            border-radius: 5px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .product h4 {
            margin: 10px 0;
            font-size: 1em;
            color: #333;
        }
        .product button {
            margin-top: 10px;
            padding: 10px 15px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        .product button:hover {
            background-color: #0056b3;
        }
        .product a button {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Hilangkan garis bawah dari link */
        }
        .product a button:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <nav>
        <div class="logo">nasirsport7</div>
        <div class="menu">
            <a href="logout.php">Logout</a>
            <a href="profil.php">Profil</a>
            <a href="tentang.php">Tentang kami</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="nasirsport7">
            <button>Cari</button>
        </div>
    </nav>
    <div class="container">
        <!-- Video -->
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/y4pySZKNkAk?autoplay=1&mute=1&loop=1&playlist=y4pySZKNkAk" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>

        <!-- Categories -->
        <div class="category">
            <a href="" class="category-button">Shop By nasirsport7</a>
            <a href="pria.php" class="category-button">Pria</a>
            <a href="wanita.php" class="category-button">Wanita</a>
            <a href="anak.php" class="category-button">Anak</a>
            <a href="alat-olahraga.php" class="category-button">Alat Olahraga</a>
        </div>

        <!-- Products -->
        <div class="products">
    <div class="product">
        <img src="https://i.pinimg.com/736x/d1/42/41/d14241dde97176259e6701b9e249daf0.jpg" alt="Produk 1">
        <h4>Sepatu Futsal</h4>
        <a href="sepatu-futsal.php">
            <button>Beli Sekarang</button>
        </a>
    </div>
    <div class="product">
        <img src="https://i.pinimg.com/736x/17/58/21/1758213bf20493917f9fcb4daae025e7.jpg" alt="Produk 2">
        <h4>Jersey Badminton</h4>
        <a href="jersey-badminton.php">
            <button>Beli Sekarang</button>
        </a>
    </div>
    <div class="product">
        <img src="https://i.pinimg.com/736x/7f/17/41/7f17416bfaf2c4e8602e917920e5dcac.jpg" alt="Produk 3">
        <h4>Alat Gym</h4>
        <a href="alat-gym.php">
            <button>Beli Sekarang</button>
        </a>
    </div>
</div>

    </div>
</body>
</html>
