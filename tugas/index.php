<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Keuangan</title>
</head>
<body>

<h2>Form Pencatatan Keuangan</h2>

<form action="proses_keuangan.php" method="POST">
    
    <label>Tanggal Transaksi:</label><br>
    <input type="date" name="tanggal"><br><br>

    <label>Jenis Transaksi:</label><br>
    <select name="jenis" required>
        <option value="Pemasukan">Pemasukan</option>
        <option value="Pengeluaran">Pengeluaran</option>
    </select><br><br>


    <label for="keyword">Nominal</label>
        <input id="nominal" name="nominal" type="number" 
        value="<?php echo htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8'); ?>"
        placeholder="Masukkan Nominal Uang Anda">


    <label for="keyword">Keterangan</label>
        <input id="keterangan" name="keterangan" type="text" 
        value="<?php echo htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8'); ?>"
        placeholder="Masukkan Keterangan Anda">

    <button type="submit" name="simpan">Simpan Data</button>

</form>

</body>
</html>