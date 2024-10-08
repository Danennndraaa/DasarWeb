<!DOCTYPE HTML>
<html>
    <head>
        <title>Array Menghitung Rata-Rata</title>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script>
            $ (document).ready(function(){
                $ ("#flip").click(function() {
                    $("#kotak2").slideToggle("slow");
                });
            });
        </script>
        <style>
            #flip {
                padding: 5px;
                text-align: center;
                background-color:#a7dbd8;
                border: solid 2px #e0e4cc;
                border-radius: 5px;
            }  
            table {
                width: 100%;
            }
            th, td {
                padding: 8px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <h2>Data Siswa</h2>
        <div id="flip">Klik untuk Efek Slide</div>
        <div id="kotak2">
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
                <?php
                    $data = array(
                        array("Dani", 21, "PLS1A", "Malang"),
                        array("Putri", 20, "PLS1B", "Batu"),
                        array("Lisa", 19, "PLS1A", "Kepanjen"),
                        array("Zylon", 21, "PLS1B", "Karangploso"),
                        array("Bian", 19, "PLS1A", "Suhat")
                    );

                    $totalUmur = 0;
                    for ($i=0; $i < count($data) ; $i++) { 
                        echo "<tr>";
                        echo "<td>" . $data[$i][0] . "</td>";
                        echo "<td>" . $data[$i][1] . "</td>";
                        echo "<td>" . $data[$i][2] . "</td>";
                        echo "<td>" . $data[$i][3] . "</td>";
                        echo "</tr>";
                        $totalUmur += $data[$i][1];
                    }

                    $rataRata = $totalUmur / count($data);
                    ?>
            </table>
            <h2><?php echo "Rata-rata Umur Siswa: " . $rataRata; ?></p>
        </div>
    </body>
</html>