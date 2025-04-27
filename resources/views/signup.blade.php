<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - BiRent</title>
    <style>
        body {
            background-color: #521111;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: white;
            color: #521111;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #521111;
            border-radius: 5px;
        }
        button {
            background-color: #521111;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #721414;
        }
        .back-link {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 50px;
            height: 50px;
            background-color: white;
            color: #521111;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            text-decoration: none;
            font-size: 30px;
            font-weight: bold;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
        .back-link:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <a href="/" class="back-link">&#8592;</a>
        <h2>Register</h2>
        
        <!-- Perbaikan: Tambahkan action dan method -->
        <form action="/sign-up1" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Tambahkan name pada input -->
            <input type="text" id="name" name="name" placeholder="Nama Lengkap" required><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <input type="password" id="password" name="password" placeholder="Kata Sandi" required><br>

            <p>Sudah punya akun? <a href="/sign-in">Sign in</a></p>
            
            <button type="submit">Daftar</button>
        </form>
    </div>
</body>
</html>
