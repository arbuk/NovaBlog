<?php

session_start();


if (!isset($_SESSION['user_id']) || !isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}



?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yeni Kitap Yorumu Ekle</title>
    <link rel="stylesheet" href="style.css"> 
    <style>
        .form-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #d4ac7d;
        }
        .form-container h2 {
            color: #4a413d;
            border-bottom: 2px dashed #e0d9d1;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .form-group label { display: block; margin-top: 15px; font-weight: bold; color: #6c757d; }
        .form-group input[type="text"], .form-group textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .form-group textarea { height: 200px; resize: vertical; }
        .submit-btn {
            background-color: #b8860b;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 20px;
            transition: background-color 0.3s;
        }
        .submit-btn:hover { background-color: #d4ac7d; }
    </style>
</head>
<body>
    <header class="site-header">
        <h1>Kitap Yorumu Ekle</h1>
    </header>

    <main class="container">
        <div class="form-container">
            <h2>📚 Yeni Kitap Yorumu Oluştur</h2>
            
            <form action="kitap_kaydet.php" method="POST">
                <div class="form-group">
                    <label for="kitap_adi">Kitap Adı:</label>
                    <input type="text" id="kitap_adi" name="kitap_adi" required>
                </div>
                
                <div class="form-group">
                    <label for="yazar_adi">Yazar Adı:</label>
                    <input type="text" id="yazar_adi" name="yazar_adi" required>
                </div>
                
                <div class="form-group">
                    <label for="yorum_ozet">Kısa Özet/Giriş:</label>
                    <textarea id="yorum_ozet" name="yorum_ozet" rows="4" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="yorum_tam">Tam Kitap Yorumu (Detaylı İçerik):</label>
                    <textarea id="yorum_tam" name="yorum_tam" rows="10" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Yorumu Yayınla</button>
            </form>
            
            <p style="margin-top: 30px;"><a href="panel.php">&laquo; Panele Geri Dön</a></p>
        </div>
    </main>
</body>
</html>