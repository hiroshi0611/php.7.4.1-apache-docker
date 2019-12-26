<?php

$scores = [90, 72, 58, 80];

for ($i=0; $i < count($scores); $i++) { 

    $score = $scores[$i]; //単数形の変数に代入することで見やすく

    if ($scores[$i] >= 80) {
        echo "$scores[$i] : A". PHP_EOL;
    
    }else if ($scores[$i] >= 60){
        echo "$scores[$i] : B". PHP_EOL;

    }else{
        echo "$scores[$i] : C" . PHP_EOL;

    }
}
echo PHP_EOL;
