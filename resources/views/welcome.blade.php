<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Ikan - Pesanan Segar Langsung ke Rumah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: white;
        }
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(0,0,0,0.7);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }
        .navbar-brand img { height: 50px; }
        .nav-links { display: flex; gap: 1.5rem; list-style: none; }
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }
        .nav-links a:hover { color: #FFD700; }
        .hero {
            height: 100vh;
            background: url('https://via.placeholder.com/1920x1080?text=Fresh+Seafood') center/cover no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            padding-top: 80px;
        }
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.6);
        }
        .logo-box {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 2rem;
            max-width: 300px;
        }
        .logo-box img {
            width: 100%;
            border-radius: 10px;
        }
        .section-title { font-size: 2.5rem; font-weight: bold; margin-bottom: 0.5rem; }
        .divider {
            width: 100px;
            height: 2px;
            background: white;
            margin: 1rem auto;
            position: relative;
        }
        .divider::after {
            content: '🐟';
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.4rem;
        }
        .address {
            font-size: 1.1rem;
            margin-top: 1rem;
        }
        .contact-float {
            position: fixed;
            right: 20px;
            bottom: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 1000;
        }
        .contact-btn {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.4rem;
            color: white;
        }
        .btn-whatsapp { background: #25D366; }
        .btn-phone { background: #3B5998; }
        .footer {
            background: #222;
            color: #eee;
            padding: 2rem;
            text-align: center;
            margin-top: 2rem;
        }
        .footer p { margin: 0.5rem 0; }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="navbar-brand">
        <img src="https://via.placeholder.com/150x50?text=Logo" alt="Logo">
    </div>
    <ul class="nav-links">
        <li><a href="/welcome">HOME</a></li>
        <li><a href="#">TENTANG</a></li>
        <li><a href="/products">PRODUK</a></li>
        <li><a href="#">KONTAK</a></li>
        <li>
            <a href="https://wa.me/6285223519678?text=Halo%2C%20saya%20ingin%20pesan%20ikan!" target="_blank">
                <i class="fas fa-shopping-cart"></i> PESAN SEKARANG
            </a>
        </li>
    </ul>
</nav>

<section class="hero">
    <div class="logo-box">
        <img src="https://via.placeholder.com/200x200?text=www.pesanikan.id" alt="Pesan Ikan">
    </div>
    <h1 class="section-title">Pesan Ikan</h1>
    <div class="divider"></div>
    <p class="address">Delta Regency Sidoarjo, Perum Mentari Bumi Sejahtera AY-38 Sidoarjo</p>
</section>

<div class="contact-float">
    <a href="tel:+6285223519678" class="contact-btn btn-phone">
        <i class="fas fa-phone"></i>
    </a>
    <a href="https://wa.me/6285223519678" target="_blank" class="contact-btn btn-whatsapp">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

<div class="footer">
    <p><strong>TEL / WA : 085223519678</strong></p>
    <p>Selamat datang di platform online kami, tempat terpercaya untuk pesan ikan dan bahan baku makanan laut berkualitas tinggi.</p>
    <p>Jangan ragu menghubungi kami untuk informasi lebih lanjut, pemesanan, atau pertanyaan seputar produk-produk kami.</p>
</div>

</body>
</html>