<?php

session_start();


if (!isset($_SESSION['user_id']) || !isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}


include 'db_baglanti.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $kitap_adi = trim($_POST['kitap_adi']);     
    $yazar_adi = trim($_POST['yazar_adi']);     
    $yorum_ozet = trim($_POST['yorum_ozet']);   
    $yorum_tam = trim($_POST['yorum_tam']);      
    
    
    $kullanici_id = $_SESSION['user_id']; 

    
    $errors = [];

    if (empty($kitap_adi) || empty($yazar_adi) || empty($yorum_tam)) {
        $errors[] = "Kitap Başlığı, Yazar Adı ve Tam Yorum alanı boş bırakılamaz.";
    }

    if (empty($errors)) {
        
        
        $insert_query = "INSERT INTO kitaplar (baslik, yazar, kisa_özet, tam_yorum, kullanici_id, yorum_tarihi) 
                         VALUES (?, ?, ?, ?, ?, NOW())";
        
        $stmt = mysqli_prepare($baglanti, $insert_query);
        
      
        mysqli_stmt_bind_param($stmt, "ssssi", $kitap_adi, $yazar_adi, $yorum_ozet, $yorum_tam, $kullanici_id);
        
        if (mysqli_stmt_execute($stmt)) {
            
            $_SESSION['success_message'] = "Yorumunuz başarıyla sisteme eklendi!";
            
            mysqli_stmt_close($stmt);
            mysqli_close($baglanti);
            
            
            header("Location: panel.php"); 
            exit;
            
        } else {
            
            $errors[] = "Yorum kaydı sırasında bir veritabanı hatası oluştu: " . mysqli_stmt_error($stmt);
        }
        
        mysqli_stmt_close($stmt);

    } 
    
    
    if (!empty($errors)) {
        $_SESSION['form_errors'] = $errors;
        $_SESSION['form_data'] = $_POST; 
        
        mysqli_close($baglanti);
        header("Location: kitap_ekle.php");
        exit;
    }
    
} else {
    header("Location: kitap_ekle.php");
    exit;
}

if (isset($baglanti)) {
    mysqli_close($baglanti);
}
?>