<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

// Menampilkan hasil operasi dengan echo
echo "Hasil Tambah: $hasilTambah<br>";
echo "Hasil Kurang: $hasilKurang<br>";
echo "Hasil Kali: $hasilKali<br>";
echo "Hasil Bagi: $hasilBagi<br>";
echo "Sisa Bagi: $sisaBagi<br>";
echo "Pangkat: $pangkat<br><br>";

echo "Apakah Sama: " . ($hasilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah Tidak Sama: " . ($hasilTidakSama ? 'Ya' : 'Tidak') . "<br>";
echo "Lebih Kecil: " . ($hasilLebihKecil ? 'Ya' : 'Tidak') . "<br>";
echo "Lebih Besar: " . ($hasilLebihBesar ? 'Ya' : 'Tidak') . "<br>";
echo "Lebih Kecil atau Sama: " . ($hasilLebihKecilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Lebih Besar atau Sama: " . ($hasilLebihBesarSama ? 'Ya' : 'Tidak') . "<br><br>";

echo "Hasil AND: " . ($hasilAnd ? 'True' : 'False') . "<br>";
echo "Hasil OR: " . ($hasilOr ? 'True' : 'False') . "<br>";
echo "Hasil NOT A: " . ($hasilNotA ? 'True' : 'False') . "<br>";
echo "Hasil NOT B: " . ($hasilNotB ? 'True' : 'False') . "<br><br>";

$a += $b;
echo "Hasil tambah (a += b) = $a <br>";

$a = 10;
$a -= $b;
echo "Hasil kurang (a -= b) = $a <br>";

$a = 10;
$a *= $b;
echo "Hasil kali (a *= b) = $a <br>";

$a = 10;
$a /= $b;
echo "Hasil bagi (a /= b) = $a <br>";

$a = 10;
$a %= $b;
echo "Hasil modulus (a %= b) = $a <br> <br>";


echo "Apakah Identik: " . ($hasilIdentik ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah Tidak Identik: " . ($hasilTidakIdentik ? 'Ya' : 'Tidak') . "<br>";
?>