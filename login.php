<?php

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kullanıcı Girişi - Dikkat Çekici</title>
    
    <style>
        
        html, body {
            height: 100%; 
            margin: 0;
            padding: 0;
        }

        
        body {
            background-color: #f7f3ed; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center; 
            align-items: center; 
        }

        
        .form-wrapper {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1); 
            width: 100%;
            max-width: 420px; 
            text-align: center;
            border-top: 5px solid #b8860b; 
        }

        
        .form-wrapper h2 {
            color: #4a413d; 
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 600;
        }

        
        .form-style-modern label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            font-weight: 600;
            color: #6c757d; 
            font-size: 15px;
        }

        
        .form-style-modern input[type="text"],
        .form-style-modern input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #e0d9d1; 
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #fcfcfc;
        }

        
        .form-style-modern input:focus {
            border-color: #b8860b; 
            box-shadow: 0 0 0 0.2rem rgba(184, 134, 11, 0.25);
            outline: none;
        }

        
        .form-style-modern button[type="submit"] {
            background-color: #d4ac7d; 
            color: white;
            width: 100%;
            padding: 15px; 
            border: none;
            border-radius: 6px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.1s ease;
            margin-top: 15px;
        }

        .form-style-modern button[type="submit"]:hover {
            background-color: #b8860b; 
            transform: translateY(-1px);
        }

        
        .form-wrapper p {
            margin-top: 25px;
            font-size: 15px;
        }

        .form-wrapper a {
            color: #d4ac7d;
            font-weight: 600;
            text-decoration: none;
        }
    </style>
</head>
<body>

<main class="container">
    <div class="form-wrapper">
        <h2>Giriş Yapın</h2>
        
        <form action="login_islem.php" method="POST" class="form-style-modern">
            
            <label for="email_or_username">E-posta veya Kullanıcı Adı</label>
            <input type="text" id="email_or_username" name="email_or_username" required>

            <label for="password">Şifre</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="login_submit">Giriş Yap</button>
            
            <p>Hesabınız yok mu? <a href="kayit.php">Hemen Kayıt Olun</a></p>
        </form>
    </div>
</main>

</body>
</html>