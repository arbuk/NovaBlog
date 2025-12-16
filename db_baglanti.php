<?php

define('DB_HOST', 'localhost');


define('DB_NAME', 'kitap_db'); 


define('DB_USER', 'root'); 


define('DB_PASS', ''); 


$baglanti = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if (!$baglanti) {
    die("Veri Tabanı Bağlantısı Başarısız oldu. Lütfen db_baglanti.php dosyasını kontrol edin. Hata: " . mysqli_connect_error());
} 


mysqli_set_charset($baglanti, "utf8mb4");

mysqli_select_db($baglanti, DB_NAME);

?>