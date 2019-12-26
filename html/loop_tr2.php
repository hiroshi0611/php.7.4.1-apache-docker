<?php

$big3 = ["べンチプレス","スクワット","デッドリフト"];
$i = 0;

echo "ビッグ3とは..." . PHP_EOL;

while ($i < count($big3)) {
    $no = $i +1;
    echo $no . ":" . $big3[$i] . PHP_EOL;
    $i++;
}