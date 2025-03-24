
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: #FFFDF9;
    color: #0A0A0A;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
    overflow-x: hidden;
    padding: 20px;
}

        .container {
            margin-top: 50px;
        }
        .verification-container, .success-container {
            
            width: 100%;
            max-width: 600px;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            background: #FFFFFF;
            border-radius: 16px;
            border: 4px solid #0A0A0A;
            box-shadow: 10px 10px 0px 0px #0A0A0A;

        }
        .verification-header, .success-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .verification-header h1, .success-header h1 {
            font-size: 2rem;
        }
        .verification-header h1 {
            color: #FF9800;
        }
        .success-header h1 {
            color: #4CAF50;
        }
        .verification-header p, .success-header p {
            color: #666;
        }
        .btn-view {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
            <div class="success-container" id="success-verification">
                <div class="success-header">
                    <h1>✔️ Pembayaran Berhasil!</h1>
                    <p>Terima kasih telah melakukan pembayaran.</p>
                </div>
                <div class="mb-3">
                    <strong>Rincian Pembayaran:</strong>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Nama Kost:</strong>Kos Mewah</li>
                        <li class="list-group-item"><strong>Durasi:</strong> 6 bulan</li>
                        <li class="list-group-item"><strong>Tanggal Mulai Sewa:</strong> 26-03-2025</li>
                        <li class="list-group-item"><strong>Tanggal Selesai Sewa:</strong> 26-09-2025</li>
                        <li class="list-group-item"><strong>Biaya Sewa:</strong> Rp 12.000.000</li>
                    </ul>
                </div>
                <div class="text-center btn-view">
                    <a href="https://wa.me/6289637001713" class="btn btn-success">Kontak Owner</a>
                    <a href="index" class="btn btn-primary">Kembali ke Index</a>
                </div>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

