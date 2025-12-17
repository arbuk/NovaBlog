<?php

session_start();




include 'db_baglanti.php'; 


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_submit'])) {
    
    
    $user_input = mysqli_real_escape_string($baglanti, $_POST['email_or_username']);
    $password = $_POST['password'];

    $errors = [];

    if (empty($user_input) || empty($password)) {
        $errors[] = "Tüm alanları doldurmak zorunludur.";
    }

    if (empty($errors)) {
        
        
        $login_query = "SELECT e_posta, kullanici_adi, parola FROM kullanicilar WHERE kullanici_adi = ? OR e_posta = ? LIMIT 1";
        
        
        $stmt = mysqli_prepare($baglanti, $login_query);
        mysqli_stmt_bind_param($stmt, "ss", $user_input, $user_input);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if ($kullanici = mysqli_fetch_assoc($result)) {
            
            
            if (password_verify($password, $kullanici['parola'])) {
                
                
                $_SESSION['user_id'] = $kullanici['e_posta']; 
                $_SESSION['username'] = $kullanici['kullanici_adi'];
                
                
                mysqli_stmt_close($stmt);
                mysqli_close($baglanti);
                
                
                header("Location: panel.php"); 
                exit;
                
            } else {
            
                $errors[] = "Girilen şifre yanlış veya kullanıcı adı/e-posta ile eşleşmiyor.";
            }
        } else {
            
            $errors[] = "Bu kullanıcı adı veya e-posta adresi sistemde kayıtlı değil.";
        }
        
        mysqli_stmt_close($stmt);
    } 
    
    
    if (!empty($errors)) {
        $_SESSION['login_error'] = implode('<br>', $errors); 
        header("Location: login.php");
        exit;
    }
} else {
    
    header("Location: login.php");
    exit;
}
