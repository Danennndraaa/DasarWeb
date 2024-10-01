<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili'=> 'Malang',
        'jenis_kelamin'=> 'Perempuan' 
    ];
    ?>

    <table>
        <tr>
            <th>Informasi</th>
            <th>Detail</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $Dosen['nama']; ?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td><?php echo $Dosen['domisili']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>
</body>
</html>
