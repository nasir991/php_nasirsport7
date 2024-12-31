<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - NasirSport7</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3a7bd5, #00d2ff);
            color: white;
        }

        header {
            background-color: #003c8f;
            text-align: center;
            padding: 1rem;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
        }

        .card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 2rem;
            max-width: 800px;
            text-align: center;
        }

        .card h2 {
            margin: 0;
            font-size: 2rem;
            color: #003c8f;
        }

        .card p {
            font-size: 1.2rem;
            color: #ffffff;
            text-align: justify;
        }

        .actions {
            margin-top: 2rem;
        }

        button {
            background-color: #0079ff;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            color: white;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover {
            background-color: #005bb5;
        }

        footer {
            margin-top: 2rem;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tentang Kami</h1>
    </header>
    <main>
        <div class="card">
            <h2>NasirSport7</h2>
            <p>NasirSport7 adalah perusahaan yang berdedikasi untuk menyediakan perlengkapan olahraga berkualitas tinggi dan layanan pelanggan terbaik. Berdiri sejak tahun 2010, kami telah berkomitmen untuk menjadi mitra andalan bagi para atlet dan pecinta olahraga di seluruh Indonesia.</p>
            <p>Keunggulan kami terletak pada kualitas produk yang terjamin, harga yang kompetitif, dan layanan pelanggan yang responsif. Kami percaya bahwa olahraga adalah kunci hidup sehat dan produktif, sehingga kami selalu menghadirkan inovasi baru untuk memenuhi kebutuhan pelanggan kami.</p>
            <p>Perusahaan ini memiliki lokasi strategis di <b>Bandung Barat</b>, yang memungkinkan kami untuk menjangkau pelanggan kami dengan cepat dan efisien.</p>
            <p><b>Alamat:</b> Bandung Barat</p>
            <p><b>No Perusahaan:</b> 0123189</p>
            <div class="actions">
                <button onclick="goToDashboard()">Kembali ke Dashboard</button>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 NasirSport7. Semua Hak Dilindungi.</p>
    </footer>
    <script>
        function goToDashboard() {
            // Redirect to the dashboard page (replace 'dashboard.php' with your actual dashboard URL)
            window.location.href = 'dashboard.php';
        }
    </script>
</body>
</html>
