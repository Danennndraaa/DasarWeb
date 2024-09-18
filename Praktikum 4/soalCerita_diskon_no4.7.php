<?php
$hargaProduk = 120000;

$diskon = 20;

if ($hargaProduk > 100000) {
    $jumlahDiskon = ($diskon / 100) * $hargaProduk;
    
    $hargaSetelahDiskon = $hargaProduk - $jumlahDiskon;
    
    echo "Harga awal: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
    echo "Diskon: Rp " . number_format($jumlahDiskon, 0, ',', '.') . " (" . $diskon . "%)<br>";
    echo "Harga setelah diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "<br>";
} else {
    echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
    echo "Tidak ada diskon yang diberikan karena harga di bawah Rp 100.000.<br>";
}
?>
