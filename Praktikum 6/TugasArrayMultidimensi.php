<!DOCTYPE HTML>
<html>
    <head>
        <title>Array Multidimensi</title>
    </head>
    <body>
        <h2>Data Mahasiswa Array Multidimensi</h2>
        <ul>
            <?php
                $data = array(
                    array("Dani", 2420100801, "Teknologi Informasi", "dani@gmail.com"),
                    array("Putri", 2420050810, "Teknik Elektro", "putri@gmail.com"),
                    array("Lisa", 2420080501, "Akuntansi", "lisa@gmail.com"),
                    array("Zylon", 2420030601, "Teknik Mesin", "zylon@gmail.com"),
                    array("Bian", 2420060301, "Teknik Sipil", "bian@gmail.com")
                );
                
                for ($i = 0; $i < count($data); $i++) { 
                    echo "<li>Nama    : " . $data[$i][0] . "</li>";
                    echo "<li>NIM     : " . $data[$i][1] . "</li>";
                    echo "<li>Jurusan : " . $data[$i][2] . "</li>";
                    echo "<li>Email   : " . $data[$i][3] . "</li>";
                    echo "<br/>";
                }
            ?>
        </ul>
    </body>
</html>