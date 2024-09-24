<?php

$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie feugiat odio eu mollis. Ut ut lacus auctor, condimentum nisl sed, laoreet nibh. In at ante ex. Suspendisse potenti.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: ". strlen( $loremIpsum ) ."<br>";
echo "Panjang kata: ". str_word_count( $loremIpsum ) ."<br>";
echo "<p>" . strtoupper( $loremIpsum ) ."</p>";
echo "<p>" . strtolower( $loremIpsum ) ."</p>";