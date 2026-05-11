<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesaj Gönderildi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow border-0 p-4 text-center">
                    <h2 class="text-success mb-4">Mesajınız Başarıyla İletildi! ✅</h2>
                    <p class="text-muted mb-4">Aşağıdaki bilgiler sisteme kaydedilmiştir.</p>
                    
                    <ul class="list-group list-group-flush text-start mb-4">
                        <li class="list-group-item"><strong>Ad Soyad:</strong> <?php echo htmlspecialchars($_POST['isim'] ?? 'Boş'); ?></li>
                        <li class="list-group-item"><strong>E-posta:</strong> <?php echo htmlspecialchars($_POST['email'] ?? 'Boş'); ?></li>
                        <li class="list-group-item"><strong>Mesaj:</strong> <?php echo htmlspecialchars($_POST['mesaj'] ?? 'Boş'); ?></li>
                    </ul>

                    <a href="index.html" class="btn btn-primary">Ana Sayfaya Dön</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>