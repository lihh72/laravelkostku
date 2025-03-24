<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kos Elite - KostKu</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles2.css') }}">
</head>
<body>

<header>
    <div class="logo">
        <a href="{{ url('index') }}" style="text-decoration: none; color: inherit;">KostKu</a>
    </div>
    <div class="search-bar">
        <form action="search.html" method="get">
            <input type="text" name="q" placeholder="Cari kos...">
            <button type="submit">Cari</button>
        </form>
    </div>
    <div class="actions">
        <a href="{{ url('login') }}">Login</a>
        <a href="{{ url('register') }}">Register</a>
    </div>
</header>

<div class="container">
    <div class="section">
        <div class="product">
            <div class="image-section">
                <img class="main-image" src="{{ asset('kos3.jpg') }}" alt="Kos Elite">
            </div>
            <div class="details">
                <h1>Kos Elite</h1>
                <p class="price">Rp 3.500.000/bulan</p>

                <div class="rent-button">
                    <button id="openModal">Mulai Penyewaan</button>
                </div>

                <!-- Modal -->
                <div id="rentalModal" class="modal">
                    <div class="modal-content">
                        <span class="close" id="closeModal">&times;</span>
                        <h2>Penyewaan Kos</h2>
                            <label for="rental_start">Tanggal Mulai:</label>
                            <input type="date" name="rental_start" id="rental_start" required min="2025-03-25">

                            <label for="duration">Durasi Sewa:</label>
                            <select name="duration" id="duration" required>
                                <option value="6">6 Bulan</option>
                                <option value="12">12 Bulan</option>
                                <option value="18">18 Bulan</option>
                                <option value="24">24 Bulan</option>
                            </select>
                            <a href="{{ url('konfirmasi2') }}">
                            <button type="submit">Sewa Sekarang</button> </a>
                        </form>
                    </div>
                </div>

                <div class="facilities-container">
                    <h3>Fasilitas:</h3>
                    <div class="facilities">
                        <div class="facility-item">AC</div>
                        <div class="facility-item">TV Kabel</div>
                        <div class="facility-item">Kamar Mandi Dalam</div>
                        <div class="facility-item">WiFi Cepat</div>
                        <div class="facility-item">Keamanan 24 Jam</div>
                        <div class="facility-item">Laundry</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <h3>Lokasi:</h3>
        <div class="map">
            <iframe src="https://maps.google.com/maps?q=jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen=""></iframe>
        </div>

        <h2>Deskripsi Lengkap</h2>
        <p>
            Kos Elite adalah pilihan sempurna bagi mereka yang menginginkan kenyamanan terbaik. 
            Dengan fasilitas premium seperti AC, TV Kabel, WiFi cepat, keamanan 24 jam, serta layanan laundry, 
            menjadikan kos ini setara dengan hotel berbintang.
        </p>
    </div>
</div>

<footer>
    &copy; 2024 KostKu. All rights reserved.
</footer>

</body>
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
        }, 10);
    }
    
    // Ketika tombol close (X) diklik, tutup modal
    closeModalButton.onclick = function() {
        modal.classList.remove("show");
        modal.style.opacity = "0";
        setTimeout(function() {
            modal.style.display = "none";
        }, 300);
    }
    
    // Ketika pengguna mengklik di luar modal, tutup modal
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.classList.remove("show");
            modal.style.opacity = "0";
            setTimeout(function() {
                modal.style.display = "none";
            }, 300);
        }
    }
    </script>
    
    </body>
    </html>
