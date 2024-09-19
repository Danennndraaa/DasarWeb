<?php
$siswa = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90
];

$totalNilai = array_sum($siswa);
$jumlahSiswa = count($siswa);
$rataRataNilai = $totalNilai / $jumlahSiswa;

echo "Rata-rata nilai kelas: " . number_format($rataRataNilai, 2) . "<br><br>";
echo "Daftar siswa dengan nilai di atas rata-rata:<br>";

foreach ($siswa as $nama => $nilai) {
    if ($nilai > $rataRataNilai) {
        echo "Nama: $nama, Nilai: $nilai <br>";
    }
}
?>
