<?php
// Sayfaya doğrudan URL üzerinden erişimi engelle, sadece formdan gelen POST isteğiyle çalışsın
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Formdan gelen verileri al ve olası XSS açıklarına karşı HTML etiketlerini temizle (Güvenlik Önlemi)
    $isim = htmlspecialchars(trim($_POST['isim'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $telefon = htmlspecialchars(trim($_POST['telefon'] ?? ''));
    $konu = htmlspecialchars(trim($_POST['konu'] ?? ''));
    $cinsiyet = htmlspecialchars(trim($_POST['cinsiyet'] ?? 'Belirtilmedi'));
    $mesaj = htmlspecialchars(trim($_POST['mesaj'] ?? ''));

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Görkem Polat - Form Sonucu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

    <main class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    
                    <div class="bg-success text-white text-center py-4">
                        <i class="fa-solid fa-paper-plane fa-3x mb-3"></i>
                        <h2 class="h3 fw-bold mb-0">Mesajınız İletildi!</h2>
                    </div>
                    
                    <div class="card-body p-4 p-md-5">
                        <p class="text-muted text-center mb-4">Göndermiş olduğunuz bilgiler sunucuya ulaştı. Detaylar aşağıdadır:</p>
                        
                        <table class="table table-bordered table-striped shadow-sm">
                            <tbody>
                                <tr>
                                    <th style="width: 40%;" class="bg-light"><i class="fa-solid fa-user text-primary me-2"></i>Ad Soyad</th>
                                    <td class="fw-bold"><?php echo $isim; ?></td>
                                </tr>
                                <tr>
                                    <th class="bg-light"><i class="fa-solid fa-at text-danger me-2"></i>E-posta</th>
                                    <td><?php echo $email; ?></td>
                                </tr>
                                <tr>
                                    <th class="bg-light"><i class="fa-solid fa-phone text-success me-2"></i>Telefon</th>
                                    <td><?php echo $telefon; ?></td>
                                </tr>
                                <tr>
                                    <th class="bg-light"><i class="fa-solid fa-venus-mars text-info me-2"></i>Cinsiyet</th>
                                    <td><?php echo $cinsiyet; ?></td>
                                </tr>
                                <tr>
                                    <th class="bg-light"><i class="fa-solid fa-list text-warning me-2"></i>Konu</th>
                                    <td><?php echo $konu; ?></td>
                                </tr>
                                <tr>
                                    <th class="bg-light"><i class="fa-solid fa-comment-dots text-secondary me-2"></i>Mesaj</th>
                                    <td style="word-break: break-word;"><?php echo nl2br($mesaj); ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="text-center mt-4 pt-3 border-top">
                            <a href="index.html" class="btn btn-outline-success fw-bold px-4 me-2"><i class="fa-solid fa-house me-1"></i> Ana Sayfa</a>
                            <a href="iletisim.html" class="btn btn-primary fw-bold px-4"><i class="fa-solid fa-rotate-left me-1"></i> Yeni Mesaj</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
<?php
} else {
    // POST isteği yoksa sayfaya link yazılarak girildiyse iletişim sayfasına geri yönlendir
    header("Location: iletisim.html");
    exit();
}
?>