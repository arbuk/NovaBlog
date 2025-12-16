<?php

session_start(); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <title>...</title>
    
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

    <header class="site-header">
        <h1>Kayıt Ol</h1>
    </header>

 <main class="container">
    <section class="kayit-form-area">
        <h2>Yeni Üyelik</h2>
        
        <form action="kayit_islem.php" method="POST" class="form-style-modern">
            
            <div class="form-group">
                <label for="new_username">Kullanıcı Adı:</label>
                <input type="text" id="new_username" name="new_username" required class="form-input">
            </div>

            <div class="form-group">
                <label for="email">E-posta:</label>
                <input type="email" id="email" name="email" required class="form-input">
            </div>

            <div class="form-group">
                <label for="new_password">Şifre:</label>
                <input type="password" id="new_password" name="new_password" required class="form-input">
            </div>

            <div class="form-group">
                <label for="password_confirm">Şifre Tekrarı:</label>
                <input type="password" id="password_confirm" name="password_confirm" required class="form-input">
            </div>
            
            <button type="submit" name="register" class="submit-button">Kayıt Ol</button>
        </form>
        <p class="mt-20">Zaten hesabınız var mı? <a href="login.php" class="link-secondary">Giriş Yapın!</a></p>
    </section>
</main>
    
</body>
</html>