<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Website Fadhlan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom right, #fdfbfb, #ebedee);
            color: #333;
            line-height: 1.6;
        }
        header {
            background-color: #1e88e5;
            color: white;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        nav {
            background-color: #1565c0;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-weight: 500;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 0 20px;
        }
        .hero {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.05);
            text-align: center;
        }
        .hero h2 {
            margin-bottom: 15px;
            color: #0d47a1;
        }
        .hero p {
            font-size: 18px;
            color: #555;
        }
        footer {
            background-color: #eeeeee;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            color: #777;
        }
    </style>
</head>
<body>

    <header>
        <h1>Selamat Datang di Website</h1>
        <p>Tempat belajar HTML, CSS, dan Git versi pemula</p>
    </header>

    <nav>
        <a href="home.html">Beranda</a>
        <a href="tentang.html">Tentang</a>
        <a href="kontak.html">Kontak</a>
    </nav>

    <div class="container">
        <div class="hero">
            <h2>Halo, semuanya! 👋</h2>
            <p>Ini adalah halaman utama dari website latihan saya. Di sini saya belajar menggabungkan kemampuan HTML dan Git untuk membangun website sederhana. Semoga kalian juga semangat belajar!</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Website. Dibuat dengan semangat dan kopi ☕</p>
    </footer>

</body>
</html>
