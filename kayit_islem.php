<?php

error_reporting(E_ALL); 
ini_set('display_errors', 1);


session_start();


include 'db_baglanti.php'; 



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    

    
    $username = mysqli_real_escape_string($baglanti, $_POST['new_username']);
    $email = mysqli_real_escape_string($baglanti, $_POST['email']); 
    $password = $_POST['new_password'];
    $password_confirm = $_POST['password_confirm'];

    $errors = [];

    
    if (empty($username) || empty($email) || empty($password) || empty($password_confirm)) {
        $errors[] = "Tüm alanları doldurmak zorunludur.";
    }

    
    if ($password !== $password_confirm) {
        $errors[] = "Şifreler eşleşmiyor.";
    }

    
    if (empty($errors)) {
        
        
        $check_query = "SELECT kullanici_adi FROM kitap_db.kullanicilar WHERE kullanici_adi = '$username' OR e_posta = '$email' LIMIT 1";
        
        $result = mysqli_query($baglanti, $check_query);
        
        if ($result === false) {
             
             $errors[] = "Veritabanı sorgu hatası: " . mysqli_error($baglanti) . " - Tablo adlarının doğru olduğundan emin olun.";
        }
        else if (mysqli_num_rows($result) > 0) {
            $errors[] = "Bu kullanıcı adı veya E-posta adresi zaten kullanımda.";
        }
    }

    if (empty($errors)) {
        
        
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        
        
        $insert_query = "INSERT INTO kullanicilar (kullanici_adi, e_posta, parola) VALUES (?, ?, ?)";
        
    
        $stmt = mysqli_prepare($baglanti, $insert_query);
        
        
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);
        
        if (mysqli_stmt_execute($stmt)) {
            
            
            
            $_SESSION['user_id'] = mysqli_insert_id($baglanti); 
            $_SESSION['username'] = $username;
            
            
            header("Location: index.php");
            exit;
        } else {
            $errors[] = "Kayıt işlemi sırasında beklenmeyen bir veritabanı hatası oluştu: " . mysqli_stmt_error($stmt);
        }
        
        mysqli_stmt_close($stmt);

    } 
    
    
    if (!empty($errors)) {
        
        echo "<!DOCTYPE html><html lang='tr'><head><title>Kayıt Hataları</title><style>body{font-family: Arial; padding: 20px; background-color: #f8f8f8;} .error-box{border: 1px solid #ff0000; background-color: #ffe5e5; padding: 15px; border-radius: 5px;}</style></head><body>";
        echo "<main class='error-box'>";
        echo "<h2>Kayıt Başarısız!</h2>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul><p><a href='kayit.php'>Geri Dön ve Tekrar Dene</a></p>";
        echo "</main></body></html>";
    }
} else {

    header("Location: kayit.php");
    exit;
}


mysqli_close($baglanti);
?>
