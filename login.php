<?php
// Kullanıcı adı ve şifre tanımı (Buraya kendi numaranı yaz)
$dogru_kullanici = "b251234567@sakarya.edu.tr";
$dogru_sifre = "b251234567";

// Formdan gelen verileri al
$gelen_kullanici = $_POST['kullanici'] ?? '';
$gelen_sifre = $_POST['sifre'] ?? '';

// Kontrol işlemi
if ($gelen_kullanici === $dogru_kullanici && $gelen_sifre === $dogru_sifre) {
    // Giriş Başarılı
    $mesaj = "Hoşgeldiniz " . htmlspecialchars($gelen_sifre) . " numaralı öğrenci!";
    $renk = "success"; // Yeşil
} else {
    // Giriş Başarısız
    $mesaj = "Hatalı Giriş! Lütfen kullanıcı adı veya şifrenizi kontrol edin.";
    $renk = "danger"; // Kırmızı
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sonucu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center vh-100">
    <div class="container text-center">
        <div class="alert alert-<?php echo $renk; ?> shadow-sm d-inline-block p-4" role="alert">
            <h3 class="mb-3"><?php echo $mesaj; ?></h3>
            <?php if($renk === "danger"): ?>
                <a href="login.html" class="btn btn-outline-danger mt-2">Tekrar Dene</a>
            <?php else: ?>
                <a href="index.html" class="btn btn-success mt-2">Ana Sayfaya Git</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>