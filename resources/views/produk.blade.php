<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="<?= htmlspecialchars($kos['name']) ?> - KostKu">
    <meta property="og:description" content="<?= htmlspecialchars(substr($kos['full_description'], 0, 150)) ?>...">
    <meta property="og:url" content="https://kostku.web.id/kos/<?= htmlspecialchars($slug) ?>">
    <meta property="og:type" content="website">
    <title><?= htmlspecialchars($kos['name']) ?> - KostKu</title>
    <base href="https://kostku.web.id/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
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
        <?php if ($is_logged_in): ?>
            <div class="profile">
                <a href="profile" class="profile-link">
                    <span class="profile-icon">👤</span>
                    <div class="profile-popup">
                        <p><strong>Halo, <?= htmlspecialchars($username) ?></strong></p>
                        <p>Email: <?= htmlspecialchars($_SESSION['email'] ?? 'Tidak tersedia') ?></p>
                        <a href="logout.php" class="logout-btn">Logout</a>
                    </div>
                </a>
            </div>
        <?php else: ?>
            <a href="login">Login</a>
            <a href="register">Register</a>
        <?php endif; ?>
    </div>
</header>

<div class="container">
    <div class="section">
        <div class="product">
            <div class="image-section">
           <img class="main-image" src="proxy.php?url=https://owner.kostku.web.id/<?= htmlspecialchars($kos['image']) ?>" alt="<?= htmlspecialchars($kos['name']) ?>">

            </div>
            <div class="details">
                <h1><?= htmlspecialchars($kos['name']) ?></h1>
                <p class="price">Rp <?= number_format($kos['price'], 0, ',', '.') ?>/bulan</p>

                <?php if ($is_logged_in): ?>
                    <div class="rent-button">
                        <button id="openModal">Mulai Penyewaan</button>
                    </div>

                    <!-- Modal -->
                    <div id="rentalModal" class="modal">
                        <div class="modal-content">
                            <span class="close" id="closeModal">&times;</span>
                            <h2>Penyewaan Kos</h2>
                            <form method="post">
                                <label for="rental_start">Tanggal Mulai:</label>
                               <input type="date" name="rental_start" id="rental_start" required min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>">


                                <label for="duration">Durasi Sewa:</label>
                                <select name="duration" id="duration" required>
                                    <option value="6">6 Bulan</option>
                                    <option value="12">12 Bulan</option>
                                    <option value="18">18 Bulan</option>
                                    <option value="24">24 Bulan</option>
                                </select>
                                <button type="submit">Sewa Sekarang</button>
                            </form>
                        </div>
                    </div>
                <?php else: ?>
                    <p>Silakan <a href="login">login</a> untuk menyewa.</p>
                <?php endif; ?>

                <div class="facilities-container">
    <h3>Fasilitas:</h3>
    <div class="facilities">
        <?php
            $facilities = explode(',', $kos['facilities']);
            foreach ($facilities as $index => $facility) {
                echo '<div class="facility-item">' . htmlspecialchars(trim($facility)) . '</div>';
                if (($index + 1) % 2 == 0) {
                    echo '<div class="clear"></div>'; // Setiap 2 fasilitas, beri clear
                }
            }
        ?>
    </div>
</div>

        </div>
    </div>

    <div class="section">
        <h3>Lokasi:</h3>
        <div class="map">
            <iframe src="<?= htmlspecialchars($kos['map_location']) ?>" allowfullscreen=""></iframe>
        </div>

        <h2>Deskripsi Lengkap</h2>
        <p><?= nl2br(htmlspecialchars($kos['full_description'])) ?></p>
    </div>
</div>

<footer>
    &copy; 2024 KostKu. All rights reserved.
</footer>

<script>
// Ambil elemen modal dan tombol
var modal = document.getElementById("rentalModal");
var openModalButton = document.getElementById("openModal");
var closeModalButton = document.getElementById("closeModal");

document.querySelector('form').addEventListener('submit', function(e) {
    const rentalStartInput = document.getElementById('rental_start');
    const selectedDate = new Date(rentalStartInput.value);
    const today = new Date();

    // Atur waktu untuk memastikan hanya membandingkan tanggal
    today.setHours(0, 0, 0, 0);
    selectedDate.setHours(0, 0, 0, 0);

    if (selectedDate < today) {
        e.preventDefault();
        alert('Tanggal mulai tidak boleh sebelum hari ini.');
    }
});

// Ketika tombol "Mulai Penyewaan" diklik, buka modal
openModalButton.onclick = function() {
    modal.classList.add("show");
    modal.style.display = "block";
    setTimeout(function() {
        modal.style.opacity = "1";
    }, 10); // Penundaan kecil untuk memulai animasi
}

// Ketika tombol close (X) diklik, tutup modal
closeModalButton.onclick = function() {
    modal.classList.remove("show");
    modal.style.opacity = "0";
    setTimeout(function() {
        modal.style.display = "none";
    }, 300); // Penundaan agar animasi selesai
}

// Ketika pengguna mengklik di luar modal, tutup modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.classList.remove("show");
        modal.style.opacity = "0";
        setTimeout(function() {
            modal.style.display = "none";
        }, 300); // Penundaan agar animasi selesai
    }
}

</script>
</body>
</html>