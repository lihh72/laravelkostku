<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian - KostKu</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
/* Filter Section */
.filter-container {
    display: flex;
    justify-content: left;
    margin: 20px 0;
}

.filter-container button {
    font-size: 16px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #EE9B00;
    padding: 10px 20px;
    border: 3px solid #0A0A0A;
    border-radius: 12px;
    cursor: pointer;
    transition: transform 0.2s ease, background-color 0.3s ease;
}

.filter-container button:hover {
    transform: translateY(-3px);
    background-color: #FF7A00;
}

/* Modal Styles */
/* Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    padding-top: 40px;
    animation: fadeIn 0.3s ease-in-out;
}

.modal-content {
    background-color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    border-radius: 12px;
    border: 3px solid #0A0A0A;
    box-shadow: 6px 6px 0px 0px #0A0A0A;
    width: 85%;
    max-width: 450px;
    max-height: 75vh;
    overflow-y: auto;
    transition: transform 0.3s ease-in-out;
}

/* Modal Close Button */
.modal-close {
    color: #333;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s ease;
}

.modal-close:hover {
    color: #FF7A00;
}

/* Modal Header */
.modal h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 16px;
}

/* Form Inputs */
.modal form input[type="number"], 
.modal form input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 16px;
    border-radius: 6px;
    border: 2px solid #EEE;
    font-size: 14px;
    transition: border-color 0.3s ease;
}

.modal form input[type="number"]:focus, 
.modal form input[type="text"]:focus {
    border-color: #FF7A00;
    outline: none;
}

/* Checkbox */
.modal form label {
    display: block;
    margin: 8px 0;
    font-size: 14px;
}

.modal form input[type="checkbox"] {
    margin-right: 6px;
}

/* Submit Button */
.modal form button {
    width: 100%;
    padding: 10px;
   
    background-color: #EE9B00;
    color: #fff;
    font-size: 16px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.modal form button:hover {
    background-color: #FF7A00;
}

/* Animation for Modal Fade In */
@keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

/* Responsif untuk layar kecil */
@media (max-width: 768px) {
    .modal-content {
        width: 90%;
    }
}

.facilities-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2px;
    margin: 4px 0;
}

.facility-item {
    font-size: 14px;
    line-height: 1.2;
}

</style>

</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href="index" style="text-decoration: none; color: inherit;">KostKu</a>
            </div>
            <div class="search-bar">
                <form action="search" method="get">
                    <input type="text" name="q" placeholder="Cari kos..." required>
                    <button type="submit">Cari</button>
                </form>
            </div>
            <div class="actions">
                <a href="login">Login</a>
                <a href="register">Register</a>
            </div>
        </header>

        <!-- Filter Section -->
        <div class="filter-container">
            <button id="filter-btn">Filter</button>
        </div>

        <!-- Modal Filter -->
        <div id="filter-modal" class="modal">
            <div class="modal-content">
                <span class="modal-close">&times;</span>
                <h3>Filter</h3>
                <form action="search" method="get">
                    <div>
                        <label for="price_min">Harga Minimum:</label>
                        <input type="number" id="price_min" name="price_min" placeholder="Contoh: 1000000">
                    </div>
                    <div>
                        <label for="price_max">Harga Maksimum:</label>
                        <input type="number" id="price_max" name="price_max" placeholder="Contoh: 5000000">
                    </div>
                    <div class="facilities-container">
                        <div class="facility-item">
                            <label><input type="checkbox" name="facilities[]" value="AC"> AC</label>
                        </div>
                        <div class="facility-item">
                            <label><input type="checkbox" name="facilities[]" value="Kamar Mandi Dalam"> Kamar Mandi Dalam</label>
                        </div>
                        <div class="facility-item">
                            <label><input type="checkbox" name="facilities[]" value="Wi-Fi"> Wi-Fi</label>
                        </div>
                        <div class="facility-item">
                            <label><input type="checkbox" name="facilities[]" value="Laundry"> Laundry</label>
                        </div>
                        <div class="facility-item">
                            <label><input type="checkbox" name="facilities[]" value="Dapur Umum"> Dapur Umum</label>
                        </div>
                    </div>
                    <button type="submit">Terapkan Filter</button>
                </form>
            </div>
        </div>

        <!-- Search Results -->
        <div class="search-results">
            <h2>Hasil Pencarian</h2>
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
        </div>

        <!-- Footer -->
        <footer>
            <p>&copy; 2024 KostKu. All rights reserved. <a href="#">Privacy Policy</a></p>
        </footer>
    </div>

    <script>
        const modal = document.getElementById('filter-modal');
        const filterBtn = document.getElementById('filter-btn');
        const closeModal = document.querySelector('.modal-close');

        filterBtn.onclick = () => modal.style.display = 'block';
        closeModal.onclick = () => modal.style.display = 'none';
        window.onclick = (event) => {
            if (event.target == modal) modal.style.display = 'none';
        };
    </script>
</body>
</html>
