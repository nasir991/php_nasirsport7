<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pembuat Web</title>
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
            max-width: 400px;
            text-align: center;
        }

        .card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid #003c8f;
            margin-bottom: 1rem;
        }

        .card h2 {
            margin: 0;
            font-size: 1.8rem;
            color: #003c8f;
        }

        .card p {
            font-size: 1rem;
            color: #ffffff;
        }

        .actions {
            margin-top: 1rem;
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

        .social-links a {
            margin: 0 5px;
            color: white;
            text-decoration: none;
        }

        .social-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Profil Pembuat Web</h1>
    </header>
    <main>
        <div class="card">
            <img src="https://i.pinimg.com/736x/53/67/13/536713beb0bb33829a1813a77f84a162.jpg"style="width: 300px; height: 300px; border-radius: 10px; margin-top: 1rem;">
            <h2 id="name">Muhammad Nasir</h2>
            <p id="bio">Hidup yang bagus dan menarik</p>
            <p><b>Umur:</b> 20</p>
            <p><b>Hobi:</b> Gaming, Editing</p>
            <p><b>Alamat:</b> Bandung, Jawa Barat</p>
            <p><b>Warna Favorit:</b> Putih</p>
            <div class="social-links">
                <p><b>Media Sosial:</b></p>
                <a href="https://wa.me/6281234567890" target="_blank">WhatsApp</a>
                <a href="https://www.tiktok.com/@muhammadnasir" target="_blank">TikTok</a>
                <a href="https://www.instagram.com/muhammadnasir" target="_blank">Instagram</a>
            </div>
            <div class="actions">
                <button onclick="goToDashboard()">Kembali ke Dashboard</button>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Pembuat Web Profesional</p>
    </footer>
    <script>
        function goToDashboard() {
            // Redirect to the dashboard page (replace 'dashboard.php' with your actual dashboard URL)
            window.location.href = 'dashboard.php';
        }
    </script>
</body>
</html>
