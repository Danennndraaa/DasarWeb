<?php
$totalKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi yang masih kosong: $kursiKosong<br>";
echo "Persentase kursi yang masih kosong: " . number_format($persentaseKosong,) . "%<br>";
?>