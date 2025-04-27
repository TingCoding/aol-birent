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
    <div class="container" style="margin: 200px">
        <h2>Tambah Mobil</h2>
        <form action="/add-car1" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="Name">Nama Mobil</label>
                <input type="text" placeholder="Name" id="Name" name="Name" value="{{ old('Name') }}">
            </div>
            @error('Name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="mb-3">
                <label for="Price">Harga</label>
                <input type="number" placeholder="Price" id="Price" name="Price" value="{{ old('Price') }}">
            </div>
            @error('Price')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="mb-3">
                <label for="Photo">Foto</label>
                <input type="file" placeholder="Photo" id="Photo" name="Photo">
            </div>
            @error('Photo')
                <p style="color: red;">{{ $message }}</p>
            @enderror

            <button type="submit">Tambah Mobil</button>
        </form>
    </div>
</body>
</html>
