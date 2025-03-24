<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Temukan kost berkualitas di KostKu! Pilihan kost dengan fasilitas terbaik, harga terjangkau, dan lokasi strategis. Jelajahi sekarang!">
    <title>KostKu | E-commerce Penyewaan Kos</title>
   <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
</noscript>

    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
<div class="container">
    <!-- Header -->
    <header>
    <div class="logo">
        <a href="index" style="text-decoration: none; color: inherit;">KostKu</a>
    </div>
    <div class="search-bar">
        <form action="search" method="get">
            <input type="text" name="q" placeholder="Cari kos...">
            <button type="submit">Cari</button>
        </form>
    </div>
    <div class="actions">
        <div class="profile">
            <a href="profile" class="profile-link">
                <span class="profile-icon">👤</span>
                <div class="profile-popup">
                    <p><strong>Halo, John Doe</strong></p>
                    <p>Email: johndoe@example.com</p>
                    <a href="logout.php" class="logout-btn">Logout</a>
                </div>
            </a>
        </div>
        <a href="login">Login</a>
        <a href="register">Register</a>
    </div>
</header>


    <!-- Hero Section -->
    <div class="hero">
        <h1>Temukan Kost Berkualitas</h1>
        <p>Beragam pilihan kost dengan fasilitas terbaik, harga terjangkau, dan lokasi strategis.</p>
        <button>Jelajahi Sekarang</button>
    </div>

    <!-- Section Tawaran Terbaru -->
    <div class="latest-offers">
        <h2>Tawaran Terbaru</h2>
        <p>Jangan lewatkan kos terbaru kami yang memiliki lokasi strategis, harga terjangkau, dan fasilitas lengkap.</p>
    </div>

    <!-- Kos Listings -->
    <div class="listing">
    <div class="card">
        <a href="produk/kos-mewah" style="text-decoration: none; color: inherit;">
            <img src="kos1.jpg" alt="Kos Mewah">
            <div class="info">
                <h3>Kos Mewah</h3>
                <p>Kos nyaman dengan fasilitas lengkap dan keamanan 24 jam.</p>
                <span class="price">Rp 2.000.000/bulan</span>
            </div>
        </a>
    </div>

    <div class="card">
        <a href="produk/kos-ekonomis" style="text-decoration: none; color: inherit;">
            <img src="kos2.jpg" alt="Kos Ekonomis">
            <div class="info">
                <h3>Kos Ekonomis</h3>
                <p>Kos murah dengan fasilitas dasar, cocok untuk mahasiswa.</p>
                <span class="price">Rp 800.000/bulan</span>
            </div>
        </a>
    </div>

    <div class="card">
        <a href="produk/kos-elite" style="text-decoration: none; color: inherit;">
            <img src="kos3.jpg" alt="Kos Elite">
            <div class="info">
                <h3>Kos Elite</h3>
                <p>Kos premium dengan fasilitas hotel dan lokasi strategis.</p>
                <span class="price">Rp 3.500.000/bulan</span>
            </div>
        </a>
    </div>
</div>


    <!-- Footer -->
    <footer>
        <p>&copy; 2024 KostKu. All rights reserved. <a href="#">Privacy Policy</a></p>
    </footer>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const profile = document.getElementById("profile");
        const profilePopup = document.getElementById("profilePopup");

        profile.addEventListener("mouseenter", () => {
            profilePopup.classList.add("active");
        });

        profile.addEventListener("mouseleave", () => {
            profilePopup.classList.remove("active");
        });
    });
</script>
</body>
</html>