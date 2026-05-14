<?php
// Sisteme giriş için tanımlı geçerli kullanıcı bilgileri
$dogru_kullanici = "b251210040@sakarya.edu.tr"; 
$dogru_sifre = "b251210040";

// Formdan POST ile veri gelip gelmediğinin kontrolü
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Gelen verilerdeki boşlukları temizle
    $kullanici = trim($_POST['kullanici']);
    $sifre = trim($_POST['sifre']);

    // Alanların boş bırakılma durumu kontrolü
    if (empty($kullanici) || empty($sifre)) {
        header("Location: login.html?hata=bos");
        exit();
    }

    // Kullanıcı adı ve şifre eşleşme kontrolü (Başarılı Giriş)
    if ($kullanici === $dogru_kullanici && $sifre === $dogru_sifre) {
        ?>
        <!DOCTYPE html>
        <html lang="tr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Giriş Başarılı</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <style>
                body {
                    background: linear-gradient(135deg, #198754, #20c997);
                    height: 100vh;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
            </style>
        </head>
        <body>
            <div class="card shadow-lg border-0 p-5 text-center" style="max-width: 500px; border-radius: 20px;">
                <div class="mb-4">
                    <i class="fa-solid fa-circle-check text-success" style="font-size: 5rem;"></i>
                </div>
                <h1 class="display-5 fw-bold text-dark mb-3">Hoşgeldiniz <?php echo $dogru_sifre; ?></h1>
                <p class="text-muted fs-5 mb-4">Sakarya Üniversitesi Öğrenci Bilgi Sistemine başarıyla giriş yaptınız.</p>
                <a href="index.html" class="btn btn-success btn-lg fw-bold rounded-pill shadow-sm px-5">Ana Sayfaya Git</a>
            </div>
        </body>
        </html>
        <?php
        exit();
    } 
    // Eşleşme başarısız (Hatalı Giriş)
    else {
        header("Location: login.html?hata=yanlis");
        exit();
    }
} else {
    // Sayfaya URL üzerinden izinsiz giriş yapılmaya çalışılırsa login'e geri at
    header("Location: login.html");
    exit();
}
?>