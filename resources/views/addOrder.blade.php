<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Rental Mobil</title>
    <link rel="stylesheet" href="display.html">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }
    
    body {
        background-color: #521111;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
    }
    
    .container {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        width: 90%;
        max-width: 600px;  /* Maksimal lebar */
        text-align: center;
    }
    
    h2 {
        margin-bottom: 20px;
    }
    
    form {
        display: flex;
        flex-direction: column;
    }
    
    input, button {
        margin-bottom: 15px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    
    button {
        background-color: #521111;
        color: white;
        cursor: pointer;
        border: none;
    }
    
    button:hover {
        background-color: #521111;
    }
    
    /* Responsif untuk layar kecil */
    @media screen and (max-width: 768px) {
        .container {
            width: 100%;
            padding: 15px;
        }
    }
    
</style>
</head>
<body>
    <div class="container">
        <h2>Form Pemesanan Rental Mobil</h2>
        <form action="/add-order1" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="FullName" placeholder="Nama Lengkap" required>
            <input type="tel" name="NoTelp" placeholder="Nomor Telepon" required>
            <input type="text" name="Address" placeholder="Alamat" required>
            <input type="email" name="Email" placeholder="Email (harus @gmail.com)" required pattern=".+@gmail\.com">

            <label for="start-date">Pilih Tanggal Mulai Rental:</label>
            <input type="date" id="start-date" name="StartRental" required>

            <label for="end-date">Pilih Tanggal Akhir Rental:</label>
            <input type="date" id="end-date" name="EndRental" required>

            <label for="ktp">Unggah KTP:</label>
            <input type="file" id="ktp" name="KTP" accept=".jpg, .png, .pdf" required>

            <label for="sim">Unggah SIM:</label>
            <input type="file" id="sim" name="SIM" accept=".jpg, .png, .pdf" required>


            <button type="submit">Kirim Pemesanan</button>
        </form>
    </div>
</body>
</html>
