<?php
// Oturumu başlat ve güvenlik kontrolü yap
session_start();

// Kullanıcı giriş yapmadıysa, login sayfasına yönlendir
if (!isset($_SESSION['user_id']) || !isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Buraya kullanıcının mevcut bilgilerini çekme kodları gelecek.
$kullanici_adi = htmlspecialchars($_SESSION['username']);

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hesap Ayarları</title>
    <link rel="stylesheet" href="style.css"> 
    <style>
        .settings-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #6c757d;
        }
        .settings-container h2 {
            color: #4a413d;
            border-bottom: 2px dashed #e0d9d1;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .form-group label { display: block; margin-top: 15px; font-weight: bold; color: #6c757d; }
        .form-group input[type="text"], .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .submit-btn {
            background-color: #6c757d;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 20px;
            transition: background-color 0.3s;
        }
        .submit-btn:hover { background-color: #4a413d; }
    </style>
</head>
<body>
    <header class="site-header">
        <h1>Hesap Ayarları</h1>
    </header>

    <main class="container">
        <div class="settings-container">
            <h2>⚙️ <?php echo $kullanici_adi; ?> Hesabını Düzenle</h2>
            
            <form action="ayarlar_kaydet.php" method="POST">
                <div class="form-group">
                    <label>Kullanıcı Adı:</label>
                    <input type="text" value="<?php echo $kullanici_adi; ?>" disabled>
                    <small style="color: gray;">Kullanıcı adınızı değiştirmek için yöneticiye başvurun.</small>
                </div>
                
                <div class="form-group">
                    <label for="yeni_sifre">Yeni Şifre:</label>
                    <input type="password" id="yeni_sifre" name="yeni_sifre">
                    <small style="color: gray;">Değiştirmek istemiyorsanız boş bırakın.</small>
                </div>
                
                <div class="form-group">
                    <label for="sifre_tekrar">Yeni Şifre Tekrarı:</label>
                    <input type="password" id="sifre_tekrar" name="sifre_tekrar">
                </div>
                
                <button type="submit" class="submit-btn">Ayarları Kaydet</button>
            </form>
            
            <p style="margin-top: 30px;"><a href="panel.php">&laquo; Panele Geri Dön</a></p>
        </div>
    </main>
</body>
</html>