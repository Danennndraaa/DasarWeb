<?php

function perkenalan($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Danen", "Hallo");

echo"<hr>";

$saya="Danendra AP";
$ucapkanSalam = "Selamat pagi";

perkenalan($saya,$ucapkanSalam);
?>