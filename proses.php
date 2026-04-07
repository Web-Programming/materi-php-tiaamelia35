<?php
//Contoh Proses Form POST

$nama = '';
$email = '';
$pesan = '';
$postErrors = [];
$postSuccess = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nama = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pesan = trim($_POST['pesan'] ?? '');

    //Validasi Sederhana
    if ($nama === ''){
        $postErrors[] = 'Nama Wajib Diisi.';
    }

    if ($email === ''){
        $postErrors[] = 'Email Wajib Diisi.';
    } elseif (|filter_var($email, FILTER_VALIDATE_EMAIL)){
        $postErrors[] = 'Format Email Tidak Valid.';
    }

    if ($pesan === ''){
        $postErrors[] = 'Pesan Wajib Diisi.';
    }

    if (empty($postErrors)) {
        $postSuccess = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Dasar PHP Form - POST</title>
</head>
<body>
    <h2>Contoh Proses Form POST</h2>
    <?php if (!empty($postErrors)): ?>
        <div class = "error">
            <strong>Validasi Gagal</strong>
            <ul>
                <?php foreach ($postErrors as $error): ?>
                    <li><? = htmlspecialchars ($error, ENT_QUOTES, 'UTF-8') ?></li>
                    <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if ($postSuccess): ?>
        <div class = "success">Data Berhasil dikirim dengan method POST.</div>
        <div class = "result">
            <strong>Hasil POST:</strong><br>
            Nama: <?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?><br>
            Email: <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?><br>
            Pesan: <?= htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8') ?><br>
        </div>
    <?php endif; ?>
    <a href="index2.php">Kembali ke Form</a>
</body>
</html>