<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);

$nilaiYangDipakai = array_slice($nilaiSiswa, 2, -2);

$totalNilai = array_sum($nilaiYangDipakai);

$rataRataNilai = $totalNilai / count($nilaiYangDipakai);

echo "Total nilai yang digunakan: $totalNilai<br>";
echo "Rata-rata nilai: " . number_format($rataRataNilai, 2) . "<br>";
?>
