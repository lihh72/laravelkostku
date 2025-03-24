<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil - KostKu</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
  <style>
    form#profile-form {
    display: none; /* Hide form initially */
    flex-direction: column;
    gap: 15px;
}


  </style>
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
                    <p><strong>Halo, JohnDoe123</strong></p>
                    <p>Email: johndoe@example.com</p>
                    <a href="logout.php" class="logout-btn">Logout</a>
                </div>
            </a>
        </div>
        <a href="login">Login</a>
        <a href="register">Register</a>
    </div>
    
</header>
    <div class="profile-box">
      <h1 class="title">Profil</h1>
      <p class="subtitle">Laman Profil</p>
      
      <div class="profile-info" id="profile-info">
    <div><span>Nama Lengkap:</span> <span>John Doe</span></div>
    <div><span>Username:</span> <span>johndoe123</span></div>
    <div><span>Alamat Email:</span> <span>johndoe@example.com</span></div>
    <div><span>Nomor Telepon:</span> <span>+62 812 3456 7890</span></div>
    <div><span>Kata Sandi:</span> <span>********</span></div>
</div>

      
<form id="profile-form" enctype="multipart/form-data" method="POST">
    <div>
        <label for="name">Nama Lengkap</label>
        <input type="text" id="name" name="name" value="John Doe" placeholder="Masukkan nama lengkap" required>
    </div>
    
    <div>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="johndoe123" placeholder="Masukkan username" required>
    </div>
    
    <div>
        <label for="email">Alamat Email</label>
        <input type="email" id="email" name="email" value="johndoe@example.com" placeholder="Masukkan alamat email" required>
    </div>

    <div>
        <label for="phone">Nomor Telepon</label>
        <input type="tel" id="phone" name="phone" value="+62 812 3456 7890" placeholder="Masukkan nomor telpon" required>
    </div>
</form>


        <div>
          <label for="password">Kata Sandi (Kosongkan jika tidak ingin mengubah)</label>
          <input type="password" id="password" name="password" placeholder="Masukkan kata sandi baru">
        </div>

        <button type="submit" class="profile-btn">Update Profile</button>
      </form>

      <button class="edit-btn" id="edit-btn">Edit Profile</button>
      </div>
    </div>
  </div>

  <script>
    // Toggle between viewing and editing profile
    const editBtn = document.getElementById('edit-btn');
    const profileForm = document.getElementById('profile-form');
    const profileInfo = document.getElementById('profile-info');

    editBtn.addEventListener('click', () => {
      profileForm.style.display = profileForm.style.display === 'flex' ? 'none' : 'flex';
      profileInfo.style.display = profileForm.style.display === 'flex' ? 'none' : 'flex';
      editBtn.textContent = profileForm.style.display === 'flex' ? 'Cancel Edit' : 'Edit Profile';
    });

    // Handle form submission
    profileForm.addEventListener('submit', (e) => {
      e.preventDefault();

      const formData = new FormData(profileForm);

      fetch('', {
        method: 'POST',
        body: formData,
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert(data.message);
          location.reload();  // Reload the page to show updated profile
        } else {
          alert(data.message);
        }
      })
      .catch(error => {
        alert('An error occurred while updating the profile.');
      });
    });
  </script>
</body>
</html>
