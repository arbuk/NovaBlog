<?php

session_start();


if (!isset($_SESSION['user_id']) || !isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

include 'db_baglanti.php'; 

$user_id = $_SESSION['user_id'];
$user_data = [];

$query = "SELECT kullanici_adi, e_posta, parola FROM kullanicilar WHERE kullanici_adi = ?"; 
$stmt = mysqli_prepare($baglanti, $query);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && $row = mysqli_fetch_assoc($result)) {
    $user_data = $row;
    
    $join_date = isset($user_data['kayit_tarihi']) ? date('d F Y', strtotime($user_data['kayit_tarihi'])) : 'Bilinmiyor';
    
    
} else {
    session_destroy();
    header("Location: login.php");
    exit;
}

mysqli_stmt_close($stmt);
mysqli_close($baglanti);

$current_username = htmlspecialchars($user_data['kullanici_adi']);

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $current_username; ?> Profil Sayfası</title>
    <link rel="stylesheet" href="style.css"> 
    <style>
        
        .profile-container {
            max-width: 1100px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #e0d9d1;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        
        .profile-header {
            display: flex;
            align-items: center;
            padding: 30px;
            background-color: #f7f3ed; 
            border-bottom: 1px solid #e0d9d1;
        }

        .profile-avatar {
            width: 80px;
            height: 80px;
            background-color: #b8860b; 
            border-radius: 50%;
            margin-right: 20px;
            border: 3px solid #ffffff;
            box-shadow: 0 0 0 1px #ccc;
        }

        .profile-info h1 {
            margin: 0;
            font-size: 28px;
            color: #4a413d;
        }

        .profile-info .username {
            color: #6c757d;
            font-size: 16px;
            margin-top: 5px;
        }
        
    
        .profile-stats-and-actions {
            padding: 20px 30px;
            border-bottom: 1px solid #e0d9d1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-stats {
            display: flex;
            gap: 20px;
            font-size: 14px;
        }

        .profile-stats span {
            color: #6c757d;
        }
        .profile-stats strong {
            color: #4a413d;
            font-weight: 700;
        }
        
        .profile-stats .okur {
            font-weight: 700;
            color: #d4ac7d;
            margin-left: 5px;
            padding: 2px 5px;
            border: 1px solid #d4ac7d;
            border-radius: 3px;
            font-size: 12px;
        }

        .action-buttons a {
            padding: 8px 15px;
            border-radius: 3px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
        }
        
        .action-buttons .duzenle-btn {
            background-color: #d4ac7d;
            color: white;
            transition: background-color 0.2s;
        }
        .action-buttons .duzenle-btn:hover {
            background-color: #b8860b;
        }
        
        
        .profile-nav {
            border-bottom: 1px solid #e0d9d1;
            padding: 0 30px;
        }

        .profile-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .profile-nav li a {
            display: block;
            padding: 15px 20px;
            text-decoration: none;
            color: #4a413d;
            font-weight: 500;
            border-bottom: 3px solid transparent;
            transition: border-bottom 0.2s;
        }

        .profile-nav li a:hover, .profile-nav li.active a {
            color: #b8860b;
            border-bottom: 3px solid #b8860b;
        }
        
        
        .profile-content {
            padding: 30px;
        }
        
        .profile-content h3 {
            color: #4a413d;
            font-size: 20px;
            border-bottom: 1px solid #e0d9d1;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        
        .user-activity {
            min-height: 200px;
        }

        body {
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

    </style>
</head>
<body>
<header class="site-header" style="background: #4a413d; padding: 15px 0; margin-bottom: 20px;">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center; max-width: 1100px; margin: 0 auto; padding: 0 20px;">
        <a href="index.php" style="color: #f7f3ed; text-decoration: none; font-size: 24px; font-weight: bold; font-family: 'Georgia', serif;">Nova Blog</a>
        
        <nav>
            <a href="index.php" style="color: #f7f3ed; text-decoration: none; margin-right: 20px; font-size: 14px;">🏠 Ana Sayfaya Dön</a>
            <a href="logout.php" style="color: #ffb7b7; text-decoration: none; font-size: 14px;">Çıkış Yap</a>
        </nav>
    </div>
</header>

    <main class="container">
        <div class="profile-container">
            
            <div class="profile-header">
                <div class="profile-avatar"></div>
                <div class="profile-info">
                    <h1><?php echo $current_username; ?></h1>
                    <p class="username">@<?php echo $current_username; ?> <span class="okur">Okur</span></p>
                </div>
            </div>
            
            <div class="profile-stats-and-actions">
                <div class="profile-stats">
                    <span>👋 Kitap Yorumlama Sitemize Hoş Geldiniz!</span>
                    <span style="margin-left: 20px;">🗓️ Katılım Tarihi: <strong><?php echo $join_date; ?></strong></span>
                    </div>
                
                <div class="action-buttons">
                    <a href="logout.php" class="duzenle-btn">Çıkış Yap</a>
                    <a href="ayarlar.php" class="duzenle-btn" style="background-color:#6c757d;">Ayarları Düzenle</a>
                </div>
            </div>

            <div class="profile-nav">
                <ul>
                    <li class="active"><a href="#">Kitaplık</a></li>
                    <li><a href="#">Duvar</a></li>
                    <li><a href="#">İncelemeler (0)</a></li> 
                    <li><a href="#">Alıntılar (0)</a></li>
                    <li><a href="#">İletiler (0)</a></li>
                    <li><a href="#">Hedefler</a></li>
                    <li><a href="#">Yorumlar</a></li>
                    <li style="margin-left: auto;"><a href="#">0 Kitap</a></li>
                    <li><a href="#">0 Takip Edilen</a></li>
                    <li><a href="#">0 Takipçi</a></li>
                </ul>
            </div>
            
            <div class="profile-content">
                <h3>Kullanıcının Son Aktivitesi</h3>
                <div class="user-activity">
                    <p style="padding: 15px; border: 1px dashed #d4ac7d; border-radius: 5px; background-color: #fff9f5; margin-top: 15px;">
                        **Bu alanda, siteye eklediğiniz tüm kitap yorumları listelenecektir.** <br>Şu anda hesabınızla ilişkilendirilmiş bir yorum bulunmuyor. Yeni bir yorum eklemek için **<a href="kitap_ekle.php" style="color: #b8860b;">Yeni Yorum Ekle</a>** butonunu kullanabilirsiniz.
                    </p>
                </div>
            </div>

        </div>
    </main>
    <footer class="site-footer">
        </footer>

</body>
</html>
