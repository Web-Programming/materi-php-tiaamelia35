<?php
if (isset($_POST['simpan'])) {

    $tanggal = $_POST['tanggal'];
    $jenis = $_POST['jenis'];
    $nominal = $_POST['nominal'];
    $keterangan = $_POST['keterangan'];

    echo "<h2>Data Berhasil Disimpan</h2>";
    echo "Tanggal Transaksi: " . htmlspecialchars($tanggal) . "<br>";
    echo "Jenis Transaksi: " . htmlspecialchars($jenis) . "<br>";
    echo "Nominal: Rp " . htmlspecialchars($nominal) . "<br>";
    echo "Keterangan: " . htmlspecialchars($keterangan) . "<br>";

} else {
    echo "Akses Tidak Valid!";
}
?>